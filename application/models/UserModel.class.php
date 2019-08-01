<?php 

/**
 * 
 */
class UserModel 
{
	
	public function signUp
	(
		$lastName,
		$firstName,
		$email,
		$password,
		$birthdate,
		$addresse,
		$city,
		$country,
		$zipcode,
		$phone
	)
	{
		$db  	= 	new Database();

		$sql 	=   "SELECT * FROM user WHERE Email = ? ";

		$req 	=   $db->queryOne($sql,[$email]);	

		if($req)
		{
			    throw new DomainException("Email existe");
		}

		else 
		{
			
		}




		

	}
}