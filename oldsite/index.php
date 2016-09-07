<?php
if(!strstr($_SERVER['SERVER_NAME'], "www.yerich.net")) {
    header("Location: http://www.yerich.net".$_SERVER['REQUEST_URI']);
    die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Richard Ye</title>
    
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>

<div id="wrapper">
    <div id="home_wrapper">
        <img src="https://2.gravatar.com/avatar/e8e70f271f3fd60904670f8b1a241141?r=x&s=100" alt="Richard Ye" id="home_avatar" />
        <h1>Richard Ye</h1>
        
        <p>Web Developer, Computer Enthusiast and CS Student at the University of Waterloo</p>

        <p>I like to do stuff. <a href="/projects">View my projects &raquo;</a>
        
        <p><br /><a href="http://www.github.com/yerich/">github.com/yerich</a><br />
            <script type="text/javascript">
            tags = atob("PGEgaHJlZj0ibWFpbHRvOnllcmljaEBnbWFpbC5jb20iPnllcmljaEBnbWFpbC5jb208L2E+")
            document.write(tags);
            </script>
        </p>
    </div>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-405998-3");
pageTracker._initData();
pageTracker._trackPageview();
</script>

</body>

</html>