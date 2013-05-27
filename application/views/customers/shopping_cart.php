<style>
.odd
{
	background-color :RGBA(214,214,214,1);
    //border :1px solid black;
	//font-size:1em;
}

.even
{
	background-color:RGBA(214,214,214,0.5);
	//border:1px solid black;
	//font-size:1em;
}

.highlight
{
	background-color:RGBA(200,200,200,1.0);
	//border:1px solid black;
	//font-size:1em;
}

td, th
{
	padding:0.3em 1.0em;
	text-align:center;
}

</style>
<script type='text/javascript'>
	$('document').ready(function(){
		$(".articles tr:even").addClass("even");
		$(".articles tr:odd").addClass("odd");
		$(".articles tr").hover(
			function(){
				$(this).toggleClass('highlight');
			},
			function(){
				$(this).toggleClass('highlight');
			}
		);
	});
</script>

<h3><?php echo $header; ?></h3>
<table class='articles'>
	<tr>
		<th>artikelnr.</th>
		<th>productfoto</th>
		<th>productnaam</th>
		<th>omschrijving</th>
		<th>aantal</th>
		<th>prijs</th>
		<th>totaal</th>
	</tr>
	<?php echo $shopping_cart_items; ?>
	<tr><td colspan='6'></td><td>&euro; <?php echo $totalprice; ?></td>
</table>
<?php
	if ( isset($_SESSION['tmp_cart']))
	{
		//var_dump($_SESSION['tmp_cart']->get_items());
	} 
?>