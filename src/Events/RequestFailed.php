<?php

namespace HighSolutions\GitHubHook\Events;

use Illuminate\Queue\SerializesModels;

class RequestFailed
{
    use SerializesModels, GitData;
	
	public $message;
	public $payload;

	public function __construct($message, $payload = false)
	{
		$this->message = $message;
		$this->payload = $payload;
	}
}