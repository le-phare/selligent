<?php

/**
 * This file is part of the Mediapart Selligent Client API
 *
 * (c) mediapart <https://github.com/mediapart/selligent>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mediapart\Selligent\Response;

use Mediapart\Selligent\Response;

/**
 *
 */
class TriggerCampaignByXmlResponse extends Response
{
    /**
     * @var int
     */
    protected $TriggerCampaignByXmlResult;

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return $this->TriggerCampaignByXmlResult;
    }
}
