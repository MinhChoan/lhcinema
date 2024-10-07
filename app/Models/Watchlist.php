<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Watchlist
 * 
 * @property int $user_id
 * @property int $anime_id
 * @property string|null $status
 * @property Carbon|null $created_at
 * 
 * @property User $user
 * @property Anime $anime
 *
 * @package App\Models
 */
class Watchlist extends Model
{
	protected $table = 'watchlist';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'anime_id' => 'int'
	];

	protected $fillable = [
		'status'
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
