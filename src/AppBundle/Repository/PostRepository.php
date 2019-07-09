<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * This custom Doctrine repository contains some methods which are useful when
 * querying for blog post information.
 * See http://symfony.com/doc/current/book/doctrine.html#custom-repository-classes
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class PostRepository extends EntityRepository
{
    public function queryLatest()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p
                FROM AppBundle:Post p
                WHERE p.publishedAt <= :now
                ORDER BY p.publishedAt DESC
            ')
            ->setParameter('now', new \DateTime())
        ;
    }

    public function findLatest()
    {
        $this->queryLatest()->getResult();
    }

    public function queryApiPostsPage($page, $countInPage)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p
                FROM AppBundle:Post p
            ')
            ->setFirstResult(($page - 1) * $countInPage)
            ->setMaxResults($countInPage)
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }

    public function countItems() {
        return count($this->queryLatest()->getResult());
    }
}
