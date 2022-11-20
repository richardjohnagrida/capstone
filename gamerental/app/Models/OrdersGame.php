<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdersGame
 * 
 * @property int $order_id
 * @property int $member_id
 * @property int|null $no_weeks
 * @property int|null $no_months
 * @property int $status
 * @property string $remarks
 * @property Carbon $date_received
 * @property int $total_amount
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class OrdersGame extends Model
{
	protected $table = 'orders_games';
	protected $primaryKey = 'order_id';
	public $timestamps = true;

	protected $casts = [
		'member_id' => 'int',
		'no_weeks' => 'int',
		'no_months' => 'int',
		'status' => 'int',
		'total_amount' => 'int'
	];

	protected $dates = [
		'date_received'
	];

	protected $fillable = [
		'member_id',
		'no_weeks',
		'no_months',
		'status',
		'remarks',
		'date_received',
		'total_amount'
	];
}
