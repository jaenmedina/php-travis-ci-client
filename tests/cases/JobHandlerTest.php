<?php

use \jaenmedina\PhpTravisCiClient\Handler\JobHandler;

class JobHandlerTest extends PHPUnit_Framework_TestCase
{
    public function testGetJobById()
    {
        $id = 59898425;
        $jobHandler = new JobHandler('[access_token]');
        $job = $jobHandler->getById($id);
        $this->assertEquals('59898425', $job->id);
        $this->assertEquals('4571576', $job->repository_id);
        $this->assertEquals('finished', $job->state);
    }

    public function testRestartJobById()
    {
        // TODO: Correct this test
        $id = 42;
        $jobHandler = new JobHandler('[access_token]');
        $result = $jobHandler->restartJobById($id);
        $this->assertTrue($result);
    }

    public function testCancelJobById()
    {
        // TODO: Correct this test
        $id = 42;
        $jobHandler = new JobHandler('[access_token]');
        $jobHandler->restartJobById($id);
        $result = $jobHandler->cancelJobById($id);
        $this->assertTrue($result);
    }

}