<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Jan 2020 17:38:00 +0000.
 */

namespace SEO\Google\Structured\data\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PropertyValueSpecification
 * 
 * @property int $id
 * @property string $value_name
 * @property bool $value_required
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $google_search_actions
 *
 * @package SEO\Google\Structured\data\Models\Base
 */
class PropertyValueSpecification extends Eloquent
{
	protected $table = 'property_value_specification';

	protected $casts = [
		'value_required' => 'bool'
	];

	public function google_search_actions()
	{
		return $this->hasMany(\SEO\Google\Structured\data\Models\GoogleSearchAction::class, 'query-input');
	}
}
