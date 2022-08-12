<!DOCTYPE html>
<html>
<head>
	<title>dash board </title>
  <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<style type="text/css">
		body {
			background-color: #1a273b;
		}
		.container{
      display:inline-block;
 /* padding: 0px;*/
}
div{
  
}
p{
  display:block;
  /* float:right; */
  align-items:center;
  align-content:center;
  
}
.card{
  width: 300px;
  height: 638px;
  background-color: #182831;
  border-radius: 10px 10px;
  display:inline-block;
}

.header{
  border-radius: 10px 10px 0px 0px;
  padding: 5px;
  background-color: #181425;
}

h3{
  color: #FFFFFF;
  font-family: 'Roboto', sans-serif;
  margin-left: 1rem;
}

.iconM{
  font-size: 18px;
  margin-left: 170px;
  color: #2f89fc;
}

.icon{
  margin-right: 8px;
}

.body li{
  transition: 1s all;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  padding: 15px;
  margin-left: -40px;
  margin-top: 0px;
  color: #fff;
  list-style: none;
  display: block;
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;

}

li:hover{
  transition: 1s all;
  color: #2f89fc;
  background-color: rgba(42, 56, 65, 0.82);
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;
  cursor: pointer;
}

.body > li{
  float: left;
  
}

.body li ul{
  background: #1E2B32;
  margin-left: 280px;
  margin-top: -36px;
  display: none;
  position: absolute;
  border-top-right-radius: 15px 15px;
  border-bottom-right-radius: 15px 15px;
  
}

.body li:hover > ul{
  display: block;
  cursor: pointer;
}
.welcome{
  font-family: 'Roboto', sans-serif;
  display :inline;
  position:absolute;
  /* left:49%; */
  color:white;
  width:77%;
}
h2{
  text-align:center;
}
.profilepic{
  /* align:center; */
  margin-left: auto;
  margin-right: auto;
display:block;
height:100px;
width:100px;
border-radius:50px;
}
.profilepic1{
  margin-left: auto;
  margin-right: auto;
display:inline;
height:100px;
width:100px;
/* margin:23px; */
border-radius:50px;
cursor:pointer;
}
table{
  border: 1px solid black;
  width:100%;
  text-align:center;
}
	</style>
</head>
<body>
<script type="text/javascript">
$(function(){
  $("#1").click(function(){
    var a=$("#1").attr("value");
    alert(a);
  })
  $("#2").click(function(){
    var a=$("#2").attr("value");
    alert(a);
  })
  $("#3").click(function(){
    var a=$("#3").attr("value");
    alert(a);
  })
  $("#4").click(function(){
    var a=$("#4").attr("value");
    alert(a);
  })
  $("#5").click(function(){
    var a=$("#5").attr("value");
    alert(a);
  })
  $("#6").click(function(){
    var a=$("#6").attr("value");
    alert(a);
  })
  $("#7").click(function(){
    var a=$("#7").attr("value");
    alert(a);
  })




})

</script>
<!-- <div class="container"> -->
<?php
include "conn.php";

  if(isset($_POST['submit'])){
   $email= $_POST['u'];
   $password=$_POST['p'];
    
   $sql="SELECT * FROM `login` WHERE `email` like '$email' ";
$result=mysqli_query($conn,$sql);


if (!mysqli_fetch_assoc($result)>0  ){
    header("location:login.php?error=email is wrong");
    exit();
}
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['password']!==$password){
  header("location:login.php?error= password is wrong");
    exit();
}

$_SESSION['login']=$row;
// print_r($_SESSION['login']);
if(empty($_SESSION['login'])){
  header("location:login.php?error=session not available");
    exit();
}

  }
include "menuinc.php";

  ?>
<div class="welcome">
<h2  >welcome to the dashboard</h2>
<img  class="profilepic" src="profile.jpg" alt="profile pic">
 <h2  ><?php echo $_SESSION['login']['firstname']." ".$_SESSION['login']['lastname'];?></h2>
 <h2>leavel 1</h2>
<?php
$sql="SELECT * FROM `login` WHERE `id` IN ('".$row['slot1id']."', '".$row['slot2id']."', '".$row['slot3id']."', '".$row['slot4id']."',
 '".$row['slot5id']."', '".$row['slot6id']."', '".$row['slot7id']."')";
// echo $_SESSION['login']['id'];
$result=mysqli_query($conn,$sql);
$row1=mysqli_fetch_all($result,MYSQLI_ASSOC);

// print_r($row1);
?>
<table>
<tr ><td id="1" value="<?php echo $row1[0]['username'];  ?>"><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td>
<td id="2" value="<?php echo $row1[1]['username'];  ?>"><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td>
<td id="3" value="<?php echo $row1[2]['username'];  ?>"><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td>
 <td id="4" value="<?php echo $row1[3]['username'];  ?>"><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> 
 <td id="5" value="<?php echo $row1[4]['username'];  ?>"><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> 
 <td id="6" value="<?php echo $row1[5]['username'];  ?>"><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> 
  <td id="7" value="<?php echo $row1[6]['username'];  ?>"><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> </tr>
<tr></tr>
<tr>
<td id="1" value="<?php echo $row1[0]['username'];  ?>"> <?php echo $row1[0]['username'];  ?></td>
<td id="2" value="<?php echo $row1[1]['username'];  ?>"><?php echo $row1[1]['username'];  ?></td>
<td id="3" value="<?php echo $row1[2]['username'];  ?>"><?php echo $row1[2]['username'];  ?></td>
<td id="4" value="<?php echo $row1[3]['username'];  ?>"><?php echo $row1[3]['username'];  ?></td>
<td id="5" value="<?php echo $row1[4]['username'];  ?>"><?php echo $row1[4]['username'];  ?></td>
<td id="6" value="<?php echo $row1[5]['username'];  ?>"><?php echo $row1[5]['username'];  ?></td>
<td id="7" value="<?php echo $row1[6]['username'];  ?>"><?php echo $row1[6]['username'];  ?></td>
</tr>
<!-- </table><p id="a">titus <?php echo $row1[6]['username'];  ?></p> -->
 <!-- <div >

 <img  class="profilepic1" src="profile.jpg" alt="profile pic">
 <img  class="profilepic1" src="profile.jpg" alt="profile pic">
 <img  class="profilepic1" src="profile.jpg" alt="profile pic">
 <img  class="profilepic1" src="profile.jpg" alt="profile pic">
 <img  class="profilepic1" src="profile.jpg" alt="profile pic">
 <img  class="profilepic1" src="profile.jpg" alt="profile pic">
 <img  class="profilepic1" src="profile.jpg" alt="profile pic">
 </div> -->
</div>
 
  
</div>

</body>
</html>