<?php

namespace jaenmedina\PhpTravicCiClient\Test;
use jaenmedina\PhpTravisCiClient\Handler\RepositoryHandler;
use PHPUnit_Framework_TestCase;

class RepositoryHandlerTest extends PHPUnit_Framework_TestCase {

    public function testGetRepositoryById(){
        $id = 4571576;
        $repositoryHandler = new RepositoryHandler('[access_token]');
        $repository = $repositoryHandler->getById($id);
        $this->assertEquals('jaenmedina/slugifier', $repository->slug);
    }

    public function testGetRepositoryBySlug(){
        $slug = 'jaenmedina/slugifier';
        $repositoryHandler = new RepositoryHandler('[access_token]');
        $repository = $repositoryHandler->getBySlug($slug);
        $this->assertEquals(4571576, $repository->id);
    }

}