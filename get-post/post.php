<?php
/*
 * if(isset($_POST['name']) && isset($_POST['email']) ){
    echo htmlentities($_POST['name']) ;
    echo '<br>';
    echo $_POST['email'];
}
 */

if(isset($_REQUEST['name']) && isset($_REQUEST['email']) ){
    echo htmlentities($_REQUEST['name']) ;
    echo '<br>';
    echo $_REQUEST['email'];
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
<form method="POST" action="post.php">
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