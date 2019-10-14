<?php
	
	define("TITLE", "MULTI-DIMENSIONAL ARRAYS");

	$userData = array(
	        array(
	                "userName" => "ugury",
	                "email" => "ugur@email.com",
	                "phoneNumber" => "+90 5344847846",
                    "webSite" => "https://uguryilmaz.co"
            ),
            array(
                    "userName" => "jack",
                    "email" => "jack@email.com",
                    "phoneNumber" => "+49 7844741524",
                    "webSite" => "https://jackjack.co"
            ),
            array(
                    "userName" => "maria",
                    "email" => "maria@email.com",
                    "phoneNumber" => "+1 4778477859",
                    "webSite" => "https://jackjack.co"
            ),
    );


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <!-- LESSON NUMBER -->: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>Users</h2>

<table>
    <tr>
        <th>User Name</th>
        <th>E-mail</th>
        <th>Phone Number</th>
        <th>Web Site</th>


    </tr>
        <?php
        foreach ( $userData as $var ) {
            echo "\n","<tr>",
            "<td>" , $var['userName'], "</td>",
            "<td>" , $var['email'], "</td>",
            "<td>" , $var['phoneNumber'], "</td>",
            "<td>" , "<a href=" ,$var['webSite'], ">",$var['webSite'],"</a>", "</td>",

            "</tr>";
        }
        ?>



</table>

				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		

	</body>
</html>
