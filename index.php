<!DOCTYPE html>
<html>
	<head>
		<title>Practice 2</title>
		<style>
			#block {
				background: black;
				width: 100px;
				height: 100px;
				border-radius: 50%;
			}

			.draw {
				background: red;
				width: 5px;
				height: 5px;
				position: absolute;
				top: 55px;
				left: 10px;
			}
		</style>
	</head>
	<body>
		<div id="block"></div>
		<div id="msg"></div>
		<!-- <div class="draw"></div> -->
		<p>
			<?php
			$name = "Jack";
			$len = strlen($name);
			$jack = rand(0, ($len - 1));
			// rand(min, max)
			print substr($name, $jack, 1);
			// substr(string, start, length)
			?>
		</p>
		<p>
			<?php
			$myString = "jack";
			$findMe = "c";
			$pos = strpos("jack", "a");
			if ($pos === false) {
				print "Please check your spelling and try again";
			} else {
				print "There is a $findMe in $myString";
			}
			?>
		</p>
		<p>
			<?php
			$array = array(0, 5, 3, 6, 2, 9);
			sort($array);
			print join(", ", $array);
			?>
		</p>
		<p>
			<?php
			rsort($array);
			print join(":", $array);
			?>
		</p>
		<p>
			<?php
			/*why doesn't this run?
			$array = array();
			array_push($array, "Keith");
			array_push($array, "Susan");
			array_push($array, "Vladi");
			array_push($array, "Guy");
			array_push($array, "Calib");
			sort($array);
			print count($array);
			$length = strlen($array);
			$winner = rand($array, ($length - 1));
			$uppercase = strtoupper($winner);
			print $uppercase;
			*/
			?>
		</p>
		<p>
			<?php
			function aboutMe($_name, $age) {
				echo "Hello! My name is $_name and I am $age years old.";
			}
			$_name = "Jack";
			$age = 24;
			aboutMe($_name, $age);
			?>
		</p>
		<p>
			<?php
			$days = array("monday", "tuesday", "wednesday");
			print count($days);
			?>
		</p>

		<!-- OBJECT ORIENTED PROGRAMMING -->
		<h3>Object Oriented Programming</h3>

		<p>
			<?php
			class Person {
				public $isAlive = true;
				public $firstname;
				public $lastname;
				public $age;

				public function __construct($firstname, $lastname, $age) {
					$this->firstname = $firstname;
					$this->lastname = $lastname;
					$this->age = $age;
				}

				public function greet() {
					return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". I am " . $this->age . " years old.";
				}
			}

			$teacher = new Person("John", "Smith", 32);
			$student = new Person("Jack", "Reuter", 24);

			echo $student->lastname;
			echo $teacher->greet();
			?>
		</p>

		<p>
			<?php
			class Cat {
				public $isAlive = true;
				public $numLegs = 4;
				public $name;
				public function __construct($name) {
					$this->name = $name;
				}
				public function meow() {
					return "Meow meow";
				}
			}

			$cat1 = new Cat("CodeCat");
			echo $cat1->meow();
			?>
		</p>

		<p>
			<?php
			$myArray = array('make' => 'BMW', 'model' => 'M4', 'year' => 2017);
			foreach ($myArray as $key => $value) {
				echo $key . ": " . $value . "<br/>";
			}
			?>
		</p>
		<p>
			<?php
			class Animals {
				public $isAlive = true;
				public $type;
				public $age;
				public $sex;

				public function __construct ($type, $age, $sex) {
					$this->type = $type;
					$this->age = $age;
					$this->sex = $sex;
				}

				public function speak() {
					return "I am a " . $this->sex . " " . $this->type . " " . "and I am " . $this->age . " " . "years old.";
				}
			}

			$animal = new Animals("bird",	2, "male");
			echo $animal->speak();
			?>
		</p>



		<script>
			var block = document.getElementById("block");
			var onMouseMove = function (e) {
				var draw = document.createElement("div");
				draw.className = "draw";
				document.body.appendChild(draw);
				document.getElementById("msg").textContent += "boooom ";
				draw.style.top = e.clientY + "px";
				draw.style.left = e.clientX + "px";
			};
			block.addEventListener("mousemove", onMouseMove);

			var myArray = [true, true, true, false, true, true];
			var myItem = null;
			while (myItem !== false) {
				console.log('My array has ' + myArray.length + ' items now.  This loop will go until we pop a false.');
				myItem = myArray.pop();
			}

		</script>
	</body>
</html>