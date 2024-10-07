<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * 
 * @property Collection|Anime[] $animes
 *
 * @package App\Models
 */
class Genre extends Model
{
	protected $table = 'genres';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'slug'
	];

	public function animes()
	{
		return $this->belongsToMany(Anime::class);
	}
}
