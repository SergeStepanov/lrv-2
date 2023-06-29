<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>{{$todo->title}}</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Title: {{$todo->title}}</h1>
        <p>Id: {{$todo->id}};</p>
        <p>Description: {{$todo->description}};</p>
        <p>Created: {{$todo->created_at}};</p>
        <p>Updated: {{$todo->updated_at}};</p>
        {{$todo}}
    </div>
</body>

</html>