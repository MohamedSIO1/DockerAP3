<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Store extends \App\Entity\Store implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'country' => [parent::class, 'country', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'stockStores' => [parent::class, 'stockStores', null],
        "\0".parent::class."\0".'warehouse' => [parent::class, 'warehouse', null],
        'city' => [parent::class, 'city', null],
        'country' => [parent::class, 'country', null],
        'id' => [parent::class, 'id', null],
        'stockStores' => [parent::class, 'stockStores', null],
        'warehouse' => [parent::class, 'warehouse', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
