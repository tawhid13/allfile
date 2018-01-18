<?php 
class Person {
	public function __construct ($first_name,$last_name){$this->first_name=$first_name;
		$this->last_name=$last_name;}
		public $first_name;
		public $last_name;
		public function fullName(){
			return $this->first_name.''. $this->last_name;
		}
}
$kid = new Person('sadia', 'ornni');
echo $kid->fullName();
?>