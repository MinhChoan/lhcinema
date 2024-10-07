<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Episode
 * 
 * @property int $id
 * @property int $anime_id
 * @property string $title
 * @property int $episode_number
 * @property string $video_url
 * @property Carbon|null $release_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Anime $anime
 *
 * @package App\Models
 */
class Episode extends Model
{
	protected $table = 'episodes';

	protected $casts = [
		'anime_id' => 'int',
		'episode_number' => 'int',
		'release_date' => 'datetime'
	];

	protected $fillable = [
		'anime_id',
		'title',
		'episode_number',
		'video_url',
		'release_date'
	];

	public function anime()
	{
		return $this->belongsTo(Anime::class);
	}
}
