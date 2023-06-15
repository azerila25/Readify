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

	function borrows($data){
		global $conn;
		$nama = strtolower(stripslashes($data["nama"]));
		$judul_buku = strtolower(stripslashes($data["judul_buku"]));
		$alamat = strtolower(stripslashes($data["alamat"]));
		$email = stripslashes($data["email"]);
		$telepon = strtolower(stripslashes($data["telepon"]));
		$tanggal_peminjaman = stripslashes($data["tanggal_peminjaman"]);
		$tanggal_pengembalian = stripslashes($data["tanggal_pengembalian"]);
		
		mysqli_query($conn, "INSERT INTO user_borrow VALUES('','$nama','$judul_buku','$email','$alamat','$telepon','$tanggal_peminjaman','$tanggal_pengembalian')");

		return mysqli_affected_rows($conn);
	}

	if(isset($_POST["login"])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user_register WHERE email = '$email'");

        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                header("location: beginpage.php");
                exit;
            }

        }
		$error = true;        

    }
 ?>
 <?php if(isset($error)) : ?>
    <script>
          alert('user tidak ditemukan, coba lagi!');
    </script>
<?php endif; ?>