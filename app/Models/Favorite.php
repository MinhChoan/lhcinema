<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorite
 * 
 * @property int $user_id
 * @property int $anime_id
 * @property Carbon|null $created_at
 * 
 * @property User $user
 * @property Anime $anime
 *
 * @package App\Models
 */
class Favorite extends Model
{
	protected $table = 'favorites';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'anime_id' => 'int'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function anime()
	{
		return $this->belongsTo(Anime::class);
	}
}
