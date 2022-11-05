<?php

namespace ContainerOP8ziv3;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/TaxRuleService.php';
class TaxRuleService_289f969 extends \Eccube\Service\TaxRuleService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3c7be = null;
    private $initializera7529 = null;
    private static $publicProperties7a971 = [
        
    ];
    public function getTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getTax($price, $product, $productClass, $pref, $country);
    }
    public function getPriceIncTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getPriceIncTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getPriceIncTax($price, $product, $productClass, $pref, $country);
    }
    public function calcTax($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'calcTax', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->calcTax($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public function calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'calcTaxIncluded', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->BaseInfo, $instance->taxRuleRepository);
        $instance->initializera7529 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Repository\BaseInfoRepository $baseInfoRepository)
    {
        static $reflection;
        if (! $this->valueHolder3c7be) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\TaxRuleService');
            $this->valueHolder3c7be = $reflection->newInstanceWithoutConstructor();
        unset($this->BaseInfo, $this->taxRuleRepository);
        }
        $this->valueHolder3c7be->__construct($taxRuleRepository, $baseInfoRepository);
    }
    public function & __get($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__get', ['name' => $name], $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        if (isset(self::$publicProperties7a971[$name])) {
            return $this->valueHolder3c7be->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        unset($this->BaseInfo, $this->taxRuleRepository);
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

if (!\class_exists('TaxRuleService_289f969', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleService_289f969', 'TaxRuleService_289f969', false);
}
