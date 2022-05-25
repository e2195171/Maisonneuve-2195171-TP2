<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h1>Article : {{$article->id}}</h1>
    <hr>
    Title : {{$article->title_en}}
    <hr>
    Body : {{$article->body_en}}
    <hr>
    Category : {{ $article->forumHasCategorie->categorie_en }}
    <hr>
    Author : {{$article->forumHasUser->name}}
    <hr>
    Date : {{ $article->created_at }}
</body>
</html>