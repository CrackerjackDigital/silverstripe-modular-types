<?php
namespace Modular\Types;

interface DateTimeType extends Epoch, Date, Time {
	const Type = 'DateTime';
	const Schema = 'SS_DateTime';
}