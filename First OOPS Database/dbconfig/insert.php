<?php
	include('dbconfig.php');
	class InsertData
	{
		private $pdo=null;
		public function insert()
		{
			if (isset($_POST['submit'])) {
				$name=$_POST['n1'];
				$email=$_POST['n2'];
				$Phone=$_POST['n3'];
				$sql="INSERT INTO register (name,email,Phone) VALUES ('$name','$email','$Phone')";
				$q = $this->pdo->prepare($sql);
				 return $this->pdo->exec($sql);
			}
		}
	}
	$Obj =new InsertData();
	$Obj->insert();
?>