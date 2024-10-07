<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Anime
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property Carbon|null $release_year
 * @property string|null $status
 * @property string $type
 * @property string|null $cover_image
 * @property int|null $studio_id
 * @property string|null $nation
 * @property int|null $view_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Studio|null $studio
 * @property Collection|Genre[] $genres
 * @property Collection|Comment[] $comments
 * @property Collection|Episode[] $episodes
 * @property Collection|Favorite[] $favorites
 * @property Collection|LikesDislike[] $likes_dislikes
 * @property Collection|Review[] $reviews
 * @property Collection|Watchlist[] $watchlists
 *
 * @package App\Models
 */
class Anime extends Model
{
	protected $table = 'anime';

	protected $casts = [
		'release_year' => 'datetime',
		'studio_id' => 'int',
		'view_count' => 'int'
	];

	protected $fillable = [
		'title',
		'slug',
		'description',
		'release_year',
		'status',
		'type',
		'cover_image',
		'studio_id',
		'nation',
		'view_count'
	];

	public function studio()
	{
		return $this->belongsTo(Studio::class);
	}

	public function genres()
	{
		return $this->belongsToMany(Genre::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function episodes()
	{
		return $this->hasMany(Episode::class);
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
