<?php
namespace Modular\Types;
/**
 * Interface URNType string that starts with a schema e.g. 'http://' or 'file://', if schema is missing
 * then some magic will have to be performed to transform the value to a URNType.
 *
 * @package Modular\Types
 */
interface URNType extends ValueType {
	const Type   = 'URN';
	const Schema = 'Text';

}