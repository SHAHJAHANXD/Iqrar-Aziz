<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Netspection</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">




<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<style>
body {
    font-size: 14px;
    font-weight: 400;
    line-height: 28px;
    color: #616161;
}
#drop-area {
    border: 2px dashed #ccc;
    border-radius: 20px;
    /*width: 70%;*/
    min-height: 210px;
    font-family: sans-serif;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    margin-top: 2%;
}
.alert {
    padding: 20px;
    margin-bottom: 15px;
    text-align: left;
    border-radius: 10px;
    box-shadow: 0 0.5rem 1rem 0 rgb(0 0 0 / 10%);
}
.mb-5{
  /*margin-bottom: 0px !important;*/
}
li{
  color: white;

}
   body{
         font-weight: 400;
        color: #616161;
        background-color: #eee;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
        font-size: 13px;
        }

       table th {
        text-align: center;
        }
        table td{
          text-align: left;
        }
        table tr:nth-child(even){
        background-color: #e4e3e3 !important;
        }
        a{
          color: red;
        }
        a:hover, a:focus{
          color: #9c0d0d;
        }
        th {
        background: #2d71a1 !important;
        color: #fff;
        }

        .whole-page-overlay{
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: fixed;
  background: rgba(0,0,0,0.6);
  width: 100%;
  height: 100% !important;
  z-index: 1050;
  display: none;
}
.whole-page-overlay .center-loader{
  top: 50%;
  left: 52%;
  position: absolute;
  color: white;
}
 #loader {
            border: 12px solid #f3f3f3;
            border-radius: 50%;
            border-top: 12px solid #444444;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
</style>


<script>
$(function () {
    $('#dataTable').DataTable({
    //   "pageLength": 3,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
      });
  });

</script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">



      @include('navigation')

    </div>
  </header><!-- End Header -->
  <!-- <div class="whole-page-overlay" id="whole_page_loader">
<img class="center-loader"  style="height:100px;" src="{{url('assets/load.gif')}}"/>
</div> -->
