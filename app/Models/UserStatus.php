<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserStatus
 * 
 * @property int $id
 * @property string $status
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class UserStatus extends Model
{
	protected $table = 'user_status';
	public $timestamps = false;

	protected $fillable = [
		'status'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
