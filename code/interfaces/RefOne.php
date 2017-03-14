<?php
namespace Modular\Types;

interface RefOneType extends RefType {
	const Arity = self::HasOne;
}