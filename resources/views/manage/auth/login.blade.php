@extends('manage.layouts.master')

@section('title', 'Đăng nhập')

@section('login')
    <div class="login">
        <div class="login-wrapper">
            <h1>Đăng nhập | cPanel</h1>

            @if(session('message'))
                <div class="login-message">{{session('message')}}</div>
            @endif

            {!! Form::open(['method' => 'POST', 'class' => 'login-form']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Mật khẩu', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) !!}
                </div>

                <div class="btn-group">
                    {!! Form::submit('Đăng nhập', ['class' => 'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{asset('manage')}}/css/login.css">
@endpush