<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Campaign;
use Cinemasunshine\ORM\Entities\SpecialSite;
use Cinemasunshine\ORM\Entities\SpecialSiteCampaign;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class SpecialSiteCampaignTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return SpecialSiteCampaign&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteCampaign::class, $methods);
    }

    /**
     * @return ReflectionClass<SpecialSiteCampaign>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(SpecialSiteCampaign::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 22;

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
    public function testGetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);
        $specialSitePropertyRef->setValue($targetMock, $specialSite);

        $this->assertEquals($specialSite, $targetMock->getSpecialSite());
    }

    /**
     * @test
     */
    public function testSetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialSite($specialSite);

        $targetRef = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);

        $this->assertEquals($specialSite, $specialSitePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetDisplayOrder(): void
    {
        $displayOrder = 3;

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
        $displayOrder = 3;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
