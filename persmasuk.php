<html>
  <head>
    <title>pers.Masuk</title>

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
	
	<script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>
  </head>
  <body class=""> 
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Widiyawati
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li class="divider visible-phone"></li>
                            <li><a href="index.php" onClick="return confirm ('Yakin?')">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
						<a class="brand" span class="first"></span> <span class="second">Finance Company of GKJW Purwosari</span></a>
        </div>
    </div>
    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="admin.php">Home</a></li>
			<li><a href="petugaskeuangan.php">Petugas Keuangan</a></li>
            <li ><a href="persmasuk.php">Uang Masuk</a></li>
            <li ><a href="perskeluar.php">Uang Keluar</a></li>
			<li ><a href="laporan.php">Laporan</a></li>
            
    </div>
    
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">PERSEMBAHAN</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="persmasuk.php">Daftar Persembahan</a> <span class="divider">/</span></li>
        </ul>

<div class="row-fluid">                    
<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
	<input type="reset"  name="reset" id="reset" value="Reset"/>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Daftar </a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form id="tab">
		<label>Kode Masuk</label>
		<name="Kode Pers Pengeluaran">
		<select name="Kode Pers Pengeluaran">
		<option value="00001"/>00001</option>
		<option value="00002"/>00002</option>
		<option value="00003"/>00003</option>
		<option value="00004"/>00004</option>
		<option value="00005"/>00005</option></select>
        <label>Nama Pers. Masuk</label>
        <input type="text" class="input-xlarge">
        <label>Tanggal</label>
		<input type="date" name="Tanggal">
		<label>Jumlah</label>
        <input type="text" class="input-xlarge">
    </form>
      </div>
	</div>    
</div>
</div>
         <footer>
            <hr>
            <p class="pull-right">1115101309 | @mahasiswastikombwi</p>
            <p>&copy; 2018 <a href="http://www.finance.com" target="_blank">finance.com</a></p>
         </footer>            
        </div>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
  </body>
</html>
