<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpTravisCiClient\Entity\Commit;

class CommitHandler extends TravisHandler
{
    /**
     * @param int $id
     * @return Commit[]
     */
    public function getByBranchId($id){
        $url = 'api.travis-ci.org/repos/' . $id . '/branches';
        $result = $this->doGet($url);
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
        $result = $this->doGet($url);
        $commits = array();
        $commitArray = json_decode($result['body']);
        foreach ($commitArray->commits as $commit) {
            $commits[] = new Commit($commit);
        }
        return $commits;
    }
}