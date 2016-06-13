<?php

	include_once('SalaryPrinter.php');
	include_once('SalaryCollector.php');
	include_once('SalaryBonusCollector.php');
	include_once('Teacher.php');
	include_once('Security.php');

	$schoolEmployee = array(
		new Teacher("Jhon", 100),
		new Teacher("Doe", 200),
		new Teacher("larry", 100),
		new Security("Gon", 500),
		new Security("Jack", 400),
	);

	/*
	* open close principle
	* Teacher increment salary 20%
	* Security increment salary 10%
	*/
	$salaryCollector = new SalaryCollector($schoolEmployee);
	/*
	* implement single responsibility principle with using SalaryPrinter for handle printer job
	*/
	$printer = new SalaryPrinter($salaryCollector);
	var_dump($printer->toJSON());
	var_dump($printer->toHTML());

	/*
	* implement Linkov substitution principle using SalaryBonusCollector that not disturb the parent class
	*/
	$bonus = new SalaryBonusCollector($schoolEmployee);
	$printerBonus = new SalaryPrinter($bonus);
	var_dump($printerBonus->toJSON());

	/*
	* implement interface segregation principle at class teacher that implement only method which needed.
	* TeacherInterface only available for teacher class
	*/
	$mathTeacher = new Teacher("gordon",500);
	$mathTeacher->doTeaching();
	
	/*
	* Implementation Dependency Inversion principle at SalaryPrinter class which depend on abstraction
	* instead depend on concresion
	*/
	$fixedEmployeeSalary = new SalaryCollector([new Teacher("Gorkon", 6000)]);
	$fixedPrint = new SalaryPrinter($fixedEmployeeSalary);
	var_dump($fixedPrint->toJSON());