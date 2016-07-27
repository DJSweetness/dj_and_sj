@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/music.css')}}" type="text/css" />
@endsection

@section('content')

    <div class="container">
       <div class="albums">
           <div class="album">
               <img src=""></img>
               <p class="song_list"></p>
           </div>
       </div>
    </div>

@endsection