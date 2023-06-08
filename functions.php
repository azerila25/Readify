<?php 
	$conn = mysqli_connect("localhost","root","","pomodify");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}

	function registrasi($data){
		global $conn;
		$first_name = strtolower(stripslashes($data["first_name"]));
		$surname = strtolower(stripslashes($data["surname"]));
		$email = stripslashes($data["email"]);
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$password2 = mysqli_real_escape_string($conn, $data["password2"]);

		if ($password !== $password2){
			echo "<script>
					alert('konfirmasi password tidak sesuai');
				 </script>";
			return false;
		}
		$password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO user_register VALUES('','$first_name','$surname','$email','$password')");

		return mysqli_affected_rows($conn);
	}

	if(isset($_POST["login"])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user_register WHERE email = '$email'");

        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                header("location: beginpage.html");
                exit;
            }

        }
		$error = true;        

    }
 ?>
 <?php if(isset($error)) : ?>
    echo "<script>
          alert('user tidak ditemukan, coba lagi!');
          </script>";
<?php endif; ?>