<?php
namespace Modular\Types;

interface DateTimeType extends DateType, TimeType, StringType, IntType {
	const Type = 'DateTime';
}