<?php
namespace Modular\Types;

interface StringType extends ValueType {
	const Type   = 'String';
	const Schema = 'Varchar(255)';
}