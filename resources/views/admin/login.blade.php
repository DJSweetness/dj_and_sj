@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/login.css')}}" type="text/css" />
@endsection

@section('content')

    @include('includes.info_box')

    <form action="{{ route('admin.login') }}" method="post">
        Sign In
        <input type="text" name="name" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <input class="btn" type="submit" value="Submit"/>
        <input type="hidden" name="_token" value="{{ Session::token() }}" />
    </form>
    
    
    
@endsection
