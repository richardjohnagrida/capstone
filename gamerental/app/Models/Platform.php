<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Platform
 * 
 * @property int $console_id
 * @property string $console_name
 *
 * @package App\Models
 */
class Platform extends Model
{
	protected $table = 'platforms';
	protected $primaryKey = 'console_id';
	public $timestamps = false;

	protected $fillable = [
		'console_name'
	];
}
