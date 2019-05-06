<?php

declare(strict_types=1);

namespace Liquetsoft\Fias\Symfony\FiasBundle\FiasEntity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * Дома.
 *
 * @ORM\Table(name="liquetsoft_fias_house")
 * @ORM\Entity
 */
class House
{
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid")
     *
     * @var UuidInterface
     */
    private $houseid;

    /**
     * @ORM\Column(type="uuid")
     *
     * @var UuidInterface
     */
    private $houseguid;

    /**
     * @ORM\Column(type="uuid")
     *
     * @var UuidInterface
     */
    private $aoguid;

    /**
     * @ORM\Column(type="string", length=20)
     *
     * @var string
     */
    private $housenum = '';

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $strstatus = 0;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $eststatus = 0;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $statstatus = 0;

    /**
     * @ORM\Column(type="string", length=4)
     *
     * @var string
     */
    private $ifnsfl = '';

    /**
     * @ORM\Column(type="string", length=4)
     *
     * @var string
     */
    private $ifnsul = '';

    /**
     * @ORM\Column(type="string", length=11)
     *
     * @var string
     */
    private $okato = '';

    /**
     * @ORM\Column(type="string", length=11)
     *
     * @var string
     */
    private $oktmo = '';

    /**
     * @ORM\Column(type="string", length=6)
     *
     * @var string
     */
    private $postalcode = '';

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTimeInterface
     */
    private $startdate;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTimeInterface
     */
    private $enddate;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTimeInterface
     */
    private $updatedate;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $counter = 0;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $divtype = 0;

    public function setHouseid(UuidInterface $houseid): self
    {
        $this->houseid = $houseid;

        return $this;
    }

    public function getHouseid(): UuidInterface
    {
        return $this->houseid;
    }

    public function setHouseguid(UuidInterface $houseguid): self
    {
        $this->houseguid = $houseguid;

        return $this;
    }

    public function getHouseguid(): UuidInterface
    {
        return $this->houseguid;
    }

    public function setAoguid(UuidInterface $aoguid): self
    {
        $this->aoguid = $aoguid;

        return $this;
    }

    public function getAoguid(): UuidInterface
    {
        return $this->aoguid;
    }

    public function setHousenum(string $housenum): self
    {
        $this->housenum = $housenum;

        return $this;
    }

    public function getHousenum(): string
    {
        return $this->housenum;
    }

    public function setStrstatus(int $strstatus): self
    {
        $this->strstatus = $strstatus;

        return $this;
    }

    public function getStrstatus(): int
    {
        return $this->strstatus;
    }

    public function setEststatus(int $eststatus): self
    {
        $this->eststatus = $eststatus;

        return $this;
    }

    public function getEststatus(): int
    {
        return $this->eststatus;
    }

    public function setStatstatus(int $statstatus): self
    {
        $this->statstatus = $statstatus;

        return $this;
    }

    public function getStatstatus(): int
    {
        return $this->statstatus;
    }

    public function setIfnsfl(string $ifnsfl): self
    {
        $this->ifnsfl = $ifnsfl;

        return $this;
    }

    public function getIfnsfl(): string
    {
        return $this->ifnsfl;
    }

    public function setIfnsul(string $ifnsul): self
    {
        $this->ifnsul = $ifnsul;

        return $this;
    }

    public function getIfnsul(): string
    {
        return $this->ifnsul;
    }

    public function setOkato(string $okato): self
    {
        $this->okato = $okato;

        return $this;
    }

    public function getOkato(): string
    {
        return $this->okato;
    }

    public function setOktmo(string $oktmo): self
    {
        $this->oktmo = $oktmo;

        return $this;
    }

    public function getOktmo(): string
    {
        return $this->oktmo;
    }

    public function setPostalcode(string $postalcode): self
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    public function getPostalcode(): string
    {
        return $this->postalcode;
    }

    public function setStartdate(DateTimeInterface $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getStartdate(): DateTimeInterface
    {
        return $this->startdate;
    }

    public function setEnddate(DateTimeInterface $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getEnddate(): DateTimeInterface
    {
        return $this->enddate;
    }

    public function setUpdatedate(DateTimeInterface $updatedate): self
    {
        $this->updatedate = $updatedate;

        return $this;
    }

    public function getUpdatedate(): DateTimeInterface
    {
        return $this->updatedate;
    }

    public function setCounter(int $counter): self
    {
        $this->counter = $counter;

        return $this;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }

    public function setDivtype(int $divtype): self
    {
        $this->divtype = $divtype;

        return $this;
    }

    public function getDivtype(): int
    {
        return $this->divtype;
    }
}
