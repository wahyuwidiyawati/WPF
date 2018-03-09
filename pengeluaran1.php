<?php
$Kode_Keluar = $_POST["kd_keluar"];
$Nama = $_POST["nama"];
$Pengguna = $_POST["Pengguna"];
$jumlah = $_POST["jumlah"];

$data=array("Kode_Keluar"=>"$KodeKeluar","Nama"=>"$NamaPengeluaran","Pengguna"=>"$Pengguna","jumlah"=>"$jumlah");
echo "<table border='1'>";
foreach($data as $a=> $b )
{
 echo "<tr><td>$a</td><td>$b</td></tr>";
}
echo "</table>";

?>