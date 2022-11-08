<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Birth Day</th>
      </tr>
    @foreach ($users as $user)
    <tr>
        <th>{{ $user->name }}</th>
        <th>{{ $user->email }}</th>
        <th>{{ $user->birth_day }}</th>
    </tr>
    @endforeach
</table>
    {{-- <div>{{dd($users)}}</div> --}}
</body>
</html>