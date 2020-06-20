<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entity\Traits;

use Cinemasunshine\ORM\Entity\AdminUser;

/**
 * SavedUser trait
 */
trait SavedUserTrait
{
    /**
     * @var AdminUser|null
     * @ORM\ManyToOne(targetEntity="AdminUser")
     * @ORM\JoinColumn(name="created_user_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $createdUser;

    /**
     * @var AdminUser|null
     * @ORM\ManyToOne(targetEntity="AdminUser")
     * @ORM\JoinColumn(name="updated_user_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $updatedUser;

    /**
     * Return createdUser
     *
     * @return AdminUser|null
     */
    public function getCreatedUser(): ?AdminUser
    {
        return $this->createdUser;
    }

    /**
     * Set createdUser
     *
     * @param AdminUser|null $createdUser
     * @return void
     */
    public function setCreatedUser(?AdminUser $createdUser)
    {
        $this->createdUser = $createdUser;
    }

    /**
     * Return updatedUser
     *
     * @return AdminUser|null
     */
    public function getUpdatedUser(): ?AdminUser
    {
        return $this->updatedUser;
    }

    /**
     * Set updatedUser
     *
     * @param AdminUser|null $updatedUser
     * @return void
     */
    public function setUpdatedUser(?AdminUser $updatedUser)
    {
        $this->updatedUser = $updatedUser;
    }
}
