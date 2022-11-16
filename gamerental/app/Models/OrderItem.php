<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * 
 * @property int $order_id
 * @property int $game_id
 *
 * @package App\Models
 */
class OrderItem extends Model
{
	protected $table = 'order_item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'game_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'game_id'
	];
}
