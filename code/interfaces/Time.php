<?php
namespace Modular\Types;

interface TimeType extends EpochType, StringType, IntType {
	const Type = 'Time';
}