<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;

class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Schema';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\Tests\Expected\Model\Schema;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\Schema();
        if (property_exists($data, 'stringProperty')) {
            $object->setStringProperty($data->{'stringProperty'});
        }
        if (property_exists($data, 'dateProperty')) {
            $object->setDateProperty(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'dateProperty'}));
        }
        if (property_exists($data, 'integerProperty')) {
            $object->setIntegerProperty($data->{'integerProperty'});
        }
        if (property_exists($data, 'floatProperty')) {
            $object->setFloatProperty($data->{'floatProperty'});
        }
        if (property_exists($data, 'arrayProperty')) {
            $values = [];
            foreach ($data->{'arrayProperty'} as $value) {
                $values[] = $value;
            }
            $object->setArrayProperty($values);
        }
        if (property_exists($data, 'mapProperty')) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'mapProperty'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMapProperty($values_1);
        }
        if (property_exists($data, 'objectProperty')) {
            $object->setObjectProperty($this->denormalizer->denormalize($data->{'objectProperty'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\SchemaObjectProperty', 'json', $context));
        }
        if (property_exists($data, 'objectRefProperty')) {
            $object->setObjectRefProperty($this->denormalizer->denormalize($data->{'objectRefProperty'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Schema', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStringProperty()) {
            $data->{'stringProperty'} = $object->getStringProperty();
        }
        if (null !== $object->getDateProperty()) {
            $data->{'dateProperty'} = $object->getDateProperty()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getIntegerProperty()) {
            $data->{'integerProperty'} = $object->getIntegerProperty();
        }
        if (null !== $object->getFloatProperty()) {
            $data->{'floatProperty'} = $object->getFloatProperty();
        }
        if (null !== $object->getArrayProperty()) {
            $values = [];
            foreach ($object->getArrayProperty() as $value) {
                $values[] = $value;
            }
            $data->{'arrayProperty'} = $values;
        }
        if (null !== $object->getMapProperty()) {
            $values_1 = new \stdClass();
            foreach ($object->getMapProperty() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'mapProperty'} = $values_1;
        }
        if (null !== $object->getObjectProperty()) {
            $data->{'objectProperty'} = $this->normalizer->normalize($object->getObjectProperty(), 'json', $context);
        }
        if (null !== $object->getObjectRefProperty()) {
            $data->{'objectRefProperty'} = $this->normalizer->normalize($object->getObjectRefProperty(), 'json', $context);
        }

        return $data;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}