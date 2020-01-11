<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Jan 2020 17:38:00 +0000.
 */

namespace SEO\Google\Structured\data\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GoogleWebSite
 * 
 * @property int $id
 * @property int $thing_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \SEO\Google\Structured\data\Models\Thing $thing
 * @property \Illuminate\Database\Eloquent\Collection $google_potential_actions
 *
 * @package SEO\Google\Structured\data\Models\Base
 */
class GoogleWebSite extends Eloquent
{
	protected $table = 'google_web_site';

	protected $casts = [
		'thing_id' => 'int'
	];

	public function thing()
	{
		return $this->belongsTo(\SEO\Google\Structured\data\Models\Thing::class);
	}

	public function google_potential_actions()
	{
		return $this->hasMany(\SEO\Google\Structured\data\Models\GooglePotentialAction::class, 'google_web_site');
	}
}
