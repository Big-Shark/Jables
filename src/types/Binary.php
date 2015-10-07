<?php
namespace hedronium\Jables\types;
use hedronium\Jables\BaseType;
use hedronium\Jables\Field;

class Binary extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->binary($name);
	}

	public function render(){}
}