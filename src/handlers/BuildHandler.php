<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

namespace jaenmedina\PhpTravisCiClient\Handler;
use jaenmedina\PhpRestClient\Methods\Get;
use jaenmedina\PhpTravisCiClient\Entity\Build;

class BuildHandler extends TravisHandler
{
    /**
     * @param string $repositoryName
     * @return Build
     */
    public function getByRepositoryName($repositoryName){
        $url = 'api.travis-ci.org/repos/' . $repositoryName . '/builds';
        $getMethod = new Get($url);
        $getMethod->setCurlOption('CURLOPT_HTTPHEADER', '[\'Authorization: ' . $this->travisAccessToken . '\']');
        $result = $getMethod->execute();
        $builds = array();
        $buildsArray = json_decode($result['body']);
        foreach ($buildsArray as $build) {
            $builds[] = new Build($build);
        }
        return $builds;
    }

}