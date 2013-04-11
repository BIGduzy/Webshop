<div id='link'>
	<ul>
		<?php if ( isset($_SESSION['userrole'] ))
		{
			switch ($_SESSION['userrole'])
			{
				case "administrator":
					echo "<li><a href='../administrators/viewall'>gebruikers</a></li>";
					echo "<li><a href='../administrators/add_user'>voeg toe</a></li>";
					echo "<li><a href=''>Admin3</a></li>";
					echo "<li><a href=''>Admin4</a></li>";
					echo "<li><a href=''>Admin5</a></li>";
					echo "<li><a href=''>Admin6</a></li>";
				break;
				case "root":
					echo "<li><a href=''>root1</a></li>";
					echo "<li><a href=''>root2</a></li>";
					echo "<li><a href=''>root3</a></li>";
					echo "<li><a href=''>root4</a></li>";
				break;
			}
			echo "<li><a href='../users/logout'>logout</a></li>";
		}
		else
		{
			echo "<li><a href=''>TODO1</a></li>";
			echo "<li><a href=''>TODO2</a></li>";
			echo "<li><a href=''>TODO3</a></li>";
			echo "<li><a href=''>TODO4</a></li>";
			echo "<li><a href=''>TODO5</a></li>";
		}
		?>
	</ul>
</div>