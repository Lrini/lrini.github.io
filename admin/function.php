<?php
	$kon = mysqli_connect("localhost","root","","cafe");
	function query($query){
		global $kon;
		$result = mysqli_query($kon,$query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	function gambar (){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tipe = $_FILES['gambar']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}
		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($eks);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, 'menu/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;
	}
//function untuk insert

	function tambahmenu($data){
		global $kon;
		$menu = $_POST['menu'];
		$harga = $_POST['harga'];
		$foto = gambar();
		if (!$foto) {
			return false;
		}


		 $sql = mysqli_query($kon,"insert into menu (menu,harga,gambar) values ('$menu','$harga','$foto')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahcatering($data){
		global $kon;
		$nama = $_POST['nama_paket'];
		$isi =$_POST['isi'];
		$harga = $_POST['harga'];

		 $sql = mysqli_query($kon,"insert into catering (nama_paket,isi,harga) values ('$nama','$isi','$harga')");
		 return mysqli_affected_rows($kon);
	
	}

//function untuk edit
	function editmenu($data){
		global $kon;
		$id_menu =$_POST['id_menu'];
		$menu = $_POST['menu'];
		$harga = $_POST['harga'];
		$foto = gambar();
		if (!$foto) {
			return false;
		}
		 $sql = mysqli_query($kon,"update menu set menu='$menu',harga='$harga', gambar='$foto' where id_menu='$id_menu'");
		 return mysqli_affected_rows($kon);
	
	}

	function editcatering($data){
		global $kon;
		$id =$_POST['id_catering'];
		$nama = $_POST['nama_paket'];
		$isi = $_POST['isi'];
		$harga = $_POST['harga'];

		 $sql = mysqli_query($kon,"update catering set nama_paket='$nama',isi='$isi',harga='$harga' where id_catering='$id'");
		
		 return mysqli_affected_rows($kon);
	
	}

	
//function untuk hapus
	function hapusmenu($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM menu where id_menu=$id");
		return mysqli_affected_rows($kon);
	}

	function hapuscatering($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM catering where id_catering=$id");
		return mysqli_affected_rows($kon);
	}

	function hapuspinjam($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM pinjaman where id_pinjam=$id");
		return mysqli_affected_rows($kon);
	}

	function hapusgaleri($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM galeri where id=$id");
		return mysqli_affected_rows($kon);
	}

	function hapusakun($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM login where id=$id");
		return mysqli_affected_rows($kon);
	}

?>