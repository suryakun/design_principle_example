<?php

	include_once("Person.php");

	class Student extends Person
	{
		
		function __construct($name='')
		{
			$this->name = $name;
		}

		/*
		* Override do something method for polymorphism
		*/
		public function doSomething()
		{
			echo "I study really hard";
		}
	}