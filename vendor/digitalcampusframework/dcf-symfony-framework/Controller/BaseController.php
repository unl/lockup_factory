<?php
namespace DCF\Bundle\FrameworkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Exception\SessionNotFoundException;

class BaseController extends AbstractController
{
  const FLASH_MESSAGE_TYPE_INFO = 'info';
  const FLASH_MESSAGE_TYPE_SUCCESS = 'success';
  const FLASH_MESSAGE_TYPE_WARNING = 'warning';
  const FLASH_MESSAGE_TYPE_DANGER = 'danger';

  protected $logger;

  public function __construct(LoggerInterface $logger) {
    $this->logger = $logger;
  }

  /**
   * Adds a flash message to the current session for type.
   *
   * @throws \LogicException
   */
  protected function addDCFNoticeFlash(string $type, string $header, string $message): void
  {
    try {
      $flashMessage = new \stdClass();
      $flashMessage->header = $header;
      $flashMessage->message = $message;

      $this->container->get('request_stack')->getSession()->getFlashBag()->add($type, $flashMessage);
    } catch (SessionNotFoundException $e) {
      throw new \LogicException('You can not use the addFlash method if sessions are disabled. Enable them in "config/packages/framework.yaml".', 0, $e);
    }
  }

  protected function addFlashWithRedirect($type, $message, $route, Array $routeParams = array()) {
    $this->addFlash($type, $message);

    if (!empty($routeParams)) {
      return $this->forward($route, $routeParams);
    } else {
      return $this->redirectToRoute($route);
    }
  }
}
