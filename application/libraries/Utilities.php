<?php

/**
 * PHP Utilities porting for Codeigniter
 *
 * @package        	CodeIgniter
 * @subpackage    	Libraries
 * @category    	Libraries
 * @porting author	alfi.gusman.9f@gmail.com
 * @original author	http://alfi-gusman.web.id
 * 
 * @version		1.0
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Utilities
{

    protected $CI;

    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI = &get_instance();
    }

    /* Send Email */
    public function sendEmail($username, $password, $from = "alfi.gusman.9f@gmail.com", $cc = "alfi.gusman.9f@gmail.com", $title = "No-Reply - Web Apps", $subject = "Web Apps", $email, $content)
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => $username,
            'smtp_pass' => $password,
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->CI->load->library('email', $config);
        $this->CI->email->set_newline("\r\n");
        $this->CI->email->from($from, $title);
        $this->CI->email->to($email);
        $this->CI->email->cc($cc);
        $this->CI->email->subject($subject);
        $this->CI->email->message($content);
        if ($this->CI->email->send()) {
            return true;
        } else {
            //echo $this->email->print_debugger();
            //exit();
            return false;
        }
    }

    /* Get IP Address */
    public function getIPAddress()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    /* Security reCAPCHA */
    public function reCAPTCHA($send)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $secret = '6LcznyQUAAAAAAkK6IEHZ6gU5SRs2Vkvndn_5Wi0';
        $response = file_get_contents($url . '?secret=' . $secret . '&response=' . $send . '&remoteip-' . $_SERVER['REMOTE_ADDR']);
        $data = json_decode($response);
        return $data->success;
    }

    /* 
    CURL 
    $request = array(
        "url" => null, //Not Null
        "method" => null, // GET, POST, PUT, PATCH, DELETE
        "header" => null,
        "request" => null,
    );
    */

    public function curl($data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $data['url']);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $data['method']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data['request']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $data['header']);
        $respond = curl_exec($ch); //print_r($data);
        curl_close($ch);
        $respond = json_decode($respond);
        return $respond;
    }

    public function convertDateTime($date, $format = 'Y-m-d H:i:s')
    {
        $tz1 = 'UTC';
        $tz2 = 'Asia/Jakarta'; // UTC +7

        $d = new DateTime($date, new DateTimeZone($tz1));
        $d->setTimeZone(new DateTimeZone($tz2));

        return $d->format($format);
    }
}
