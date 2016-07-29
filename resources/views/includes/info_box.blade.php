@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/info_box.css') }}" type="text/css" />

@append

    @if(Session::has('fail'))
        <section class="info_box fail">
            {{ Session::get('fail') }}
        </section>
    @endif
    
    @if(count($errors) > 0)
        <section class="info_box fail">
           <ul>
               @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
        </section>
    @endif