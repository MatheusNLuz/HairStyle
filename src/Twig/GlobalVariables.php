<?php

namespace App\Twig;

use Symfony\Bundle\SecurityBundle\Security;

class GlobalVariables
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function getUser()
    {
        return $this->security->getUser();
    }
}
