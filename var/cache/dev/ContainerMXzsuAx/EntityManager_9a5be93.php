<?php

namespace ContainerMXzsuAx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder04caa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerca3e6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties63910 = [
        
    ];

    public function getConnection()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getConnection', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getMetadataFactory', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getExpressionBuilder', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'beginTransaction', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getCache', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getCache();
    }

    public function transactional($func)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'transactional', array('func' => $func), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'wrapInTransaction', array('func' => $func), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'commit', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->commit();
    }

    public function rollback()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'rollback', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getClassMetadata', array('className' => $className), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'createQuery', array('dql' => $dql), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'createNamedQuery', array('name' => $name), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'createQueryBuilder', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'flush', array('entity' => $entity), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'clear', array('entityName' => $entityName), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->clear($entityName);
    }

    public function close()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'close', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->close();
    }

    public function persist($entity)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'persist', array('entity' => $entity), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'remove', array('entity' => $entity), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'refresh', array('entity' => $entity), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'detach', array('entity' => $entity), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'merge', array('entity' => $entity), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getRepository', array('entityName' => $entityName), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'contains', array('entity' => $entity), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getEventManager', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getConfiguration', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'isOpen', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getUnitOfWork', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getProxyFactory', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'initializeObject', array('obj' => $obj), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'getFilters', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'isFiltersStateClean', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'hasFilters', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return $this->valueHolder04caa->hasFilters();
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

        $instance->initializerca3e6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder04caa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04caa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder04caa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, '__get', ['name' => $name], $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        if (isset(self::$publicProperties63910[$name])) {
            return $this->valueHolder04caa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04caa;

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

        $targetObject = $this->valueHolder04caa;
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
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04caa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder04caa;
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
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, '__isset', array('name' => $name), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04caa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder04caa;
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
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, '__unset', array('name' => $name), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04caa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder04caa;
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
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, '__clone', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        $this->valueHolder04caa = clone $this->valueHolder04caa;
    }

    public function __sleep()
    {
        $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, '__sleep', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;

        return array('valueHolder04caa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerca3e6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerca3e6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerca3e6 && ($this->initializerca3e6->__invoke($valueHolder04caa, $this, 'initializeProxy', array(), $this->initializerca3e6) || 1) && $this->valueHolder04caa = $valueHolder04caa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04caa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04caa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
