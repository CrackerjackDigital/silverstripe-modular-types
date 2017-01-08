<?php
namespace Modular\Types;

interface DateTimeType extends EpochType, DateType, TimeType {
	const Type = 'DateTime';
}