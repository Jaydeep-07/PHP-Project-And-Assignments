<?php
	abstract class Shape{
		protected $d1,$d2;

		function Shape($d1,$d2){
			$this->d1 = $d1;
			$this->d2 = $d2;
		}

		abstract function calcArea();
	}

	class Circle extends Shape{
		function Circle($radius){
			$this->Shape($radius,0);
		}

		public function calcArea(){
			return M_PI*$this->d1*$this->d1;
		}
	}

	class Square extends Shape{
		function Square($side){
			$this->Shape($side,0);
		}

		public function calcArea(){
			return $this->d1 * $this->d1;
		}
	}

	class Triangle extends Shape{
		private $d3;
		
		function Triangle($side1,$side2,$side3){
			$this->Shape($side1,$side2);
			$this->d3 = $side3;
		}

		public function calcArea(){
			$s = ($this->d1+$this->d2+$this->d3)/2;
			return sqrt($s*($s-$this->d1)*($s-$this->d2)*($s-$this->d3));
		}
	}

	$r = $_POST['r'];
	$s = $_POST['s'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$choice = $_POST['op'];

	$obj = null;

	switch($choice){
	case 1:
		$obj = new Circle($r);
		break;
	case 2:
		$obj = new Square($s);
		break;
	case 3:
		$obj = new Triangle($a,$b,$c);
	}

	printf("Area = %.2f",$obj->calcArea());
?>
<br><a href='shape.html'>Go Back</a> 


 
