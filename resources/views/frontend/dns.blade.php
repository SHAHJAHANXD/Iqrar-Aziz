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
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="icon" href="{{url('frontend/img/logo_2.png')}}">
    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="{{url('assets/img/favicon.png')}}" rel="icon">
    <!-- Page level plugin JavaScript-->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
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


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    {{--    <link rel="stylesheet" href="style.css">--}}


    <title>View PCAP File </title>
    <style>
        body {
            margin-top: 80px;
            font-weight: 400;
            color: #616161;
            /*background-color: #eee;*/
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
            font-size: 13px;
        }

        .section{
            margin-top: -90px;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;

        }

        .wrapper {
            display: flex;
            text-decoration: none;
            transition: all 0.3s;

        }

        #sidebar {

            min-width: 250px;
            min-height: 250px;
            background: linear-gradient(to right, rgba(39, 70, 133, 0.8) 0%, rgba(61, 179, 197, 0.8) 100%) !important;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .active {
            margin-left: -250px;

        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: linear-gradient(to left, rgba(39, 70, 133, 0.8) 0%, rgba(61, 179, 197, 0.8) 100%) !important;
            /*background: #6d7fcc;*/

        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;

        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;

        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;

        }

        #sidebar ul li.active >a,
        a[aria-expanded="true"] {
            background: #6d7fcc;
            color: #fff;

        }
        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20%;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }
        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
            margin-top: -65px;
            margin-left: -10px;

        }

        #sidebarCollapse{
            font-size: 1rem;
            margin-top: -15px;
            margin-left: -30px;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;

            }

            #sidebarCollapse span {
                display: none;
            }
        }

        #stats{
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
            color: white;
        }
        a:hover, a:focus{
            color: #0c0c0c;
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

        /*#load{
            width:10%;
            height:10%;
            position:fixed;
            z-index:9999;
            float: center;*/
        /*background-image:url({{url('assets/load.gif')}})*/
        /*background:url({{url('images/php_mysql.jpg')}}) no-repeat center center rgba(0,0,0,0.25)*/

        /*.loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            /*background: url('assets/load.gif') 50% 50% no-repeat rgb(249,249,249);*/
        /*opacity: .8;
    }*/
    </style>
    <script type="text/javascript">
        // $(window).load(function() {
        //     $(".loader").fadeOut("slow");
        // });

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

<!-- <div id="loader" class="center"></div> -->
<div class="wrapper">


    <body id="stats">


    <!-- <div id="load"></div> -->

    <header id="header" class="fixed-top d-flex align-items-center" style="background: linear-gradient(to right, rgba(39, 70, 133, 0.8) 0%, rgba(61, 179, 197, 0.8) 100%) !important;">
        <div class="container d-flex justify-content-between align-items-center">

            @include('navigation')
        </div>
    </header><!-- End Header -->
    <!-- <div id="loader" class="center"></div> -->


    @include('dashboard')

    <!-- <div><img src="{{url('assets/load.gif')}}" class="center" id="loader"/></div> -->
    <div class="section">
        <div class="container" >


        </div>
    </div>
<h1>DNS</h1>
    </body>
    </body>
</div>

@include('footer')
</html>
