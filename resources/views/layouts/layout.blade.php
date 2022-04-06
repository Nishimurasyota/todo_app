<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield("title")</title>
</head>

<body>
    <header>
        <h1>@yield("title")</h1>
        <p>@yield("auth")</p>
    </header>
    @section("menubar")

    <div class="content">
        @yield("content")
    </div>

    <div class="footer">
        @yield("footer")
    </div>
</body>
<script src="{{ mix('js/sample.js') }}"></script>

</html>
