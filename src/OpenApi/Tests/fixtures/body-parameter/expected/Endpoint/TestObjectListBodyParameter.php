<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class TestObjectListBodyParameter extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    /**
     * @param array $testObjectList
     */
    public function __construct(array $testObjectList)
    {
        $this->body = $testObjectList;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/test-object-list';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return $this->getSerializedBody($serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
    }
}