<?php
namespace Modular\Types;

interface Time extends Epoch, StringType, IntType {
	const Type = 'Time';
	const Schema = 'Time';
}