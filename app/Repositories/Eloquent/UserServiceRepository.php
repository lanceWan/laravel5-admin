<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\UserInterface;
use App\User;
/**
* 服务模式
*/
class UserServiceRepository implements UserInterface
{
	
	public function findBy($id)
	{
		return User::find($id);
	}
}