<?php

declare(strict_types=1);

namespace Tests\Entity\Traits;

use PHPUnit\Framework\TestCase;

/**
 * SoftDeleteTrait test
 */
final class SoftDeleteTraitTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return SoftDeleteTraitClass&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SoftDeleteTraitClass::class, $methods);
    }

    /**
     * test getIsDeleted
     *
     * @test
     * @return void
     */
    public function testGetIsDeleted()
    {
        $isDeleted = false; // default
        $targetMock = $this->createTargetPartialMock([]);

        $this->assertEquals($isDeleted, $targetMock->getIsDeleted());
    }

    /**
     * test isDeleted
     *
     * @test
     * @return void
     */
    public function testIsDeleted()
    {
        $isDeleted = true;
        $targetMock = $this->createTargetPartialMock(['getIsDeleted']);
        $targetMock
            ->expects($this->once())
            ->method('getIsDeleted')
            ->willReturn(true);

        $this->assertEquals($isDeleted, $targetMock->isDeleted());
    }

    /**
     * test setIsDeleted
     *
     * @test
     * @return void
     */
    public function testSetIsDeleted()
    {
        $isDeleted = true;
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setIsDeleted($isDeleted);

        $this->assertEquals($isDeleted, $targetMock->getIsDeleted());
    }
}
