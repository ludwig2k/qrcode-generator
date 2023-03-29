<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate(Request $request)
{
    $name = $request->input('name');
    $linkedin_url = $request->input('linkedin_url');
    $github_url = $request->input('github_url');

    // Construct an array with input data
    $data = [
        'name' => $name,
        'linkedin_url' => $linkedin_url,
        'github_url' => $github_url
    ];

    // Convert the data array to JSON and encode it to base64
    $json = json_encode($data);
    $encodedData = base64_encode($json);

    // Create a route for the decoded data and generate QR Code with the URL
    $url = route('qr_code_data', $encodedData);
    $qrCode = QrCode::size(250)->generate($url);

    // Return the view with QR Code
    return view('qr-code', compact('qrCode'));
}
    

public function showData($data)
{
    // Decode the base64 encoded data and convert it to an array
    $decodedData = base64_decode($data);
    $data = json_decode($decodedData, true);

    // Return the view with contact information
    return view('contact-info', compact('data'));
}

    


    public function index(){

     return view('index');
    }
}
