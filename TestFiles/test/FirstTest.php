<?php
namespace TestFiles\test;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
	public function testTrueAssetsToTrue()
	{
		$condition = true;
		$this->assertTrue($condition);
	}
}
?>