<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Down Stream Sustaainability</title>
</head>

<body>
    <table border width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Business Unit</th>
                <th>Activity</th>
                <th>Dinner</th>
                <th>Day Session</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->dropdown_menu}}</td>
                <td>{{$user->activity}}</td>
                <td>{{$user->dinner}}</td>
                <td>{{$user->day_session}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>