<?php

    require_once('C:\xampp\htdocs\VCV8\Php\DbOperations.php');
    $user = $operations->get_userdata();
 

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
    <title>Receiver Meet</title>

    <link rel="stylesheet" href="../sender/style.css">

</head>
<body>

    <div>
        <!-- Input box, that will take the username of the sender to put it on the server --> 
        <label class="custom-field" >
            <input type="text" id="username-input" required/>
            <span class="placeholder">Enter Code</span>
        </label>

        <br>

        <button onclick="joinCall()">Join Call</button> <!-- When the button is clicked, it will create offer and send and store it to the server -->
    </div>

    <div id="video-call-div"> <!-- This will hold the video elements -->
        <video muted id="local-video" autoplay></video> <!-- Once the video/stream is available, this video element it automatically starts playing -->
        <video id="remote-video" autoplay></video> <!-- This will show the video of the remote user -->

        <div class="call-action-div"> 
            <button onclick="muteVideo()">Mute Video</button> <!-- Turning off the video -->
            <button onclick="muteAudio()">Mute Audio</button> <!-- Muting the audio -->
            <button onclick="location.href='../Php/leave.php'">End Call</button> <!-- End Call-->
        </div>
    </div>

    <script src="./receiver.js"></script>
    <script src="../Javascript/app.js"></script>
</body>
</html>