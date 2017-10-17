<?php  
	#创建一个类
	/*
		public -内部-外部-子级
		protected -内部-子级
		private -内部
	*/
	class Person{
		public $name;
		private $email;
		private $tel;//私有的,在外部打印不出来

		//静态变量
		private static $age = 40;

		public static function getAge(){
			return Person::$age;
		}

		public function setTel($myTel){
			$this->tel = $myTel;
		}
		public function getTel(){
			return $this->tel;
		}
		public function setEmail($myEmail){
			$this->email = $myEmail;
		}
		public function getEmail(){
			return $this->email; 
		}

		// #构造函数
		public function __construct($name,$email){
			$this->name = $name;
			$this->email = $email;

			echo __CLASS__."对象已被创建<br>";
			// echo "Person  对象已被创建!";
		}
		#析构函数
		public function __destruct(){
			echo "<br>".__CLASS__."对象已被销毁";
		}
	}
	//默认执行构造函数
	// $person1 = new Person;//开辟空间并初始化
	// //设置公有name并打印
	// $person1->name = "Ivan";
	// echo "name : ".$person1->name;
	// //设置私有tel并打印
	// $person1->setTel("18034935566");
	// echo "<br>Tel : ".$person1->getTel();
	// //设置私有email并打印
	// $person1->setEmail("562281476@qq.com");
	// echo "<br>email : ".$person1->getEmail();

	// //如果自己写构造函数
	// $person1 = new Person("miaojie","mj@gmail.com");//将值传入构造函数中
	// echo "<br>Name : ".$person1->name;//public 的变量可以在外部打印
	// echo "<br>Email : ".$person1->getEmail();
	// //private 的变量不可以在外部直接打印,必须调用公有函数getEmail();

	#继承
	class Customers extends Person{
		private $salary;
		public function setSalary($mysalary){
			$this->salary = $mysalary;
		}
		public function getSalary(){
			return $this->salary;
		}
		public function __construct($name,$email,$salary){
			//调用父级的函数,用来拿到父级的私有值,相当于重写父级的__construct函数
			parent::__construct($name,$email);
			$this->salary = $salary;
		}
	}

	$customer = new Customers("Buckey","buckey@gmail.com",3000);
	// $customer->setSalary(3000);
	echo $customer->getSalary();

	//调用静态变量
	echo "<br>"; 
	echo Person::getAge();

?>




















