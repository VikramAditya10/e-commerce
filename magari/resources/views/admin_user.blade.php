<html>

<head>
    <title>View Student Records</title>
</head>

<body>
<table border = 1>
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    @foreach ($admin as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->user_id }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>