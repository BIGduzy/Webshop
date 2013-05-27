<?php
 class Shoppingcart
 {
	//Field
	private $items = array();

	//Property
	public function get_items()
	{
		return $this->items;
	}

	public function add_to_cart($product, $number)
	{
	 //var_dump($product);
	 foreach ( $this->items as $key => $value)
	 {
		// 1 Kijk of het meegegeven id gelijk is aan het id binnen het items array
		if ( $value['id'] == $product[0]['Product']['product_id'])
		{
			// 2 Als dit waar is, verhoog dan het veld 'aantal van het items array'
			$this->items[$key]['aantal'] += $number;
			var_dump($this->items);
			return;
		}		
	 }
     $this->items[] = array( 'id' => $product[0]['Product']['product_id'],
							 'name' => $product[0]['Product']['product_name'],
							 'description' => $product[0]['Product']['product_description'],
							 'price' => $product[0]['Product']['product_price'],
							 'foto_name' => $product[0]['Product']['foto_name'],
							 'aantal' => $number);
	 var_dump($this->items);
	}
 }
?>