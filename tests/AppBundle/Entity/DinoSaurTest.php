<?php

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Dinosaur;
use PHPUnit\Framework\TestCase;

class DinoSaurTest extends TestCase
{
    /** @test */
    public function setting_length()
    {
        $dinosaur = new Dinosaur();

        $this->assertSame(0, $dinosaur->getLength());

        $dinosaur->setLength(9);
        $this->assertSame(9, $dinosaur->getLength());
    }
    
    /** @test */
    public function dinosaur_has_not_shrunk()
    {
        $dinosaur = new Dinosaur();
        $dinosaur->setLength(15);

        $this->assertGreaterThan(12, $dinosaur->getLength());
    }
}
