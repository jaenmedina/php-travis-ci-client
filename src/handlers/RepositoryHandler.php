<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpTravisCiClient\Entity\Repository;

class RepositoryHandler extends TravisHandler
{
    /**
     * @param int $id
     * @return Repository
     */
    public function getById($id){
        $url = 'api.travis-ci.org/repos/' . $id . '';
        $result = $this->doGet($url);
        $repository = new Repository($result['body']);
        return $repository;
    }

    /**
     * @param string $slug
     * @return Repository
     */
    public function getBySlug($slug){
        $url = 'api.travis-ci.org/repos/' . $slug . '';
        $result = $this->doGet($url);
        $repository = new Repository($result['body']);
        return $repository;
    }
}