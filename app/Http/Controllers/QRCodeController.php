<?php

namespace App\Http\Controllers;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Label\Label;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate(Request $request)
{
    $name = $request->input('name');
    $linkedin_url = $request->input('linkedin_url');
    $github_url = $request->input('github_url');

    $data = [
        'name' => $name,
        'linkedin_url' => $linkedin_url,
        'github_url' => $github_url
    ];

    $json = json_encode($data);
    $encodedData = base64_encode($json);
    $url = route('qr_code_data', $encodedData);
    $qrCode = QrCode::size(250)->generate($url);
    return view('qr-code', compact('qrCode'));
}
    

public function showData($data)
{
    $decodedData = base64_decode($data);
    $data = json_decode($decodedData, true);
    return view('contact-info', compact('data'));
}

    


    public function index(){

     return view('index');
    }
}
