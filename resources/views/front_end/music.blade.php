@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/music.css')}}" type="text/css" />
@endsection

@section('content')

    <div class="container">
       <div class="albums">
           
           <div class="album">
                <img src="{{ URL::secure('images/Album Cover.jpg')}}"></img>
                <a href="https://play.spotify.com/artist/7CYNlZYIAhsdSfZriJFTR8" target="_blank">Listen On Spotify</a>
                <ul class="song_list">
                   <li>Follow Your Heart</li>
                   <li>Can't Wait</li>
                   <li>Footsteps</li>
                   <li>Keep Writing On</li>
               </ul>
           </div>
           
           <div class="album">
               <img src="{{ URL::secure('images/willingtodream.jpg')}}"></img>
               <a href="https://play.spotify.com/artist/0j4W5qS0GXaaKCMB1WtDKI" target="_blank">Listen On Spotify</a>
               <ul class="song_list">
                   <li>Let Love In</li>
                   <li>Runaway</li>
                   <li>Flower Child</li>
                   <li>Fire Me Up</li>
                   <li>Don't Let Her Go</li>
                   <li>Lights On Still Water</li>
                   <li>We Believe</li>
                   <li>The Way To Live</li>
                   <li>Take This Day</li>
                   <li>Cougar Bait</li>
               </ul>
            
           </div>
       </div>
    </div>

@endsection