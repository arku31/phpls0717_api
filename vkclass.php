<?php

namespace arku;

class Vk
{
    protected $appid = 6162748;
    protected $protectedkey = "CcDBTihgiNrmRwKWitUP"; //секретный ключ, secret
    protected $token;

    public function simplevk()
    {
        $url = 'https://api.vk.com/method/users.get?user_ids=2&fields=bdate&v=5.68';

        echo file_get_contents($url);
    }

    public function authorizeUrl()
    {
        $auth = "https://oauth.vk.com/authorize?client_id={$this->appid}&client_secret={$this->protectedkey}";
        $auth.= "&v=5.63&response_type=code&redirect_uri=http://localhost:8888/vk.php&scope=email";
        return $auth;

    }

    public function access_token($code)
    {
        $params = http_build_query([
            'client_id' => $this->appid,
            'client_secret' => $this->protectedkey,
            'redirect_uri' => 'http://localhost:8888/vk.php',
            'code' => $code
        ]);
        $url = "https://oauth.vk.com/access_token?".$params;
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return $data['access_token'];
    }

    public function vkwithtoken($token)
    {
//        $url= 'https://api.vk.com/method/board.getComments?group_id=76297300&topic_id=32368710'.
//            '&access_token='.$token;
        $url='https://api.vk.com/method/users.get?user_ids=5101016';
        $result= file_get_contents($url);
//        $data = json_decode($result, true)['response']['comments'];
        $data = json_decode($result, true);
       return $data;
    }

}


