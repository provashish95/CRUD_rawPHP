<?php
 include 'inc/header.php';
 include 'config.php';
 include 'database.php'; 

?>
<?php 
 $db = new database();
if(isset($_POST['submit'])){
 $name  = mysqli_real_escape_string($db->link, $_POST['name']);
 $email = mysqli_real_escape_string($db->link, $_POST['email']);
 $skill = mysqli_real_escape_string($db->link, $_POST['skill']);
 if($name == '' || $email == '' || $skill == ''){
  $error = "Field must not be Empty !!";
 } else {
  $query = "INSERT INTO tbl_user(name, email, skill) 
   Values('$name', '$email', '$skill')";
  $create = $db->insert($query);
 }
}
?>
<!-- this is error message -->
<!-- this is error message -->
<?php 
if(isset($error)){
 echo "<span style='color:red'>".$error."</span>";
}
?>
<!-- this is error message -->
<!-- this is error message -->

<form action="create.php" method="post">
<table>
 <tr>
  <td>Name</td>
  <td><input type="text" name="name" placeholder="Please enter 
   name"/></td>
 </tr>
 <tr>
  <td>Email</td>
  <td><input type="text" name="email" placeholder="Please enter 
   email"/></td>
 </tr>

 <tr>
  <td>Skill</td>
  <td><input type="text" name="skill" placeholder="Please enter 
  Skill"/></td>
 </tr>
 <tr>
  <td></td>
  <td>
  <input type="submit" name="submit" value="Submit"/>
  <input type="reset" Value="Cancel" />
  </td>
 </tr>

</table>
</form>
<p><a href="index.php">Go Back</a></p>
<!-- <?php include 'inc/footer.php';?> -->