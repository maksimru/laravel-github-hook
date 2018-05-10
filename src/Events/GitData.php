<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 1/17/2018
 * Time: 12:48
 */

namespace HighSolutions\GitHubHook\Events;

trait GitData
{

    public function getRepository()
    {
        return $this->payload->repository->full_name;
    }

    public function getBranch()
    {
        return substr($this->isTaggedCommit() ? $this->payload->base_ref : $this->payload->ref, strlen('refs/heads/'));
    }

    public function getCommitName()
    {
        return $this->payload->head_commit->message;
    }

    public function getCommitSHA()
    {
        return $this->payload->head_commit->id;
    }

    public function getSender()
    {
        return $this->payload->head_commit->committer->name;
    }

    public function isTaggedCommit()
    {
        return !is_null($this->payload->base_ref);
    }

    public function getTag()
    {
        return $this->isTaggedCommit() ? substr($this->payload->ref, strlen('refs/tags/')) : null;
    }

}