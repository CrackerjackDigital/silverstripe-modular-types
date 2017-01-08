<?php
namespace Modular\Types;

interface DateType extends EpochType, StringType, IntType {
	const Type = 'Date';
}