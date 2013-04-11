<?php
 class AdministratorsController extends Controller
 {
	public function adminhomepage()
	{
		$this->set("header", "Dit is de admin homepage");
	}
	
	public function viewall()
	{
		$this->set('header', 'Geregistreerde gebruikers van de webshop');
		$users = $this->_model->select_all();
		//var_dump($users);
		$show_table = '';
		foreach ($users as $value)
		{
			$show_table .= "<tr>
								<td class='td'>".$value['User']['user_id']."</td>
								<td class='td'>".$value['User']['firstname']."</td>
								<td class='td'>".$value['User']['infix']."</td>
								<td class='td'>".$value['User']['surname']."</td>
								<td class='td'>".$value['Userrole']['role']."</td>
								<td class='td'><a href='./remove_user/".$value['User']['user_id']."'>
										<img src='../img/drop.png' alt='drop' />
									</a>
								</td>
								<td class='td'><a href='./update_user/".$value['User']['user_id']."'>
										<img src='../img/edit.png' alt='drop' />
									</a>
								</td>
						    </tr>";
		
		}
		$this->set('show_users', $show_table);
	}
	
	public function add_user()
	{
		if (isset($_POST['submit']))
		{
			$this->_model->insert_into_users($_POST);
			header('location:../administrators/viewall');
		}
		else
		{
			$roles = $this->_model->select_all_userroles();
			//var_dump($roles);
			$userroles = '';
			foreach ($roles as $value)
			{ 
				$userroles .= "<option value='".$value['Userrole']['role']."'>".$value['Userrole']['role']."</option>";
			}
			$this->set('userroles', $userroles);
			$this->set('header', 'Voeg een gebruiker toe');
		}
	}
	
	public function remove_user($id)
	{
		$this->_model->remove_user($id);
		header('location:../viewall');
	}
	
	public function update_user($id)
	{
		if (isset($_POST['submit']))
		{
			$this->_model->update_user($id, $_POST);
			header('location:../viewall');
		}
		else
		{
			$user = $this->_model->find_user_by_id($id);
			//var_dump($user);
			$this->set('user', $user);
			$this->set('header', 'Wijzig het onderstaande record');
		}
	}
 }
?>