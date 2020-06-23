<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\SpecialSite;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * SpecialSite test
 */
final class SpecialSiteTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return SpecialSite&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(SpecialSite::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return SpecialSite&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSite::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<SpecialSite>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(SpecialSite::class);
    }

    /**
     * test construct
     *
     * @test
     * @return void
     */
    public function testConstruct()
    {
        $id = 11;
        $targetMock = $this->createTargetMock();
        $targetRef = $this->createTargetReflection();

        /** @var \ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock, $id);

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $this->assertEquals($id, $idPropertyRef->getValue($targetMock));

        $theatersPropertyRef = $targetRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $theatersPropertyRef->getValue($targetMock)
        );

        $campaignsPropertyRef = $targetRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $campaignsPropertyRef->getValue($targetMock)
        );
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 12;
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
        $name = 'special_site_name';
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
        $name = 'special_site_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();
        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * test getNameJa
     *
     * @test
     * @return void
     */
    public function testGatNameJa()
    {
        $nameJa = 'special_site_name_ja';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $nameJaPropertyRef = $targetRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);
        $nameJaPropertyRef->setValue($targetMock, $nameJa);

        $this->assertEquals($nameJa, $targetMock->getNameJa());
    }

    /**
     * test setNameJa
     *
     * @test
     * @return void
     */
    public function testSetNameJa()
    {
        $nameJa = 'special_site_name_ja';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setNameJa($nameJa);

        $targetRef = $this->createTargetReflection();
        $nameJaPropertyRef = $targetRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);

        $this->assertEquals($nameJa, $nameJaPropertyRef->getValue($targetMock));
    }

    /**
     * test getTheaters
     *
     * @test
     * @return void
     */
    public function testGetTheaters()
    {
        $theaters = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $theatersPropertyRef = $targetRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $theatersPropertyRef->setValue($targetMock, $theaters);

        $this->assertEquals($theaters, $targetMock->getTheaters());
    }

    /**
     * test getCampaigns
     *
     * @test
     * @return void
     */
    public function testGetCampaigns()
    {
        $campaigns = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $campaignsPropertyRef = $targetRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $campaignsPropertyRef->setValue($targetMock, $campaigns);

        $this->assertEquals($campaigns, $targetMock->getCampaigns());
    }
}
