<?php

use jaenmedina\PhpTravisCiClient\Handler\CommitHandler;

class CommitHandlerTest extends PHPUnit_Framework_TestCase
{
    public function testGetRepositoryById()
    {
        $id = 4571576;
        $commitHandler = new CommitHandler('[access_token]');
        $commits = $commitHandler->getByBranchId($id);
        $this->assertEquals('17127590', $commits[0]->id);
    }

    public function testGetRepositoryBySlug()
    {
        $slug = 'jaenmedina/slugifier';
        $commitHandler = new CommitHandler('[access_token]');
        $commits = $commitHandler->getByBranchSlug($slug);
        $this->assertEquals('17127590', $commits[0]->id);
    }
}