<?php

declare(strict_types=1);

namespace Tests\Entities\Traits;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class SoftDeleteTraitTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return SoftDeleteTraitClass&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SoftDeleteTraitClass::class, $methods);
    }

    /**
     * @test
     */
    public function testGetIsDeleted(): void
    {
        $isDeleted = false; // default

        $targetMock = $this->createTargetPartialMock([]);

        $this->assertEquals($isDeleted, $targetMock->getIsDeleted());
    }

    /**
     * @test
     */
    public function testIsDeleted(): void
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
     * @test
     */
    public function testSetIsDeleted(): void
    {
        $isDeleted = true;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setIsDeleted($isDeleted);

        $this->assertEquals($isDeleted, $targetMock->getIsDeleted());
    }
}
