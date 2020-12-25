<?php

namespace App;


class PushNotification
{
    public static function sendGcm($type, $tokens, $data ){
        if(!empty($tokens))
        {
            $settings = config('webpush.gcm');

            $registrationIds = $tokens;

            $msg = array
            (
                'message' 	=> $data['message'],
                'title'		=> $data['title'],
                'subtitle'	=> '',
                'tickerText'	=> '',
                'vibrate'	=> 1,
                'sound'		=> 1
            );
            
            $fields = array
            (
                'registration_ids' 	=> $registrationIds,
                'data'			=> $msg
            );

            $headers = array
            (
                'Authorization: key=' . $settings['key'],
                'Content-Type: application/json'
            );

            $ch = curl_init();
            curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
            curl_setopt( $ch,CURLOPT_POST, true );
            curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
            curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
            curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
            $result = curl_exec($ch );
            curl_close( $ch );
        }
    }

    public static function sendApns($type, $token, $data ){
        if($token != "" && $token != null)
        {
            $deviceToken = str_replace(' ', '', $token);

            $apnsHost = 'gateway.sandbox.push.apple.com';
            
            if($type == 1)
                $apnsCert = public_path('assets/certificates/vendor_dev.pem');
            else
                $apnsCert = public_path('assets/certificates/customer_dev.pem');

            $apnsPort = 2195;

            $payload = array('aps' => array('alert' => $data['message'], 'sound' => 'default', 'badge' => 1) , 'server' => array( 'invoice_no' => $data['invoice_no']));

            $payload = json_encode($payload);

            $streamContext = stream_context_create();
            stream_context_set_option($streamContext, 'ssl', 'local_cert', $apnsCert);

            $apns = stream_socket_client('ssl://'.$apnsHost.':'.$apnsPort, $error, $errorString, 2, STREAM_CLIENT_CONNECT, $streamContext);

            if($errorString)
            {
                print_r($errorString);
                die();
            }

            if($apns)
            {
                $apnsMessage = chr(0).chr(0).chr(32).pack('H*', str_replace(' ', '', $deviceToken)).chr(0).chr(strlen($payload)).$payload;
                fwrite($apns, $apnsMessage);
                fclose($apns);
            }
        }
    }

}
