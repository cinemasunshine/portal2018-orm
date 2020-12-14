<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminUser entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="admin_user", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class AdminUser
{
    use SoftDeleteTrait;
    use TimestampableTrait;

    public const GROUP_MASTER  = 1;
    public const GROUP_MANAGER = 2;
    public const GROUP_THEATER = 3;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", unique=true)
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string", name="display_name")
     *
     * @var string
     */
    protected $displayName;

    /**
     * @ORM\Column(type="string", length=60, options={"fixed":true})
     *
     * @var string
     */
    protected $password;

    /**
     * @ORM\Column(type="smallint", name="`group`", options={"unsigned"=true})
     *
     * @var int
     */
    protected $group;

    /**
     * @ORM\ManyToOne(targetEntity="Theater", inversedBy="adminUsers")
     * @ORM\JoinColumn(name="theater_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Theater|null
     */
    protected $theater;

    /**
     * Encrypt password
     *
     * @param string $password
     * @return string encrypted password
     *
     * @throws \RuntimeException
     */
    public static function encryptPassword(string $password): string
    {
        $encrypted = password_hash($password, PASSWORD_BCRYPT);

        if ($encrypted === false) {
            throw new \RuntimeException('Pasword hash failed.');
        }

        return $encrypted;
    }

    /**
     * Return id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Return name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Return display name
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * Set display name
     *
     * @param string $displayName
     * @return void
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * Return password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return void
     */
    public function setPassword(string $password)
    {
        $this->password = self::encryptPassword($password);
    }

    /**
     * Return group
     *
     * @return integer
     */
    public function getGroup(): int
    {
        return $this->group;
    }

    /**
     * Set group
     *
     * @param integer $group
     * @return void
     */
    public function setGroup(int $group)
    {
        $this->group = $group;
    }

    /**
     * Return theater
     *
     * @return Theater|null
     */
    public function getTheater(): ?Theater
    {
        return $this->theater;
    }

    /**
     * Set theater
     *
     * @param Theater|null $theater
     * @return void
     */
    public function setTheater(?Theater $theater)
    {
        $this->theater = $theater;
    }
}
