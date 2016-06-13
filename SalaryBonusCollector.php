<?php

	include_once("SalaryCollector.php");
	include_once("SalaryInterface.php");
	/**
	* Salary bonus class increase current amout by 100.
	*/
	class SalaryBonusCollector extends SalaryCollector implements SalaryInterface
	{
		
		function __construct($staff = array())
		{
			parent::__construct($staff);
		}

		public function calculateAmount()
		{
			$amount = 0;
			foreach ($this->staff as $employee) {
				$amount += $employee->incrementSalary();
			}
			$amount = $this->addBonus($amount);
			return $amount;
		}

		public function addBonus($amount)
		{
			return $amount += 100;
		}
	}