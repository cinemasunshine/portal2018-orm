<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Campaign;
use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterCampaign;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * TheaterCampaign test
 */
final class TheaterCampaignTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return TheaterCampaign&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterCampaign::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return ReflectionClass<TheaterCampaign>
     */
    public function createTargetReflection()
    {
        return new ReflectionClass(TheaterCampaign::class);
    }

    /**
     * test getId
     *
     * @test
     *
     * @return void
     */
    public function testGetId()
    {
        $id = 23;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getCampaign
     *
     * @test
     *
     * @return void
     */
    public function testGetCampaign()
    {
        $campaign = new Campaign();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $campaignPropertyRef = $targetRef->getProperty('campaign');
        $campaignPropertyRef->setAccessible(true);
        $campaignPropertyRef->setValue($targetMock, $campaign);

        $this->assertEquals($campaign, $targetMock->getCampaign());
    }

    /**
     * test setCampaign
     *
     * @test
     *
     * @return void
     */
    public function testSetCampaign()
    {
        $campaign = new Campaign();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCampaign($campaign);

        $targetRef = $this->createTargetReflection();

        $campaignPropertyRef = $targetRef->getProperty('campaign');
        $campaignPropertyRef->setAccessible(true);

        $this->assertEquals($campaign, $campaignPropertyRef->getValue($targetMock));
    }

    /**
     * test getTheater
     *
     * @test
     *
     * @return void
     */
    public function testGetTheater()
    {
        $theater = new Theater(8);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);
        $theaterPropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * test setTheater
     *
     * @test
     *
     * @return void
     */
    public function testSetTheater()
    {
        $theater = new Theater(8);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }

    /**
     * test getDisplayOrder
     *
     * @test
     *
     * @return void
     */
    public function testGetDisplayOrder()
    {
        $displayOrder = 4;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($targetMock, $displayOrder);

        $this->assertEquals($displayOrder, $targetMock->getDisplayOrder());
    }

    /**
     * test setDisplayOrder
     *
     * @test
     *
     * @return void
     */
    public function testSetDisplayOrder()
    {
        $displayOrder = 4;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
