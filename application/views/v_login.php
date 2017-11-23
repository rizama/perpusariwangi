<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login Perpustakaan Desa Sariwangi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>" </script>
	  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>" </script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/cover.css"); ?>" />

  </head>

  <body>
    <nav class="navbar navbar-inverse" style="background-color: #354052">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color: #fff">Perpustakaan Desa Sariwangi</a>
        </div>

        <form action="<?php echo base_url('index.php/c_login/proses_login'); ?>" class="navbar-form navbar-right" method="post">
          <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="form-control" required onkeypress="return hn(event)">
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-link" style="color: #fff"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        </form>

      </div>
    </nav>

    <div class="cover-container">
      <div class="site-wrapper-inner">

        <div class="inner cover">
          <h1 class="cover-heading">Perpustakaan Desa Sariwangi</h1>
          <p class="lead">Merupakan perpustakaan yang menyediakan ruangan yang nyaman. Memiliki lebih dari 1500 buku dari disiplin ilmu.</p>
          <!-- <p class="lead">
            <a href="#" class="btn btn-lg btn-default">Pelajari Selanjutnya</a>
          </p> -->
        </div>

        <div class="mastfoot">
          <div class="inner">
            <a style="padding-top:15px" href="#">Desa Sariwangi 2017</a>.<br>
            <!-- <label style="color:#fff;padding-top:-115px">Credit to CodeIgniter - Bootstrap - Block Template</label> -->
          </div>
        </div>

      </div>
    </div>

  </body>
</html>

<script>
function h(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
        if ( (charCode<65 && charCode>32) || (charCode>90 && charCode<97) || (charCode>122 && charCode<127)){
            return false;
        }
        return true;
	}
function n(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode>57 || charCode==45 || charCode==32 || (charCode>32 && charCode<=47)){
            return false;
        }
        return true;
	}

function hn(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode>=0 && charCode<=47) || (charCode>=58 && charCode<=64) || (charCode>=91 && charCode<=96) || (charCode>=123)){
        return false;
    }
    return true;
}
</script>
