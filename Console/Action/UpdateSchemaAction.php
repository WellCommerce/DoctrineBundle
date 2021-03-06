<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\DoctrineBundle\Console\Action;

use WellCommerce\Bundle\CoreBundle\Console\Action\ConsoleActionInterface;

/**
 * Class UpdateSchemaAction
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class UpdateSchemaAction implements ConsoleActionInterface
{
    public function getCommandsToExecute()
    {
        return [
            'doctrine:schema:update' => ['--force' => true],
        ];
    }
}
