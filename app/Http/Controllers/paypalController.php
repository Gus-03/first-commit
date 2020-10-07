<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paypalController extends Controller
{
    //
    public function index(){
     
        return view('paypal');
    }
    public function getToken(){
        $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/oauth2/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    curl_setopt($ch, CURLOPT_USERPWD, 'ATtiQnnch0qsV-vxOhctjiXpr_Pr09wgzkGrIARV55SeiHMoxgP5sPMIWrnYOZGi-PL8zmxOTHVj-tJs' . ':' . 'EGz4DCgHa00G0tPm-veRW0ub0Ee0B3KK5Jbk8tBFZlMJMkHbCcKKMet-MNAHoE8dKjoaKC3MKgqTqjUX');
    
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Accept-Language: en_US';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
       
    }
    curl_close($ch);
        return json_decode($result)->access_token;
    }
}
