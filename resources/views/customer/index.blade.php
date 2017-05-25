<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataViewer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container">
        <div id="app">
            <data-viewer source="/api/customer" title="Customer Data" />
        </div>
    </div>


</body>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</html>