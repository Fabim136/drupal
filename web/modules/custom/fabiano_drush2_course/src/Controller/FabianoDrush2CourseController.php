<?php declare(strict_types = 1);

namespace Drupal\fabiano_drush2_course\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\PermissionHandlerInterface;
use Drupal\views\ViewExecutableFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for fabiano drush2 course routes.
 */
final class FabianoDrush2CourseController extends ControllerBase {

  /**
   * The controller constructor.
   */
  public function __construct(
    private readonly ViewExecutableFactory $viewsExecutable,
    private readonly PermissionHandlerInterface $userPermissions,
  ) {}

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): self {
    return new self(
      $container->get('views.executable'),
      $container->get('user.permissions'),
    );
  }

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
