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
    @include('includes.header')
    <!--JUMBOTRON-->
    @include('includes.jumbotron')
    <!--Section Main-->
    @include('includes.main')
    <!--FOOTER-->
    @include('includes.footer')
</template>
</body>
</html>