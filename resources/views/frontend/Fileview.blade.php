<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">  -->
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="icon" href="{{url('public/frontend/img/logo_2.png')}}">
    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="{{url('public/assets/img/favicon.png')}}" rel="icon">
    <!-- Page level plugin JavaScript-->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<!-- <link href="{{url('public/frontend/css/responsive-style.css')}}" rel="stylesheet" type="text/css"/> -->
    <!-- Vendor CSS Files -->
    <link href="{{url('public/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('public/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('public/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{url('public/assets/css/style.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
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

        .table{
            margin-top: 30px;
        }
        table th {
            text-align: center;
        }

        table td {
            text-align: left;
        }

        table tr:nth-child(even) {
            background-color: #e4e3e3 !important;
        }

        a {
            color: red;
        }

        a:hover {
            color: #7386D5;
        }

        th {
            background: #2d71a1 !important;
            color: #fff;
        }
        .row{

            margin-bottom:30px;
        }
        #tags{
            font-size: 14px;
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
<header id="header" class="fixed-top d-flex align-items-center"
        style="background: linear-gradient(to right, rgba(39, 70, 133, 0.8) 0%, rgba(61, 179, 197, 0.8) 100%) !important;">
    <div class="container d-flex justify-content-between align-items-center">


        @include('navigation')


    </div>
</header><!-- End Header -->
    <div id="content">
        <nav class="navbar-expand-1g ">
            <div class="container-fluid">
{{--                <button type="button" id="sidebarCollapse" class="btn btn-info">--}}
{{--                    <i class="fas fa-align-left"></i>--}}
{{--                </button>--}}

            </div>


        </nav>

        <br> <br>

        <div class="section">

            <div class="container">
                <div class="row">
{{--                    <div class="col-2 col-sm-2">--}}

{{--                        <form method="POST" action="{{url('anomaly')}}" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <input type="submit" name="anomaly" value="Anomaly" class="btn btn-primary">--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="col-2 col-sm-2">--}}
{{--                        <form method="POST" action="{{url('signature')}}" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <input type="submit" name="signature" value="Signature" class="btn btn-primary">--}}
{{--                        </form>--}}
{{--                    </div>--}}

                </div>
                <h3 class="text-center " style="color: #BF0808 !important">Recent Submissions - PCAP Reports </h3>

                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Files</th>
                        <th>Created At</th>
                        <th>PCAPs</th>
                        <th>Threat Found</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php $counter = 0; ?>

                    @foreach($files as $display)
                        <tr>

                            <td><?php echo ++$counter; ?></td>
                            <td width="100px"><a href="{{url('statistics/'.$display->u_id)}}"
                                                 target="_blank">{{$display->u_id}}</a></td>
                            <td width="300px">{{$display->created_at}}</td>
                        <!-- <td><a href="{{url('/storage/app/public/upload')}}/{{$display->name}}">{{$display->name}}</a></td> -->
                            <td>{{$display->name}}</td>
                            @if($display->threat == 'found')
                                <td><img src="url('public/assets/img/tick.png'" style="height: 10px;"></td>
                            @else
                                <td><img src="url('public/assets/img/cross.png'" style="height: 10px;"></td>
                        @endif
                        <!-- <td>{{$display->threat}}</td> -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

{{--<script>--}}
{{--    $(document).ready(function ($)--}}
{{--    {--}}
{{--        $("#sidebarCollapse").on(`click`,function (e){--}}
{{--            $("#sidebar").toggleClass('active');--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

</body>
@include('footer')
</html>
