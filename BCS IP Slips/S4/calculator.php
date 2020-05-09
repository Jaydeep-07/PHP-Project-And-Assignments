<?php
	class Calculator
	{
		private $a, $b;

		function __construct($a,$b)
		{
			$this->a=$a;
			$this->b=$b;
		}

		public function add()
		{
			return $this->a+$this->b;
		}

		public function sub()
		{
			return $this->a-$this->b;
		}

		public function mult()
		{
			return $this->a*$this->b;
		}

		public function div()
		{
			return $this->a/$this->b;
		}
	}

	$n1 = $_POST['no1'];
	$n2 = $_POST['no2'];
	$op = $_POST['op'];

	$ob = new Calculator($n1,$n2);

	switch($op)
	{
	case '+':
		echo "Answer:".$ob->add();
		break;
	case '-':
		echo "Answer:".$ob->sub();
		break;
	case '*':
		echo "Answer:".$ob->mult();
		break;
	case '/':
		echo "Answer:".$ob->div();
	}
?>
