<?php

	include_once("SalaryInterface.php");
	
	/**
	* Data converter for implement Single responsibility principle
	*/
	class SalaryPrinter
	{
		
		protected $collector; //encapsulate collector variable

		function __construct(SalaryInterface $collector)
		{
			$this->collector = $collector;
		}

		public function toJSON()
		{
			return json_encode(array("amount"=>$this->collector->calculateAmount()));
		}

		public function toHTML()
		{
			return implode("", array(
				"<h1>",
				"amount of salaries is :",
				$this->collector->calculateAmount(), "</h1>")
			);
		}

	}