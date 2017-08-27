<?php
namespace Modular\Types;

interface DateTimeType extends Epoch {
	const Type = 'DateTime';
	const Schema = 'SS_DateTime';
	const Format = 'Y-m-d H:i:s';
}