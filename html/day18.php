<?php
class JWT {
    public function verifyToken($data, $signature) {
        $pub = openssl_pkey_get_public("file://pub_key.pem");
        $signature = base64_decode($signature);
        if (openssl_verify($data, $signature, $pub)) {
            $object = json_decode(base64_decode($data));
            $this->loginAsUser($object);
        }
    }
}

(new JWT())->verifyToken($_GET['d'], $_GET['s']);
show_source(__FILE__);
