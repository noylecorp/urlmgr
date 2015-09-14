<?php

namespace Noylecorp\Url;

class Manager
{
	protected $urls;

	public function __construct(array $urls)
	{
		$this->urls = $urls;
	}

	public function get($key, $default = null)
	{
		if (isset($this->urls[$key])) {
			return $this->urls[$key];
		}

		return $default;
	}
}