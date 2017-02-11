<?php
namespace WSW\LojaIntegrada\Resources;

use PHPUnit_Framework_TestCase;
use WSW\LojaIntegrada\Environments\Production;
use WSW\LojaIntegrada\Credentials;

/**
 * Class CategoryTest
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class GridTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var Grid
     */
    private $grid;

    private $resultEndPoint = '/v1/gades';

    protected function setUp()
    {
        $this->credentials = new Credentials(
            '0a0000a0-aaa0-0000-a000-aa0a000000aa',
            '0a0000a0-aaa0-0000-a000-aa0a000000aB',
            new Production()
        );

        $this->grid = new Grid($this->credentials);
    }

    public function testConstructShouldConfigureTheAttributes()
    {
        $this->assertAttributeEquals($this->resultEndPoint, 'endPoint', $this->grid);
    }

    public function testMethodGetEndPoint()
    {
        $this->assertEquals($this->resultEndPoint, $this->grid->getEndPoint());
    }

    public function testMethodSetEndPoint()
    {
        $newEndPoint = 'xpto/Test';
        $this->grid->setEndPoint($newEndPoint);

        $this->assertEquals($newEndPoint, $this->grid->getEndPoint());
        $this->assertAttributeEquals($newEndPoint, 'endPoint', $this->grid);
    }
}
