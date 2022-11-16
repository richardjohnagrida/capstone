<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 * 
 * @property int $member_id
 * @property string $first_name
 * @property int $last_name
 * @property string $password
 * @property string $email
 * @property int $contact_number
 * @property string $address
 * @property Carbon $birthday
 * @property string $img_profile
 * @property string $img_id
 * @property string $img_requirements
 * @property string $status
 * @property Carbon $created_at
 * @property string $user_type
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $table = 'members';
	protected $primaryKey = 'member_id';
	public $timestamps = true;

	

	protected $dates = [
		'birthday'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'password',
		'email',
		'contact_number',
		'address',
		'birthday',
		'img_profile',
		'img_id',
		'img_requirements',
		'status',
		'user_type'
	];
}
