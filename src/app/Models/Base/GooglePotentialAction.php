<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Jan 2020 17:38:00 +0000.
 */

namespace SEO\Google\Structured\data\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GooglePotentialAction
 * 
 * @property int $id
 * @property int $google_web_site
 * @property int $google_search_action_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \SEO\Google\Structured\data\Models\GoogleSearchAction $google_search_action
 *
 * @package SEO\Google\Structured\data\Models\Base
 */
class GooglePotentialAction extends Eloquent
{
	protected $table = 'google_potential_action';

	protected $casts = [
		'google_web_site' => 'int',
		'google_search_action_id' => 'int'
	];

	public function google_search_action()
	{
		return $this->belongsTo(\SEO\Google\Structured\data\Models\GoogleSearchAction::class);
	}

	public function google_web_site()
	{
		return $this->belongsTo(\SEO\Google\Structured\data\Models\GoogleWebSite::class, 'google_web_site');
	}
}
