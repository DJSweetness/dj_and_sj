@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/index.css') }}" type="text/css" />
@endsection

@section('content')

    <div class="container"><!--

     --><div class="category">
            Artwork
            <div class="artwork">
                <div class="images">
                    <a href="{{ route('artwork') }}"><img src="{{ URL::secure('images/elephant.jpg') }}"></img></a>
                </div>
            </div>
        </div><!-- 
     --><div class="category">
            Music
            <div class="music">
                <div class="images">
                    <a href="{{ route('music') }}"><img src="{{ URL::secure('images/Album Cover.jpg') }}"></img></a>
                </div>
            </div>    
        </div><!--
 --></div>
        

@endsection
