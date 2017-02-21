<?php
namespace Modular\Types;

interface Type {
	// local type name, should be defined on derived interface, e.g. 'String'
	// const Type = '';
	// field schema, should be defined on derived interface, e.g. 'Text
	// const Schema = '';

	/**
	 * @return string the type name, generally from static::Type of implemented interface
	 */
	public static function type();

	public static function schema();
}