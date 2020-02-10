<?php
declare(strict_types=1);

namespace App\Application\Actions\FrontApp;

use App\Application\Actions\Action;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class GetFrontApp extends Action
{

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        parent::__construct($logger);
    }

    protected function action() : Response {
        var_dump( $this->args );

        return $this->response;
    }
}
