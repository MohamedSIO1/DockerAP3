<?php

namespace Container48zxgmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_JsonSchema_BackwardCompatibleSchemaFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.json_schema.backward_compatible_schema_factory' shared service.
     *
     * @return \ApiPlatform\JsonSchema\BackwardCompatibleSchemaFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['api_platform.json_schema.type_factory'] ?? $container->load('getApiPlatform_JsonSchema_TypeFactoryService'));

        if (isset($container->privates['api_platform.json_schema.backward_compatible_schema_factory'])) {
            return $container->privates['api_platform.json_schema.backward_compatible_schema_factory'];
        }

        return $container->privates['api_platform.json_schema.backward_compatible_schema_factory'] = new \ApiPlatform\JsonSchema\BackwardCompatibleSchemaFactory(new \ApiPlatform\Hydra\JsonSchema\SchemaFactory(new \ApiPlatform\JsonSchema\SchemaFactory($a, ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_CachedService($container)), ($container->privates['serializer.name_converter.metadata_aware'] ?? self::getSerializer_NameConverter_MetadataAwareService($container)), ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)))));
    }
}
