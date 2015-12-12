<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

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

}