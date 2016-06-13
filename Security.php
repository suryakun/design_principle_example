<?php

	include_once("StaffInterface.php");

	class Security implements StaffInterface
	{
		
		function __construct($name='', $salary=0)
		{
			$this->name = $name;
			$this->salary = $salary;
		}

		public function incrementSalary()
		{
			return $this->salary + ($this->salary * (10/100));
		}

	}