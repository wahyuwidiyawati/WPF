<html>
<head>
<title>finance | Pengeluaran</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
        
    <script type="text/javascript">
    </script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/ddsmoothmenu.js">
	</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
</head>
<body>
<div id="templatemo_wrapper">

	<div id="templatemo_header">
	            
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="home.php">Home</a></li>
              	<li><a href="finance.php">Finance</a>
                	<ul>
						<li><a href="pemasukan.php">Pemasukan</a></li>
                        <li><a href="pengeluaran.php" class="selected">Pengeluaran</a></li>
                  	</ul>
                </li>
              	<li><a href="contact.php">Contact</a></li>
				<li><a href="index.php">Login Admin</a></li>

            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
		    
    </div> <!-- end of header -->

    	<div id="templatemo_content">
		
            <div class="h30"></div>
            <div class="cleaner"></div>
            
            <div class="post_box">
            <div class="post_header">
            <h2>PENGELUARAN</h2>
			</div>	
		<table>
					<form method="POST" name="pengeluaran1.php">
                    <input type="hidden" name="POST" value="Save" />
						<tr>
							<td>Kode Keluar</td>
							<td> : </td>
							<td><name="Kode Pers Pengeluaran">
								<select name="Kode Pers Pengeluaran">
						<option value="00001"/>00001</option>
						<option value="00002"/>00002</option>
						<option value="00003"/>00003</option>
						<option value="00004"/>00004</option>
						<option value="00005"/>00005</option></select></td></tr>
						<tr><td>Nama Pengeluaran</td> <td>:</td> <td><input type="text" name="Nama" placeholder=" input nama pengeluaran"></td></tr>
						<tr><td>Pengguna</td>
							<td> : </td>
							<td><name="pengguna pengeluaran">
								<select name="pengguna pengeluaran">
						<option value="00001"/>KPPM</option>
						<option value="00002"/>KPPW</option>
						<option value="00003"/>KPAR</option>
						<option value="00004"/>KPAY</option>
						<option value="00005"/>PH</option></select></td></tr>
						<tr><td>Tanggal</td>
						<td> : </td>
						<td><input type="date" name="Tanggal"></td></tr>
						<tr><td>Jumlah</td> <td>:</td> <td><input type="integer" name="Jumlah" placeholder="0"></td></tr>
		</table>
		                <input type="submit" class="submit_btn float_l" name="submit" onclick="alert('berhasil diproses. Terimakasih')" id="submit" value="Save"/>
						<input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/>

                </div>
				<table class="tabel2" border="2">
			<form method="POST">
            <div class="post_header">
			<h2>Data Pengeluaran</h2>
			</div>	
             <center>
<tr for="kode">
<td>Kode Keluar</td>
<td>&nbsp;&nbsp;<input type="text" name="kode" maxlength="30" size="40" <?php $kd_keluar?>></td>
</tr>

<tr for="nama">
<td>Nama Pengeluaran</td>
<td>&nbsp;&nbsp;<input type="text" name="nama" maxlength="30" size="40"  <?php $nama ?>></td>
</tr>

<tr for="id">
<td>Pengguna</td>
<td>&nbsp;&nbsp;<input type="text" name="id" maxlength="30" size="40" ></td>
</tr>

<tr for="judul">
<td>Tanggal</td>
<td>&nbsp;&nbsp;<input type="date" name="tanggal" maxlength="30" size="40"  ></td>
</tr>

<tr for="pinjam">
<td>Jumlah</td>
<td>&nbsp;&nbsp;<input type="integer" name="jumlah" maxlength="30" size="40" ></td>
</tr>
                </table>
			</center>
            </div>
		</div> <!-- end of content -->
        
        <div id="templatemo_sidebar">
        	
            <div class="sb_box">
            	<h3>Jenis Pengeluaran</h3>
                <ul class="tmo_list">
                	<li><a href="#">Pengeluaran dana fc kidung pujian</a></li>
                    <li><a href="#">Pengeluaran dana listrik Greja</a></li>
                    <li><a href="#">Pengeluaran dana ibadah padang</a></li>
                    <li><a href="#">Pengeluaran dana rapat PH</a></li>
                    <li><a href="#">Pengeluaran dana cinta kasih pendeta</a></li>
					<li><a href="#">Pengeluaran dana wifi Greja</a></li>
                    <li><a href="#">Pengeluaran dana cinta kasih koster</a></li>
                    <li><a href="#">Pengeluaran dana cinta kasih Admin</a></li>
                    <li><a href="#">Pengeluaran dana transport rapat majelis</a></li>
                    <li><a href="#">Pengeluaran dana kunjungan warga sakit</a></li>
					<li><a href="#">Pengeluaran dana kunjungan warga marenca</a></li>
                    <li><a href="#">Pengeluaran dana perbaikan lcd</a></li>
                    <li><a href="#">Pengeluaran dana mix</a></li>
                    <li><a href="#">Pengeluaran dana perbaikan mimbar</a></li>
				</ul>
            </div>
        
        </div> <!-- end of sidebar -->
        
<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
       <a href="#">1115101309</a> | @mahasiswastikombwi
		</div>
</div> 
</html>