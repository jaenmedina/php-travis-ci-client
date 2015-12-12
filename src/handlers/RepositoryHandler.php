<?php

namespace jaenmedina\PhpTravisCiClient\Handler;
use jaenmedina\PhpRestClient\Methods\Get;
use jaenmedina\PhpTravisCiClient\Entity\Repository;

class RepositoryHandler extends TravisHandler
{
    /**
     * @param int $id
     * @return Repository
     */
    public function getById($id){
        $url = 'api.travis-ci.org/repos/' . $id . '';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        $repository = new Repository($result['body']);
        return $repository;
    }

    /**
     * @param string $slug
     * @return Repository
     */
    public function getBySlug($slug){
        $url = 'api.travis-ci.org/repos/' . $slug . '';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        $repository = new Repository($result['body']);
        return $repository;
    }
}