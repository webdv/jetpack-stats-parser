<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script>
setInterval(function () {
    $.get("get.php", function (data, status) {

        var count = data;
        document.getElementById("countvariable").innerHTML = data;

    });

}, 100);
$(document).ready(function () {});
</script>
    
</head>
    
<body>    
<div id="main">
    <div id="count">
    <p style="font-size:50px;">
    <strong>Total count is:</strong>
    <p/>
    <h2 id="countvariable"></h2>
    </div>
    <div id="footer"> 
    &copy;  
        <?php echo date("Y"); ?> | Developed and Designed by <a href="http://www.activenerds.com/about/">Amal Murali</a>
    </div>
</div>    
</body>
