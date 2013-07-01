<?php
class primes {

	static $primeList = array();

	function __construct(){
		$this->primeList = array(2); 
	}
	public function primeNo($number){

		if(!isset($primeList[$number-1])){
			for($i=count($this->primeList)-1;$i<$number-1;$i++){
				$this->primeList[]= (int)  gmp_strval(gmp_nextprime($this->primeList[$i]));	
			}
		}
		return $this->primeList[$number-1];

	}

	public function primeFactors ($number){
		$return = array();
		$current = 1;
		while ($number != 1){
			if($number % $this->primeNo($current) == 0) {
				$number /= $this->primeNo($current);
				@$return[$current] = $return[$current] +1;
			}else{
				$current++;
			}
		}
		return $return;
	}

	public function divisors ($number) {
		$factors = $this->primeFactors($number);
		$total = 1;
		foreach($factors as $factor){
			$total *= ($factor+1);
		}
		return $total;
	}
	public function divisors2($number) {
		$dividers = 0;
		$stop = sqrt($number);
		for($i = 1; $i < $stop; $i++) {
			if($number%$i == 0) {
				$dividers += 2;
			}
		}
		if(is_int ($stop)) $dividers--;
		return $dividers;
	}
}
