<header class="container">
    <picture><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></picture>
    <nav>
        <ul>
            <li>@foreach ($header_links as $link )                         
                <li><a href="{{route($link)}}">{{$link}} </a>                                                         
                </li>
                @endforeach
            </li>
        </ul>
    </nav>
</header>