@extends('layouts.admin_master')

@section('content')

    <div style="max-width: 1000px;
                max-height: 1000px">
        <img src="{{ URL::secure($image->path)}}"></img>
    </div>

@endsection