<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p2p video chat and text chat</title>
</head>
<body>
    <label for="">Your ID:</label><br>
    <textarea name="" id="yourId" cols="30" rows="10"></textarea><br>
    <label for="">Other Id</label><br>
    <textarea name="" id="other Id" cols="30" rows="10"></textarea><br>
    <button id="connect">Connect</button><br>
    

    <label for="">Enter Message</label><br>
    <textarea name="" id="yourMessage" cols="30" rows="10"></textarea><br>
    <button id="send">Send</button>
    <pre id="messages"></pre>   
</body>
<script src="bundle.js"></script>
</html>
