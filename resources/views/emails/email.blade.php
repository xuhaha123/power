<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
<h2>尊敬的</h2>
{{$name}}用户,密码已经重置为：{{$password}}
<p>
    发送时间：{{ date('Y-m-d H:i:s',time()) }}
</p>
</body>
</html>

