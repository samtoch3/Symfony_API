<?php

namespace ContainerGvrkcjT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1bd4d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer77f6d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf03f5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getConnection', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getMetadataFactory', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getExpressionBuilder', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'beginTransaction', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getCache', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'transactional', array('func' => $func), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'commit', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->commit();
    }

    public function rollback()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'rollback', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getClassMetadata', array('className' => $className), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'createQuery', array('dql' => $dql), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'createNamedQuery', array('name' => $name), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'createQueryBuilder', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'flush', array('entity' => $entity), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'clear', array('entityName' => $entityName), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->clear($entityName);
    }

    public function close()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'close', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->close();
    }

    public function persist($entity)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'persist', array('entity' => $entity), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'remove', array('entity' => $entity), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'refresh', array('entity' => $entity), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'detach', array('entity' => $entity), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'merge', array('entity' => $entity), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'contains', array('entity' => $entity), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getEventManager', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getConfiguration', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'isOpen', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getUnitOfWork', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getProxyFactory', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'initializeObject', array('obj' => $obj), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'getFilters', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'isFiltersStateClean', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'hasFilters', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return $this->valueHolder1bd4d->hasFilters();
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

        $instance->initializer77f6d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1bd4d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1bd4d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1bd4d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, '__get', ['name' => $name], $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        if (isset(self::$publicPropertiesf03f5[$name])) {
            return $this->valueHolder1bd4d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd4d;

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

        $targetObject = $this->valueHolder1bd4d;
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
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd4d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1bd4d;
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
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, '__isset', array('name' => $name), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd4d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1bd4d;
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
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, '__unset', array('name' => $name), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd4d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1bd4d;
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
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, '__clone', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        $this->valueHolder1bd4d = clone $this->valueHolder1bd4d;
    }

    public function __sleep()
    {
        $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, '__sleep', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;

        return array('valueHolder1bd4d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer77f6d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer77f6d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer77f6d && ($this->initializer77f6d->__invoke($valueHolder1bd4d, $this, 'initializeProxy', array(), $this->initializer77f6d) || 1) && $this->valueHolder1bd4d = $valueHolder1bd4d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1bd4d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1bd4d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
