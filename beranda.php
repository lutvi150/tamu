<?php session_start();
if (ISSET($_SESSION['useradmin']))
{
$iduser = $_SESSION['iduser'];
$username = $_SESSION['useradmin'];

$hakakses=$_SESSION['hakakses'];	
$nama=$_SESSION['nama'];

include "koneksi.php";
$sqluser=mysqli_query($koneksi,"SELECT * FROM user where kode_user='$iduser'");
$datauser=mysqli_fetch_array($sqluser);
if($datauser['foto']=="")
{
	$foto="netral.PNG";
	
}
else
{
	$foto=$datauser['foto'];
}
}
else
header("location:index.php");
?>
<?php
include "koneksi.php";

$sqlweb=mysqli_query($koneksi,"select * from profile");
$datacompany=mysqli_fetch_array($sqlweb);
$tahun=date("Y");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $datacompany['nama_company'] ?></title>
  <link rel="shortcut icon" href="logo/<?php echo $datacompany['logo'] ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Include SmartWizard CSS -->
  <link href="css/smart_wizard.css" rel="stylesheet" type="text/css" />

  <!-- Optional SmartWizard theme -->
  <link href="css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    #camera_wrapper,
    #show_saved_img {
      float: left;
      width: 340px;
    }
  </style>
</head>

<body class="hold-transition skin-blue  sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="beranda.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>B</b>T</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="profile/<?php echo $datacompany['logo'] ?>" width="40" height="40"></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->

            <!-- user Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="foto/<?php echo $foto ?>" class="user-image" alt="user Image">
                <span class="hidden-xs"><?php echo $datauser['nama'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- user image -->
                <li class="user-header">
                  <img src="foto/<?php echo $foto ?>" class="img-circle" alt="user Image">

                  <p>
                    <?php echo $datauser['nama'] ?>

                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">

                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="?page=profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign Out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="logout.php"><i class="fa fa-sign-out">Log Out</i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php
  include "menu.php";
  ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php
  include "isi.php";
  ?>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Bagian PBJ Setda Kab. Tanah Datar</a>.</strong> All
      rights
      reserved.
    </footer>


    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>

  <div class="modal fade" id="myModalarsip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Detail Arsip</h4>
        </div>
        <div class="modal-bodyarsip">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <!-- ./wrapper -->




  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- ChartJS -->
  <script src="bower_components/chart.js/Chart.js"></script>
  <!-- Select2 -->
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/input-mask/jquery.inputmask.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript" src="js/vpb_uploader.js"></script>




  <script type="text/javascript" src="js/webcam.js"></script>
  <script type="text/javascript" src="js/webcam.min.js"></script>
  <script>
    $(document).ready(function () {
      let url = window.location.href
      if (url == "http://localhost/tamu/beranda.php?page=bukutamu") {
        camera();
      };
    });

    function camera() {
      // console.log('hi');
      Webcam.attach('#camera');
    }

    $(function () {
      //give the php file path
      webcam.set_api_url('saveimage.php');
      webcam.set_swf_url('js/webcam.swf'); //flash file (SWF) file path
      webcam.set_quality(100); // Image quality (1 - 100)
      webcam.set_shutter_sound(true); // play shutter click sound
      // webcam.attach("camera");
      var camera = $('#camera');
      // camera.html(webcam.get_html(300, 260)); //generate and put the flash embed code on page
      $('#capture_btn').click(function () {
        webcam.set_api_url('saveimage.php');
        webcam.set_swf_url('js/webcam.swf'); //flash file (SWF) file path
        webcam.set_quality(100); // Image quality (1 - 100)
        webcam.set_shutter_sound(true); // play shutter click sound
        //take snap
        // webcam.snap();
        // $('#show_saved_img').html('<h3>Please Wait...</h3>');
        Webcam.snap(function (data_uri) {
          Webcam.on('uploadProgress', function (progress) {
            // Upload in progress
            // 'progress' will be between 0.0 and 1.0
          });

          Webcam.on('uploadComplete', function (code, text) {
            // Upload complete!
            // 'code' will be the HTTP response code from the server, e.g. 200
            // 'text' will be the raw response content
          });

          Webcam.upload(data_uri, 'myscript.php');
          document.getElementById('show_saved_img').innerHTML = '<img src="' + data_uri + '"/>';

        });

        // webcam.reset();
      });


      //after taking snap call show image
      webcam.set_hook('onComplete', function (img) {
        $('#show_saved_img').html('<img src="' + img + '">');
        //reset camera for the next shot
        webcam.reset();
      });

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      // Call the main function
      new vpb_multiple_file_uploader
        ({
          vpb_form_id: "form_id", // Form ID
          autoSubmit: true,
          vpb_server_url: "upload.php"
        });
    });
  </script>

  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({

        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false,
        "scrollX": true,

      })
    })
  </script>
  <!-- Page script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        format: 'MM/DD/YYYY h:mm A'
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
              'month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true,
        dateFormat: 'yyyy-mm-dd'
      })

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      })

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>
  <script>
    function DataDetailBox() {
      $.ajax({
        type: "POST",
        url: "detailbox.php",

        success: function (data) {
          $("#infobox").html(data);
          $("#infobox").dialog({
            height: 500,
            width: 500,
            modal: true,
            buttons: {
              Close: function () {
                $(this).dialog('close');
              }
            }
          });
        }
      });
    }
  </script>


  <script>
    $(function () {
      $(document).on('click', '.edit-record', function (e) {
        e.preventDefault();
        $("#myModaldoc").modal('show');
        $.post('viewdok.php', {
            id: $(this).attr('data-id')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record', function (e) {
        e.preventDefault();
        $("#myModalqr").modal('show');
        $.post('viewqr.php', {
            id: $(this).attr('data-id')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-tlog', function (e) {
        e.preventDefault();
        $("#myModaltlog").modal('show');
        $.post('tambahlog.php', {
            id: $(this).attr('data-idlog')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-elog', function (e) {
        e.preventDefault();
        $("#myModalelog").modal('show');
        $.post('lihatlog.php', {
            id: $(this).attr('data-idlog')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>


  <script>
    $(function () {
      $(document).on('click', '.edit-record-ttenant', function (e) {
        e.preventDefault();
        $("#myModalttenant").modal('show');
        $.post('tambahtenant.php', {
            id: $(this).attr('data-idtenant')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-etenant', function (e) {
        e.preventDefault();
        $("#myModaletenant").modal('show');
        $.post('edittenant.php', {
            id: $(this).attr('data-idtenant')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-ttamu', function (e) {
        e.preventDefault();
        $("#myModalttamu").modal('show');
        $.post('tambahtamu.php', {
            id: $(this).attr('data-idtamu')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-etamu', function (e) {
        e.preventDefault();
        $("#myModaletamu").modal('show');
        $.post('lihatlogtamu.php', {
            id: $(this).attr('data-idtamu')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-tmutiara', function (e) {
        e.preventDefault();
        $("#myModaltmutiara").modal('show');
        $.post('tambahmutiara.php', {
            id: $(this).attr('data-idmutiara')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-emutiara', function (e) {
        e.preventDefault();
        $("#myModalemutiara").modal('show');
        $.post('editmutiara.php', {
            id: $(this).attr('data-idmutiara')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-trak', function (e) {
        e.preventDefault();
        $("#myModaltrak").modal('show');
        $.post('tambahrak.php', {
            id: $(this).attr('data-idrak')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-efoto', function (e) {
        e.preventDefault();
        $("#myModalefoto").modal('show');
        $.post('editfoto.php', {
            id: $(this).attr('data-idfoto')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-tfoto', function (e) {
        e.preventDefault();
        $("#myModaltfoto").modal('show');
        $.post('tambahfoto.php', {
            id: $(this).attr('data-idfoto')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-elogsurat', function (e) {
        e.preventDefault();
        $("#myModalelogsurat").modal('show');
        $.post('ambilsurat.php', {
            id: $(this).attr('data-idlogsurat')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-tlogsurat', function (e) {
        e.preventDefault();
        $("#myModaltlogsurat").modal('show');
        $.post('tambahlogsurat.php', {
            id: $(this).attr('data-idlogsurat')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-dlogtamu', function (e) {
        e.preventDefault();
        $("#myModaldlogtamu").modal('show');
        $.post('daftarlogtamu.php', {
            id: $(this).attr('data-idlogtamu')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>


  <script>
    $(function () {
      $(document).on('click', '.edit-record-epatner', function (e) {
        e.preventDefault();
        $("#myModalepatner").modal('show');
        $.post('editpatner.php', {
            id: $(this).attr('data-idpatner')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-tpatner', function (e) {
        e.preventDefault();
        $("#myModaltpatner").modal('show');
        $.post('tambahpatner.php', {
            id: $(this).attr('data-idpatner')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>


  <script>
    $(function () {
      $(document).on('click', '.edit-record-ekategori', function (e) {
        e.preventDefault();
        $("#myModalekategori").modal('show');
        $.post('editkategori.php', {
            id: $(this).attr('data-idkategori')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-tkategori', function (e) {
        e.preventDefault();
        $("#myModaltkategori").modal('show');
        $.post('tambahkategori.php', {
            id: $(this).attr('data-idkategori')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>


  <script>
    $(function () {
      $(document).on('click', '.edit-record-einfo', function (e) {
        e.preventDefault();
        $("#myModaleinfo").modal('show');
        $.post('editinfo.php', {
            id: $(this).attr('data-idinfo')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>

  <script>
    $(function () {
      $(document).on('click', '.edit-record-tinfo', function (e) {
        e.preventDefault();
        $("#myModaltinfo").modal('show');
        $.post('tambahinfo.php', {
            id: $(this).attr('data-idinfo')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>


  <script>
    $(function () {
      $(document).on('click', '.edit-record-erak', function (e) {
        e.preventDefault();
        $("#myModalerak").modal('show');
        $.post('editrak.php', {
            id: $(this).attr('data-idrak')
          },
          function (html) {
            $(".modal-body").html(html);
          }
        );
      });
    });
  </script>


  <script>
    $(function () {
      $(document).on('click', '.edit-record-arsip', function (e) {
        e.preventDefault();
        $("#myModalarsip").modal('show');
        $.post('viewarsip.php', {
            id: $(this).attr('data-idarsip')
          },
          function (html) {
            $(".modal-bodyarsip").html(html);
          }
        );
      });
    });
  </script>
  <script>
    function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      } else {
        for (var i = 0; i < checkboxes.length; i++) {
          console.log(i)
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = false;
          }
        }
      }
    }
  </script>
  <script src="bower_components/ckeditor/ckeditor.js"></script>
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor2')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
  <script src="js/jquery.smartWizard.js"></script>


  <script type="text/javascript">
    $(document).ready(function () {

      // Toolbar extra buttons
      var btnFinish = $('<button></button>').text('Finish')
        .attr('id', 'btn-finish')
        .addClass('btn btn-info')
        .on('click', function () {

        });
      var btnCancel = $('<button></button>').text('Cancel')
        .addClass('btn btn-danger')
        .on('click', function () {
          $('#smartwizard').smartWizard("reset");
        });



      // Smart Wizard
      $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        transitionEffect: 'fade',
        toolbarSettings: {
          toolbarPosition: 'bottom',
          toolbarExtraButtons: [btnFinish, btnCancel]
        },
        anchorSettings: {
          markDoneStep: true, // add done css
          markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
          removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
          enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        }
      });

      $("#btn-finish").addClass('disabled');
      $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        //alert("You are on step "+stepNumber+" now");
        if (stepPosition == 'first') {
          $("#prev-btn").addClass('disabled');
          $("#btn-finish").addClass('disabled');
        } else if (stepPosition == 'final') {
          $("#next-btn").addClass('disabled');
          $("#btn-finish").removeClass('disabled');
        } else {
          $("#prev-btn").removeClass('disabled');
          $("#next-btn").removeClass('disabled');
          $("#btn-finish").addClass('disabled');
        }
      });

    });
  </script>



</body>

</html>