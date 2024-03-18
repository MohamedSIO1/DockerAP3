<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'birthday' => [parent::class, 'birthday', null],
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'credential' => [parent::class, 'credential', null],
        "\0".parent::class."\0".'firstname' => [parent::class, 'firstname', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'nb_children' => [parent::class, 'nb_children', null],
        "\0".parent::class."\0".'orders' => [parent::class, 'orders', null],
        "\0".parent::class."\0".'phone' => [parent::class, 'phone', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'street' => [parent::class, 'street', null],
        "\0".parent::class."\0".'zip_code' => [parent::class, 'zip_code', null],
        'birthday' => [parent::class, 'birthday', null],
        'city' => [parent::class, 'city', null],
        'credential' => [parent::class, 'credential', null],
        'firstname' => [parent::class, 'firstname', null],
        'id' => [parent::class, 'id', null],
        'name' => [parent::class, 'name', null],
        'nb_children' => [parent::class, 'nb_children', null],
        'orders' => [parent::class, 'orders', null],
        'phone' => [parent::class, 'phone', null],
        'roles' => [parent::class, 'roles', null],
        'street' => [parent::class, 'street', null],
        'zip_code' => [parent::class, 'zip_code', null],
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
