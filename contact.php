<html>
<head>
<title>GKJW Purwosari | Contact</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
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
                        <li><a href="pengeluaran.php">Pengeluaran</a></li>
                  	</ul>
                </li>
              	<li><a href="contact.php" class="selected">Contact</a></li>
				<li><a href="index.php">Login Admin</a></li>

            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
        
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	<h2>Contact Us</h2>
        <div class="col_w630 float_l">
        	
             <div id="contact_form">
        
                <h5>if you need our service, please send a message.</h5>
                
                <form method="post" name="contact">
                    <input type="hidden" name="post" value="Send" />
                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="input_field" />
                    <div class="cleaner h10"></div>
                    
                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email input_field" />
                    <div class="cleaner h10"></div>
                    
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0"></textarea>
                    <div class="cleaner h10"></div>
					
                    <input type="submit" class="submit_btn float_l" name="submit" onclick="alert('Pesan berhasil dikirim. Terimakasih')" id="submit" value="Send"/>
                    <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/>
                </form>
        
            </div> 
        </div>
        
        <div class="col_w300 float_r">
            <div class="col_fw">	
            <h4>Mailing Address</h4>
                <h6> Greja Kristen Jawi Wetan Purwosari</h6>
                Rowo Biru Street<br/>
                Buluagung Village<br/>
                Siliragung Districts<br/>
				Banyuwangi District<br/>
				East Java, 68488<br/>
                Telp: 0852-2931-8893<br/>
            <br />
            <div class="col_fw_last">
                <h4>Our Location</h4>
                <div id="map"><a class="pirobox" href="images/map_big.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="images/map_thumb.jpg" alt="Image" /></a></div>                
            </div>
        </div>
	    <div class="cleaner"></div>
    </div> <!-- end of main -->
</div>

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
       <a href="#">1115101309</a> | @mahasiswastikombwi
		</div>
</div> 
</html>