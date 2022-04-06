
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
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js">
        
    </script>
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


    <title>Login </title>
    <style>

        body {
            margin-top: 90px;
            font-weight: 400;
            color: #616161;
            /*background-color: #eee;*/
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
            font-size: 13px;
        }

        /* .section{
            margin-top: -90px;
        } */

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
        /* #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
            margin-top: 0px;
            margin-left: -10px;

        } */

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
        /* .row{

            margin-bottom:30px;
        } */
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
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"style="text-align: center;font-size:25px;";><b>{{ __('SIGN IN') }}</b></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                        
                                    <a href="{{route('login.google')}}" class="btn btn-danger btn-block">Login with Google</a>
                                    <a href="{{route('login.facebook')}}" class="btn btn-block" style="color:white ;background-color: #395697 " >Login with Facebook</a>
                                    <a href="{{route('login.github')}}" class="btn btn-dark btn-block">Login with Github</a>
                                </div>
                            </div>

                            <!-- <p style="text-align: center">OR</p>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus
                                           placeholder="E-Mail Address">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->

                            <!-- <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->

                            <!-- <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<body>

</body>

</html>
