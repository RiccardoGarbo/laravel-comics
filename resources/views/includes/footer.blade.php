<section id="link-footer">
    <div class="container">
        <!--LEFT SIDE-->
        <div id="left-side">
            <div id="dc-comic-links">
                <div id="dc-comics">
                    <!--LINK DC COMICS-->
                    <h3>DC COMICS</h3>
                    <ul>
                        @foreach ($dc_comics_links as $link )                         
                        <li><a href="#">{{$link}} </a>                                                         
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--LINK SHOP-->

                <div id="shop-links">
                    <h3>SHOP</h3>
                    <ul>@foreach ($shop_links as $link )                         
                        <li><a href="#">{{$link}} </a>                                                         
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--LINK DC-->
            <div id='dc'>
                <h3>DC</h3>
                <ul>@foreach ($dc_links as $link )                         
                    <li><a href="#">{{$link}} </a>                                                         
                    </li>
                    @endforeach                      
                </ul>
            </div>
            <!--LINK SITES-->
            <div id="sites">
                <h3>SITES</h3>
                <ul>@foreach ($sites_links as $link )                         
                    <li><a href="#">{{$link}} </a>                                                         
                    </li>
                    @endforeach                       
                </ul>
            </div>
        </div>
        <!--RIGHT SIDE-->
        <div id="right-side">
        </div>
    </div>
</section>

<!--Final footer-->
<footer>
    <div id="footer-end" class="container">
        <input type="button" value="SIGN-UP NOW!">
        <div id="link-footer-end">
            <ul>
                <li id="followUS">FOLLOW US</li>
                <li>

                </li>
            </ul>
        </div>
    </div>
</footer>