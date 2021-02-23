<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Campaign;
use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterCampaign;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class TheaterCampaignTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return TheaterCampaign&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterCampaign::class, $methods);
    }

    /**
     * @return ReflectionClass<TheaterCampaign>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(TheaterCampaign::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
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
     * @test
     */
    public function testGetCampaign(): void
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
     * @test
     */
    public function testSetCampaign(): void
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
     * @test
     */
    public function testGetTheater(): void
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
     * @test
     */
    public function testSetTheater(): void
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
     * @test
     */
    public function testGetDisplayOrder(): void
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
     * @test
     */
    public function testSetDisplayOrder(): void
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
