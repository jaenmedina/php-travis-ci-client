<?php

namespace jaenmedina\PhpTravisCiClient\Entity;

class Branch extends TravisEntity
{

    /**
     * @var int
     * @desc Branch ID
     * @see https://docs.travis-ci.com/api#branches
     */
    public $id;

    /**
     * @var int
     * @desc Repository ID
     * @see https://docs.travis-ci.com/api#branches
     */
    public $repository_id;

    /**
     * @var int
     * @desc Branch number
     * @see https://docs.travis-ci.com/api#branches
     */
    public $number;

    /**
     * @var array
     * @desc Branch config
     * @see https://docs.travis-ci.com/api#branches
     */
    public $config;

    /**
     * @var string
     * @desc Branch state
     * @see https://docs.travis-ci.com/api#branches
     */
    public $state;

    /**
     * @var string
     * @desc Time the branch was started
     * @see https://docs.travis-ci.com/api#branches
     */
    public $started_at;

    /**
     * @var string
     * @desc Time the branch was finished
     * @see https://docs.travis-ci.com/api#branches
     */
    public $finished_at;

    /**
     * @var int
     * @desc Build ID
     * @see https://docs.travis-ci.com/api#branches
     */
    public $duration;

    /**
     * @var array
     * @desc Build ID
     * @see https://docs.travis-ci.com/api#branches
     */
    public $job_ids;

    /**
     * @var boolean
     * @desc Build ID
     * @see https://docs.travis-ci.com/api#branches
     */
    public $pull_request;

}