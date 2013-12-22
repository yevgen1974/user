@layout("default")
@section("content")

<div class='container' align='center'>
	 
<h1>User Details</h1>
	 
	<table width="500" border='1' class='table-striped'>
	 
	<tr>
	 
   <th scope='row'>User Name</th>


	<th scope='row'>First Name</th>
	 
	<th scope='row'>Last Name</th>
	 
	<th scope='row'>Email</th>
	 
	<th scope='row'>Created</th>

	<th scope='row'>Created</th>
	 
	</tr>
	 

	 
	<tr>

	<td> {{$user->username}}</td>
	 
	<td> {{$user->firstname}}</td>
	 
	<td> {{$user->lastname}} </td>
	 
	<td><small>{{$user->email}}</small></td>
	 	

	<td><small>{{$user->created_at}}</small></td>


	<td>
	<a class="btn btn-small btn-success" href="{{ URL::to('users/index') }}">Get back</a>

	</td>
	 <tr>

	 
	<br>
	 
	<table>
	 
	<tr>
	 
	</tr>
	 
	</table>
	 
	</div>
	 
	@endsection


@stop
