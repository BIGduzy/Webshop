<style>
.odd
{
	background-color :RGBA(214,214,214,1);
    border :1px solid red;
	font-size:1em;
}

.even
{
	background-color:RGBA(214,214,214,0.5);
	border:1px solid black;
	font-size:1em;
}

.highlight
{
	background-color:RGBA(200,200,200,1.0);
	border:1px solid black;
	font-size:1em;
}

td, th
{
	padding:0.3em 1.0em;
	text-align:center;
}

</style>
<script type='text/javascript'>
	$('document').ready(function(){
		$("tr:even").addClass("even");
		$("tr:odd").addClass("odd");
		$("tr").hover(
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
<table>
	<tr>
		<th>artikelnr.</th>
		<th>productfoto</th>
		<th>productnaam</th>
		<th>prijs</th>
	</tr>
	<?php echo $products; ?>
</table>
<?php echo $pagenumbers; ?>