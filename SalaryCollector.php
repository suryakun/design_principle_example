<?php
	
	include_once("SalaryInterface.php");

	class SalaryCollector implements SalaryInterface
	{
		
		function __construct($staff = array())
		{
			$this->staff = $staff;
		}

		public function calculateAmount()
		{
			$amount = 0;
			foreach ($this->staff as $employee) {
				$amount += $employee->incrementSalary();
			}
			return $amount;
		}

	}