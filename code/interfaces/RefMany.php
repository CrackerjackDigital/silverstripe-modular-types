<?php
namespace Modular\Types;

interface RefManyType extends RefType {
	const Arity = self::HasMany;
}
