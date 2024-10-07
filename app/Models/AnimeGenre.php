<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnimeGenre
 * 
 * @property int $anime_id
 * @property int $genre_id
 * 
 * @property Anime $anime
 * @property Genre $genre
 *
 * @package App\Models
 */
class AnimeGenre extends Model
{
	protected $table = 'anime_genre';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'anime_id' => 'int',
		'genre_id' => 'int'
	];

	public function anime()
	{
		return $this->belongsTo(Anime::class);
	}

	public function genre()
	{
		return $this->belongsTo(Genre::class);
	}
}
