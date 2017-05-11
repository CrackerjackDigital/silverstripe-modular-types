<?php
namespace Modular\Types;

/**
 * Interface Required makes value required via having a MinLength > 0
 *
 * @package Modular\Types
 */
interface Required {
	const MinLength = 1;
}

/**
 * Interface Required4 usefull for text fields where you want some input and one character isn't distinct enough, or you need 3 for e.g. searching
 *
 * @package Modular\Types
 */
interface Required4 {
	const MinLength = 4;
}

/**
 * Interface RequiredMax makes minimum length = maximum length for validation purposes
 *
 * @package Modular\Types
 */
interface RequiredMax {
	// NB MinLength -1 means use the MaxLength (so fixed length field)
	const MinLength = -1;
}