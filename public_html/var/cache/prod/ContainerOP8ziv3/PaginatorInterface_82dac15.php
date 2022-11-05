<?php

namespace ContainerOP8ziv3;

include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';
class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder3c7be = null;
    private $initializera7529 = null;
    private static $publicProperties7a971 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        if ($this->valueHolder3c7be === $returnValue = $this->valueHolder3c7be->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializera7529 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder3c7be) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder3c7be = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__get', ['name' => $name], $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        if (isset(self::$publicProperties7a971[$name])) {
            return $this->valueHolder3c7be->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
