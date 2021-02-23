<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\AdminUser;
use Cinemasunshine\ORM\Entities\Theater;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class AdminUserTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return AdminUser&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(AdminUser::class, $methods);
    }

    /**
     * @return ReflectionClass<AdminUser>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(AdminUser::class);
    }

    /**
     * @test
     */
    public function testEncryptPassword(): void
    {
        $plainPassword = 'password';

        $result = AdminUser::encryptPassword($plainPassword);

        $this->assertEquals(60, strlen($result));
        $this->assertStringStartsWith('$2y$', $result);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 11;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * @test
     */
    public function testGetName(): void
    {
        $name = 'user_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * @test
     */
    public function testSetName(): void
    {
        $name = 'user_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetDisplayName(): void
    {
        $displayName = 'user_display_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $displayNamePropertyRef = $targetRef->getProperty('displayName');
        $displayNamePropertyRef->setAccessible(true);
        $displayNamePropertyRef->setValue($targetMock, $displayName);

        $this->assertEquals($displayName, $targetMock->getDisplayName());
    }

    /**
     * @test
     */
    public function testSetDisplayName(): void
    {
        $displayName = 'user_display_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayName($displayName);

        $targetRef = $this->createTargetReflection();

        $displayNamePropertyRef = $targetRef->getProperty('displayName');
        $displayNamePropertyRef->setAccessible(true);

        $this->assertEquals($displayName, $displayNamePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetPassword(): void
    {
        $password = 'password';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $passwordPropertyRef = $targetRef->getProperty('password');
        $passwordPropertyRef->setAccessible(true);
        $passwordPropertyRef->setValue($targetMock, $password);

        $this->assertEquals($password, $targetMock->getPassword());
    }

    /**
     * @test
     */
    public function testSetPassword(): void
    {
        $password = 'password';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPassword($password);

        $targetRef = $this->createTargetReflection();

        $passwordPropertyRef = $targetRef->getProperty('password');
        $passwordPropertyRef->setAccessible(true);

        $passwordPropertyValue = $passwordPropertyRef->getValue($targetMock);
        $this->assertNotEquals($password, $passwordPropertyValue);
        $this->assertEquals(60, strlen($passwordPropertyValue));
        $this->assertStringStartsWith('$2y$', $passwordPropertyValue);
    }

    /**
     * @test
     */
    public function testGetGroup(): void
    {
        $group = 1;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $groupPropertyRef = $targetRef->getProperty('group');
        $groupPropertyRef->setAccessible(true);
        $groupPropertyRef->setValue($targetMock, $group);

        $this->assertEquals($group, $targetMock->getGroup());
    }

    /**
     * @test
     */
    public function testSetGroup(): void
    {
        $group = 1;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setGroup($group);

        $targetRef = $this->createTargetReflection();

        $groupPropertyRef = $targetRef->getProperty('group');
        $groupPropertyRef->setAccessible(true);

        $this->assertEquals($group, $groupPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetTheater(): void
    {
        $theater = new Theater(11);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $displayNamePropertyRef = $targetRef->getProperty('theater');
        $displayNamePropertyRef->setAccessible(true);
        $displayNamePropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * @test
     */
    public function testSetTheater(): void
    {
        $theater = new Theater(11);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }
}
