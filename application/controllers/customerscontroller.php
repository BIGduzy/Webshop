<?php 
 class CustomersController extends Controller
 {
	public function homepage()
	{
		$this->set("header", "Customer homepage");
	}

	private function add_to_cart($id, $number)
	{
		if ( !isset($_SESSION["tmp_cart"]))
		{
			$_SESSION["tmp_cart"] = new Shoppingcart();
			var_dump($_SESSION["tmp_cart"]);
		}
		//session_start();
		$product = $this->_model->find_product_by_id($id);
		//var_dump($product);
		$_SESSION["tmp_cart"]->add_to_cart($product,$number);
		//var_dump($_SESSION["tmp_cart"]);		
		header("location:".BASE_URL."users/homepage");
	}

	public function add_to_cart_homepage($id, $number=1)
	{
		$this->add_to_cart($id, $number);
		header("location:".BASE_URL."users/homepage");
	}

	public function add_to_cart_shoppingcart($id, $number=1)
	{
		$this->add_to_cart($id, $number);
		header("location:".BASE_URL."customers/shopping_cart");
	}

	public function shopping_cart()
	{
		$this->set('header', 'Hieronder staat de inhoud van uw boodschappenkarretje');
		//var_dump($_SESSION['tmp_cart']);
		$shopping_cart_items = '';
		$totalprice = '';
		foreach ($_SESSION['tmp_cart']->get_items() as $value)
		{
			$shopping_cart_items .= "<tr>
										<td>".$value['id']."</td>
										<td><img src='".BASE_URL."public/fotos/
														thumbnails/tn_".
														$value['foto_name']."' alt='".
														$value['foto_name']."' /></td>
										<td>".$value['name']."</td>
										<td>".$value['description']."</td>
										<td>
											".$value['aantal'].
											"&nbsp;&nbsp;&nbsp;
											 <a href='".BASE_URL.
											 "customers/add_to_cart_shoppingcart/".
											 $value['id']."'>
											 <img src='".BASE_URL.
											"public/img/plus.png' alt='plus' /></a>
											 <a href=''><img src='".BASE_URL.
											"public/img/min.png' alt='min' /></a>
										</td>
										<td>&euro; ".$value['price']."</td>
										<td>&euro; ".$value['price'] * $value['aantal']."</td>
									</tr>";	
			$totalprice += $value['price'] * $value['aantal'];
		}
		$this->set('shopping_cart_items', $shopping_cart_items);
		$this->set('totalprice', $totalprice);

	}
 }
?>