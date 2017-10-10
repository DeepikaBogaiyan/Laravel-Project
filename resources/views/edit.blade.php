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

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
    {!! Form::model($data, ['method' => 'PATCH','route' => ['users.update', $data->id]]) !!}
        @include('users.form')
    {!! Form::close() !!}

@endsection