<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapp
{

    function send($number, $message)
    {
        $a = '+'.$number;
        $no = str_split($a, 3);
        $n = $no[0];

        $ganti = str_replace($n,"628",$a);

        $message = str_replace("<b>","*",$message);
        $message = str_replace("</b>","*",$message);

        $demokey='eb30890ca48a59e000f58ad16fa29637a1d581de766cee38'; //this is demo key please change with your own key
        $url='http://116.203.191.58/api/send_message';
        $data = array(
          "phone_no"=> $ganti,
          "key"     => $demokey,
          "message" => $message,
        );
        $data_string = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 360);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($data_string))
        );
        $res=curl_exec($ch);
        curl_close($ch);

        return $res;
    }
}