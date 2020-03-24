<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use App\Application\Actions\Action;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use Doctrine\ORM\EntityManager;
use App\Domain\Entity;

class ViewMyAccount extends Action
{

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(ContainerInterface $container, LoggerInterface $logger, EntityManager $em)
    {
        parent::__construct($container, $logger, $em);
    }

    protected function action() : Response {
        
        return $this->container->get('view')->render($this->response, 'base.html', [
            'title' => "Mon compte",
        ]);
    }
}