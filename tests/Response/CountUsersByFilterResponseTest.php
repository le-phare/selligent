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
use Mediapart\Selligent\Response\CountUsersByFilterResponse;

/**
 *
 */
class CountUsersByFilterResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testResponse()
    {
        $response = new CountUsersByFilterResponse();

        $this->assertEquals(0, $response->getUserCount());
        $this->assertEquals(Response::ERROR_FAILED, $response->getCode());
    }
}
