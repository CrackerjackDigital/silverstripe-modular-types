<?php
namespace Modular\Types;

interface FileType extends URNType {
	const TypedValuePrefix = 'file://';
	const Schema = 'File';
}