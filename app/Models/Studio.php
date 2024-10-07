<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Studio
 * 
 * @property int $id
 * @property string $name
 * @property string|null $country
 * @property Carbon|null $founded_year
 * @property string|null $description
 * 
 * @property Collection|Anime[] $animes
 *
 * @package App\Models
 */
class Studio extends Model
{
	protected $table = 'studios';
	public $timestamps = false;

	protected $casts = [
		'founded_year' => 'datetime'
	];

	protected $fillable = [
		'name',
		'country',
		'founded_year',
		'description'
	];

	public function animes()
	{
		return $this->hasMany(Anime::class);
	}
}
