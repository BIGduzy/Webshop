<?php 
 class CustomersController extends Controller
 {
	public function homepage()
	{
		$this->set("header", "Customer homepage");
	}

	public function add_to_cart($id, $number=1)
	{
		if ( !isset($_SESSION["tmp_cart"]))
		{
			$_SESSION["tmp_cart"] = new Shoppingcart();
			var_dump($_SESSION["tmp_cart"]);
		}
		//session_start();
		$product = $this->_model->find_product_by_id($id);
		var_dump($product);
		//$_SESSION["tmp_cart"]->add_to_cart($product,$number);
		var_dump($_SESSION["tmp_cart"]);
	}	
 }
?>