@extends('Index')

@section('title', 'E-Commerce')

@section('content')
    <div class="container" style="width: 50%; margin: 0 auto; text-align: center;">
        <form class="form-inline">
            <a class="btn btn-primary" href="{{ url('/Login') }}">Login</a>
            <a class="btn btn-success" href="{{ url('/Register') }}">Register</a>
        </form>
    </div>
@stop