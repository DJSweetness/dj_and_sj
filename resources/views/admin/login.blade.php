@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/music.css')}}" type="text/css" />
@endsection

@section('content')

    @include('includes.info_box')

    <form action="{{ route('admin.login') }}" method="post">
        <input type="text" name="name"/>
        <input type="password" name="password"/>
        <input type="submit" value="Submit"/>
        <input type="hidden" name="_token" value="{{ Session::token() }}" />
    </form>
    
    
    
@endsection
