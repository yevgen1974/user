@layout("default")
@section("content")

<div class='container' align='center'>
	 
<h1>User's List</h1>
	 
	<table width="500" border='1' class='table-striped'>
	 
	<tr>
	 
	<th scope='row'>First Name</th>
	 
	<th scope='row'>Last Name</th>
	 
	<th scope='row'>Email</th>
	 
	<th scope='row'>Action</th>
	 
	</tr>
	 
    @foreach ($users as $user) 
	 
	<tr>
	 
	<td> {{$user->firstname}}</td>
	 
	<td> {{$user->lastname}} </td>
	 
	<td><small>{{$user->email}}</small></td>
	 

	<td width="350">
	<a class="btn btn-small btn-success" href="{{ URL::to('users/show/' . $user->id) }}">View User</a>
	<a class="btn btn-small btn-info" href="{{ URL::to('users/edit/' . $user->id ) }}">Edit User</a>
	 {{ Form::open(array('url' => 'users/destroy/' . $user->id, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('delete', array('class' => 'btn btn-warning')) }}
     {{ Form::close() }}

	</td>
	 <tr>
	@endforeach
	 
	<br>
	 
	<table>
	 
	<tr>

	{{$users->links()}}
	 
	</tr>
	 
	</table>
	 
	</div>
	 
	@endsection


@stop
