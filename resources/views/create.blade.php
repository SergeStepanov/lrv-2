<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Create TODO</title>
</head>

<body class="container">
    <h1 class="text-center">Create TODO</h1>

    <form action="/todo/create" method="post">
        @csrf
        <input type="text" class="form-control w-50" name="title" id="title" placeholder="Add title" required>
        <input type="text" class="form-control w-50" name="description" id="description" placeholder="Add description" required>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</body>

</html>