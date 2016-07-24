@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/artwork.css')}}" type="text/css" />
@endsection

@section('content')

    <div class="container">
        <div class="left_bar">
            Find Art Here
            <form action="" method="post">
                <div class="input_group">
                    <input type='text' name='search' id='search' placeholder="Search Artwork" />
                    <button type="submit" class="btn">Search</button>
                    <input type="hidden" name="_token" value="Session::token()" />
                </div>
        </div>
        
        <div class="art_thumbnails">
            @foreach($images as $image)
                <div class="images">
                    <img src="{{ URL::secure($image->path) }}"></img>
                    <p>{{ $image->name }}</p>
                    <text>${{$image->price}}</text>
                </div>
            @endforeach
        </div>
        
        <!-- Future pagination -->
    </div>

@endsection