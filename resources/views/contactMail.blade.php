<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Hey !</h2> <br><br>

You received an email from : {{ $name }} <br><br>

User details: <br><br>

Name:  {{ $name }}<br>
Email:  {{ $email }}<br>
Phone:  {{ $phone }}<br>
Subject:  {{ $subject }}<br>
Message:  {!! $subject !!}<br><br>

Thanks
</body>
</html>