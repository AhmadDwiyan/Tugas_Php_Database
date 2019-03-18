
<html>
<head>
<title> Login | CI PROJECT CONTROL </title>
<style>

        body {font-family: Arial, Helvetica, sans-serif;}
        /* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 90px;
  height: 90px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;

  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
    
.kotak{
    
    padding: 1em;
     margin: 9em auto;
     width: 25%; 
 border:none;
 box-shadow: 0 0 7px 0px grey;
 border-radius:5px;
 text-align: center;

    } .kotak input[type="text"],input[type="password"]{
        background-color: white;
        width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left:2em;
  margin-right: 2em;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color: gray;
    } .kotak  h2{
        color:gray;
        padding-top:0;
        margin-top: 10px;
        font-size: 20px;
        font-weight: bold;
    }.kotak input[type="submit"] {
       background-color: red; 
  background-image: linear-gradient(to right, dodgerblue , cyan);  
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  margin-left:auto;
  border: none;
  cursor: pointer;
  width: 80%;

        
    } .kotak input[type="submit"]:hover{
 opacity: 0.9;
    }
</style>
</head>

<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom kotak">
    
  <h2>  CI | PROJECT LOGIN </h2>

  <form action="login.php" method="post">

<input type="text" name="username" placeholder="username" id="username"> <br><br>

<input type="password" name="password" id="password" placeholder="password">

<input type="submit" name="submit" id="submit" value="LOGIN">

</form>
</div>
</body>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</html>