<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")

  <div style="position:relative; top:60px;right:-150px;">

<form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">

@csrf
    <div style="margin-top: 25px;">
        <label>Title</label>
        <input type="text" style="color:black;" name="title" value="{{$data->title}}" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Price</label>
        <input type="number" style="color:black;" value="{{$data->price}}" name="price"  require>
    </div>
    <div style="margin-top: 25px;">
        <label>Old Image</label>
       <img src="/foodimage/{{$data->image}}" height="100" width="100">
    </div>
    <div style="margin-top: 25px;">
        <label>Image</label>
        <input type="file" name="image" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Description</label>
        <input type="text" name="description" value="{{$data->description}}" style="color:black;" require>
    </div>
    <div style="margin-top: 25px;">
        <input type="submit" value="Update" style="color:black; background-color: #e7e7e7;width:80px">
    </div></br>
</form>


</div>
   
  @include("admin.adminscript")
  </body>
</html>