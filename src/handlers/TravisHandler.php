<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpRestClient\Methods\Get;

class TravisHandler
{
    /**
     * @var string
     */
    protected $travisAccessToken;

    /**
     * @param $travisAccessToken
     */
    public function __construct($travisAccessToken){
        $this->travisAccessToken = $travisAccessToken;
    }

    /**
     * @param $url
     * @return array
     */
    protected function doGet($url)
    {
        $getMethod = new Get($url);
        $header = array(
            'Accept' => 'application/vnd.travis-ci.2+json',
            'Authorization' => $this->travisAccessToken,
            'User-Agent' => 'MyClient/1.0.0'
        );
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', $header);
        $result = $getMethod->execute();
        return $result;
    }

}