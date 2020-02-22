<?php
class database{
		 public $host   = DB_HOST;
		 public $user   = DB_USER;
		 public $pass   = DB_PASS;
		 public $dbname = DB_NAME;

		 public $link;
 		 public $error;
//database connection here.........
//database connection here.........
    public function __construct(){
          $this->connectDB();
 }

	 	private function connectDB(){
			 $this->link = new mysqli($this->host, $this->user, $this->pass, 
			  $this->dbname);
			 if(!$this->link){
			   $this->error ="Connection fail".$this->link->connect_error;
			  return false;
 }
 }
 //database connection here.........
//database connection here.........

 	//read or select data .........
 	public function select($query){
         $result = $this->link->query($query) or die($this->link->error.__LINE__);
         if ($result->num_rows > 0) {
         	return $result;
         }else{
         	return false;
         }
 	}

 	//create or insert data........
	 	public function insert($query){
		 $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);

			 if($insert_row){
			   header("Location: index.php?msg=".urlencode('Data inserted succsessfully'));
			   exit();
			 } else {
			   die("Error:(".$this->link->errno.")".$this->link->error);
			  }
	 }

	 //update  data........
	 public function update($query){
	 	 $update_row = $this->link->query($query) or die($this->link->error.__LINE__);

			 if($update_row){
			   header("Location: index.php?msg=".urlencode('Data updated succsessfully'));
			   exit();
			 } else {
			   die("Error:(".$this->link->errno.")".$this->link->error);
			  }
	 }

	 //delete by id data........
	 public function delete($query){
	 	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	 	 if($delete_row){
			   header("Location: index.php?msg=".urlencode('Data Deleted succsessfully'));
			   exit();
			 } else {
			   die("Error:(".$this->link->errno.")".$this->link->error);
			  }
	 }
}














?>