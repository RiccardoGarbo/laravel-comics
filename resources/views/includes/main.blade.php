<section>
    <div class=" card-container container">
       @foreach (config('comics') as $comic) 
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="">
            <h5>{{ $comic['series'] }}</h5>  
        </div>  
        @endforeach        
    </div>
</section>