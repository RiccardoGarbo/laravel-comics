@extends('layouts.app')

@section('main-content')
<div id="show">
    <div id="description">
        <h1>{{$comic['title']}}</h1>
        <div id="availability">
            <div>
        <span>U.S Price {{$comic['price']}}<span>
        </div>
        <div>
            <span>AVAILABLE</span>
           <button>Check Availability</button>
        </div>

    </div>
        <p>{{$comic['description']}}</p>
    </div>
        <div id="image">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
</div>

@endsection