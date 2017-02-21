<?php
namespace Modular\Traits;

use Modular\Exceptions\Exception;

trait value {

	abstract public function __invoke();

	abstract public function singleFieldValue();

	/**
	 * Just return the singleFieldValue
	 * @param string|null $typeCast class name of Type to cast to, e.g. StringType::class from caller
	 * @return mixed|string
	 * @throws \Modular\Exceptions\Exception
	 */
	public function typedValue($typeCast = null) {
		$value = $this->singleFieldValue();
		if (!is_a($typeCast, $this())) {
			$type = $this->type();
			throw new Exception("Can't automatically cast from '$type' to '$typeCast'");
		}
		return $value;
	}


}