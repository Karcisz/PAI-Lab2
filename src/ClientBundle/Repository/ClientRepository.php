<?php

namespace ClientBundle\Repository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllOrderedByName()
	{
		return $this->getEntityManager()
			->createQuery(
				'SELECT c FROM ClientBundle:Client c ORDER BY c.surname ASC'
			)
			->getResult();
	}
}
