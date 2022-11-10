<?php

/**
 * PHP JWT porting for Codeigniter
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

use \Firebase\JWT\JWT;

class Jsonwebtoken
{
    var $key_auth = "21a6c5724af74b2088a6c90629e0ed8b.5a05c93b1e546725ce0ef8ba3d5fbe50.f4fcbedeeb195a6bdc70a6146c01fad1";

    protected $CI;

    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI = &get_instance();
        $this->CI->load->helper('cookie');
        $this->CI->load->model('Cijwt');
    }

    public function jwtEncode($payload, $id_user, $ip_address)
    {
        $expire_at = time() + (10 * 365 * 24 * 60 * 60);
        $JWT_TOKEN = JWT::encode($payload, $this->key_auth);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'token' => $JWT_TOKEN
            ), //not null or null
            'or_where'  => null, //not null or null
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $cijwt = $this->CI->Cijwt->where($rules)->num_rows();
        if ($cijwt == 0) {
            $data = array(
                'id_jwt' => (time() + 1),
                'id_user' => $id_user,
                'ip_address' => $ip_address,
                'token' => $JWT_TOKEN,
                'expire_at' => $expire_at,
                'expired' => '0',
                'keterangan' => 'LOGIN'
            );
            $this->CI->Cijwt->create($data);
        }
        $cookieJWT = array(
            'name'   => $_ENV['COOKIE_NAME'],
            'value'  => $JWT_TOKEN,
            'expire' => $expire_at,
        );
        $this->CI->input->set_cookie($cookieJWT);
        return $JWT_TOKEN;
    }

    public function jwtDecode()
    {
        $JWT_TOKEN = $this->CI->input->cookie($_ENV['COOKIE_NAME'], TRUE);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'token' => $JWT_TOKEN
            ), //not null or null
            'or_where'  => null, //not null or null
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $cijwt = $this->CI->Cijwt->where($rules)->num_rows();
        if ($cijwt > 0) {
            $decode = JWT::decode($JWT_TOKEN, $this->key_auth, array('HS256'));
            return $decode;
        } else {
            return false;
        }
    }

    public function jwtUpdate($payload)
    {
        $JWT_TOKEN = $this->CI->input->cookie($_ENV['COOKIE_NAME'], TRUE);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'token' => $JWT_TOKEN
            ), //not null or null
            'or_where'  => null, //not null or null
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $cijwt = $this->CI->Cijwt->where($rules)->row();
        $JWT_TOKEN = JWT::encode($payload, $this->key_auth);
        $rules = array(
            'where' => array(
                'id_jwt' => $cijwt->id_jwt
            ), //null or not null
            'data'  => array(
                'token' => $JWT_TOKEN,
            ), //null or not null
        );
        $this->CI->Cijwt->update($rules);
        $cookieJWT = array(
            'name'   => $_ENV['COOKIE_NAME'],
            'value'  => $JWT_TOKEN,
            'expire' => time() + (10 * 365 * 24 * 60 * 60),
        );
        $this->CI->input->set_cookie($cookieJWT);
        return $JWT_TOKEN;
    }

    public function jwtDelete()
    {
        $JWT_TOKEN = $this->CI->input->cookie($_ENV['COOKIE_NAME'], TRUE);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'token' => $JWT_TOKEN
            ), //not null or null
            'or_where'  => null, //not null or null
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $cijwt = $this->CI->Cijwt->where($rules)->num_rows();
        if ($cijwt > 0) {
            $rules = array('token' => $JWT_TOKEN);
            $this->CI->Cijwt->delete($rules);
        }
        delete_cookie($_ENV['COOKIE_NAME']);
        return true;
    }
}
