<?php
include("auth.php");
include("db.php");

$username=$_SESSION["username"];
 
if(isset($_POST['submit'])){
    
   
    $name=$_POST['txt'];
    $pass=$_POST['extra'];
    $productname = mysqli_real_escape_string($db, $name);
    $productpass = mysqli_real_escape_string($db, $pass);
    
    $sq="INSERT INTO `data`(`id`, `user`, `product`, `pass`) VALUES ('','$username','$productname','$productpass')";
    mysqli_query($db,$sq);
    
}

?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Dashboard</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>


body{
	 background-image:url(https://digitalguardian.com/sites/default/files/41197290_m.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 height:100vh;
	 overflow:auto;
	 
}

/*-----for border----*/
.container{
	font-family:Roboto,sans-serif;
	  background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
    
     border-style: 1px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 1500px;
     padding-top: 10px;
     height: 120px;
     margin-top: 166px;
}
/*--- for label of first and last name---*/
.lastname{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 10px;
}
.firstname{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 5px;
}
#lname{
	 margin-top:5px;
}
	  

/*---for heading-----*/
.heading{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}
/*-------for email----------*/
  /*------label----*/
#email{
	  margin-top: 5px;
}
/*-----------for Password--------*/
     /*-------label-----*/
.mail{
	 margin-left: 44px;
     font-family: sans-serif;
     color: white;
     font-size: 14px;
     margin-top: 13px;
}
.pass{
	 color: white;
     margin-top: 9px;
     font-size: 14px;
     font-family: sans-serif;
     margin-left: 6px;
     margin-top: 9px;
}
#password{
 margin-top: 6px;
}
/*------------for phone Number--------*/
      /*----------label--------*/
.pno{
	 font-size: 18px;
     margin-left: -13px;
     margin-top: 10px;
     color: #ff9;
	
}	

/*--------------for Gender---------------*/
     /*--------------label---------*/
.gender {
	 color: white;
     font-family: sans-serif;
     font-size: 14px;
     margin-left: 28px;
     margin-top: 8px;
}

     /*---------- for Input type--------*/
.col-xs-4.male{
	 color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
}
.col-xs-4.female {
     color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
	 padding-right: 95px;
}	
/*------------For submit button---------*/
.sbutton{
	 color: white;
     font-size: 20px;
     border: 1px solid white;
     background-color: #080808;
     width: 32%;
     margin-left: 41%;
     margin-top: 16px;
	 box-shadow: 0px 2px 2px 0px white;
  	   
   }
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 
.reg{
    color: white;
    
}	  
</style>
<script>
var c=0;
function generatePassword() {
    var x = document.getElementById("myDIV");
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    document.getElementById('demo').innerHTML =retVal;
    document.myform.extra.value = retVal;
    x.style.display = "none";
    return retVal;
}
function gcode() {
    var x = document.getElementById("myDIV");
    var length = 5,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    document.getElementById('demo').innerHTML =retVal;
    document.myform.extra.value = retVal;
    x.style.display = "none";
    return retVal;
}

function hidefunction(z){
    alert("Your code is send to your email address.");
var xx="tdm"+z;
var yy="tds"+z;
var code=gcode();
c=code;
mail(code);
var x = document.getElementById(xx);
x.style.display = "none"
var y = document.getElementById(yy)
y.style.display = "block"
}


function showfunction(y,z){
    var ge="txt"+z
 var data = document.getElementById(ge).value;
var xx="tdd"+z;
if(data==c){
    var x = document.getElementById(y);
x.style.display = "none"
var sk = document.getElementById(xx);
sk.style.display = "block";
}
else{
    alert("Wrong!! Code");
}
} 

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } 
}

function mail(code)
{
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            }
        };
        xmlhttp.open("GET", "mail.php?code=" + code, true);
        xmlhttp.send();
}
</script>
</head>
<body onload="generatePassword()">
 <div class="container">

<div class="main-div">
    <div class="panel">
   <h2>Generate Password</h2>
   <br>
       <p id="demo"></p>

<form  method="POST" name="myform" action="#">
    <input type="hidden" name="extra" >
    
    <button type="button" class="btn btn-info"
onclick="myFunction()">
Select</button>
    <button type="button" class="btn btn-warning"
onclick="document.getElementById('demo').innerHTML = generatePassword()">
Generate</button>

<div id="myDIV" style="padding-top:50px">
<input type="text"  name="txt" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
<input type="submit" name="submit" class="btn btn-success" value="Submit" >
</div>
</form>
<div></br>
</div>
</div>


<div class="panel">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php
$i=1;
$sql = "SELECT * FROM `data` WHERE `user`='$username'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $imk="'td".$row['id']."'";
        echo '<tr><th scope="row">'.$i.'</th><td>'.$row['product'].'</td><td id="td'.$row['id'].'">********</td></td><td id="tdd'.$row['id'].'"style = "display:none" >'.$row['pass'].'</td><td></td><td id="tdm'.$row['id'].'">
        <button type="button" class="btn btn-success"
onclick="hidefunction('.$id.')">
View</button></td>
<td></td><td id="tds'.$row['id'].'" style = "display:none">
        <input type="text"  id="txt'.$row['id'].'" placeholder="Code"> | <button type="button" class="btn btn-info"
onclick="showfunction('.$imk.','.$id.')">
View</button></td></tr>';
        $i++;
    }
}
?>


      
     
      
  </tbody>
</table>
    </div>

</body>		
</html>
	 
	 