<?php
/**
 * This file is part of the Encore\Container library.
 * Originally part of the League\Di package.
 *
 * (c) Don Gilbert <don@dongilbert.net>
 * (c) Chris Harvey <chris@chrisnharvey.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Encore\Container\Test\Stub;

/**
 * Bar Stub Test class
 *
 * @author  Don Gilbert <don@dongilbert.net>
 */
class Bar implements BarInterface
{
    public $qux;

    public function __construct(Qux $qux)
    {
        $this->qux = $qux;
    }
}
