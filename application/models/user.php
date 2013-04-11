<?php
 class User extends Model
 {
		
	public function select_all()
	{
		return $this->query("SELECT *
							 FROM `users`, `userroles`
							 WHERE `users`.`user_id` = `userroles`.`userrole_id`");
	}
	
	

	
	
	public function select_user_from_login($post)
	{
		$query = "SELECT *
				  FROM   `userroles`, `logins`
				  WHERE  `userroles`.`userrole_id` = `logins`.`login_id`
				  AND    `logins`.`username` = '".$post['username']."'
				  AND	 `logins`.`password` = '".$post['password']."'";
		return $this->query($query);
	
	}
 }
?>