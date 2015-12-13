<?php

namespace jaenmedina\PhpTravisCiClient\Entity;

class Job extends TravisEntity
{
    /**
     * @var int
     * @desc Job ID
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $id;

    /**
     * @var int
     * @desc Build ID
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $build_id;

    /**
     * @var int
     * @desc Repository ID
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $repository_id;

    /**
     * @var int
     * @desc Commit ID
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $commit_id;

    /**
     * @var int
     * @desc Log ID
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $log_id;

    /**
     * @var int
     * @desc Job number
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $number;

    /**
     * @var array
     * @desc Job config (secure values and ssh key removed)
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $config;

    /**
     * @var string
     * @desc Job state
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $state;

    /**
     * @var string
     * @desc Time the job was started
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $started_at;

    /**
     * @var string
     * @desc Time the job finished
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $finished_at;

    /**
     * @var int
     * @desc Job duration
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $duration;

    /**
     * @var array
     * @desc Job queue
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $queue;

    /**
     * @var boolean
     * @desc Whether or not job state influences build state
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $allow_failure;

    /**
     * @var array
     * @desc List of annotation ids
     * @see https://docs.travis-ci.com/api#jobs
     */
    public $annotation_ids;
}