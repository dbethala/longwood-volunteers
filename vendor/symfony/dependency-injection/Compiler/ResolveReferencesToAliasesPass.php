<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Replaces all references to aliases with references to the actual service.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveReferencesToAliasesPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        parent::process($container);

        foreach ($container->getAliases() as $id => $alias) {
<<<<<<< HEAD
            $aliasId = (string) $alias;
=======
            $aliasId = $container->normalizeId($alias);
>>>>>>> 9a70c99dc372ded3fe684a74ceb1086713a7c931
            if ($aliasId !== $defId = $this->getDefinitionId($aliasId, $container)) {
                $container->setAlias($id, $defId)->setPublic($alias->isPublic())->setPrivate($alias->isPrivate());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue($value, $isRoot = false)
    {
        if ($value instanceof Reference) {
<<<<<<< HEAD
            $defId = $this->getDefinitionId($id = (string) $value, $this->container);
=======
            $defId = $this->getDefinitionId($id = $this->container->normalizeId($value), $this->container);
>>>>>>> 9a70c99dc372ded3fe684a74ceb1086713a7c931

            if ($defId !== $id) {
                return new Reference($defId, $value->getInvalidBehavior());
            }
        }

        return parent::processValue($value);
    }

    /**
     * Resolves an alias into a definition id.
     *
     * @param string           $id        The definition or alias id to resolve
     * @param ContainerBuilder $container
     *
     * @return string The definition id with aliases resolved
     */
    private function getDefinitionId($id, ContainerBuilder $container)
    {
        $seen = array();
        while ($container->hasAlias($id)) {
            if (isset($seen[$id])) {
                throw new ServiceCircularReferenceException($id, array_keys($seen));
            }
            $seen[$id] = true;
<<<<<<< HEAD
            $id = (string) $container->getAlias($id);
=======
            $id = $container->normalizeId($container->getAlias($id));
>>>>>>> 9a70c99dc372ded3fe684a74ceb1086713a7c931
        }

        return $id;
    }
}
