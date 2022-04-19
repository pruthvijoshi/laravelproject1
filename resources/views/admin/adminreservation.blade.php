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
      <table bgcolor="grey" border="1px">
          <tr>
              <th style="padding:30px">Name</th>
              <th style="padding:30px">Email</th>
              <th style="padding:30px">Phone</th>
              <th style="padding:30px">Date</th>
              <th style="padding:30px">Time</th>
              <th style="padding:30px">Guest</th>
              <th style="padding:30px">Message</th>
              <th style="padding:30px">Action</th>
          </tr>

          @foreach($data as $data)
          <tr align="center">
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->date}}</td>
              <td>{{$data->time}}</td>
              <td>{{$data->guest}}</td>
              <td>{{$data->message}}</td>
              <td><a style="padding:20px" href="{{url('/deletereservation',$data->id)}}">Delete</a>
            <a href="{{url('/updatereservation',$data->id)}}">Update</a>
          </tr>
          @endforeach

      </table>
  </div>
</div>
   
  @include("admin.adminscript")
  </body>
</html>