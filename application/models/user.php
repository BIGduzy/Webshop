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
		//echo $query;exit();
		return $this->query($query);
	
	}
	
	public function insert_register_data($post)
	{
		$query =  "INSERT INTO `logins` ( `login_id`,
										 `username`,
										 `password`)
				  VALUES			   ( NULL,
										 '".$post['emailaddress']."',
										 '".$post['password']."')";
		$this->query($query);
		
		$query = "INSERT INTO `users` ( `user_id`,
										`firstname`,
										`infix`,
										`surname`,
										`street`,
										`housenumber`,
										`zipcode`,
										`residence`,
										`phonenumber`,
										`mobilephonenumber`)
				  VALUES			  ( '".$id."',
										'".$post['firstname']."',
										'".$post['infix']."',
										'".$post['surname']."',
										'".$post['street']."',
										'".$post['housenumber']."',
										'".$post['zipcode']."',
										'".$post['residence']."',
										'".$post['phonenumber']."',
										'".$post['mobilephonenumber']."')";
		$this->query($query);
		
		$query = "INSERT INTO `userroles` ( `userrole_id`,
											`role`)
				  VALUES				  ( '".$id."',
											'')";
		$this->query($query);
		
		echo $query; exit();
	}
 }
?>