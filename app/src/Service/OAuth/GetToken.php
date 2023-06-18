<?php
namespace App\Service\OAuth;

use App\Service\Encoder\CustomEncoder;

class GetToken{

    public function __construct(private CustomEncoder $customEncoder){
        
    }
    public function getUserToken(){
        $token = $this->customEncoder->encode(array('role'=>'user'));
        return $token;
    }
    public function getPremiumToken(){
        $token = $this->customEncoder->encode(array('role'=>'premium'));
        return $token;
    }
}



?>