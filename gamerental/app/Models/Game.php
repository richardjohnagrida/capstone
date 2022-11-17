<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 * 
 * @property int $game_id
 * @property string $name
 * @property string $genre
 * @property string $cover_img
 * @property int $console_id
 * @property int $total_qty
 * @property int $qty_on_hand
 * @property int $qty_available
 * @property int $waiting_qty
 * @property string $description
 * @property Carbon $created_at
 * @property string $status
 *
 * @package App\Models
 */
class Game extends Model
{
	protected $table = 'games';
	public $incrementing = true;
	public $timestamps = true;

	protected $casts = [
		'game_id' => 'int',
		'console_id' => 'int',
		'total_qty' => 'int',
		'qty_on_hand' => 'int',
		'qty_available' => 'int',
		'waiting_qty' => 'int'
	];

	protected $fillable = [
		'game_id',
		'name',
		'genre',
		'cover_img',
		'console_id',
		'total_qty',
		'qty_on_hand',
		'qty_available',
		'waiting_qty',
		'description',
		'status'
	];
}
