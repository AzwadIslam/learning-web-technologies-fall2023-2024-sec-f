<?php
include_once("../controller/topUpCheck.php");
require_once("../controller/SessionCheck.php");
$user = getUser($_SESSION['username']); 
$username = $user['UserName'];
echo " , ".$username;
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top UP</title>
   
</head>

<body>


    
<form action="" method="POST" enctype="">
    <fieldset>
    <legend><h2 align="center" >Top Up</h2></legend>
    <input type="text" name ="amount" id="amount"<?php echo "topUp" ?> />
    <br/><br />
    <input type="submit" value="TopUp" name="submit">
   
    
    </fieldset>
</form>
</body>

</html>


