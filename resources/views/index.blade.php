<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>メモリスト</h1>
        [<a href='/posts/memo'>メモ投稿</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2>課題一覧</h2>
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->problem}}</a>
                    <h2>連絡一覧</h2>
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->information}}</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>