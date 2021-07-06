<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/app.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="container">
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
            @foreach ($photos as $photo)
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="/photos/{{ $photo->id }}">
                        <h2 class="post-title">  {{ $photo->title }}</h2>
                        <img src="{{ $photo->thumbnailUrl}}">

                    </a>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                @endforeach
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">

            </div>
        </div>


</div>
</div>
</body>
</html>
