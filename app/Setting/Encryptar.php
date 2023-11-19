<?php
namespace app\Setting;

class Encryptar {

    private $key;
    private $iv ;


    public function __construct($key) {
        $this->key = $key;
        $this->iv = openssl_random_pseudo_bytes(16);
    }

    public function encrypt($data) {
        // $iv = openssl_random_pseudo_bytes(16);
        return base64_encode(openssl_encrypt($data, 'aes-256-cbc', $this->key, OPENSSL_RAW_DATA, $this->iv));
    }
    
    public function decrypt($data) {
        $data = base64_decode($data);
        // $iv = openssl_random_pseudo_bytes(16);
        return openssl_decrypt($data, 'aes-256-cbc', $this->key, OPENSSL_RAW_DATA, $this->iv);
    }
    
}



