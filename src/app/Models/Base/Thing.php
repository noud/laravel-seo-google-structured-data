<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Jan 2020 17:38:00 +0000.
 */

namespace SEO\Google\Structured\data\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Thing
 * 
 * @property int $id
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $google_web_sites
 *
 * @package SEO\Google\Structured\data\Models\Base
 */
class Thing extends Eloquent
{
	protected $table = 'thing';

	public function google_web_sites()
	{
		return $this->hasMany(\SEO\Google\Structured\data\Models\GoogleWebSite::class);
	}
}
