@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/artwork.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
@endsection

@section('content')
    <div class="container">
        <div class="left_bar">
            Find Art Here
            <form action="{{ route('artwork.search') }}" method="get">
                <div class="input_group">
                    <input type='text' name='search' id='search' placeholder="Search Artwork" />
                    <button type="submit" class="btn">Search</button>
                </div>
            </form>
            
            @if(Session::has('filter'))
                <a href="{{ route('artwork') }}">Delete Filter</a>
            @endif
            
        </div>
            
        <div class="art_thumbnails">
            
            @include('includes.info_box')
            
            @foreach($images as $image)
                <div class="images">
                    <a href="{{ route('single_image', ['image_id' => $image->id]) }}"><img src="{{ URL::secure($image->path) }}"></img></a>
                    <p>{{ $image->name }}</p>
                    <text>${{$image->price}}</text>
                </div>
            @endforeach
            
            <div class="pagination">
                @if($images->currentPage() !== 1)
                    <a href="{{ $images->previousPageUrl() }}"><span class="fa fa-caret-left"></span></a>
                @endif
                
                @if($images->currentPage() != $images->lastPage() && $images->hasPages())
                    <a href="{{ $images->nextPageUrl() }}"><span class="fa fa-caret-right"></span></a>
                @endif
            </div>
        </div>
    </div>

@endsection