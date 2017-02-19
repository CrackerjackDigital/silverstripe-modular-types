<?php
namespace Modular\Traits;

trait urn {
	abstract public function singleFieldValue();

	public function typedValuePrefix() {
		return defined('static::TypedValuePrefix') ? static::TypedValuePrefix : '';
	}
	/**
	 * If value does not have a schema then prefix 'file://'
	 * @param null $typeCast ignored
	 * @return mixed|string
	 * @throws \Modular\Exceptions\Exception
	 */
	public function typedValue($typeCast = null) {
		$value = $this->singleFieldValue();
		if (false == strpos($value, '://')) {
			$value = $this->typedValuePrefix() . $value;
		}
		return $value;
	}


}