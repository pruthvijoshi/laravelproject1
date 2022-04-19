<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")

  <div style="position:relative; top:60px;right:-150px;">

<form action="{{url('uploadchef')}}" method="post" enctype="multipart/form-data">

@csrf
    <div style="margin-top: 25px;">
        <label>Name</label>
        <input type="text" style="color:black;" name="name" placeholder="Write Name" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Speciality</label>
        <input type="speciality" style="color:black;" name="speciality" placeholder="Write Speciality" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Image</label>
        <input type="file" name="image" require>
    </div>
    <div style="margin-top: 25px;">
        <input type="submit" value="save" style="color:black; background-color: #e7e7e7;width:60px">
    </div></br>
</form>

<div>
    <table bgcolor="black">
        <tr>
            <th style="padding:30px">Name</th>
            <th style="padding:30px">Speciality</th>
            <th style="padding:30px">Image</th>
            <th style="padding:30px">Action</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="100px" width="100px" src="/chefimage/{{$data->image}}"></td>
            <td><a style="padding:20px" href="{{url('/deletechef',$data->id)}}">Delete</a>
            <a href="{{url('/updatechef',$data->id)}}">Update</a>
        </td>
        </tr>
        @endforeach

    </table>
</div>

</div>


</div>
   
  @include("admin.adminscript")
  </body>
</html>