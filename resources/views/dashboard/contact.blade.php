<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Hey!</h2> <br><br>
You received an email from : {{ $validatedData['name'] }} <br><br>
User Details: <br><br>
  Name: {{ $validatedData['name'] }} <br>
  Email: {{ $validatedData['email'] }} <br>
  Phone Number: {{ $validatedData['number'] }} <br>
  Subject: {{ $validatedData['subject'] }} <br>
  Message: {{ $validatedData['message'] }} <br><br>


</body>
</html>








