<?php

declare(strict_types=1);

namespace Tests\Entities\Traits;

use DateTime;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class TimestampableTraitTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return TimestampableTraitClass&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TimestampableTraitClass::class, $methods);
    }

    /**
     * @test
     */
    public function testGetCreatedAt(): void
    {
        $createdAt = new DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedAt($createdAt);

        $this->assertEquals($createdAt, $targetMock->getCreatedAt());
    }

    /**
     * @test
     */
    public function testSetCreatedAt(): void
    {
        $createdAt = new DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedAt($createdAt);

        $this->assertEquals($createdAt, $targetMock->getCreatedAt());
    }

    /**
     * test setCreatedAt (invalid argument)
     *
     * @test
     */
    public function testSetCreatedAtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setCreatedAt(null);
    }

    /**
     * @test
     */
    public function testGetUpdatedAt(): void
    {
        $updatedAt = new DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedAt($updatedAt);

        $this->assertEquals($updatedAt, $targetMock->getUpdatedAt());
    }

    /**
     * @test
     */
    public function testSetUpdatedAt(): void
    {
        $updatedAt = new DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedAt($updatedAt);

        $this->assertEquals($updatedAt, $targetMock->getUpdatedAt());
    }

    /**
     * test setUpdatedAt (invalid argument)
     *
     * @test
     */
    public function testSetUpdatedAtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setUpdatedAt(null);
    }

    /**
     * @test
     */
    public function testPrePersistTimestamp(): void
    {
        $targetMock = $this->createTargetPartialMock([
            'setCreatedAt',
            'setUpdatedAt',
        ]);

        $targetMock
            ->expects($this->once())
            ->method('setCreatedAt')
            ->with($this->equalTo('now'));

        $targetMock
            ->expects($this->once())
            ->method('setUpdatedAt')
            ->with($this->equalTo('now'));

        $targetMock->prePersistTimestamp();
    }

    /**
     * @test
     */
    public function testUpdateTimestamp(): void
    {
        $targetMock = $this->createTargetPartialMock(['setUpdatedAt']);
        $targetMock
            ->expects($this->once())
            ->method('setUpdatedAt')
            ->with($this->equalTo('now'));

        $targetMock->updateTimestamp();
    }
}
