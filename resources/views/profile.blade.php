<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
    <div>{{ $user->name }}</div>
    <div class="col-4">
        <form action="{{ route('logout') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-primary btn-block">Logout</button>
        </form>
    </div>
</body>
</html>