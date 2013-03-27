<!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script>


setInterval(function() {
 $.get("get.php",function(data,status){
      
var count=data;
document.getElementById("countvariable").innerHTML=data;

    });
     
}, 100);
$(document).ready(function(){
  
   
  
});


</script>

    <style>
body {
font:14px trebuchet ms,tahoma,arial;
color:#ADADAD;
background: #1e5799;
background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #7db9e8 100%); 
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(50%,#2989d8), color-stop(100%,#7db9e8)); 
background: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#7db9e8 100%); 
background: -o-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#7db9e8 100%);
background: -ms-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#7db9e8 100%);
background: linear-gradient(to bottom,  #1e5799 0%,#2989d8 50%,#7db9e8 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); 

}

h2 {
font-size:158px;
font-weight:400;
color:#C6C6C6;
position:relative;
top:-102px;
text-shadow:0 1px 1px #4d4d4d;
}

a {
text-decoration:none;
}

a:hover {
border-bottom:1px solid #red;
color:#f80;
}

#main {
width:600px;
height:600px;
background:#eee;
border-radius:5%;
border:2px solid #D5D5D5;
margin:20px auto 0;
}

#count {
width:500px;
height:500px;
border-radius:20%;
background:#F5F5F5;
border:2px solid #D5D5D5;
position:relative;
text-align:center;
top:5%;
margin:0 auto;
}

#footer {
height:26px;
position:relative;
top:72px;
text-align:center;
}

</style>
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
    &copy;  <?php echo date("Y"); ?> | Developed and Designed by <a href="http://www.activenerds.com/about/">Amal Murali</a>
    </div>
</div>
</body>
