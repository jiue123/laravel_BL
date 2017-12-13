<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    {!! Html::style('css/bootstrap.css') !!}
    <!-- pignose css -->
    {!! Html::style('css/pignose.layerslider.css') !!}
    <!-- //pignose css -->
    {!! Html::style('css/style.css') !!}
    <!-- js -->
    {!! Html::script('js/jquery-2.1.4.min.js') !!}
    <!-- //js -->
    <!-- cart -->
    {!! Html::script('js/simpleCart.min.js') !!}
    <!-- cart -->
    <!-- for bootstrap working -->
    {!! Html::script('js/bootstrap-3.1.1.min.js') !!}
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    {!! Html::script('js/jquery.easing.min.js') !!}
    @yield('css_vs_script')
</head>