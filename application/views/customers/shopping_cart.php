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
	padding:0.3em 0.5em;
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
		<th>artnr.</th>
		<th>productfoto</th>
		<th>productnaam</th>
		<th>omschrijving</th>
		<th>aantal</th>
		<th>&nbsp;</th>
		<th>prijs</th>
		<th>totaal</th>
	</tr>
	<?php echo $shopping_cart_items; ?>
	<tr><td colspan='4'></td><td></td>
	<td>
		<a href='<?php echo BASE_URL; ?>customers/empty_cart'>
			<img src='<?php echo BASE_URL; ?>public/img/drop.png' alt='drop.png' />
		</a>
	<td>
	</td></td><td>&euro; <?php echo $totalprice; ?></td>
</table>