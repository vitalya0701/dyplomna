{{ Form::open(array('url' => '/admin/users/add', 'method' => 'get')) }}
<div class="form-group">
	{{ Form::label('name', 'Name')}}
	{{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Email address')}}
	{{ Form::email('email', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('password', 'Password')}}
	{{ Form::password('password', array('class' => 'form-control')) }}
</div>
{{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}