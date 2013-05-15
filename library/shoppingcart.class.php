<?php
 class Shoppingcart
 {
	//Field
	private $items = array();

	public function get_items()
	{
		return $this->items;
	}

	public function add_to_cart($product, $number)
	{
		$this->items[] = 3;
	}
 }
?>