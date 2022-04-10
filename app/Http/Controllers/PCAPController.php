<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PCAPController extends Controller
{
    public function overview ()
    {
        return view('pcap.index');
    }
    public function list ()
    {
        return view('pcap.list');
    }
    public function credentials ()
    {
        return view('pcap.credentials');
    }
    public function connections ()
    {
        return view('pcap.connections');
    }
    public function network ()
    {
        return view('pcap.network');
    }
    public function dns ()
    {
        return view('pcap.dns');
    }
    public function http_headers ()
    {
        return view('pcap.http-headers');
    }
    public function open_ports ()
    {
        return view('pcap.open-ports');
    }
    public function pictures ()
    {
        return view('pcap.pictures');
    }
    public function http ()
    {
        return view('pcap.http');
    }
    public function smb ()
    {
        return view('pcap.smb');
    }
    public function servers ()
    {
        return view('pcap.servers');
    }
    public function documents ()
    {
        return view('pcap.documents');
    }
    public function networks ()
    {
        return view('pcap.networks');
    }
    public function ftp ()
    {
        return view('pcap.ftp');
    }
    public function telnet ()
    {
        return view('pcap.telnet');
    }
    public function ssdp ()
    {
        return view('pcap.ssdp');
    }
    public function sip ()
    {
        return view('pcap.sip');
    }
    public function arp ()
    {
        return view('pcap.arp');
    }
    public function ethernet ()
    {
        return view('pcap.ethernet');
    }
    public function wifi ()
    {
        return view('pcap.wifi');
    }
    public function host ()
    {
        return view('pcap.host');
    }

}
