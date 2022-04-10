@extends('pcap.layout')
@section('title')
    PCAP HTTP-Headers
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
                    <a href="" class="ml-15 text-black"><b>HTTP-Headers</b></a>
                </li>
                <li>
                    <a href="" class="ml-15 text-black btn-padding ">Copy Url</a>
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
                                            <h4><i class="fas fa-key font__size key__"></i></h4>
                                            <h3> Found Credentials </h3>
                                            <p>View found plain text passwords or hashes for various authentication protocols.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-globe font__size dns__"></i></h4>
                                            <h3> DNS Queries </h3>
                                            <p>Explore DNS/NBNS/mDNS queries to DNS servers on world map.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-pager font__size http__"></i></h4>
                                            <h3> HTTP Communication </h3>
                                            <p>Display HTTP requests, responses and transferring data.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-folder font__size smb__"></i></h4>
                                            <h3> SMB Sniffer </h3>
                                            <p>Explore SMB announces and information about installed OS features. Found NTLMv1/v2 hashes.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-folder font__size arp__"></i></h4>
                                            <h3> ARP </h3>
                                            <p>Contains link layer information about network communications. Help detect network routers and ARP spoofing attackers.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-map font__size map__"></i></h4>
                                            <h3> Network Map </h3>
                                            <p>Analyze IP communications between devices and used protocols. Found fingerprints like OS/installed software.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-cogs font__size settings__"></i></h4>
                                            <h3> Open Ports </h3>
                                            <p>Open TCP ports fingerprints found in the captured traffic.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-image font__size images__"></i></h4>
                                            <h3> Images </h3>
                                            <p>Images found in HTTP data.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-terminal font__size"></i></h4>
                                            <h3> Telent </h3>
                                            <p>Show Telnet sessions data.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-cloud-upload-alt font__size ftp__"></i></h4>
                                            <h3> FTP </h3>
                                            <p>Show FTP sessions data.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-stream font__size ssdp__"></i></h4>
                                            <h3> SSDP announces </h3>
                                            <p>Contains announces of services running on network devices using protocol SSDP.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-arrows-alt-h font__size connec__"></i></h4>
                                            <h3> Connections </h3>
                                            <p>Visualize IP connections, display endpoints and transferring data volume on world map. </p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-arrows-alt-h font__size dns__"></i></h4>
                                            <h3> DNS, DHCP and LDAP Servers </h3>
                                            <p>Detect DNS, DHCP and LDAP servers from intercepted network traffic.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-network-wired font__size ethernet__"></i></h4>
                                            <h3> Ethernet Devices </h3>
                                            <p>Find fingerprints of ethernet devices and detect used ethernet broadcast addresses.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-wifi font__size wifi__"></i></h4>
                                            <h3> WiFi </h3>
                                            <p>View information about access points, clients, connection requests and found WPA2 handshakes.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-phone-alt font__size phone__"></i></h4>
                                            <h3> SIP </h3>
                                            <p>Explore details of SIP communications and authentication data.</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4><i class="fas fa-book font__size"></i></h4>
                                            <h3> Documents </h3>
                                            <p>Found office documents in PDF, MS Word, MS Excel, RTF and other formats.</p>
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
