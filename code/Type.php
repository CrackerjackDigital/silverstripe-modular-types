<?php
namespace Modular;

use Modular\Traits\debugging;
use Modular\Traits\reflection;
use Modular\Types\Type as TypeInterface;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\ORM\DataObject;

class Type extends DataObject implements TypeInterface {
	use debugging;
	use reflection;

	/**
	 * Invoking a type returns itself.
	 * @return $this
	 */
	public function __invoke() {
		return $this;
	}

	public static function type() {
		return static::strip_namespace();
	}

	public static function create() {
		return Injector::inst()->createWithArgs(static::config()->get('injector_name') ?: get_called_class(), func_get_args());
	}

	/**
	 * Patch until php 5.6 static::class is widely available on servers
	 * @return string
	 */
	public static function class_name() {
		return get_called_class();
	}

	public function onBeforeWrite() {
		parent::onBeforeWrite();
		$this->ClassName = get_class($this);
	}

}