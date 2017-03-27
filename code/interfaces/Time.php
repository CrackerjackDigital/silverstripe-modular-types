<?php
namespace Modular\Types;

interface Time extends Epoch {
	const Type = 'Time';
	const Schema = 'Time';
	const Format = 'h:i:s';
}