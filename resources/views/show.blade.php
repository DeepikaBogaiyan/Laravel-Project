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

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $data->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Province:</strong>
                {{ $data->province}}
            </div>
        </div>
		        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone:</strong>
                {{ $data->telephone}}
            </div>
        </div>
		        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postal Code:</strong>
                {{ $data->postal}}
            </div>
        </div>
		        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Salary:</strong>
                {{ $data->Salary}}
            </div>
        </div>
    </div>
</div>
@endsection