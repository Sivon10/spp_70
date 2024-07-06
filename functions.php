<?php
$conn = mysqli_connect("localhost", "root", "", "spp_70");

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

	$nama_kelas = htmlspecialchars($data["nama_kelas"]);
	$kompetensi_keahlian = htmlspecialchars($data["kompetensi_keahlian"]);

	$query = "INSERT INTO tb_kelas VALUES('', '$nama_kelas', '$kompetensi_keahlian')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_kelas WHERE id_kelas = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data)
{
	global $conn;

	$id = $data["id_kelas"];
	$nama_kelas = htmlspecialchars($data["nama_kelas"]);
	$kompetensi_keahlian = htmlspecialchars($data["kompetensi_keahlian"]);


	$query = "UPDATE tb_kelas SET 
						nama_kelas = '$nama_kelas',
						kompetensi_keahlian = '$kompetensi_keahlian'
						
						WHERE id_kelas = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambah_petugas($data)
{
	global $conn;

	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$nama_petugas = htmlspecialchars($data["nama_petugas"]);
	$level = htmlspecialchars($data["level"]);

	$query = "INSERT INTO tb_petugas VALUES('', '$username', '$password', '$nama_petugas', '$level')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_petugas($data)
{
	global $conn;

	$id = $data["id_petugas"];
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$nama_petugas = htmlspecialchars($data["nama_petugas"]);
	$level = htmlspecialchars($data["level"]);


	$query = "UPDATE tb_petugas SET 
						username = '$username',
						password = '$password',
						nama_petugas = '$nama_petugas',
						level    = '$level'
						
						WHERE id_petugas = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_petugas($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_petugas WHERE id_petugas = $id");
	return mysqli_affected_rows($conn);
}

function tambah_siswa($data)
{
	global $conn;

	$nisn = htmlspecialchars($data["nisn"]);
	$nis  = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$id_spp = htmlspecialchars($data["id_spp"]);
	$query = "INSERT INTO tb_siswa VALUES('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function ubah_siswa($data)
{
	global $conn;

	$id = $data["nisn"];
	$nis  = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$id_spp = htmlspecialchars($data["id_spp"]);


	$query = "UPDATE tb_siswa SET 
						nis = '$nis',
						nama = '$nama',
						id_kelas = '$id_kelas',
						alamat   = '$alamat',
						no_telp  = '$no_telp',
						id_spp   = '$id_spp'
						
						WHERE nisn = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_siswa($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_siswa WHERE nisn = $id");
	return mysqli_affected_rows($conn);
}

function tambah_spp($data)
{
	global $conn;

	$tahun = htmlspecialchars($data["tahun"]);
	$nominal = htmlspecialchars($data["nominal"]);

	$query = "INSERT INTO tb_spp VALUES('', '$tahun', '$nominal')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_spp($data)
{
	global $conn;

	$id = $data["id_spp"];
	$tahun  = htmlspecialchars($data["tahun"]);
	$nominal = htmlspecialchars($data["nominal"]);

	$query = "UPDATE tb_spp SET 
						tahun = '$tahun',
						nominal = '$nominal'
						
						WHERE id_spp = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_spp($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_spp WHERE id_spp = $id");
	return mysqli_affected_rows($conn);
}

function pembayaran($data)
{
	global $conn;

	$nisn = htmlspecialchars($data["nisn"]);
	$tgl_bayar = htmlspecialchars($data["tgl_bayar"]);
	$bulan_dibayar = htmlspecialchars($data["bulan_dibayar"]);
	$tahun_dibayar = htmlspecialchars($data["tahun_dibayar"]);
	$jumlah_bayar = htmlspecialchars($data["jumlah_bayar"]);
	$id_spp = htmlspecialchars($data["id_spp"]);

	$query = "INSERT INTO tb_pembayaran VALUES('','', '$nisn', '$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$jumlah_bayar','$id_spp')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_pembayaran($data)
{
	global $conn;

	$id = $data["id_pembayaran"];
	$nisn = htmlspecialchars($data["nisn"]);
	$tgl_bayar = htmlspecialchars($data["tgl_bayar"]);
	$bulan_dibayar = htmlspecialchars($data["bulan_dibayar"]);
	$tahun_dibayar = htmlspecialchars($data["tahun_dibayar"]);
	$jumlah_bayar = htmlspecialchars($data["jumlah_bayar"]);
	$id_spp = htmlspecialchars($data["id_spp"]);

	$query = "UPDATE tb_pembayaran SET 
						nisn = '$nisn',
						tgl_bayar = '$tgl_bayar',
						bulan_dibayar = '$bulan_dibayar',
						tahun_dibayar = '$tahun_dibayar',
						jumlah_bayar = '$jumlah_bayar',
						id_spp = '$id_spp'
						
						WHERE id_pembayaran = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus_pembayaran($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_pembayaran WHERE id_pembayaran = $id");
	return mysqli_affected_rows($conn);
}

function cariSPP($kataKunci)
{
	$query = "SELECT * FROM tb_spp WHERE
		tahun LIKE '%$kataKunci%' OR
		nominal LIKE '%$kataKunci%'";

	return query($query);
}

function cariPetugas($kataKunci)
{
	$query = "SELECT * FROM tb_petugas WHERE
		username LIKE '%$kataKunci%' OR
		password LIKE '%$kataKunci%' OR
		nama_petugas LIKE '%$kataKunci%' OR
		level LIKE '%$kataKunci%'";

	return query($query);
}

function cariKelas($kataKunci)
{
	$query = "SELECT * FROM tb_kelas WHERE
		nama_kelas LIKE '%$kataKunci%' OR
		kompetensi_keahlian LIKE '%$kataKunci%'";

	return query($query);
}

function cariSiswa($kataKunci)
{
	$query = "SELECT * FROM tb_siswa WHERE
		id_kelas LIKE '%$kataKunci%' OR
		nisn LIKE '%$kataKunci%' OR
		nis LIKE '%$kataKunci%' OR
		nama LIKE '%$kataKunci%' OR
		no_telp LIKE '%$kataKunci%' OR
		id_spp LIKE '%$kataKunci%'";

	return query($query);
}

// function cariPembayaran($kataKunci)
// {
// 	$query = "SELECT * FROM tb_pembayaran WHERE
// 		nisn LIKE '%$kataKunci%' OR
// 		tgl_bayar LIKE '%$kataKunci%' OR
// 		bulan_dibayar LIKE '%$kataKunci%' OR
// 		tahun_dibayar LIKE '%$kataKunci%' OR
// 		jumlah_bayar LIKE '%$kataKunci%'";

// 	return query($query);
// }
