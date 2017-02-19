<?php
namespace Modular\Types;
/**
 * Interface for types which can be converted to and from text.
 *
 * @package Modular\Types
 */
interface Text {
	public function toText();

	public function fromText($text);
}