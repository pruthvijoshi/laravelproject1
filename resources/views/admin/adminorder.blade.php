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
  <div class="container">
  <h1 style="padding-left:70px;">Customer Order</h1>
</br>
  <form style="padding-left:70px;" action="{{url('/search')}}" method="get">
  @csrf
      <input type="text" name="search" style="color:blue;">
      <input type="submit" value="search" style="color:blue;" class="btn btn-success">
  </form>

  <div style="padding:70px;">
    <table bgcolor="#7bed9f">
        <tr>
            <th style="padding:30px">Name</th>
            <th style="padding:30px">Food Name</th>
            <th style="padding:30px">Price</th>
            <th style="padding:30px">Quantity</th>
            <th style="padding:30px">Phone</th>
            <th style="padding:30px">Address</th>
            <th style="padding:30px">Total Price</th>
            <th style="padding:30px">Action</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->foodname}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->price * $data->quantity}}</td>
            <td><a style="padding:20px" href="{{url('/deletemenu',$data->id)}}">Delete</a>
            <a href="{{url('/updatemenu',$data->id)}}">Update</a>
        </td>
        </tr>
        @endforeach
    </table>
</div>

</div>
  @include("admin.adminscript")
  </body>
</html>