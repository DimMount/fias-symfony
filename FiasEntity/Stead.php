<?php

declare(strict_types=1);

namespace Liquetsoft\Fias\Symfony\FiasBundle\FiasEntity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * Земельные участки.
 *
 * @ORM\Table(name="liquetsoft_fias_stead")
 * @ORM\Entity
 */
class Stead
{
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid")
     *
     * @var UuidInterface
     */
    private $steadguid;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $number = '';

    /**
     * @ORM\Column(type="string", length=2)
     *
     * @var string
     */
    private $regioncode = '';

    /**
     * @ORM\Column(type="string", length=6)
     *
     * @var string
     */
    private $postalcode = '';

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
     * @ORM\Column(type="uuid")
     *
     * @var UuidInterface
     */
    private $parentguid;

    /**
     * @ORM\Column(type="uuid")
     *
     * @var UuidInterface
     */
    private $steadid;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $operstatus = '';

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
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $livestatus = '';

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $divtype = '';

    /**
     * @ORM\Column(type="uuid")
     *
     * @var UuidInterface
     */
    private $normdoc;

    public function setSteadguid(UuidInterface $steadguid): self
    {
        $this->steadguid = $steadguid;

        return $this;
    }

    public function getSteadguid(): UuidInterface
    {
        return $this->steadguid;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setRegioncode(string $regioncode): self
    {
        $this->regioncode = $regioncode;

        return $this;
    }

    public function getRegioncode(): string
    {
        return $this->regioncode;
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

    public function setParentguid(UuidInterface $parentguid): self
    {
        $this->parentguid = $parentguid;

        return $this;
    }

    public function getParentguid(): UuidInterface
    {
        return $this->parentguid;
    }

    public function setSteadid(UuidInterface $steadid): self
    {
        $this->steadid = $steadid;

        return $this;
    }

    public function getSteadid(): UuidInterface
    {
        return $this->steadid;
    }

    public function setOperstatus(string $operstatus): self
    {
        $this->operstatus = $operstatus;

        return $this;
    }

    public function getOperstatus(): string
    {
        return $this->operstatus;
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

    public function setLivestatus(string $livestatus): self
    {
        $this->livestatus = $livestatus;

        return $this;
    }

    public function getLivestatus(): string
    {
        return $this->livestatus;
    }

    public function setDivtype(string $divtype): self
    {
        $this->divtype = $divtype;

        return $this;
    }

    public function getDivtype(): string
    {
        return $this->divtype;
    }

    public function setNormdoc(UuidInterface $normdoc): self
    {
        $this->normdoc = $normdoc;

        return $this;
    }

    public function getNormdoc(): UuidInterface
    {
        return $this->normdoc;
    }
}
