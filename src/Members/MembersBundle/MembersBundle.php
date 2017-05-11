<?php

namespace Members\MembersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MembersBundle extends Bundle
{
	/**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
