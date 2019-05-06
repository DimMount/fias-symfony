<?php

declare(strict_types=1);

namespace Liquetsoft\Fias\Symfony\FiasBundle\FiasEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Статусы.
 *
 * @ORM\Table(name="liquetsoft_fias_housestatestatus")
 * @ORM\Entity
 */
class HouseStateStatus
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var int
     */
    private $housestid = 0;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $name = '';

    public function setHousestid(int $housestid): self
    {
        $this->housestid = $housestid;

        return $this;
    }

    public function getHousestid(): int
    {
        return $this->housestid;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
