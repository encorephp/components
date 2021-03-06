<?php

namespace Encore\Namespacer;

trait NamespacableTrait
{
    /**
     * All of the namespace hints.
     *
     * @var array
     */
    protected $hints = [];

    /**
     * Add a namespace and provide a hint
     *
     * @param string $namespace
     * @param string $hint
     * @return void
     */
    public function addNamespace($namespace, $hint)
    {
        $this->hints[$namespace] = $hint;
    }

    /**
     * Return an array of all the registered namespaces
     *
     * @return array
     */
    public function getNamespaces()
    {
        return $this->hints;
    }
}