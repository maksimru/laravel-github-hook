<?php

namespace HighSolutions\GitHubHook\Events;

use Illuminate\Queue\SerializesModels;

class RequestSucceed
{
    use SerializesModels, GitData;
	
	public $payload;

	public function __construct($payload)
	{
		$this->payload = $payload;
	}
}