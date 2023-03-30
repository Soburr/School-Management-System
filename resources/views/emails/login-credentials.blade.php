<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hello {{ $name }}</p>
    <p>Your Login Credentials are :</p> <br>
    <ul>
        <li>Student ID: {{ $student_id }}</li>
        <li>Password: {{ $password }}</li>
    </ul>
    <p>Please, login and change your Password, ASAP.!</p>
</body>
</html>
