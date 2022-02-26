<?php

class FooBar{
	public string $name;
	function __construct(string $name){
		$this->name = $name;
	}

	function get_name() : string{
		return $this->name;
	}
}