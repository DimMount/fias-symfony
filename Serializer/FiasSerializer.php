<?php

declare(strict_types=1);

namespace Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Serializer;

use Liquetsoft\Fias\Component\Serializer\FiasNameConverter;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Преднастроенный объект сериализатора для ФИАС.
 */
class FiasSerializer extends Serializer
{
    public function __construct(?array $normalizers = null, ?array $encoders = null)
    {
        if ($normalizers === null) {
            $normalizers = [
                new UuidNormalizer,
                new DateTimeNormalizer,
                new ObjectNormalizer(
                    null,
                    new FiasNameConverter,
                    null,
                    new ReflectionExtractor,
                    null,
                    null,
                    [ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
                ),
            ];
        }

        if ($encoders === null) {
            $encoders = [
                new XmlEncoder,
            ];
        }

        parent::__construct($normalizers, $encoders);
    }
}
