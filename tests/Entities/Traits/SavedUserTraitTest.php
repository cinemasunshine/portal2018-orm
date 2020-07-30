<?php

declare(strict_types=1);

namespace Tests\Entities\Traits;

use Cinemasunshine\ORM\Entities\AdminUser;
use PHPUnit\Framework\TestCase;

/**
 * SavedUserTrait test
 */
final class SavedUserTraitTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return SavedUserTraitClass&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SavedUserTraitClass::class, $methods);
    }

    /**
     * test getCreatedUser
     *
     * @test
     * @return void
     */
    public function testGetCreatedUser()
    {
        $createdUser = new AdminUser();
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedUser($createdUser);

        $this->assertEquals($createdUser, $targetMock->getCreatedUser());
    }

    /**
     * test setCreatedUser
     *
     * @test
     * @return void
     */
    public function testSetCreatedUser()
    {
        $createdUser = new AdminUser();
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCreatedUser($createdUser);

        $this->assertEquals($createdUser, $targetMock->getCreatedUser());
    }

    /**
     * test getUpdatedUser
     *
     * @test
     * @return void
     */
    public function testGetUpdatedUser()
    {
        $updatedUser = new AdminUser();
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedUser($updatedUser);

        $this->assertEquals($updatedUser, $targetMock->getUpdatedUser());
    }

    /**
     * test setUpdatedUser
     *
     * @test
     * @return void
     */
    public function testSetUpdatedUser()
    {
        $updatedUser = new AdminUser();
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUpdatedUser($updatedUser);

        $this->assertEquals($updatedUser, $targetMock->getUpdatedUser());
    }
}
