<?php

/**
 * This file is part of the Mediapart Selligent Client API
 *
 * CC BY-NC-SA <https://github.com/mediapart/selligent>
 *
 * For the full license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mediapart\Selligent\Tests\Response;

use Mediapart\Selligent\Response;
use Mediapart\Selligent\Response\GetUserByFilterResponse;

/**
 *
 */
class GetUserByFilterResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testResponse()
    {
        $response = new GetUserByFilterResponse();

        $properties = $response->getProperties();

        $this->assertEquals(0, count($properties->getIterator()));
        $this->assertEquals(Response::ERROR_NORESULT, $response->getCode());
    }
}
