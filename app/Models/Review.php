<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * 
 * @property int $id
 * @property int $anime_id
 * @property int $user_id
 * @property int|null $rating
 * @property string|null $comment
 * @property Carbon|null $created_at
 * 
 * @property Anime $anime
 * @property User $user
 *
 * @package App\Models
 */
class Review extends Model
{
	protected $table = 'reviews';
	public $timestamps = false;

	protected $casts = [
		'anime_id' => 'int',
		'user_id' => 'int',
		'rating' => 'int'
	];

	protected $fillable = [
		'anime_id',
		'user_id',
		'rating',
		'comment'
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
