<html>
  <head>
    <title>pers.Keluar</title>

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

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
		<ul>
            
    </div>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Persembahan Keluar</h1>
        </div>
        
                <ul class="breadcrumb">
            <li class="active">Daftar Persembahan  Keluar</li>
        </ul>

<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-plus"></i> Tambah Pengeluaran</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>Kode Keluar</th>
          <th>Nama Pengeluaran</th>
		  <th>Tanggal</th>
		  <th>Jumlah</th>
          <th style="width: 20px;"></th>
        </tr>
    </table>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">konfirmasi</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>hapus daftar?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">hapus</button>
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
