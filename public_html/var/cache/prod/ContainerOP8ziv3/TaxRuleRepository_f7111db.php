<?php

namespace ContainerOP8ziv3;

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/TaxRuleRepository.php';
class TaxRuleRepository_f7111db extends \Eccube\Repository\TaxRuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3c7be = null;
    private $initializera7529 = null;
    private static $publicProperties7a971 = [
        
    ];
    public function newTaxRule()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'newTaxRule', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->newTaxRule();
    }
    public function getByRule($Product = null, $ProductClass = null, $Pref = null, $Country = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getByRule', array('Product' => $Product, 'ProductClass' => $ProductClass, 'Pref' => $Pref, 'Country' => $Country), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getByRule($Product, $ProductClass, $Pref, $Country);
    }
    public function getList()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getList', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getList();
    }
    public function delete($TaxRule)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'delete', array('TaxRule' => $TaxRule), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->delete($TaxRule);
    }
    public function clearCache()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'clearCache', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->clearCache();
    }
    public function save($entity)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'save', array('entity' => $entity), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'clear', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'findAll', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'count', array('criteria' => $criteria), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getClassName', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'matching', array('criteria' => $criteria), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->baseInfo, $instance->authorizationChecker, $instance->tokenStorage, $instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $instance, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($instance);
        $instance->initializera7529 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Common\EccubeConfig $eccubeConfig)
    {
        static $reflection;
        if (! $this->valueHolder3c7be) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
            $this->valueHolder3c7be = $reflection->newInstanceWithoutConstructor();
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
        }
        $this->valueHolder3c7be->__construct($registry, $tokenStorage, $authorizationChecker, $baseInfoRepository, $eccubeConfig);
    }
    public function & __get($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__get', ['name' => $name], $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        if (isset(self::$publicProperties7a971[$name])) {
            return $this->valueHolder3c7be->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
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

if (!\class_exists('TaxRuleRepository_f7111db', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleRepository_f7111db', 'TaxRuleRepository_f7111db', false);
}
