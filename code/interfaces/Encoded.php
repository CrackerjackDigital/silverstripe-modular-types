<?php
namespace Modular\Types;

interface EncodedType {
	public static function encode($value);

	public static function decode($value);
}