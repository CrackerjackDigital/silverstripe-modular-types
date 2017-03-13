<?php
namespace Modular\Types;

interface TypeInterface {
	// local type name, should be defined on derived interface, e.g. 'String'
	// const Type = '';
	// field schema, should be defined on derived interface, e.g. 'Text
	// const Schema = '';

	/**
	 * @return string the type name, generally from static::Type of implemented interface
	 */
	public static function type();

	public static function schema();

	// TODO LATER ADD THIS SO CAN CHECK IF A VALUE IS A TYPE
//	public static function isType($value);
}