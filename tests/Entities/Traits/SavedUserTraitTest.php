<?php

declare(strict_types=1);

namespace Tests\Entities\Traits;

use Cinemasunshine\ORM\Entities\AdminUser;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class SavedUserTraitTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return SavedUserTraitClass&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SavedUserTraitClass::class, $methods);
    }

    /**
     * @test
     */
    public function testGetCreatedUser(): void
    {
        $createdUser = new AdminUser();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedUser($createdUser);

        $this->assertEquals($createdUser, $targetMock->getCreatedUser());
    }

    /**
     * @test
     */
    public function testSetCreatedUser(): void
    {
        $createdUser = new AdminUser();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedUser($createdUser);

        $this->assertEquals($createdUser, $targetMock->getCreatedUser());
    }

    /**
     * @test
     */
    public function testGetUpdatedUser(): void
    {
        $updatedUser = new AdminUser();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedUser($updatedUser);

        $this->assertEquals($updatedUser, $targetMock->getUpdatedUser());
    }

    /**
     * @test
     */
    public function testSetUpdatedUser(): void
    {
        $updatedUser = new AdminUser();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedUser($updatedUser);

        $this->assertEquals($updatedUser, $targetMock->getUpdatedUser());
    }
}
