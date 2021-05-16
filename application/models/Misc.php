<?php

class Misc extends CI_Model {

    public function randomString($len)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        $randstring = '';

        for ($i = 0; $i < $len; $i++) {
            $randstring = $randstring . $characters[rand(0, strlen($characters)-1)];
        }

        return $randstring;
    }

}