<?php

class User {
	private $name;
	protected $age;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
}


class Student extends User {
	public function setAge($age) {
		$this->age = $age;
	}
}


$user = new Student();
$user->setName('Anton');
$user->setAge(25);
echo $user->getName();


$test = $user;
$test->setName('test');

echo $user->getName();
echo $test->getName();



?>