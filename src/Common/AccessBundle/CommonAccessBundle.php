<?php

namespace Common\AccessBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CommonAccessBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
