<!doctype html>
<html>
    <head>
        <title>{{ strtoupper(Request::getMethod()) }} {{ Request::path() }} Route Documentation</title>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/slate/bootstrap.min.css" rel="stylesheet">
        <style>
            pre {
                color: rgb(200, 200, 200);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>
                {{ strtoupper(Request::getMethod()) }} /{{ Request::path() }}
            </h1>

        <h2>Route Documentation</h2>

        @foreach($apiDocInfo as $title => $info)
            <h3>{{ Str::decamel($title) }}</h3>
            @if (is_string($info) or is_int($info))
                <p>{{$info}}</p>
            @else
                <pre class="well">
{{ json_encode($info, JSON_PRETTY_PRINT) }}
                </pre>
            @endif

        @endforeach

    <p class="text-center">A package by <a href="https://github.com/dwolf555">Daniel Wolf</a> for <a href="#">RDIA</a></p>
    </div>
    </body>
</html>