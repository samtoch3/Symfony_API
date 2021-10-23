<?php

namespace ContainerUsYFju5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder32389 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0b75a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties738da = [
        
    ];

    public function getConnection()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getConnection', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getMetadataFactory', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getExpressionBuilder', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'beginTransaction', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getCache', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'transactional', array('func' => $func), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'commit', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->commit();
    }

    public function rollback()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'rollback', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getClassMetadata', array('className' => $className), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'createQuery', array('dql' => $dql), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'createNamedQuery', array('name' => $name), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'createQueryBuilder', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'flush', array('entity' => $entity), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'clear', array('entityName' => $entityName), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->clear($entityName);
    }

    public function close()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'close', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->close();
    }

    public function persist($entity)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'persist', array('entity' => $entity), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'remove', array('entity' => $entity), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'refresh', array('entity' => $entity), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'detach', array('entity' => $entity), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'merge', array('entity' => $entity), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'contains', array('entity' => $entity), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getEventManager', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getConfiguration', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'isOpen', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getUnitOfWork', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getProxyFactory', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'initializeObject', array('obj' => $obj), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'getFilters', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'isFiltersStateClean', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'hasFilters', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return $this->valueHolder32389->hasFilters();
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

        $instance->initializer0b75a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder32389) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder32389 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder32389->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, '__get', ['name' => $name], $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        if (isset(self::$publicProperties738da[$name])) {
            return $this->valueHolder32389->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32389;

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

        $targetObject = $this->valueHolder32389;
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
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32389;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder32389;
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
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, '__isset', array('name' => $name), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32389;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder32389;
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
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, '__unset', array('name' => $name), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32389;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder32389;
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
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, '__clone', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        $this->valueHolder32389 = clone $this->valueHolder32389;
    }

    public function __sleep()
    {
        $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, '__sleep', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;

        return array('valueHolder32389');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0b75a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0b75a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0b75a && ($this->initializer0b75a->__invoke($valueHolder32389, $this, 'initializeProxy', array(), $this->initializer0b75a) || 1) && $this->valueHolder32389 = $valueHolder32389;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder32389;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder32389;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
