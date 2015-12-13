<?php

namespace jaenmedina\PhpTravisCiClient\Handler;

use jaenmedina\PhpTravisCiClient\Entity\Job;

class JobHandler extends TravisHandler
{
    /**
     * @param int $id
     * @return Job
     */
    public function getById($id)
    {
        $url = 'api.travis-ci.org/jobs/' . $id . '';
        $result = $this->doGet($url);
        $job = new Job($result['body']);
        return $job;
    }

    public function restartJobById($id)
    {
        $url = 'api.travis-ci.org/jobs/' . $id . '/restart';
        $result = $this->doPost($url);
        return $result;
    }

    public function cancelJobById($id)
    {
        $url = 'api.travis-ci.org/jobs/' . $id . '/cancel';
        $result = $this->doPost($url);
        return $result;
    }
}