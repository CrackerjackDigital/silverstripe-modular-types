<?php
namespace Modular\Traits;

use Modular\Types\Date;
use Modular\Types\Epoch as EpochType;
use Modular\Types\NumericType;
use Modular\Types\StringType;
use Modular\Types\Time;

/**
 * Allow casting of value to/from int value which represents unix epoch and string date.
 *
 * @package Modular\Types\Traits
 */
trait epoch {
	abstract public function singleFieldValue();

	/**
	 * Return the format to use for the typeCase, e.g date only, time only or date and time.
	 * @param string $typeCast a Type class name
	 * @return string
	 */
	public function typedValueFormat($typeCast = StringType::class) {
		switch ($typeCast) {
		case Date::Type:
			return Date::FormatDate;
		case Time::Type:
			return Time::FormatTime;
		default:
			return EpochType::FormatDateTime;
		}
	}

	/**
	 * Returns value cast between StringType and IntType if typeCast is passed and one of those two options.
	 * Otherwise returns the value as is.
	 *
	 * @param null $typeCast class name of target type, e.g. 'Modular\Types\StringType' generally from e.g. 'StringType::class'
	 * @return false|int|string
	 */
	public function typedValue($typeCast = null) {
		if ($value = $this->singleFieldValue()) {
			if (is_a($typeCast, Epoch::class, true) || is_a($typeCast, StringType::class, true)) {

				$value = date($this->typedValueFormat($typeCast), $value);

			} elseif (is_a($typeCast, NumericType::class, true)) {

				$value = strtotime($value);

			}
		}
		return $value;
	}
}