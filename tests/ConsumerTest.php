<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
        $consumer = new Dummy();
$consumer->setNombre('Didier');
$consumer->setApellido('Blanco');
$result = $consumer->nombreCompleto();
$this->assertEquals('Didier Blanco', $result);
    }

    }
}
