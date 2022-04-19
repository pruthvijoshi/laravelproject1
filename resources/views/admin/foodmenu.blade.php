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

<form action="{{url('uploadfood')}}" method="post" enctype="multipart/form-data">

@csrf
    <div style="margin-top: 25px;">
        <label>Title</label>
        <input type="text" style="color:black;" name="title" placeholder="Write Title" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Price</label>
        <input type="number" style="color:black;" name="price" placeholder="Write price" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Image</label>
        <input type="file" name="image" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Description</label>
        <input type="text" name="description" placeholder="Write Description" style="color:black;" require>
    </div>
    <div style="margin-top: 25px;">
        <input type="submit" value="save" style="color:black; background-color: #e7e7e7;width:60px">
    </div></br>
</form>

<div>
    <table bgcolor="black">
        <tr>
            <th style="padding:30px">Food Name</th>
            <th style="padding:30px">Price</th>
            <th style="padding:30px">Description</th>
            <th style="padding:30px">Image</th>
            <th style="padding:30px">Action</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img height="100px" width="100px" src="/foodimage/{{$data->image}}"></td>
            <td><a style="padding:20px" href="{{url('/deletemenu',$data->id)}}">Delete</a>
            <a href="{{url('/updatemenu',$data->id)}}">Update</a>
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