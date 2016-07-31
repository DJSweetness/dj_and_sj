@extends('layouts.admin_master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/index.css') }}" type="text/css" />
@endsection

@section('content')

    <div class="container">
        
        <div class="category">
            <text>Artwork</text>
            <a href="{{ route('admin.artwork') }}"><img src="{{ URL::secure('images/elephant.jpg') }}"></img></a>
        </div>
        
        <div class="category">
            <text>Music</text>
            <a href="{{ route('music') }}"><img src="{{ URL::secure('images/Album Cover.jpg') }}"></img></a>
        </div>
    </div>
    
@endsection


