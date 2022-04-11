@extends('pcap.layout')
@section('title')
    PCAP Servers
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
                    <a href="" class="ml-15 text-black"><b>Servers</b></a>
                </li>
                <li>
                    <a href="" class="ml-15 text-black btn-padding ml-350">Copy Url</a>
                </li>
                <li>
                    <a href="" class="ml-15 text-black btn-padding">Download File</a>
                </li>
            </ul>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-globe font__size dns__"></i></h4>
                                            <h3> DNS Queries </h3>
                                            <p>192.168.1.1</p>
                                            <p>spoonwatch-dc.spoonwatch.net (192.168.1.2)</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-stream font__size ssdp__"></i></h4>
                                            <h3> DHCP </h3>
                                            <p>192.168.1.1</p>
                                            <p>No Data</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-key font__size smb__"></i></h4>
                                            <h3> LDAP </h3>
                                            <p>spoonwatch-dc.spoonwatch.net (192.168.1.2)</p>
                                            <p>No Data</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
