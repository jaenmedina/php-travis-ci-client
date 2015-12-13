<?php

namespace jaenmedina\PhpTravisCiClient\Entity;

class Commit extends TravisEntity
{
    /**
     * @var int
     * @desc Commit ID
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $id;

    /**
     * @var string
     * @desc Commit sha
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $sha;

    /**
     * @var string
     * @desc Branch the commit is on
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $branch;

    /**
     * @var string
     * @desc Commit message
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $message;

    /**
     * @var string
     * @desc Commit date
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $committed_at;

    /**
     * @var string
     * @desc Author name
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $author_name;

    /**
     * @var string
     * @desc Author email
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $author_email;

    /**
     * @var string
     * @desc Committer name
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $committer_name;

    /**
     * @var string
     * @desc Committer email
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $committer_email;

    /**
     * @var string
     * @desc Link to diff on GitHub
     * @see https://docs.travis-ci.com/api#repositories
     */
    public $compare_url;
}