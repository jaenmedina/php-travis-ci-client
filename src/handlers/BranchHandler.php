<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpRestClient\Methods\Get;
use jaenmedina\PhpTravisCiClient\Entity\Branch;

class BranchHandler extends TravisHandler
{
    /**
     * @param int $id
     * @return Branch
     */
    public function getById($id){
        $url = 'api.travis-ci.org/repos/' . $id . '/branches';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        $branches = array();
        $branchArray = json_decode($result['body']);
        foreach ($branchArray->branches as $branch) {
            $branches[] = new Branch($branch);
        }
        return $branches;
    }

    /**
     * @param string $slug
     * @return Branch
     */
    public function getBySlug($slug){
        $url = 'api.travis-ci.org/repos/' . $slug . '/branches';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        $branches = array();
        $branchArray = json_decode($result['body']);
        foreach ($branchArray->branches as $branch) {
            $branches[] = new Branch($branch);
        }
        return $branches;
    }
}