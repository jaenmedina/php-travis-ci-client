<?php

use jaenmedina\PhpTravisCiClient\Handler\BranchHandler;

class BranchHandlerTest extends PHPUnit_Framework_TestCase
{
    public function testGetRepositoryById(){
        $id = 4571576;
        $branchHandler = new BranchHandler('[access_token]');
        $branches = $branchHandler->getById($id);
        $this->assertEquals('59898424', $branches[0]->id);
    }

    public function testGetRepositoryBySlug(){
        $slug = 'jaenmedina/slugifier';
        $branchHandler = new BranchHandler('[access_token]');
        $branches = $branchHandler->getBySlug($slug);
        $this->assertEquals('59898424', $branches[0]->id);
    }

}