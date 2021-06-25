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
                <!-- User preview-->
                <div class="post-preview">
                    <h2 class="post-title">  {{ $user->name }}</h2>
                    <h3 class="post-subtitle"> {{ $user->username }}</h3>
                    <h3 class="post-subtitle"> {{ $user->phone }}</h3>
                    <h3 class="post-subtitle"> {{ $user->email }}</h3>
                    <h3 class="post-subtitle"> {{ $user->website }}</h3>
                    <h3 class="post-subtitle"> Company: {{ $user->company->name }}</h3>
                    <a href="/users">Back</a>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
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
