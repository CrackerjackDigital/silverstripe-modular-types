<?php
namespace Modular\Types;
/**
 * Interface for types which can be converted to and from text.
 *
 * @package Modular\Types
 */
interface TextType extends ValueType {
	const Type   = 'Text';
	const Schema = 'Text';
}