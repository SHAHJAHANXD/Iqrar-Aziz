<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">  -->
<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<link rel="icon" href="{{url('frontend/img/logo_2.png')}}">
<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{url('assets/img/favicon.png')}}" rel="icon">
<!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<!-- <link href="{{url('frontend/css/responsive-style.css')}}" rel="stylesheet" type="text/css"/> -->
 <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">


    <title>View Anomaly </title>
    <style>

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
    <script type="text/javascript">

    document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      });
  }
}

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


    <header id="header" class="fixed-top d-flex align-items-center" style="background: linear-gradient(to right, rgba(39, 70, 133, 0.8) 0%, rgba(61, 179, 197, 0.8) 100%) !important;">
    <div class="container d-flex justify-content-between align-items-center">



   @include('navigation')
    </div>
  </header><!-- End Header -->
<!-- <div id="loader" class="center"></div> -->
<div><img src="{{url('assets/load.gif')}}" class="center" id="loader"/></div>
<div class="section">
<div class="container" >

    <table class="table table-bordered" id="dataTable"  cellspacing="0">
        <thead>
            <tr>
          <th>S.No.</th>
          <th>Source IP</th>
          <th>Source Port</th>
          <th>Destination IP</th>
          <th>Destination Port</th>
          <th>Attack</th>
          <th>Protocol</th>
        </tr>
      </thead>
      <tbody>
      <?php $counter=0; ?>

        @foreach($mlids as $display)

        <tr>
          <td><?php echo ++$counter; ?></td>
          <td>{{$display->sourceip}}</td>
          <td>{{$display->sourceport}}</td>
          <td>{{$display->destinationip}}</td>
          <td>{{$display->destinationport}}</td>
          <td>{{$display->Attack}}</td>
          <td>{{$display->protocol}}</td>
      </tr>

        @endforeach
      </tbody>
    </table>
    </div>
</div>
  <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  "body").style.visibility = "hidden";
                document.querySelector(
                  "#loader").style.visibility = "visible";
            } else {
                document.querySelector(
                  "#loader").style.display = "none";
                document.querySelector(
                  "body").style.visibility = "visible";
            }
        };
    </script>
</body>
   @include('footer')
</html>
