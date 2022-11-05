<?php

namespace ContainerOP8ziv3;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3c7be = null;
    private $initializera7529 = null;
    private static $publicProperties7a971 = [
        
    ];
    public function getConnection()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getConnection', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getMetadataFactory', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getExpressionBuilder', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'beginTransaction', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getCache', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getCache();
    }
    public function transactional($func)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'transactional', array('func' => $func), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'wrapInTransaction', array('func' => $func), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'commit', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->commit();
    }
    public function rollback()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'rollback', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getClassMetadata', array('className' => $className), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createQuery', array('dql' => $dql), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createNamedQuery', array('name' => $name), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createQueryBuilder', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'flush', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'clear', array('entityName' => $entityName), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->clear($entityName);
    }
    public function close()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'close', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->close();
    }
    public function persist($entity)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'persist', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'remove', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'refresh', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'detach', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'merge', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getRepository', array('entityName' => $entityName), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'contains', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getEventManager', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getConfiguration', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'isOpen', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getUnitOfWork', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getProxyFactory', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'initializeObject', array('obj' => $obj), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getFilters', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'isFiltersStateClean', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'hasFilters', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera7529 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder3c7be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3c7be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder3c7be->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__get', ['name' => $name], $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        if (isset(self::$publicProperties7a971[$name])) {
            return $this->valueHolder3c7be->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
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
        $targetObject = $this->valueHolder3c7be;
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
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3c7be;
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
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__isset', array('name' => $name), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder3c7be;
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
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__unset', array('name' => $name), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3c7be;
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
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__clone', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $this->valueHolder3c7be = clone $this->valueHolder3c7be;
    }
    public function __sleep()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__sleep', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return array('valueHolder3c7be');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7529 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7529;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'initializeProxy', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3c7be;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3c7be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
