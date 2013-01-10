<?php

class User extends BaseUser
{
	public function __construct()
	{
		$this->setPassword('');
	}
	
	public static function login($store, $username, $password)
	{
		$user = new User();
		$user->setUsername($username);
		$user->setPassword($password);
		
		$isUser = $store->createEqualityCondition($user);
		$users = $store->getUserCollection($isUser, User::resolver());
		
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