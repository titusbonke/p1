<?php
$sql="SELECT * FROM `login` WHERE `id` IN ('".$row['slot1id']."', '".$row['slot2id']."', '".$row['slot3id']."',
 '".$row['slot4id']."','".$row['slot5id']."', '".$row['slot6id']."', '".$row['slot7id']."')";
// echo $_SESSION['login']['id'];
$result=mysqli_query($conn,$sql);
$row1=mysqli_fetch_all($result,MYSQLI_ASSOC);

// print_r($row1);
?>
<table>
<tr><td><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td>
<td><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td>
<td><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td>
 <td><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> 
 <td><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> 
 <td><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> 
  <td><img  class="profilepic1" src="profile.jpg" alt="profile pic"></td> </tr>
<tr></tr>
<tr>
<td id="1"> <?php echo $row1[0]['username'];  ?></td>
<td id="2"><?php echo $row1[1]['username'];  ?></td>
<td id="3"><?php echo $row1[2]['username'];  ?></td>
<td id="4"><?php echo $row1[3]['username'];  ?></td>
<td id="5"><?php echo $row1[4]['username'];  ?></td>
<td id="6"><?php echo $row1[5]['username'];  ?></td>
<td id="7"><?php echo $row1[6]['username'];  ?></td>
</tr>
