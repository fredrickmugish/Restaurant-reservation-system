<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    
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
         
        <!--table-->
        <div style="position: relative; top:60px; right:-150px">
<table style="background-color: black">
<tr>
<th style="padding: 30px">Name</th>
<th style="padding: 30px">Email</th>
<th style="padding: 30px">Action</th>
</tr>

@foreach ($data as $data)
    
<tr align="center">
<td>{{ $data->name }}</td>
<td>{{ $data->email }}</td>

@if ($data->usertype=="0")
<td><a href="{{ url('/deleteuser', $data->id) }}" class="btn btn-warning">Delete</a></td>
@else
<td><a class="btn btn-danger" >Not Allowed</a></td> 
@endif
</tr>

@endforeach
</table>
        </div>
       
         <!--end table-->

        </div>
          @include("admin.adminscript")
      </body>
    </html>
</body>
</html>