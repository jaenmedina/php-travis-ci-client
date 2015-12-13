<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpRestClient\Methods\Get;
use jaenmedina\PhpTravisCiClient\Entity\Commit;

class CommitHandler
{
    /**
     * @param int $id
     * @return Commit[]
     */
    public function getByBranchId($id){
        $url = 'api.travis-ci.org/repos/' . $id . '/branches';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        $commits = array();
        $commitArray = json_decode($result['body']);
        foreach ($commitArray->commits as $commit) {
            $commits[] = new Commit($commit);
        }
        return $commits;
    }

    /**
     * @param string $slug
     * @return Commit[]
     */
    public function getByBranchSlug($slug){
        $url = 'api.travis-ci.org/repos/' . $slug . '/branches';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        $commits = array();
        $commitArray = json_decode($result['body']);
        foreach ($commitArray->commits as $commit) {
            $commits[] = new Commit($commit);
        }
        return $commits;
    }
}