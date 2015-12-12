<?php

namespace jaenmedina\PhpTravicCiClient\Test;
use PHPUnit_Framework_TestCase;
use jaenmedina\PhpTravisCiClient\Entity\Repository;

class RepositoryTest extends PHPUnit_Framework_TestCase {

    public function testGetRepositoryById(){
        $id = 4571576;
        $repository = new Repository('[access_token]');
        $result = $repository->getById($id);
        $this->assertEquals('jaenmedina/slugifier', $result->slug);
    }

    public function testGetRepositoryBySlug(){
        $slug = 'jaenmedina/slugifier';
        $repository = new Repository('[access_token]');
        $result = $repository->getBySlug($slug);
        $this->assertEquals(4571576, $result->id);
    }

}