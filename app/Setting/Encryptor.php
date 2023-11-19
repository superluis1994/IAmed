<?php
namespace app\Setting;
class Encryptor
{
    private $secretKey;

    public function __construct($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    public function encrypt($data)
    {
        $iv = random_bytes(openssl_cipher_iv_length(OPENSSL_AES_256_GCM));
        $ciphertext = openssl_encrypt($data, 'AES-256-GCM', $this->secretKey, 0, $iv);
        $authTag = openssl_auth_tag($ciphertext, $iv, $this->secretKey);

        return base64_encode($iv . $ciphertext . $authTag);
    }

    public function decrypt($data)
    {
        $data = base64_decode($data);
        $iv = substr($data, 0, openssl_cipher_iv_length(OPENSSL_AES_256_GCM));
        $ciphertext = substr($data, openssl_cipher_iv_length(OPENSSL_AES_256_GCM));
        $authTag = substr($data, -openssl_auth_tag_length(OPENSSL_AES_256_GCM));

        $plaintext = openssl_decrypt($ciphertext, 'AES-256-GCM', $this->secretKey, 0, $iv, $authTag);

        return $plaintext;
    }
}
$secretKey = '12345678901234567890123456789012';

$encryptor = new Encryptor($secretKey);

$data = 'Este es un mensaje secreto';

$encryptedData = $encryptor->encrypt($data);

$decryptedData = $encryptor->decrypt($encryptedData);

echo $decryptedData; // Este es un mensaje secreto


?>