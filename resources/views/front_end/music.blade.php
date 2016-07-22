@extends('layouts.master')

@section('styles')
@endsection

@section('content')

    <div class="container"><!--

     --><div class="category">
            Artwork
            <div class="artwork">
                <div class="images">
                    <img src="{{ URL::secure('images/elephant.jpg') }}"><a href="#"></a></img>
                </div>
            </div>
        </div><!-- 
     --><div class="category">
            Music
            <div class="music">
                <div class="images">
                    <img src="{{ URL::secure('images/Album Cover.jpg') }}"><a href="#"></a></img>
                </div>
            </div>    
        </div><!--
 --></div>
        

@endsection