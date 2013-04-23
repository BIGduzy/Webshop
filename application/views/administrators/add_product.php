<style>
table
{
	border-collapse:collapse;
}

td
{
	border:0px solid black;
	padding:1em;
}

.table_title
{
	font-size:1.3em;
	font-weight:bold;
	color:RGBA(20,20,20,0.5);
	padding-bottom:0px;
}

{
	color:RGBA(20,20,20,0.8);
	font-size:1.2em;
	padding:0.5em;
	width:230px;
}
</style>
<table>
		<tr>
			<td>&nbsp;</td>
			<td class='table_title'><?php echo $header; ?></td>
		</tr>
		<form action='./add_user' method='post' enctype='multipart/form-data'>
		<tr>
			<td>Productnaam</td>
			<td><input type='text' name='Productnaam' /></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><input type='file' name='foto' /></td>
		</tr>
		<tr>
			<td>Beschrijving product</td>
			<td><textarea cols='50' rows='5' name='Beschrijving'></textarea></td>
		</tr>
		<tr>
			<td>Prijs</td>
			<td><input type='text' name='Prijs' /></td>
		</tr>
		<tr>
			<td>Artikelnummer</td>
			<td><input type='password' name='Artikelnummer' /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' /></td>
		</tr>
	</form>
</table>