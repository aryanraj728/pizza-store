<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<x-app-layout> </x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  	<div class="container-scroller">
    @include('admin.navbar')
    <div  style="position: relative; top: 60px; right: -150px">
    	<table bgcolor="blue" border="3px" align="right">
    		<tr>
    			<th style="padding: 30px;">Name</th>
    			<th style="padding: 30px;">Email</th>
    			<th style="padding: 30px;">Action</th>
    		</tr>
    		@foreach($data as $data)
    		<tr align="center">
    			<th>{{$data->name}}</th>
    			<th>{{$data->email}}</th>
    			@if($data->usertype=="0")
    			<td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
    			@else
                <td><a>Not Alloeded</a></td>
                @endif
    		</tr>
    		@endforeach

    	</table>
     </div>
    </div>
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>

</body>
</html>