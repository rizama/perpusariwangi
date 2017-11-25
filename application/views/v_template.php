<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan Desa Sariwangi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/a.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/form-elements.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/dataTables.responsive.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/dataTables.bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/select2.css"); ?>" />
    <link rel="icon" href="<?php echo base_url("assets/images/kbb.png") ?>" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/line-awesome.css"); ?>">


    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.dataTables.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/dataTables.bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/select2.js"); ?>"></script>


    <!-- Custom styles for this template -->


    <script>

    $(document).ready(function() {
      $('#dataTables-example').DataTable({
              responsive: true
      });

      $('[data-toggle="tooltip"]').tooltip();


    });

    </script>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.css"); ?>">
    <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>
    <script>
    $(function()
    {
      $( "#datepicker" ).datepicker({
        changeMonth:true,
        changeYear:true,
        yearRange:"-100:+0",
        dateFormat:"yy-mm-dd"
      });
    });
    </script>

    <script>
    $(function () {
      $("#kode_anggota").select2({
        placeholder: "Pilih Anggota"
      });

      $("#kode_buku").select2({
        placeholder: "Pilih Buku"
      });

      $("#kode_dvd").select2({
        placeholder: "Pilih DVD"
      });
    });
  </script>

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

  </head>

  <body>

    <?php echo $_header;?>
    <?php echo $_content;?>

  </body>
</html>
