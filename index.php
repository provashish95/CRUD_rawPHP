<?php
 include 'inc/header.php';
 include 'config.php';
 include 'database.php'; 

?>
		
			<section class="maincontent">
			<hr/>
<?php
$db = new database();
$query = "SELECT * FROM tbl_user";
$read = $db->select($query);
?>	

<!-- insert message -->
<?php
if (isset($_GET['msg'])) {
	echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>
<!-- insert message -->


<table class="tblone">
	<th width="25%">Name</th>
	<th width="25%">Email</th>
	<th width="25%">Skill</th>
	<th width="25%">Action</th>

<?php   if ($read) {
      while ($row = $read->fetch_assoc()) {?>


	<tr style="text-align: center;">
		<td width="25%"><?php echo $row['name']; ?></td>
		<td width="25%"><?php echo $row['email']; ?></td>
		<td width="25%"><?php echo $row['skill']; ?></td>
		<td width="25%"><a href="update.php?id=<?php echo urlencode($row['id']) ; ?>">Edit</a></td>
	</tr>
<?php }?>
<?php }else{?>
 <p>Data is not available !</p>
<?php } ?>

</table>

<p><a href="create.php">Create</a></p>


			
				
					

	</section>
	
<?php include 'inc/footer.php';?>
