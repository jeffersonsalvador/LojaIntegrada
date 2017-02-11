<?php

namespace WSW\LojaIntegrada\Resources;

/**
 * Class Grid
 * @package WSW\LojaIntegrada\Resources
 * @author Jefferson Salvador <jeffersonsalvador@gmail.com>
 */
class Grid extends BaseResource
{
    /**
     * SetUp Grid.
     * @return $this
     */
    protected function setUp()
    {
        $this->setEndPoint('/v1/grades');

        $this->validator
            ->requirePresence('nome')
            ->notEmpty('nome', 'Required field');

        return $this;
    }
}
