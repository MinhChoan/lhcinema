<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $avatar
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property Carbon|null $password_changed_at
 * @property string|null $bio
 * @property string|null $country
 * @property int|null $user_status_id
 * @property string|null $role
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property UserStatus|null $user_status
 * @property Collection|Comment[] $comments
 * @property Collection|Favorite[] $favorites
 * @property Collection|LikesDislike[] $likes_dislikes
 * @property Collection|Review[] $reviews
 * @property Collection|Watchlist[] $watchlists
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'password_changed_at' => 'datetime',
		'user_status_id' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'name',
		'email',
		'password',
		'avatar',
		'email_verified_at',
		'remember_token',
		'password_changed_at',
		'bio',
		'country',
		'user_status_id',
		'role'
	];

	public function user_status()
	{
		return $this->belongsTo(UserStatus::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function favorites()
	{
		return $this->hasMany(Favorite::class);
	}

	public function likes_dislikes()
	{
		return $this->hasMany(LikesDislike::class);
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}

	public function watchlists()
	{
		return $this->hasMany(Watchlist::class);
	}
}
