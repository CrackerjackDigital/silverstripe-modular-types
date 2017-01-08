<?php
namespace Modular\Types;
/**
 * Has a value which can be converted to/from a unix epoch (e.g. Date, Time, DateTime, Period, Int)
 *
 * @package Modular\Types
 */
interface EpochType {
	const FormatDate = 'Y-m-d';
	const FormatTime = 'h:i:s';
	const FormatDateTime = 'Y-m-d h:i:s';
}