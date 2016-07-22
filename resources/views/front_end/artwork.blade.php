@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/')}}" type="text/css" />
@endsection

@section('content')

    <div class="container">
        <div class="search_bar">
            <form action="" method="post">
                <div class="input_group">
                    <label for="search">Search Through Art</label>
                    <input type='text' name='search' id='search' />
                    <button type="submit" class="btn">Search</button>
                    <input type="hidden" name="_token" value="Session::token()" />
                </div>
        </div>
        
        <div class="art_thumbnails">
            
        </div>
    </div>

@endsection