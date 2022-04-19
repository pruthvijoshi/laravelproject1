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

<form action="{{url('updateres',$data->id)}}" method="post" enctype="multipart/form-data">

@csrf
    <div style="margin-top: 25px;">
        <label>Name</label>
        <input type="text" style="color:black;" name="name" value="{{$data->name}}" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Email</label>
        <input type="text" style="color:black;" value="{{$data->email}}" name="email"  require>
    </div>

    <div style="margin-top: 25px;">
        <label>Phone</label>
        <input type="text" name="phone" value="{{$data->phone}}" style="color:black;" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Guest</label>
        <input type="text" name="guest" value="{{$data->guest}}" style="color:black;" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Date</label>
        <input type="text" name="date" value="{{$data->date}}" style="color:black;" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Time</label>
        <input type="text" name="time" value="{{$data->time}}" style="color:black;" require>
    </div>
    <div style="margin-top: 25px;">
        <label>Message</label>
        <input type="message" name="message" value="{{$data->message}}" style="color:black;" require>
    </div>
    <div style="margin-top: 25px;">
        <input type="submit" value="Update" style="color:black; background-color: #e7e7e7;width:80px">
    </div></br>
</form>


</div>
   
  @include("admin.adminscript")
  </body>
</html>