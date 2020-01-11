<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Jan 2020 17:38:00 +0000.
 */

namespace SEO\Google\Structured\data\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GoogleSearchAction
 * 
 * @property int $in
 * @property string $target
 * @property int $query-input
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \SEO\Google\Structured\data\Models\PropertyValueSpecification $property_value_specification
 * @property \Illuminate\Database\Eloquent\Collection $google_potential_actions
 *
 * @package SEO\Google\Structured\data\Models\Base
 */
class GoogleSearchAction extends Eloquent
{
	protected $table = 'google_search_action';
	protected $primaryKey = 'in';

	protected $casts = [
		'query-input' => 'int'
	];

	public function property_value_specification()
	{
		return $this->belongsTo(\SEO\Google\Structured\data\Models\PropertyValueSpecification::class, 'query-input');
	}

	public function google_potential_actions()
	{
		return $this->hasMany(\SEO\Google\Structured\data\Models\GooglePotentialAction::class);
	}
}
