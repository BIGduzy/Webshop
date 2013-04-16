<script type='text/javascript'>
	$('document').ready(function(){
		$('#login').click(function(){
			$('#dialogformlogin').dialog('open');
		});
		
		$('#dialogformlogin').dialog(
		{
			autoOpen:false,
			modal:true
		});
		
		$('#register').click(function(){
			$('#dialogformregister').dialog('open');
		});
		
		$('#dialogformregister').dialog(
		{
			autoOpen:false,
			modal:true
		});
	});
</script>
<style>
h2
{
	border:0px solid black;
	display:inline;
}
button
{
	border:0px solid black;
	float:right;
	background-color:RGBA(214,214,214,1);
}
#space
{
	border:0px solid black;
	float:right;
	width:2em;
}
</style>

<h2>Webshop</h2>
<button id='register'>register</button>
<div id='space'>|</div>
<button id='login'>login</button>
<div id='dialogformlogin'>
<table>
	<form action='../users/login' method='post' >
		<tr>
			<td>gebruikersnaam</td>
			<td><input type='text' name='username' /></td>
		</tr>
		<tr>
			<td>wachtwoord</td>
			<td><input type='password' name='password' /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' value='go!' /></td>
		</tr>	
	</form>
</table>
</div>
<div id='dialogformregister'>
<table>
	<form action='../users/register' method='post' >
		<tr>
			<td>Emailadres</td>
			<td><input type='text' name='emailaddress' /></td>
		</tr>
		<tr>
			<td>Wachtword</td>
			<td><input type='password' name='password' /></td>
		</tr>
		<tr>
			<td>Voornaam</td>
			<td><input type='text' name='firstname' /></td>
		</tr>
		<tr>
			<td>Tussenvoegsel</td>
			<td><input type='text' name='infix' /></td>
		</tr>
		<tr>
			<td>Achternaam</td>
			<td><input type='text' name='surname' /></td>
		</tr>
		<tr>
			<td>Woonplaats</td>
			<td><input type='text' name='residence' /></td>
		</tr>
		<tr>
			<td>Straat</td>
			<td><input type='text' name='street' /></td>
		</tr>
		<tr>
			<td>Huisnummer</td>
			<td><input type='text' name='housenumber' /></td>
		</tr>
		<tr>
			<td>Postcode</td>
			<td><input type='text' name='zipcode' /></td>
		</tr>
		<tr>
			<td>Telefoon</td>
			<td><input type='text' name='phonenumber' /></td>
		</tr>
		<tr>
			<td>Mobiel</td>
			<td><input type='text' name='mobilephone' /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' value='go!' /></td>
		</tr>	
	</form>
</table>
</div>