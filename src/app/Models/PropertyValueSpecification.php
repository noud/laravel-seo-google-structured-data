<?php

namespace SEO\Google\Structured\data\Models;

class PropertyValueSpecification extends \SEO\Google\Structured\data\Models\Base\PropertyValueSpecification
{
	protected $fillable = [
		'value_name',
		'value_required'
	];
}
