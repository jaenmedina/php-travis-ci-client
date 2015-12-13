<?php

use jaenmedina\PhpTravisCiClient\Handler\BuildHandler;

class BuildHandlerTest extends PHPUnit_Framework_TestCase
{
    public function testGetBuildsByRepositoryName(){
        $repositoryName = 'sinatra/sinatra';
        $buildHandler = new BuildHandler('[access_token]');
        $builds = $buildHandler->getByRepositoryName($repositoryName);
        $this->assertEquals(94825892, $builds[0]->id);
    }
}