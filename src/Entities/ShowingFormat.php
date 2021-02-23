<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * ShowingFormat entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="showing_format", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class ShowingFormat
{
    use TimestampableTrait;

    public const SYSTEM_2D     = 1;
    public const SYSTEM_3D     = 2;
    public const SYSTEM_4DX    = 3;
    public const SYSTEM_4DX3D  = 4;
    public const SYSTEM_IMAX   = 5;
    public const SYSTEM_IMAX3D = 6;
    // const SYSTEM_BESTIA           = 7; 削除 SASAKI-449
    // const SYSTEM_BESTIA3D         = 8; 削除 SASAKI-449
    // const SYSTEM_BTSX             = 9; 削除 SASAKI-449
    public const SYSTEM_SCREENX    = 10; // SASAKI-351
    public const SYSTEM_4DX_SCREEN = 11; // SASAKI-428、SASAKI-525
    public const SYSTEM_NONE       = 99;

    public const SOUND_BESTIA        = 1;
    public const SOUND_DTSX          = 2;
    public const SOUND_DOLBY_ATMOS   = 3;
    public const SOUND_GDC_IMMERSIVE = 4;
    public const SOUND_NONE          = 99;

    public const VOICE_SUBTITLE = 1;
    public const VOICE_DUB      = 2;
    public const VOICE_NONE     = 3;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Schedule", inversedBy="showingFormats")
     * @ORM\JoinColumn(name="schedule_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Schedule
     */
    protected $schedule;

    /**
     * @ORM\Column(type="smallint", nullable=false, options={"unsigned"=true})
     *
     * @var int
     */
    protected $system;

    /**
     * @ORM\Column(type="smallint", nullable=false, options={"unsigned"=true})
     *
     * @var int
     */
    protected $sound;

    /**
     * @ORM\Column(type="smallint", nullable=false, options={"unsigned"=true})
     *
     * @var int
     */
    protected $voice;

    public function getId(): int
    {
        return $this->id;
    }

    public function getSchedule(): Schedule
    {
        return $this->schedule;
    }

    public function setSchedule(Schedule $schedule): void
    {
        $this->schedule = $schedule;
    }

    public function getSystem(): int
    {
        return $this->system;
    }

    public function setSystem(int $system): void
    {
        $this->system = $system;
    }

    public function getSound(): int
    {
        return $this->sound;
    }

    public function setSound(int $sound): void
    {
        $this->sound = $sound;
    }

    public function getVoice(): int
    {
        return $this->voice;
    }

    public function setVoice(int $voice): void
    {
        $this->voice = $voice;
    }
}
