<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite('resources/js/app.js')
</head>
<body> 
    <!--HEADER-->
    <header class="container">
        <picture><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></picture>
        <nav>
            <ul>
                <li>
                </li>
            </ul>
        </nav>
    </header>
    <!--JUMBOTRON-->
    <div>
        <picture><img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt=""></picture>
    </div>
    <!--Section Main-->
    <section>
        <div class=" card-container container">
        </div>
    </section>
    <!--LINK FOOTER-->
    <section id="link-footer">
        <div class="container">
            <!--LEFT SIDE-->
            <div id="left-side">
                <div id="dc-comic-links">
                    <div id="dc-comics">
                        <!--LINK DC COMICS-->
                        <h3>DC COMICS</h3>
                        <ul>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                    <!--LINK SHOP-->
                    <div id="shop-links">
                        <h3>SHOP</h3>
                        <ul>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </div>
                <!--LINK DC-->
                <div id='dc'>
                    <h3>DC</h3>
                    <ul>
                        <li> 
                        </li>
                    </ul>
                </div>
                <!--LINK SITES-->
                <div id="sites">
                    <h3>SITES</h3>
                    <ul>
                        <li>
                           
                        </li>
                    </ul>
                </div>
            </div>
            <!--RIGHT SIDE-->
            <div id="right-side">
            </div>
        </div>
    </section>
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
</template>
</body>
</html>