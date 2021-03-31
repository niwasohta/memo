<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h2>課題</h2>
        <h2 class="title">
            {{ $post->problem}}
        </h2>
        <div class="content">
            <div class="content__post">
                <h2>解決</h2>
                <p>{{ $post->solution}}</p>
                <h2>課題種別</h2>
                <p>{{ $post->problemcategory}}</p>
                <h2>重要度</h2>
                <p>{{ $post->problempriority}}</p>
                <h2>特徴</h2>
                <p>{{ $post->problemfeatures}}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
