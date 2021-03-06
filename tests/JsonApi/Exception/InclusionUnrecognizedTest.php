<?php
namespace WoohooLabsTest\Yin\JsonApi\Exception;

use PHPUnit\Framework\TestCase;
use WoohooLabs\Yin\JsonApi\Exception\InclusionUnrecognized;

class InclusionUnrecognizedTest extends TestCase
{
    /**
     * @test
     */
    public function getIncludes()
    {
        $includes = ["a", "b", "c"];

        $exception = $this->createException($includes);
        $this->assertEquals($includes, $exception->getUnrecognizedIncludes());
    }

    private function createException(array $includes)
    {
        return new InclusionUnrecognized($includes);
    }
}
