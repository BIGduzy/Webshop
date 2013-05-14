<p><h3><?php echo $header; ?></h3></p>
<table>
	<form action='<?php echo BASE_URL ?>administrators/update_user<?php echo $id; ?>' method='post'>
		<tr>
			<td>Voornaam</td>
			<td><input type='text' name='firstname'
						value='<?php echo $user['User']['firstname']; ?>' /></td>
		</tr>
		<tr>
			<td>Tussenvoegsel</td>
			<td><input type='text' name='infix' 
						value='<?php echo $user['User']['infix']; ?>' /></td>
		</tr>
		<tr>
			<td>Achternaam</td>
			<td><input type='text' name='surname'
						value='<?php echo $user['User']['surname']; ?>' /></td>
		</tr>
		<tr>
			<td>Gebruikersrol</td>
			<td>
				<select name='userrole'>
					<?php echo $userroles; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' /></td>
		</tr>
	</form>
</table>