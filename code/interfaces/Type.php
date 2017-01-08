<?php
namespace Modular\Types;

interface Type {
	const Type = '';
	
	/**
	 * @return string the type name, generally from static::Type of implemented interface
	 */
	public static function type();
}