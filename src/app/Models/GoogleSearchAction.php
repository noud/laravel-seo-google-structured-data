<?php

namespace SEO\Google\Structured\data\Models;

class GoogleSearchAction extends \SEO\Google\Structured\data\Models\Base\GoogleSearchAction
{
	protected $fillable = [
		'target',
		'query-input'
	];

	public function property_value_specification()
	{
		return $this->belongsTo(\SEO\SchemaOrg\Models\PropertyValueSpecification::class, 'query-input');
	}
}
}
