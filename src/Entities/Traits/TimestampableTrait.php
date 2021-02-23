<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities\Traits;

use DateTime;
use InvalidArgumentException;

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

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime|string $createdAt
     *
     * @throws InvalidArgumentException
     */
    public function setCreatedAt($createdAt): void
    {
        if ($createdAt instanceof DateTime) {
            $this->createdAt = $createdAt;
        } elseif (is_string($createdAt)) {
            $this->createdAt = new DateTime($createdAt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime|string $updatedAt
     *
     * @throws InvalidArgumentException
     */
    public function setUpdatedAt($updatedAt): void
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
     * @ORM\PrePersist
     */
    public function prePersistTimestamp(): void
    {
        $this->setCreatedAt('now');
        $this->setUpdatedAt('now');
    }

    /**
     * @ORM\PreUpdate
     */
    public function updateTimestamp(): void
    {
        $this->setUpdatedAt('now');
    }
}
