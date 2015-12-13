<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpTravisCiClient\Entity\Branch;

class BranchHandler extends TravisHandler
{
    /**
     * @param int $id
     * @return Branch
     */
    public function getById($id){
        $url = 'api.travis-ci.org/repos/' . $id . '/branches';
        $result = $this->doGet($url);
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
        $result = $this->doGet($url);
        $branches = array();
        $branchArray = json_decode($result['body']);
        foreach ($branchArray->branches as $branch) {
            $branches[] = new Branch($branch);
        }
        return $branches;
    }
}