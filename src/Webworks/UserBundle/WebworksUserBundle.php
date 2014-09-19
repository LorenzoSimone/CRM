<?php

namespace Webworks\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WebworksUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
