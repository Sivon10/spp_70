<?php
$conn = mysqli_connect("localhost", "root", "", "portal_berita");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data)
{
	global $conn;

	$nama_user = htmlspecialchars($data["nama_user"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$email = htmlspecialchars($data["email"]);

	$query = "INSERT INTO tb_user VALUES('', '$nama_user', '$username', '$password','$email','')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_user WHERE id_user = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data)
{
	global $conn;

	$id = $data["id_user"];
	$nama_user = htmlspecialchars($data["nama_user"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$email = htmlspecialchars($data["email"]);


	$query = "UPDATE tb_user SET 
						nama_user = '$nama_user',
						username = '$username',
						password = '$password',
						email = '$email'
						WHERE id_user = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
