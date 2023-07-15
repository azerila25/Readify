<?php 
	$conn = mysqli_connect("localhost","root","","readify");

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
					alert('the password is incorrect');
				 </script>";
			return false;
		}
		$password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO user_register VALUES('','$first_name','$surname','$email','$password')");

		return mysqli_affected_rows($conn);
	}

	function borrows($data){
		global $conn;
		$nama = strtolower(stripslashes($data["nama"]));
		$judul_buku = strtolower(stripslashes($data["judul_buku"]));
		$alamat = strtolower(stripslashes($data["alamat"]));
		$email = stripslashes($data["email"]);
		$telepon = strtolower(stripslashes($data["telepon"]));
		$tanggal_peminjaman = stripslashes($data["tanggal_peminjaman"]);

		mysqli_query($conn, "INSERT INTO user_borrow VALUES('','$nama','$judul_buku','$email','$alamat','$telepon','$tanggal_peminjaman')");

		return mysqli_affected_rows($conn);
	}

	if(isset($_POST["login"])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user_register WHERE email = '$email'");

        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
				//session
				$_SESSION["login"] = true;

				//remember me
				if(isset($_POST['remember'])){
					//cookie
					setcookie('id',$row['id'],time() + 60);
					setcookie('key',hash('sha256',$row['username']),time() + 60);
				}

                header("Location: beginpage.php");
                exit;
            }

        }
		$error = true;        

    }
 ?>

 <?php if(isset($error)) : ?>
    <script>
          alert('user unknown, try again!');
    </script>
<?php endif; ?>