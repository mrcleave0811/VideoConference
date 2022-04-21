<?php

    require_once('C:\xampp\htdocs\VCV8\Php\DbOperations.php');
    $user = $operations->get_userdata();
    $meetCode = $operations->generateRandomString(6);

        if(!isset($user)){

            echo "<script>
                            alert('YOU NEED TO LOG IN YOUR ACCOUNT FIRST TO PROCEED');
                            window.location.href='../php/login.php';
                        </script>";
            
        }
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sender Meet</title>

    <link rel="stylesheet" href="../sender/style.css">


</head>
<body>
    <div>
         <!-- Input box, that will take the username of the sender to put it on the server --> 
         <label class="custom-field">
            <h1 id="username-input"> <?= $meetCode ?></h1>
        </label>

        <!-- <input type="text" placeholder="Enter code" id="username-input"> -->
        <br>

        <button onclick="startCall()">Start Call</button> <!-- When the button is clicked, it will send and store this username to the server -->
    </div>

    <div id="video-call-div"> <!-- This will hold the video elements -->
        <video muted id="local-video" autoplay></video> <!-- Once the video/stream is available, this video element it automatically starts playing -->
        <video id="remote-video" autoplay></video> <!-- This will show the video of the remote user -->

        <div class="call-action-div"> 
            <button onclick="muteVideo()" id="primary">Mute Video</button> <!-- Turning off the video -->
            <button onclick="muteAudio()">Mute Audio</button> <!-- Muting the audio -->
            <button onclick="location.href='../Php/leave.php'">End Call</button> <!-- End Call-->
        </div>
    </div>

    <script src="./sender.js"></script>
    
</body>
</html>