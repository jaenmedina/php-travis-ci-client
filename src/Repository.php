<?php

namespace jaenmedina\PhpTravisCiClient\Entity;
use jaenmedina\PhpRestClient\Methods\Get;

class Repository {

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
     * @param int $id
     * @return stdClass
     */
    public function getById($id){
        $url = 'api.travis-ci.org/repos/' . $id . '';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        return json_decode($result['body']);
    }

    /**
     * @param string $slug
     * @return stdClass
     */
    public function getBySlug($slug){
        $url = 'api.travis-ci.org/repos/' . $slug . '';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        return json_decode($result['body']);
    }

}