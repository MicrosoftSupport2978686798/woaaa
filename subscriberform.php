<?php


if($_POST["message"]) {


mail("grbsail1532@gmail.com", "New contact",


$_POST["message"]. "From: an@email.address");


}


?>