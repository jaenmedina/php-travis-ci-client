<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpTravisCiClient\Entity\Build;

class BuildHandler extends TravisHandler
{
    /**
     * @param string $repositoryName
     * @return Build
     */
    public function getByRepositoryName($repositoryName){
        $url = 'api.travis-ci.org/repos/' . $repositoryName . '/builds';
        $result = $this->doGet($url);
        $builds = array();
        $buildsArray = json_decode($result['body']);
        foreach ($buildsArray as $build) {
            $builds[] = new Build($build);
        }
        return $builds;
    }

}