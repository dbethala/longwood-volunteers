<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RouteConfigurator
{
    use Traits\AddTrait;
    use Traits\RouteTrait;

<<<<<<< HEAD
    public function __construct(RouteCollection $collection, Route $route, $name = '')
=======
    private $parentConfigurator;

    public function __construct(RouteCollection $collection, Route $route, $name = '', CollectionConfigurator $parentConfigurator = null)
>>>>>>> 9a70c99dc372ded3fe684a74ceb1086713a7c931
    {
        $this->collection = $collection;
        $this->route = $route;
        $this->name = $name;
<<<<<<< HEAD
=======
        $this->parentConfigurator = $parentConfigurator; // for GC control
>>>>>>> 9a70c99dc372ded3fe684a74ceb1086713a7c931
    }
}
