<?php
/**
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\DoctrineBundle\Helper;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Persistence\Mapping\ClassMetadataFactory;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Filter\SQLFilter;
use Doctrine\ORM\Query\FilterCollection;

/**
 * Interface DoctrineHelperInterface
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
interface DoctrineHelperInterface
{
    public function getDoctrineFilters() : FilterCollection;

    public function getEntityManager() : EntityManagerInterface;

    public function disableFilter(string $filter);

    public function enableFilter(string $filter) : SQLFilter;

    public function getClassMetadata(string $className) : ClassMetadata;

    public function getClassMetadataForEntity($entity) : ClassMetadata;

    public function hasClassMetadataForEntity($object) : bool;

    /**
     * @return \Doctrine\Common\Persistence\Mapping\ClassMetadata[]
     */
    public function getAllMetadata() : array;

    public function getMetadataFactory() : ClassMetadataFactory;
}
