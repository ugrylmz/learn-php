<?php
if(isset($_GET['name']) && isset($_GET['email']) ){
    echo htmlentities($_GET['name']) ;
    echo '<br>';
    echo $_GET['email'];
}

?>
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
<form method="GET" action="get.php">
    <div>
        <label>Name</label><br>
            <input type="text" name="name">
    </div>
    <div>
        <label>Email</label><br>
        <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
</form>
</body>
</html>