@include('header')

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-4 text-center text-lg-start" style="margin-top: 10%">
              <h1 data-aos="fade-right">Online PCAP File Analyzer</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Powered by NetSpection IDPS (Beta)</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#main" class="btn btn-outline-white">Get started</a></p>
            </div>
            <div class="col-lg-8 iphone-wrap">
              <ul><li><p class="mb-5" data-aos="fade-right" data-aos-delay="100"><b>Malware detection:</b> Detection of known malware and their new modifications</li></p>
<li><p class="mb-5" data-aos="fade-right" data-aos-delay="100"><b>Web attack detection:</b> Injection attacks, backdoor detection, http string and substring matching</li></p>
<li><p class="mb-5" data-aos="fade-right" data-aos-delay="100"><b>Protocol based attacks detection:</b> TCP, UDP, IP, ICMP, HTTP, DNS, SSH, SMB. </li></p>
<li><p class="mb-5" data-aos="fade-right" data-aos-delay="100"><b>Application visibility:</b> Observability of specific applications/ requests/ commands, giving a far greater degree of visibility control over network traffic</li></p>
<li><p class="mb-5" data-aos="fade-right" data-aos-delay="100">Heuristic-based analysis detects anomalous packet and traffic patterns, such as port scans, host sweeps, and denial-of-service (DoS) attacks.</li></p>
<li><p class="mb-5" data-aos="fade-right" data-aos-delay="100">Other attack Detection capabilities, such as recognition of invalid or malformed packets, IP defragmentation, and TCP reassembly.</li></p></ul>
              <!-- <img src="{{url('assets/img/phone_1.png')}}" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="{{url('assets/img/phone_2.png')}}" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200"> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
      <section class="">
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

            <p><label for="chooseFile"><i class="fas fa-hdd"></i>Select File</label>
            <input type="file" name="file"  accept=".pcap,.pcapng,.cap" placeholder="Select file" style="border:1px solid grey; padding:3px; display: inline-block;"></p>
          </div>

            <button type="submit" name="submit" class="btn btn-primary">Upload File</button>
        </form>
       @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
        </div>
      </div>

    </section>


  </main><!-- End #main -->
  <footer class="footer" role="contentinfo">
<div class="container">
  <div class="row">
          <h3>About Packet Inspection</h3>
          <p>It allow users to read/view PCAP files. It analyze various protocols TCP, UDP, IPv4/IPv6, HTTP, Telnet, FTP, DNS, SSDP, WPA to analyze tarffic over the network.</p>

<p>Analyse pcap files to view HTTP headers and data, extract transferred binaries, files, office documents, pictures.</p>
     </div>
</div>
</footer>
 @include('footer')
