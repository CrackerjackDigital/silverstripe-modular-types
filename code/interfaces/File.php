<?php
namespace Modular\Types;

interface FileType extends RefType {
	const TypedValuePrefix = 'file://';
	const Type             = 'File';
	const Schema           = 'File';
}