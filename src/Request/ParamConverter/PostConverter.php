<?php

namespace App\Request\ParamConverter;

use App\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Serializer\SerializerInterface;


/**
 * Class PostConverter
 * @package App\Request\ParamConverter
 */
class PostConverter implements ParamConverterInterface
{

    /**
     * @var SerializerInterface
     */
    private SerializerInterface $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }


    /**
     * @param Request $request
     * @param ParamConverter $configuration
     * @return bool|void
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        // TODO: Implement apply() method.
        $post = $this->serializer->deserialize($request->getContent(), Post::class, 'json');

        $request->attributes->set($configuration->getName(), $post);
    }

    /**
     * @param ParamConverter $configuration
     * @return bool|void
     */
    public function supports(ParamConverter $configuration)
    {
        // TODO: Implement supports() method.
        return $configuration->getName() === "post";
    }
}