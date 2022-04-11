@extends('pcap.layout')
@section('title')
    PCAP FTP
@endsection
@section('content')
<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <ul class="breadcrumbs-one">
                <li>
                    <a href=""><i class="fas fa-list-ul text-black"></i></a>
                </li>
                <li>
                    <a href="" class="ml-15 text-black">filename.pcap</a>
                </li>
                <li>
                    <a href="" class="ml-15 text-black"><b>FTP</b></a>
                </li>
                <li>
                    <a href="" class="ml-15 text-black btn-padding ml-350">Copy Url</a>
                </li>
                <li>
                    <a href="" class="ml-15 text-black btn-padding">Download File</a>
                </li>
            </ul>
            <div class="container-fluid plr_30 body_white_bg pt_30">

                <div class="content-box">
                    <p>
                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample">
                            <strong> ► <img src="{{ asset('assets/img/au.svg') }}" alt="" style="height: 10px"> 13.210.187.102 <i class="fas fa-arrows-alt-h"></i> 192.168.1.211</strong>
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="col-lg-12">
                                <div class="white_box mb_30">
                                    <table class="table table-bordered table-dark">
                                        <tbody>
                                            <tr>
                                                <td>GET /c/msdownload/update/others/2022/01/35969516_5bcaf676a3e98426394e538836033ea5ce2bb8c3.cab HTTP/1.1</td>
                                            </tr>
                                            <tr>
                                                <td>Host: 162.244.87.57</td>
                                            </tr>
                                            <tr>
                                                <td>Accept: */*</td>
                                            </tr>
                                            <tr>
                                                <td>User-Agent: curl/7.68.0</td>
                                            </tr>
                                            <tr>
                                                <td>HTTP/1.1 200 OK</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Length: 7317</td>
                                            </tr>
                                            <tr>
                                                <td>Accept-Ranges: bytes</td>
                                            </tr>
                                            <tr>
                                                <td>Cache-Control: public,max-age=172800</td>
                                            </tr>
                                            <tr>
                                                <td>Connection: keep-alive</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Type: application/vnd.ms-cab-compressed</td>
                                            </tr>
                                            <tr>
                                                <td>Date:18 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Etag:0"</td>
                                            </tr>
                                            <tr>
                                                <td>Last-Modified:50 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Server: Microsoft-IIS/10.0</td>
                                            </tr>
                                            <tr>
                                                <td>X-Ccc: US</td>
                                            </tr>
                                            <tr>
                                                <td>X-Cid: 2</td>
                                            </tr>
                                            <tr>
                                                <td>X-Powered-By: ASP.NET</td>
                                            </tr>
                                            <tr>
                                                <td>MSCF�0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="content-box">
                    <p>
                        <a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                            aria-controls="collapseExample1">
                            <strong> ► <img src="{{ asset('assets/img/au.svg') }}" alt="" style="height: 10px"> 13.210.187.102 <i class="fas fa-arrows-alt-h"></i> 192.168.1.211</strong>
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            <div class="col-lg-12">
                                <div class="white_box mb_30">
                                    <table class="table table-bordered table-dark">
                                        <tbody>
                                            <tr>
                                                <td>GET /c/msdownload/update/others/2022/01/35969516_5bcaf676a3e98426394e538836033ea5ce2bb8c3.cab HTTP/1.1</td>
                                            </tr>
                                            <tr>
                                                <td>Host: 162.244.87.57</td>
                                            </tr>
                                            <tr>
                                                <td>Accept: */*</td>
                                            </tr>
                                            <tr>
                                                <td>User-Agent: curl/7.68.0</td>
                                            </tr>
                                            <tr>
                                                <td>HTTP/1.1 200 OK</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Length: 7317</td>
                                            </tr>
                                            <tr>
                                                <td>Accept-Ranges: bytes</td>
                                            </tr>
                                            <tr>
                                                <td>Cache-Control: public,max-age=172800</td>
                                            </tr>
                                            <tr>
                                                <td>Connection: keep-alive</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Type: application/vnd.ms-cab-compressed</td>
                                            </tr>
                                            <tr>
                                                <td>Date:18 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Etag:0"</td>
                                            </tr>
                                            <tr>
                                                <td>Last-Modified:50 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Server: Microsoft-IIS/10.0</td>
                                            </tr>
                                            <tr>
                                                <td>X-Ccc: US</td>
                                            </tr>
                                            <tr>
                                                <td>X-Cid: 2</td>
                                            </tr>
                                            <tr>
                                                <td>X-Powered-By: ASP.NET</td>
                                            </tr>
                                            <tr>
                                                <td>MSCF�0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="content-box">
                    <p>
                        <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                            aria-controls="collapseExample2">
                            <strong> ► <img src="{{ asset('assets/img/au.svg') }}" alt="" style="height: 10px"> 13.210.187.102 <i class="fas fa-arrows-alt-h"></i> 192.168.1.211</strong>
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            <div class="col-lg-12">
                                <div class="white_box mb_30">
                                    <table class="table table-bordered table-dark">
                                        <tbody>
                                            <tr>
                                                <td>GET /c/msdownload/update/others/2022/01/35969516_5bcaf676a3e98426394e538836033ea5ce2bb8c3.cab HTTP/1.1</td>
                                            </tr>
                                            <tr>
                                                <td>Host: 162.244.87.57</td>
                                            </tr>
                                            <tr>
                                                <td>Accept: */*</td>
                                            </tr>
                                            <tr>
                                                <td>User-Agent: curl/7.68.0</td>
                                            </tr>
                                            <tr>
                                                <td>HTTP/1.1 200 OK</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Length: 7317</td>
                                            </tr>
                                            <tr>
                                                <td>Accept-Ranges: bytes</td>
                                            </tr>
                                            <tr>
                                                <td>Cache-Control: public,max-age=172800</td>
                                            </tr>
                                            <tr>
                                                <td>Connection: keep-alive</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Type: application/vnd.ms-cab-compressed</td>
                                            </tr>
                                            <tr>
                                                <td>Date:18 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Etag:0"</td>
                                            </tr>
                                            <tr>
                                                <td>Last-Modified:50 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Server: Microsoft-IIS/10.0</td>
                                            </tr>
                                            <tr>
                                                <td>X-Ccc: US</td>
                                            </tr>
                                            <tr>
                                                <td>X-Cid: 2</td>
                                            </tr>
                                            <tr>
                                                <td>X-Powered-By: ASP.NET</td>
                                            </tr>
                                            <tr>
                                                <td>MSCF�0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="content-box">
                    <p>
                        <a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                            aria-controls="collapseExample3">
                            <strong> ► <img src="{{ asset('assets/img/au.svg') }}" alt="" style="height: 10px"> 13.210.187.102 <i class="fas fa-arrows-alt-h"></i> 192.168.1.211</strong>
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            <div class="col-lg-12">
                                <div class="white_box mb_30">
                                    <table class="table table-bordered table-dark">
                                        <tbody>
                                            <tr>
                                                <td>GET /c/msdownload/update/others/2022/01/35969516_5bcaf676a3e98426394e538836033ea5ce2bb8c3.cab HTTP/1.1</td>
                                            </tr>
                                            <tr>
                                                <td>Host: 162.244.87.57</td>
                                            </tr>
                                            <tr>
                                                <td>Accept: */*</td>
                                            </tr>
                                            <tr>
                                                <td>User-Agent: curl/7.68.0</td>
                                            </tr>
                                            <tr>
                                                <td>HTTP/1.1 200 OK</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Length: 7317</td>
                                            </tr>
                                            <tr>
                                                <td>Accept-Ranges: bytes</td>
                                            </tr>
                                            <tr>
                                                <td>Cache-Control: public,max-age=172800</td>
                                            </tr>
                                            <tr>
                                                <td>Connection: keep-alive</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Type: application/vnd.ms-cab-compressed</td>
                                            </tr>
                                            <tr>
                                                <td>Date:18 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Etag:0"</td>
                                            </tr>
                                            <tr>
                                                <td>Last-Modified:50 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Server: Microsoft-IIS/10.0</td>
                                            </tr>
                                            <tr>
                                                <td>X-Ccc: US</td>
                                            </tr>
                                            <tr>
                                                <td>X-Cid: 2</td>
                                            </tr>
                                            <tr>
                                                <td>X-Powered-By: ASP.NET</td>
                                            </tr>
                                            <tr>
                                                <td>MSCF�0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="content-box">
                    <p>
                        <a data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                            aria-controls="collapseExample4">
                            <strong> ► <img src="{{ asset('assets/img/au.svg') }}" alt="" style="height: 10px"> 13.210.187.102 <i class="fas fa-arrows-alt-h"></i> 192.168.1.211</strong>
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body">
                            <div class="col-lg-12">
                                <div class="white_box mb_30">
                                    <table class="table table-bordered table-dark">
                                        <tbody>
                                            <tr>
                                                <td>GET /c/msdownload/update/others/2022/01/35969516_5bcaf676a3e98426394e538836033ea5ce2bb8c3.cab HTTP/1.1</td>
                                            </tr>
                                            <tr>
                                                <td>Host: 162.244.87.57</td>
                                            </tr>
                                            <tr>
                                                <td>Accept: */*</td>
                                            </tr>
                                            <tr>
                                                <td>User-Agent: curl/7.68.0</td>
                                            </tr>
                                            <tr>
                                                <td>HTTP/1.1 200 OK</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Length: 7317</td>
                                            </tr>
                                            <tr>
                                                <td>Accept-Ranges: bytes</td>
                                            </tr>
                                            <tr>
                                                <td>Cache-Control: public,max-age=172800</td>
                                            </tr>
                                            <tr>
                                                <td>Connection: keep-alive</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Type: application/vnd.ms-cab-compressed</td>
                                            </tr>
                                            <tr>
                                                <td>Date:18 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Etag:0"</td>
                                            </tr>
                                            <tr>
                                                <td>Last-Modified:50 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Server: Microsoft-IIS/10.0</td>
                                            </tr>
                                            <tr>
                                                <td>X-Ccc: US</td>
                                            </tr>
                                            <tr>
                                                <td>X-Cid: 2</td>
                                            </tr>
                                            <tr>
                                                <td>X-Powered-By: ASP.NET</td>
                                            </tr>
                                            <tr>
                                                <td>MSCF�0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="content-box">
                    <p>
                        <a data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false"
                            aria-controls="collapseExample5">
                            <strong> ► <img src="{{ asset('assets/img/au.svg') }}" alt="" style="height: 10px"> 13.210.187.102 <i class="fas fa-arrows-alt-h"></i> 192.168.1.211</strong>
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample5">
                        <div class="card card-body">
                            <div class="col-lg-12">
                                <div class="white_box mb_30">
                                    <table class="table table-bordered table-dark">
                                        <tbody>
                                            <tr>
                                                <td>GET /c/msdownload/update/others/2022/01/35969516_5bcaf676a3e98426394e538836033ea5ce2bb8c3.cab HTTP/1.1</td>
                                            </tr>
                                            <tr>
                                                <td>Host: 162.244.87.57</td>
                                            </tr>
                                            <tr>
                                                <td>Accept: */*</td>
                                            </tr>
                                            <tr>
                                                <td>User-Agent: curl/7.68.0</td>
                                            </tr>
                                            <tr>
                                                <td>HTTP/1.1 200 OK</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Length: 7317</td>
                                            </tr>
                                            <tr>
                                                <td>Accept-Ranges: bytes</td>
                                            </tr>
                                            <tr>
                                                <td>Cache-Control: public,max-age=172800</td>
                                            </tr>
                                            <tr>
                                                <td>Connection: keep-alive</td>
                                            </tr>
                                            <tr>
                                                <td>Content-Type: application/vnd.ms-cab-compressed</td>
                                            </tr>
                                            <tr>
                                                <td>Date:18 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Etag:0"</td>
                                            </tr>
                                            <tr>
                                                <td>Last-Modified:50 GMT</td>
                                            </tr>
                                            <tr>
                                                <td>Server: Microsoft-IIS/10.0</td>
                                            </tr>
                                            <tr>
                                                <td>X-Ccc: US</td>
                                            </tr>
                                            <tr>
                                                <td>X-Cid: 2</td>
                                            </tr>
                                            <tr>
                                                <td>X-Powered-By: ASP.NET</td>
                                            </tr>
                                            <tr>
                                                <td>MSCF�0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

</section>
@endsection
