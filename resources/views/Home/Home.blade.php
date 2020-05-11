@extends('Index')

@section('title', 'E-Commerce')

@section('content')
    {{-- @if(Auth::user()->role == 'customer')
        <p>berhasil login!! </p>
        <p>Username: {{ Auth::user()->username ?? '' }}</p>
        <p>Role: {{ Auth::user()->role }}</p>
        <br>
        <a href="{{ route('logout') }}">logout</a>
    @else

        <p>berhasil login!!</p>
        <p>Role: {{ Auth::user()->role ?? '' }}</p>
        <br>
        <a href="{{ route('logout') }}">logout</a>
    @endif --}}

    <div class="container" style="width: 50%; margin: 0 auto; text-align: center;">
        <h3>This Page is Under Contruction</h3>
    </div>
@stop