<?php

namespace YiiContribTest\Skeleton;

use PHPUnit_Framework_TestCase;
use YiiContrib\Skeleton\Skeleton;

class SkeletonTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $skeleton = new Skeleton();
        
        $this->assertTrue($skeleton->run());
    }
}
