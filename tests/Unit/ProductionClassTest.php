<?php

declare( strict_types = 1 );

namespace WMDE\Statsd\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WMDE\Statsd\ProductionClass;

/**
 * @covers \WMDE\Statsd\ProductionClass
 *
 * @licence GNU GPL v2+
 */
class ProductionClassTest extends TestCase {

	public function testGetTrue() {
		$this->assertTrue( ProductionClass::getTrue() );
	}

}
