<?php

namespace Container5aDEqMv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderebc63 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer51444 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e0ca = [
        
    ];

    public function getConnection()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getConnection', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getMetadataFactory', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getExpressionBuilder', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'beginTransaction', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getCache', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getCache();
    }

    public function transactional($func)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'transactional', array('func' => $func), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'wrapInTransaction', array('func' => $func), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'commit', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->commit();
    }

    public function rollback()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'rollback', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getClassMetadata', array('className' => $className), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'createQuery', array('dql' => $dql), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'createNamedQuery', array('name' => $name), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'createQueryBuilder', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'flush', array('entity' => $entity), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'clear', array('entityName' => $entityName), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->clear($entityName);
    }

    public function close()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'close', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->close();
    }

    public function persist($entity)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'persist', array('entity' => $entity), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'remove', array('entity' => $entity), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'refresh', array('entity' => $entity), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'detach', array('entity' => $entity), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'merge', array('entity' => $entity), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getRepository', array('entityName' => $entityName), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'contains', array('entity' => $entity), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getEventManager', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getConfiguration', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'isOpen', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getUnitOfWork', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getProxyFactory', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'initializeObject', array('obj' => $obj), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'getFilters', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'isFiltersStateClean', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'hasFilters', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return $this->valueHolderebc63->hasFilters();
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

        $instance->initializer51444 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderebc63) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderebc63 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderebc63->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, '__get', ['name' => $name], $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        if (isset(self::$publicProperties5e0ca[$name])) {
            return $this->valueHolderebc63->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebc63;

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

        $targetObject = $this->valueHolderebc63;
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
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebc63;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderebc63;
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
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, '__isset', array('name' => $name), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebc63;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderebc63;
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
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, '__unset', array('name' => $name), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebc63;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderebc63;
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
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, '__clone', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        $this->valueHolderebc63 = clone $this->valueHolderebc63;
    }

    public function __sleep()
    {
        $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, '__sleep', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;

        return array('valueHolderebc63');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer51444 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer51444;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer51444 && ($this->initializer51444->__invoke($valueHolderebc63, $this, 'initializeProxy', array(), $this->initializer51444) || 1) && $this->valueHolderebc63 = $valueHolderebc63;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderebc63;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderebc63;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
