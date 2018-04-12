<?php

namespace Olotu\Repositories\Utilities;

class MailChimp implements NewsLetter
{
    public function subscribe($email)
    {
        // MailChimp API credentials
        $apiKey = env('MAILCHIMP_API_KEY');
        $listID = env('MAILCHIMP_NEWSLETTER_LIST_ID');
        
        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
        ]);
        
        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $response = [];
            // store the status message based on response code
        if ($httpCode == 200) {
            $response['status'] = true;
            $response['message'] = 'You have successfully subscribed to Olotusquare';
        } else {
            switch ($httpCode) {
                case 214:
                    $msg = 'You are already subscribed.';
                    break;
                default:
                    $msg = 'A problem occurred, please try again.';
                    break;
            }
            $response['status'] = false;
            $response['message'] = $msg;
        }
        return $response;
    }
}