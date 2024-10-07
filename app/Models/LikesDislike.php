<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LikesDislike
 * 
 * @property int $id
 * @property int $anime_id
 * @property int $user_id
 * @property bool $is_liked
 * @property Carbon|null $created_at
 * 
 * @property Anime $anime
 * @property User $user
 *
 * @package App\Models
 */
class LikesDislike extends Model
{
	protected $table = 'likes_dislikes';
	public $timestamps = false;

	protected $casts = [
		'anime_id' => 'int',
		'user_id' => 'int',
		'is_liked' => 'bool'
	];

	protected $fillable = [
		'anime_id',
		'user_id',
		'is_liked'
	];

	public function anime()
	{
		return $this->belongsTo(Anime::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
