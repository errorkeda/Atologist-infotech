<?php
class User
{
  private $servername="localhost";
  private $username="root";
  private $password="";
  private $db_name="atlogist";
  public $conn;

       public function __construct()
       {
            try {
            	  $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->db_name);
            } catch (Exception $e) {
            	echo $e->getMessage();
            }
       }

      public function login($name,$pass)
      {
      
          $sql="select *from login where username = '$name' and password = '$pass'";

          $query = $this->conn->query($sql);
				if ($query==true) {
				   return true;
				}else{
				  return false;
			    }   

      }
      public function insertdata($name,$pass,$type,$user_type,$image)
      {

            $fname=$_FILES["image"]["name"];
    	$f_tmp=$_FILES["image"]["tmp_name"];
    
         $folder="uploads/".$fname;
 
      
         move_uploaded_file($f_tmp,$folder); 
         $query = "INSERT INTO data(id,name, pass, type, user_type,image)
					VALUES('$name','$pass','$type','$user_type','$folder')";
				$sql = $this->conn->query($query);
				if ($sql==true) {
				   return true;
				}else{
				  return false;
			    }   
          
      }

      public function DisplayData()
{
	$sql="SELECT * FROM data";
	$query=$this->conn->query($sql);
	$data=array();
	if($query->num_rows>0)
	{
     while($row=$query->fetch_assoc())
     {
         $data[]=$row;
     }
     return $data;

	}else
	{

	}

}

}
?>