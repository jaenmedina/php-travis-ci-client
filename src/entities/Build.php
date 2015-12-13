<?php

namespace jaenmedina\PhpTravisCiClient\Entity;

class Build extends TravisEntity
{
    /**
     * @var int
     * @desc Build ID
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $id;

    /**
     * @var int
     * @desc Repository id
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $repository_id;

    /**
     * @var int
     * @desc Commit ID
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $commit_id;

    /**
     * @var int
     * @desc Build number
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $number;

    /**
     * @var bool
     * @desc True or False
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $pull_request;

    /**
     * @var string
     * @desc PR title if pull_request is true
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $pull_request_title;

    /**
     * @var int
     * @desc PR number if pull_request is true
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $pull_request_number;

    /**
     * @var string
     * @desc Build config (secure values and ssh key removed)
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $config;

    /**
     * @var string
     * @desc Build state
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $state;

    /**
     * @var string
     * @desc Time the build was started
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $started_at;

    /**
     * @var string
     * @desc Time the build finished
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $finished_at;

    /**
     * @var int
     * @desc build duration
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $duration;

    /**
     * @var array
     * @desc list of job ids in the build matrix
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $job_ids;

}