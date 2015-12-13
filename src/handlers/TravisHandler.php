<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpRestClient\Methods\Get;
use jaenmedina\PhpRestClient\Methods\Post;

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

    /**
     * @param $url
     * @return array
     */
    protected function doPost($url, $parameters = array())
    {
        $postMethod = new Post($url);
        $header = array(
            'Accept' => 'application/vnd.travis-ci.2+json',
            'Authorization' => $this->travisAccessToken,
            'User-Agent' => 'MyClient/1.0.0'
        );
        $postMethod->setCurlOption('CURLOPT_HTTPHEADER', $header);
        if (is_array($parameters) && count($parameters) > 0) {
            $postMethod->setParameters($parameters);
        }
        $result = $postMethod->execute();
        return $result;
    }

}