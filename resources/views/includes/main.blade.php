<section>
    <div class=" card-container container">
       @foreach (config('comics') as $index => $comic) 
       <a href="{{route('comic.show', ['index' => $index])}}">
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="">
            <h5>{{ $comic['series'] }}</h5>  
        </div>  
    </a>
        @endforeach                                                        
    </div>
</section>