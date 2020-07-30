<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\AdminUser;
use Cinemasunshine\ORM\Entities\Theater;
use PHPUnit\Framework\TestCase;

/**
 * AdminUser test
 */
final class AdminUserTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return AdminUser&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(AdminUser::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<AdminUser>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(AdminUser::class);
    }

    /**
     * test encryptPassword
     *
     * @test
     * @return void
     */
    public function testEncryptPassword()
    {
        $plainPassword = 'password';
        $result = AdminUser::encryptPassword($plainPassword);

        $this->assertEquals(60, strlen($result));
        $this->assertStringStartsWith('$2y$', $result);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 11;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getName
     *
     * @test
     * @return void
     */
    public function testGetName()
    {
        $name = 'user_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * test setName
     *
     * @test
     * @return void
     */
    public function testSetName()
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
     * test getDisplayName
     *
     * @test
     * @return void
     */
    public function testGetDisplayName()
    {
        $displayName = 'user_display_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $displayNamePropertyRef = $targetRef->getProperty('displayName');
        $displayNamePropertyRef->setAccessible(true);
        $displayNamePropertyRef->setValue($targetMock, $displayName);

        $this->assertEquals($displayName, $targetMock->getDisplayName());
    }

    /**
     * test setDisplayName
     *
     * @test
     * @return void
     */
    public function testSetDisplayName()
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
     * test getPassword
     *
     * @test
     * @return void
     */
    public function testGetPassword()
    {
        $password = 'password';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $passwordPropertyRef = $targetRef->getProperty('password');
        $passwordPropertyRef->setAccessible(true);
        $passwordPropertyRef->setValue($targetMock, $password);

        $this->assertEquals($password, $targetMock->getPassword());
    }

    /**
     * test setPassword
     *
     * @test
     * @return void
     */
    public function testSetPassword()
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
     * test getGroup
     *
     * @test
     * @return void
     */
    public function testGetGroup()
    {
        $group = 1;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $groupPropertyRef = $targetRef->getProperty('group');
        $groupPropertyRef->setAccessible(true);
        $groupPropertyRef->setValue($targetMock, $group);

        $this->assertEquals($group, $targetMock->getGroup());
    }

    /**
     * test setGroup
     *
     * @test
     * @return void
     */
    public function testSetGroup()
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
     * set getTheater
     *
     * @test
     * @return void
     */
    public function testGetTheater()
    {
        $theater = new Theater(11);
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $displayNamePropertyRef = $targetRef->getProperty('theater');
        $displayNamePropertyRef->setAccessible(true);
        $displayNamePropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * test setTheater
     *
     * @test
     * @return void
     */
    public function testSetTheater()
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
