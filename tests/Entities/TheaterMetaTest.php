<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterMeta;
use Cinemasunshine\ORM\Entities\TheaterOpeningHour;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class TheaterMetaTest extends TestCase
{
    /**
     * @return TheaterMeta&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TheaterMeta::class);
    }

    /**
     * @param string[] $methods
     * @return TheaterMeta&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterMeta::class, $methods);
    }

    /**
     * @return ReflectionClass<TheaterMeta>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(TheaterMeta::class);
    }

    /**
     * @test
     */
    public function testConstruct(): void
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock);

        $openingHoursPropertyRef = $targetRef->getProperty('openingHours');
        $openingHoursPropertyRef->setAccessible(true);

        $this->assertEquals([], $openingHoursPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 12;

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
    public function testGetTheater(): void
    {
        $theater = new Theater(11);

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
        $theater = new Theater(11);

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
    public function testGetOpeningHours(): void
    {
        $openingHours = [
            [
                'type' => TheaterOpeningHour::TYPE_DATE,
                'from_date' => '2020/01/01',
                'to_date' => null,
                'time' => '10:00:00',
            ],
            [
                'type' => TheaterOpeningHour::TYPE_TERM,
                'from_date' => '2020/01/02',
                'to_date' => '2020/01/03',
                'time' => '12:30:00',
            ],
        ];

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $openingHoursPropertyRef = $targetRef->getProperty('openingHours');
        $openingHoursPropertyRef->setAccessible(true);
        $openingHoursPropertyRef->setValue($targetMock, $openingHours);

        $result = $targetMock->getOpeningHours();
        $this->assertIsArray($result);

        foreach ($result as $data) {
            $this->assertInstanceOf(TheaterOpeningHour::class, $data);
        }
    }

    /**
     * @test
     */
    public function testSetOpeningHours(): void
    {
        $data = [
            [
                'type' => TheaterOpeningHour::TYPE_DATE,
                'from_date' => '2020/01/01',
                'to_date' => null,
                'time' => '10:00:00',
            ],
            [
                'type' => TheaterOpeningHour::TYPE_TERM,
                'from_date' => '2020/01/02',
                'to_date' => '2020/01/03',
                'time' => '12:30:00',
            ],
        ];

        $openingHours = [];

        foreach ($data as $row) {
            $openingHours[] = TheaterOpeningHour::create($row);
        }

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOpeningHours($openingHours);

        $targetRef = $this->createTargetReflection();

        $openingHoursPropertyRef = $targetRef->getProperty('openingHours');
        $openingHoursPropertyRef->setAccessible(true);

        $this->assertEquals($data, $openingHoursPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetTwitter(): void
    {
        $twitter = 'TwitterJP';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $twitterPropertyRef = $targetRef->getProperty('twitter');
        $twitterPropertyRef->setAccessible(true);
        $twitterPropertyRef->setValue($targetMock, $twitter);

        $this->assertEquals($twitter, $targetMock->getTwitter());
    }

    /**
     * @test
     */
    public function testSetTwitter(): void
    {
        $twitter = 'TwitterJP';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTwitter($twitter);

        $targetRef = $this->createTargetReflection();

        $twitterPropertyRef = $targetRef->getProperty('twitter');
        $twitterPropertyRef->setAccessible(true);

        $this->assertEquals($twitter, $twitterPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetFacebook(): void
    {
        $facebook = 'facebook';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $facebookPropertyRef = $targetRef->getProperty('facebook');
        $facebookPropertyRef->setAccessible(true);
        $facebookPropertyRef->setValue($targetMock, $facebook);

        $this->assertEquals($facebook, $targetMock->getFacebook());
    }

    /**
     * @test
     */
    public function testSetFacebook(): void
    {
        $facebook = 'facebook';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setFacebook($facebook);

        $targetRef = $this->createTargetReflection();

        $facebookPropertyRef = $targetRef->getProperty('facebook');
        $facebookPropertyRef->setAccessible(true);

        $this->assertEquals($facebook, $facebookPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetOyakoCinemaUrl(): void
    {
        $oyakoCinemaUrl = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $oyakoCinemaUrlPropertyRef = $targetRef->getProperty('oyakoCinemaUrl');
        $oyakoCinemaUrlPropertyRef->setAccessible(true);
        $oyakoCinemaUrlPropertyRef->setValue($targetMock, $oyakoCinemaUrl);

        $this->assertEquals($oyakoCinemaUrl, $targetMock->getOyakoCinemaUrl());
    }

    /**
     * @test
     */
    public function testSetOyakoCinemaUrl(): void
    {
        $oyakoCinemaUrl = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOyakoCinemaUrl($oyakoCinemaUrl);

        $targetRef = $this->createTargetReflection();

        $oyakoCinemaUrlPropertyRef = $targetRef->getProperty('oyakoCinemaUrl');
        $oyakoCinemaUrlPropertyRef->setAccessible(true);

        $this->assertEquals($oyakoCinemaUrl, $oyakoCinemaUrlPropertyRef->getValue($targetMock));
    }
}
