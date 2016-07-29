@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/music.css')}}" type="text/css" />
@endsection

@section('content')

    <form action="{{ route('admin.login') }}">
        <input type="text" name="username" value="Username"/>
        <input type="password" name="password"/>
        <input type="submit" value="Submit"/>
        <input type="hidden" name="_token" value="{{ Session::token() }}" />
    </form>
    
@endsection
