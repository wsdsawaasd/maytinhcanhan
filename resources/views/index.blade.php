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
    <form method="post" action="{{route('+')}}">
        @csrf
        <h2>Calculator</h2>
        <input type="text" name="firstNumber">
        <input type="text" name="secondNumber">
        <p>
        <input type="submit" value="Addition(+)" name="add">
        <input type="submit" value="Subtraction(-)" name="sub">
        <input type="submit" value="Multiplication(X)" name="Mul">
        <input type="submit" value="Division(/)" name="Div">
        </p>

    </form>
    <p>Result Division :{{$result}}</p>
</body>
</html>
