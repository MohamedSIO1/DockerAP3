<?php

namespace Container48zxgmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_ContentNegotiationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.state_provider.content_negotiation' shared service.
     *
     * @return \ApiPlatform\State\Provider\ContentNegotiationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['api_platform.serializer.context_builder.filter'] ?? self::getApiPlatform_Serializer_ContextBuilder_FilterService($container));
        $b = ($container->privates['api_platform.security.resource_access_checker'] ?? self::getApiPlatform_Security_ResourceAccessCheckerService($container));

        return $container->privates['api_platform.state_provider.content_negotiation'] = new \ApiPlatform\State\Provider\ContentNegotiationProvider(new \ApiPlatform\Symfony\Security\State\AccessCheckerProvider(new \ApiPlatform\Symfony\Validator\State\ValidateProvider(new \ApiPlatform\Symfony\Validator\State\QueryParameterValidateProvider(new \ApiPlatform\Symfony\Security\State\AccessCheckerProvider(new \ApiPlatform\State\Provider\DeserializeProvider(new \ApiPlatform\Symfony\Security\State\AccessCheckerProvider(new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiProvider(new \ApiPlatform\State\Provider\ReadProvider(($container->privates['api_platform.state_provider.locator'] ?? self::getApiPlatform_StateProvider_LocatorService($container)), $a), ($container->privates['api_platform.openapi.factory'] ?? $container->load('getApiPlatform_Openapi_FactoryService'))), $b), ($container->privates['serializer'] ?? self::getSerializerService($container)), $a, ($container->services['translator'] ?? self::getTranslatorService($container))), $b, 'post_denormalize'), ($container->privates['api_platform.validator.query_parameter_validator'] ?? self::getApiPlatform_Validator_QueryParameterValidatorService($container))), ($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService'))), $b, 'post_validate'), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.formats'], $container->parameters['api_platform.error_formats']);
    }
}
