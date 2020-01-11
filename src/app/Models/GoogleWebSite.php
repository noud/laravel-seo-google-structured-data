<?php

namespace SEO\Google\Structured\data\Models;

use SEO\SchemaOrg\Models\Traits\actions;
use SEO\SchemaOrg\Models\Traits\JsonLd;

class GoogleWebSite extends \SEO\Google\Structured\data\Models\Base\GoogleWebSite
{
	use JsonLd;
	use actions;

	protected $fillable = [
		'thing_id'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$searchActions = $this->getSchemaOrgpotentialAction();

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('WebSite', true)
			->potentialAction($searchActions)
			// Thing
			->name($this->site->thing->name)
		;
	}

    private function getSchemaOrgpotentialAction()
	{
		$potentialAction = null;
		$potentialActions = $this->potential_actions()->get();
		foreach ($potentialActions as $potentialActions) {
			$searchAction = $potentialActions->search_action()->get()->first();
			$queryInput = $searchAction->property_value_specification()->get()->first();
			$potentialAction[] = Schema::SearchAction()
				->target($searchAction->target)
				->setProperty('query-input', ($queryInput->value_required ? 'required ' : '') . 'name='.$queryInput->value_name)
			;
		}
		if (count($potentialAction) === 1) {
			$potentialAction = $potentialAction[0];
		}
		return $potentialAction;
	}
	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function potentialActions()
	{
		return $this->hasMany(\SEO\SchemaOrg\Models\Action::class, 'potentialActions');
	}
	
	public function thing()
	{
		return $this->belongsTo(\SEO\SchemaOrg\Models\Thing::class);
	}}
