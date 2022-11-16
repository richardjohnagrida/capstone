<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WaitingList
 * 
 * @property int|null $waiting_list_id
 * @property int $member_id
 * @property int $game_id
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class WaitingList extends Model
{
	protected $table = 'waiting_list';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'waiting_list_id' => 'int',
		'member_id' => 'int',
		'game_id' => 'int'
	];

	protected $fillable = [
		'waiting_list_id',
		'member_id',
		'game_id'
	];
}
