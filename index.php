<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Screenshots from YouTube Video</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
<div class="header">
    <h1>Screenshots from YouTube Video</h1>
    <p>Add your link here!</p>
    <form action="index.php" method="POST">
        <input type="text" name="youtube-video"> <br /><br />
        <input type="submit" value="Submit">
</div>
<?php

$url = $_POST['youtube-video'];

if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[\w\-?&!#=,;]+/[\w\-?&!#=/,;]+/|(?:v|e(?:mbed)?)/|[\w\-?&!#=,;]*[?&]v=)|youtu\.be/)([\w-]{11})(?:[^\w-]|\Z)%i', $url, $match)) {
    print '<div class="yt-img">';
    print '<p class="title-img">HD IMAGE</p>';
    print '<img class="image-hd" src="' . "http://img.youtube.com/vi/" . $match[1] . "/maxresdefault.jpg" . '" />' . "<br />";
    print '<p class="title-img">NORMAL IMAGE</p>';
    print '<img class="image-1"  src="' . "http://img.youtube.com/vi/" . $match[1] . "/0.jpg" . '" />' . "<br />";
    print '<p class="title-img">LOW DEFINITION IMAGES</p>';
    print '<div class="yt-img-thumb">';
    print '<img class="image-2"  src="' . "http://img.youtube.com/vi/" . $match[1] . "/1.jpg" . '" />';
    print '<img class="image-3"  src="' . "http://img.youtube.com/vi/" . $match[1] . "/2.jpg" . '" />';
    print '<img class="image-4"  src="' . "http://img.youtube.com/vi/" . $match[1] . "/3.jpg" . '" />';
    print '</div>';
    print '</div>';
}

?>
</div>
<div class="footer">
    <img src="./img/logo.png" />
</div>
</body>
</html>

