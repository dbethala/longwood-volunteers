<?php

namespace Drupal\graphql_example\GraphQL\Field\Root;

use Drupal\graphql\GraphQL\UncacheableValue;
use Drupal\graphql_example\GraphQL\Field\SelfAwareField;
use Drupal\graphql_example\GraphQL\Type\MenuType;
use Drupal\system\MenuInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Field\InputField;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Scalar\StringType;

class MenuByNameField extends SelfAwareField implements ContainerAwareInterface {
  use ContainerAwareTrait;

  /**
   * {@inheritdoc}
   */
  public function build(FieldConfig $config) {
    $config->addArgument(new InputField([
      'name' => 'name',
      'description' => 'The machine readable name of the menu.',
      'type' => new NonNullType(new StringType()),
    ]));
  }

  /**
   * {@inheritdoc}
   */
  public function resolve($value, array $args, ResolveInfo $info) {
    /** @var \Drupal\Core\Entity\EntityTypeManager $entityTypeManager */
    $entityTypeManager = $this->container->get('entity_type.manager');
    $entityStorage = $entityTypeManager->getStorage('menu');

    /** @var \Drupal\system\MenuInterface $menu */
    if ($menu = $entityStorage->load($args['name'])) {
      return $menu;
    }

    return new UncacheableValue(NULL);
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'menuByName';
  }

  /**
   * {@inheritdoc}
   */
  public function getType() {
    return new MenuType();
  }
}