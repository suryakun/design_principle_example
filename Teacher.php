<?php

	include_once("StaffInterface.php");
	include_once("TeacherInterface.php");
	
	class Teacher implements StaffInterface, TeacherInterface
	{
		
		function __construct($name='', $salary=0)
		{
			$this->name = $name;
			$this->salary = $salary;
		}

		public function incrementSalary()
		{
			return $this->salary + ($this->salary * (20/100));
		}

		public function doTeaching()
		{
			echo "Teach Math today";
		}

	}