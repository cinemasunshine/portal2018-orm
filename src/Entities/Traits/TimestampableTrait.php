<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities\Traits;

use DateTime;
use InvalidArgumentException;

/**
 * Timestampable trait
 */
trait TimestampableTrait
{
    /**
     * @ORM\Column(type="datetime", name="created_at")
     *
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime", name="updated_at")
     *
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * Return createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set createdAt
     *
     * @param DateTime|string $createdAt
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public function setCreatedAt($createdAt)
    {
        if ($createdAt instanceof DateTime) {
            $this->createdAt = $createdAt;
        } elseif (is_string($createdAt)) {
            $this->createdAt = new DateTime($createdAt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return updatedAt
     *
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedAt
     *
     * @param DateTime|string $updatedAt
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public function setUpdatedAt($updatedAt)
    {
        if ($updatedAt instanceof DateTime) {
            $this->updatedAt = $updatedAt;
        } elseif (is_string($updatedAt)) {
            $this->updatedAt = new DateTime($updatedAt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * PrePersist Event
     *
     * @ORM\PrePersist
     *
     * @return void
     */
    public function prePersistTimestamp()
    {
        $this->setCreatedAt('now');
        $this->setUpdatedAt('now');
    }

    /**
     * update
     *
     * @ORM\PreUpdate
     *
     * @return void
     */
    public function updateTimestamp()
    {
        $this->setUpdatedAt('now');
    }
}
