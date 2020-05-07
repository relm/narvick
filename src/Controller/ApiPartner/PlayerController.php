<?php

namespace App\Controller\ApiPartner;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;

class PlayerController extends AbstractFOSRestController
{
    /**
     * @Get("/partner/v1/find-player/{username}", name="_find"))
     * @Get("/partner/v1/player/{masterPlayerId}")
     */
    public function getPlayerAction()
    {
        return ['success' => false, 'message' => 'This user is not in our database'];
    }
}
