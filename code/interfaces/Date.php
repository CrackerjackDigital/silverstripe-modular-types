<?php
namespace Modular\Types;

interface Date extends Epoch, StringType, IntType {
	const Type = 'Date';
	const Schema = 'Date';
}