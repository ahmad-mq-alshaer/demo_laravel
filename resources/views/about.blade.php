<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Hello, <?php echo "$name"; ?> </h1>

    <form action="about" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <input type="submit" value="send">
    </form>
</body>

</html>