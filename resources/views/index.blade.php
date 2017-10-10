@extends('layout')

@section('content')
<div class="main-frame">
	<div class="row">
		<div class="col-lg-12 margin-tb">
            <div class="link">
				<a class="btn btn-success" href="{{ route('users.form') }}"> ADD INFORMATION </a>
                <a class="btn btn-success" href="{{ route('users.index') }}"> LISTING PAGE</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="content-outer-frame">
	
    <table class="table ">
		<div class="index-heading-frame">
        <tr>
            
            <th>Name</th>
            <th>Province</th>
			<th>Telephone</th>
			<th>Postal</th>
			<th>Salary</th>
            <th width="280px">Action</th>
        </tr>
		</div>
    @foreach ($users as $data)
	<div class="index-content-frame">
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $data->name}}</td>
        <td>{{ $data->province}}</td>
		<td>{{ $data->telephone}}</td>
		<td>{{ $data->postal}}</td>
		<td>{{ $data->salary}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('users.edit',$data->id) }}">Update</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $data->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
	</div>
    @endforeach
    </table>

    {!! $users->links() !!}
@endsection