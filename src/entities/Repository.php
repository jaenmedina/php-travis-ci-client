<?php

namespace jaenmedina\PhpTravisCiClient\Entity;

class Repository extends TravisEntity
{
    /**
     * @var int
     * @desc Repository ID
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $id;

    /**
     * @var string
     * @desc Repository slug.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $slug;

    /**
     * @var string
     * @desc Description on githuB.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $description;

    /**
     * @var int
     * @desc Build id of the last build.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $last_build_id;

    /**
     * @var int
     * @desc Build number of the last build.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $last_build_number;

    /**
     * @var string
     * @desc Build state of the last build.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $last_build_state;

    /**
     * @var int
     * @desc Build duration of the last build.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $last_build_duration;

    /**
     * @var string
     * @desc Build started at of the last build.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $last_build_started_at;

    /**
     * @var string
     * @desc Build finished at of the last build.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $last_build_finished_at;

    /**
     * @var string
     * @desc Language on github.
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $github_language;
}