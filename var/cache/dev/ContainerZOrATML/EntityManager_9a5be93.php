<?php

namespace ContainerZOrATML;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder69edb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera42aa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties89a38 = [
        
    ];

    public function getConnection()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getConnection', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getMetadataFactory', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getExpressionBuilder', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'beginTransaction', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getCache', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getCache();
    }

    public function transactional($func)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'transactional', array('func' => $func), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'wrapInTransaction', array('func' => $func), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'commit', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->commit();
    }

    public function rollback()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'rollback', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getClassMetadata', array('className' => $className), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'createQuery', array('dql' => $dql), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'createNamedQuery', array('name' => $name), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'createQueryBuilder', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'flush', array('entity' => $entity), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'clear', array('entityName' => $entityName), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->clear($entityName);
    }

    public function close()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'close', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->close();
    }

    public function persist($entity)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'persist', array('entity' => $entity), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'remove', array('entity' => $entity), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'refresh', array('entity' => $entity), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'detach', array('entity' => $entity), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'merge', array('entity' => $entity), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getRepository', array('entityName' => $entityName), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'contains', array('entity' => $entity), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getEventManager', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getConfiguration', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'isOpen', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getUnitOfWork', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getProxyFactory', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'initializeObject', array('obj' => $obj), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'getFilters', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'isFiltersStateClean', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'hasFilters', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return $this->valueHolder69edb->hasFilters();
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

        $instance->initializera42aa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder69edb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder69edb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder69edb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, '__get', ['name' => $name], $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        if (isset(self::$publicProperties89a38[$name])) {
            return $this->valueHolder69edb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69edb;

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

        $targetObject = $this->valueHolder69edb;
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
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69edb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder69edb;
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
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, '__isset', array('name' => $name), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69edb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder69edb;
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
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, '__unset', array('name' => $name), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69edb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder69edb;
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
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, '__clone', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        $this->valueHolder69edb = clone $this->valueHolder69edb;
    }

    public function __sleep()
    {
        $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, '__sleep', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;

        return array('valueHolder69edb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera42aa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera42aa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera42aa && ($this->initializera42aa->__invoke($valueHolder69edb, $this, 'initializeProxy', array(), $this->initializera42aa) || 1) && $this->valueHolder69edb = $valueHolder69edb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder69edb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder69edb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
