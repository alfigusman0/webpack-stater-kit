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

    public function jwtEncode($payload, $ip_address)
    {
        $JWT_TOKEN = JWT::encode($payload, $this->key_auth);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'jwt_token' => $JWT_TOKEN
            ), //not null or null
            'or_where'  => null, //not null or null
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $cijwt = $this->CI->Cijwt->where($rules)->num_rows();
        if ($cijwt == 0) {
            $data = array(
                'ip_address' => $ip_address,
                'jwt_token' => $JWT_TOKEN,
            );
            $this->CI->Cijwt->create($data);
        }
        $cookieJWT = array(
            'name'   => 'JWT_TOKEN',
            'value'  => $JWT_TOKEN,
            'expire' => time() + (10 * 365 * 24 * 60 * 60),
        );
        $this->CI->input->set_cookie($cookieJWT);
        return $JWT_TOKEN;
    }

    public function jwtDecode()
    {
        $JWT_TOKEN = $this->CI->input->cookie('JWT_TOKEN', TRUE);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'jwt_token' => $JWT_TOKEN
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
        $JWT_TOKEN = $this->CI->input->cookie('JWT_TOKEN', TRUE);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'jwt_token' => $JWT_TOKEN
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
                'id' => $cijwt->id
            ), //null or not null
            'data'  => array(
                'jwt_token' => $JWT_TOKEN,
            ), //null or not null
        );
        $this->CI->Cijwt->update($rules);
        $cookieJWT = array(
            'name'   => 'JWT_TOKEN',
            'value'  => $JWT_TOKEN,
            'expire' => time() + (10 * 365 * 24 * 60 * 60),
        );
        $this->CI->input->set_cookie($cookieJWT);
        return $JWT_TOKEN;
    }

    public function jwtDelete()
    {
        $JWT_TOKEN = $this->CI->input->cookie('JWT_TOKEN', TRUE);
        $rules = array(
            'select'    => null,
            'where'     => array(
                'jwt_token' => $JWT_TOKEN
            ), //not null or null
            'or_where'  => null, //not null or null
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $cijwt = $this->CI->Cijwt->where($rules)->num_rows();
        if ($cijwt > 0) {
            $rules = array('jwt_token' => $JWT_TOKEN);
            $this->CI->Cijwt->delete($rules);
        }
        delete_cookie('JWT_TOKEN');
        return true;
    }
}
