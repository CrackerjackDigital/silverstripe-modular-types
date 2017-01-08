<?php
namespace Modular\Types;

interface ValueType extends Type {
	
	/**
	 * Return the type casted to the provided type or of the implemented type if no type cast specified.
	 * @param null $typeCast
	 * @return mixed
	 */
	public function typedValue($typeCast = null);
	
}