<?php

class MyUser extends User
{
	public function __construct()
	{
		$this->setPassword('');
	}
	
	public static function login($storage, $username, $password)
	{
		$user = new MyUser();
		$user->setUsername($username);
		$user->setPassword($password);
		
		$isUser = new \Good\Manners\Condition\EqualTo($user);
		$users = $storage->getCollection($isUser, User::resolver());
		
		// In the future I should add a check to prevent two users showing up,
		// but that's not trivial at the moment, so I'll leave it out for now
		if ($user = $users->getNext())
		{
			return $user;
		}
		else
		{
			return null;
		}
	}
}

?>