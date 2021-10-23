<?php

namespace ContainerXCC5Vo8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder32797 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfe27d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d18c = [
        
    ];

    public function getConnection()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getConnection', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getMetadataFactory', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getExpressionBuilder', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'beginTransaction', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getCache', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'transactional', array('func' => $func), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'commit', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->commit();
    }

    public function rollback()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'rollback', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getClassMetadata', array('className' => $className), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'createQuery', array('dql' => $dql), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'createNamedQuery', array('name' => $name), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'createQueryBuilder', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'flush', array('entity' => $entity), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'clear', array('entityName' => $entityName), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->clear($entityName);
    }

    public function close()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'close', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->close();
    }

    public function persist($entity)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'persist', array('entity' => $entity), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'remove', array('entity' => $entity), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'refresh', array('entity' => $entity), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'detach', array('entity' => $entity), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'merge', array('entity' => $entity), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'contains', array('entity' => $entity), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getEventManager', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getConfiguration', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'isOpen', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getUnitOfWork', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getProxyFactory', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'initializeObject', array('obj' => $obj), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'getFilters', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'isFiltersStateClean', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'hasFilters', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return $this->valueHolder32797->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfe27d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder32797) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder32797 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder32797->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, '__get', ['name' => $name], $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        if (isset(self::$publicProperties5d18c[$name])) {
            return $this->valueHolder32797->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32797;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder32797;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32797;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder32797;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, '__isset', array('name' => $name), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32797;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder32797;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, '__unset', array('name' => $name), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32797;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder32797;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, '__clone', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        $this->valueHolder32797 = clone $this->valueHolder32797;
    }

    public function __sleep()
    {
        $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, '__sleep', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;

        return array('valueHolder32797');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfe27d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfe27d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfe27d && ($this->initializerfe27d->__invoke($valueHolder32797, $this, 'initializeProxy', array(), $this->initializerfe27d) || 1) && $this->valueHolder32797 = $valueHolder32797;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder32797;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder32797;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
