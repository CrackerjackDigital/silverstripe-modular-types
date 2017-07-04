<?php

namespace Modular;

use Modular\Traits\debugging;
use Modular\Traits\reflection;
use Modular\Types\TypeInterface as TypeInterface;

/**
 * Type
 *
 * @package Modular
 * @property int    ID
 * @property string Code
 */
class Type extends \DataObject implements TypeInterface {
	use debugging;
	use reflection;

	const CodeFieldName   = 'Code';
	const CodeFieldSchema = 'Varchar(5)';

	private static $db = [
		self::CodeFieldName => self::CodeFieldSchema,
	];

	/**
	 * Invoking a type returns itself.
	 *
	 * @return $this
	 */
	public function __invoke() {
		return $this;
	}

	public static function schema() {
		return static::strip_namespace();
	}

	public static function type() {
		return static::strip_namespace();
	}

	public static function create() {
		return \Injector::inst()->createWithArgs( static::config()->get( 'injector_name' ) ?: get_called_class(), func_get_args() );
	}

	/**
	 * Patch until php 5.6 static::class is widely available on servers
	 *
	 * @return string
	 */
	public static function class_name() {
		return get_called_class();
	}

	/**
	 * This is the same as class_name by default, however could be overridden e.g. by trait custom_class in derived classes.
	 *
	 * @return string
	 */
	public static function custom_class_name() {
		return static::class_name();
	}

	/**
	 * TODO figure out why?
	 */
	public function onBeforeWrite() {
		parent::onBeforeWrite();
		$this->ClassName = get_class( $this );
	}

	/**
	 * Convenience method as Types generally are dealt with by Code.
	 *
	 * @param string $code
	 *
	 * @return \DataObject
	 */
	public static function get_by_code( $code ) {
		return static::get()->filter( static::CodeFieldName, $code )->first();
	}
}