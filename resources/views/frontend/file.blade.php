<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRC-Upload PCAP files</title>
  <meta name="description" content="crc.bahria.edu.pk">
  <meta name="keywords" content="crc.bahria.edu.pk">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}">
  <!-- <link href="{{url('frontend/css/responsive-style.css')}}" rel="stylesheet" type="text/css"/>  -->
  <link rel="icon" href="{{url('frontend/img/logo_2.png')}}">
  <link href="{{url('frontend/css/responsive-style.css')}}" rel="stylesheet" type="text/css"/>
  <style>
#drop-area {
    border: 2px dashed #ccc;
    border-radius: 20px;
    width: 70%;
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
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <section id="" >

</section>
    <section class="section-padding">
      <h3 class="text-center " style="color: #BF0808 !important">Upload PCAP File</h3>
      <div  id="drop-area" class="container">
              <div><svg xmlns="http://www.w3.org/2000/svg" width="100" height="120"><path d="M77.838 46.548c-3.447-16.747-19.823-27.53-36.575-24.084-14.345 2.951-24.661 15.544-24.727 30.185 0 .697.029 1.412.09 2.167C6.423 55.896-.975 65.042.106 75.244c1 9.456 8.984 16.629 18.496 16.62h2.167c-.05-.685-.103-1.367-.103-2.064 0-14.819 12.017-26.832 26.84-26.832s26.84 12.013 26.84 26.832c0 .697-.054 1.378-.104 2.064h2.168c12.529.034 22.714-10.092 22.748-22.617.033-12.018-9.319-21.975-21.32-22.699z" fill="#bbdefb"></path><ellipse cx="47.505" cy="89.8" rx="22.71" ry="22.703" fill="#4caf50"></ellipse><g fill="#fafafa"><path d="M47.505 104.247a2.064 2.064 0 01-2.065-2.064V77.416a2.064 2.064 0 014.13 0v24.767c0 1.14-.925 2.064-2.065 2.064z"></path><path d="M55.763 87.736a2.064 2.064 0 01-1.462-.603l-6.796-6.798-6.797 6.798a2.065 2.065 0 01-2.92-2.918l8.26-8.256a2.065 2.065 0 012.918 0l8.259 8.256a2.063 2.063 0 01-1.462 3.52z"></path></g></svg></div>

        <div class="row">
        <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">

            <!-- @csrf -->
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br>
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <div class="form-group">
            <p>Upload <b>.pcap</b> or <b>.pcapng</b> file over here</p>
            <p>select from device</p>

          <label for="chooseFile"><i class="fas fa-hdd"></i>Select File</label>
            <input type="file" name="file" multiple="" accept=".pcap,.pcapng,.cap" hidden="" placeholder="Select file" style="border:1px solid grey; padding:3px; display: inline-block;">
          </div>
<!-- <input type="file" name="file"> -->
            <!-- <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select File</label>
            </div> -->

            <button type="submit" name="submit" class="btn btn-primary">
                Upload File
            </button>
        </form>

        </div>
      </div>
    </section>

          <div>&nbsp;</div>
                  <!--Footer-->
                  <footer id="footer" class="footer" style="position:absolute !important">
                    <div class="container text-center">
                      ©2019 All rights reserved
                      <div class="credits">
                        <!--                    Powered by IT Directorate, Bahria University Head office, Islamabad-->
                        Developed By Cyber Reconnaissance and Combat (CRC) Lab (National Center for Cyber Security).
                      </div>
                    </div>
                  </footer>
                  <!--/ Footer-->
                  <!--<a class="scroll-top-arrow" href="javascript:void(0);" style="display: inline;"><i class="fa fa-angle-up"></i></a>-->
                  <a href="#" id="back-to-top" title="Back to top" class="show"><img src="{{url('frontend/img/top_arrow.png')}}" alt=""></a>
                  <!-- script src="{{url('frontend/js/jquery.min.js')}}"></script>
                  <script src="{{url('frontend/js/jquery.easing.min.js')}}"></script>
                  <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
                  <script src="{{url('frontend/js/custom.js')}}"></script>
                  <script src="{{url('frontend/js/main.js')}}"></script>  -->


</body>
</html>
