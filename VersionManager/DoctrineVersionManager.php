<?php

declare(strict_types=1);

namespace Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\VersionManager;

use Liquetsoft\Fias\Component\VersionManager\VersionManager;
use Liquetsoft\Fias\Component\FiasInformer\InformerResponse;
use Liquetsoft\Fias\Component\FiasInformer\InformerResponseBase;
use Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\FiasVersion;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use RuntimeException;

/**
 * Объект, который сохраняет текущую версию ФИАС с помощью doctrine.
 */
class DoctrineVersionManager implements VersionManager
{
    /**
     * @var ObjectManager
     */
    protected $em;

    /**
     * @var string
     */
    protected $entityClassName;

    /**
     * @param ManagerRegistry $doctrine
     * @param string          $entityClassName
     */
    public function __construct(ManagerRegistry $doctrine, string $entityClassName)
    {
        $this->em = $doctrine->getManager();
        $this->entityClassName = $entityClassName;
    }

    /**
     * {@inheritdoc}
     *
     * @throws RuntimeException
     */
    public function setCurrentVersion(InformerResponse $info): VersionManager
    {
        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws RuntimeException
     */
    public function getCurrentVersion(): InformerResponse
    {
        $entity = $this->getEntityClassName();
        $response = new InformerResponseBase;

        return $response;
    }

    /**
     * Возвращает класс сущности для обращения к Doctrine.
     *
     * @return string
     *
     * @throws RuntimeException
     */
    protected function getEntityClassName()
    {
        $trimmedEntityClassName = trim($this->entityClassName, " \t\n\r\0\x0B\\");

        if (!is_subclass_of($trimmedEntityClassName, FiasVersion::class)) {
            throw new RuntimeException(
                "Entity class must be a child of '" . FiasVersion::class . "' class, got '{$trimmedEntityClassName}'."
                . " Please check that 'liquetsoft_fias.version_manager_entity' parameter is properly configured."
            );
        }

        return $trimmedEntityClassName;
    }
}