<html>
<head>
<title>finance | pemasukan</title>
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
						<li><a href="pemasukan.php" class="selected">Pemasukan</a></li>
                        <li><a href="pengeluaran.php">Pengeluaran</a></li>
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
            <h2>PEMASUKAN</h2>
			</div>
			<table>
						<form method="POST">
                    <input type="hidden" name="post" value="Save" />
						<tr>
							<td>Kode Masuk</td>
							<td> : </td>
							<td><name="Kode Pers Pengeluaran">
								<select name="Kode Pers Pengeluaran">
						<option value="00001"/>00001</option>
						<option value="00002"/>00002</option>
						<option value="00003"/>00003</option>
						<option value="00004"/>00004</option>
						<option value="00005"/>00005</option></select></td></tr>
						<tr><td>Nama Persembahan</td> <td>:</td> <td><input type="text" name="Nama" placeholder=" input nama pers."></td></tr>
						<tr><td>Sumber Persembahan</td> <td>:</td> <td><input type="text" name="Sumber" placeholder="input sumber"></td></tr>

						<tr><td>Tanggal</td>
						<td> : </td>
						<td><input type="date" name="Tanggal"></td></tr>
						<tr><td>Jumlah</td> <td>:</td> <td><input type="integer" name="Jumlah" placeholder="0"></td></tr>
		</table>
		                <input type="submit" class="submit_btn float_l" name="submit" onclick="alert('berhasil diproses. Terimakasih')" id="submit" value="Save"/>
						<input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/>
					</table>
				</div>
				<table class="tabel2" border="2">
			<form method="POST">
            <div class="post_header">
			<h2>Data Pemasukan</h2>
			</div>	
             <center>
<tr for="kode">
<td>Kode Masuk</td>
<td>&nbsp;&nbsp;<input type="text" name="kode" maxlength="30" size="40"></td>
</tr>

<tr for="nama">
<td>Nama Persembahan</td>
<td>&nbsp;&nbsp;<input type="text" name="nama" maxlength="30" size="40"></td>
</tr>

<tr for="id">
<td>Sumber Persembahan</td>
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
				<div class="h30"></div>
                  <div class="cleaner"></div>
                </div>
			</div>
		</div> <!-- end of content -->
        
        <div id="templatemo_sidebar">
        	
            <div class="sb_box">
            	<h3>Jenis Pemasukan</h3>
                <ul class="tmo_list">
                	<li><a href="#">Persembahan Minggu</a></li>
                    <li><a href="#">Persembahan Patuen Brayat</a></li>
                    <li><a href="#">Persembahan KPAR</a></li>
                    <li><a href="#">Persembahan KPPM</a></li>
                    <li><a href="#">Persembahan KPAY</a></li>
					<li><a href="#">Persembahan KPPW</a></li>
					<li><a href="#">Persembahan Ibadah Padang</a></li>
					<li><a href="#">Persembahan Mobil Jemaat</a></li>
					<li><a href="#">Persembahan Manten</a></li>
					<li><a href="#">Persembahan Panglipur</a></li>
					<li><a href="#">Persembahan Persepuluhan</a></li>
				</ul>
            </div>
        
        </div> <!-- end of sidebar -->
        
<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
       <a href="#">1115101309</a> | @mahasiswastikombwi
		</div>
</div> 
</html>