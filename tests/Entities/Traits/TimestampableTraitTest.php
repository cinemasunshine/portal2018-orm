<?php

declare(strict_types=1);

namespace Tests\Entities\Traits;

use PHPUnit\Framework\TestCase;

/**
 * TimestampableTrait test
 */
final class TimestampableTraitTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return TimestampableTraitClass&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TimestampableTraitClass::class, $methods);
    }

    /**
     * test getCreatedAt
     *
     * @test
     *
     * @return void
     */
    public function testGetCreatedAt()
    {
        $createdAt = new \DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedAt($createdAt);

        $this->assertEquals($createdAt, $targetMock->getCreatedAt());
    }

    /**
     * test setCreatedAt
     *
     * @test
     *
     * @return void
     */
    public function testSetCreatedAt()
    {
        $createdAt = new \DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedAt($createdAt);

        $this->assertEquals($createdAt, $targetMock->getCreatedAt());
    }

    /**
     * test setCreatedAt (invalid argument)
     *
     * @test
     *
     * @return void
     */
    public function testSetCreatedAtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setCreatedAt(null);
    }

    /**
     * test getUpdatedAt
     *
     * @test
     *
     * @return void
     */
    public function testGetUpdatedAt()
    {
        $updatedAt = new \DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedAt($updatedAt);

        $this->assertEquals($updatedAt, $targetMock->getUpdatedAt());
    }

    /**
     * test getUpdatedAt
     *
     * @test
     *
     * @return void
     */
    public function testSetUpdatedAt()
    {
        $updatedAt = new \DateTime('2020/01/01 10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedAt($updatedAt);

        $this->assertEquals($updatedAt, $targetMock->getUpdatedAt());
    }

    /**
     * test setUpdatedAt (invalid argument)
     *
     * @test
     *
     * @return void
     */
    public function testSetUpdatedAtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setUpdatedAt(null);
    }

    /**
     * test prePersistTimestamp
     *
     * @return void
     */
    public function testPrePersistTimestamp()
    {
        $targetMock = $this->createTargetPartialMock([
            'setCreatedAt',
            'setUpdatedAt',
        ]);

        $targetMock
            ->expects($this->once())
            ->method('setCreatedAt')
            ->with($this->equalTo('now'))
            ->willReturn(true);

        $targetMock
            ->expects($this->once())
            ->method('setUpdatedAt')
            ->with($this->equalTo('now'))
            ->willReturn(true);

        $targetMock->prePersistTimestamp();
    }

    /**
     * test updateTimestamp
     *
     * @return void
     */
    public function testUpdateTimestamp()
    {
        $targetMock = $this->createTargetPartialMock(['setUpdatedAt']);
        $targetMock
            ->expects($this->once())
            ->method('setUpdatedAt')
            ->with($this->equalTo('now'))
            ->willReturn(true);

        $targetMock->updateTimestamp();
    }
}
