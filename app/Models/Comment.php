<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $anime_id
 * @property int $user_id
 * @property int|null $parent_id
 * @property string $comment
 * @property Carbon|null $created_at
 * 
 * @property Anime $anime
 * @property User $user
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';
	public $timestamps = false;

	protected $casts = [
		'anime_id' => 'int',
		'user_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'anime_id',
		'user_id',
		'parent_id',
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

	public function comment()
	{
		return $this->belongsTo(Comment::class, 'parent_id');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'parent_id');
	}
}
