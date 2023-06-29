<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>TODO Task</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">TODO</h1>
        <ul style="list-style-type: none;">
            @foreach($todos as $item)
            <li>
                <a href="/todo/{{$item->id}}" id="{{ $item->id }}">
                    {{$item->id}}. {{$item->title}}
                </a>
            </li>
            @endforeach
        </ul>
        <a href="/todo/create" class="btn btn-success">ADD</a>
    </div>
</body>

</html>