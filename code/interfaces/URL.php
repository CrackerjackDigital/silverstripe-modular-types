<?php
namespace Modular\Types;

interface URLType extends ValueType {
	const Type   = 'URL';
	const Schema = 'Text';

	const TypedValuePrefix = 'https://';
}