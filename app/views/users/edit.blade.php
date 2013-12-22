
@layout("default")
@section("content")

<div class='container' align='center'>
	 
<h4>Edit User</h4>

<form name="edit" action="users/update/{{$user->id}}" method="post">
<table width="500" border='1' class='table-striped'>

	 
	 
	<tr>
	<td> <input type="text" name="username" value="{{$user->username}}"></td>
	 
	<td> <input type="text" name="firstname" value="{{$user->firstname}}"></td>
	 
	<td> <input type="text" name="lastname" value="{{$user->lastname}}" > </td>
	 
	<td><input type="text" name="email" value="{{$user->email}}" ></td>
	 
	<td><input type="submit" value="Update"></form> </td>
	<td>

	</td>
	 <tr>
	 
	<table>


<br>


  
	 
	 
	<table>
	 

	 
	</div>
	 
	@endsection


@stop