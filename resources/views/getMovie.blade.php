<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    <ul>
    @foreach ($movies as $movie)
        <li>タイトル: {{ $movie->title }}</li>
        <li>イメージ: {{ $movie->image_url }}</li>
        <!-- <li>作成日時: {{ $movie->created_at }}</li>
        <li>更新日時: {{ $movie->updated_at }}</li> -->
    @endforeach
    </ul>
</body>
</html>