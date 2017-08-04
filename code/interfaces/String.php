<?php

namespace Modular\Types;

/**
 * String (Varchar) types of various utility lengths. The default StringType is 255 characters long. For Text see TextType or HTMLType.
 *
 * @package Modular\Types
 */

interface StringType extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(255)';
	const MaxLength = 255;
}

interface StringType4 extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(4)';
	const MaxLength = 4;
}

interface StringType8 extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(8)';
	const MaxLength = 8;
}

interface StringType16 extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(16)';
	const MaxLength = 16;
}

interface StringType32 extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(32)';
	const MaxLength = 32;
}

interface StringType64 extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(64)';
	const MaxLength = 64;

}

interface StringType128 extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(128)';
	const MaxLength = 128;

}

interface StringType255 extends ValueType {
	const Type      = 'String';
	const Schema    = 'Varchar(255)';
	const MaxLength = 255;

}



