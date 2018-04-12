
	<?php
		session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		  
			$_SESSION["ID"] = test_input($_POST["ID"]);
			$_SESSION["Password"] = test_input($_POST["Password"]);
			//$_SESSION["Password"] = sha1($_SESSION["Password"]);
			
			$q1=$_SESSION["ID"];
			$q2=$_SESSION["Password"];
			
			$username = 'root';
			$password = '';
			$db = 'crypto';
				
			$db = new mysqli('localhost', $username, $password, $db) or die("Unable to connect");
			$sql = mysqli_query($db,"SELECT * FROM customer WHERE ID ='$q1' AND Password = '$q2'");
			
			if($row = mysqli_fetch_array($sql)){
				//header("Location: /employeefront.php"); /* Redirect browser */
				echo "
				<script language='javascript'>
					window.location ='index.php';
				</script>
				";
				exit();
			}
			else{
				echo "
				<script language='javascript'>
					window.alert('Username or Password is incorrect!');
					window.location ='login.php';
				</script>
				";
			  
				$_SESSION["Password"] =  $_SESSION["ID"] = "";
				exit();
			}
		}

		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>