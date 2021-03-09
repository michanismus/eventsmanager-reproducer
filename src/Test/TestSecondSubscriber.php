<?php declare(strict_types=1);

namespace App\Test;

use App\Entity\Test;
use App\Test\TestService;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Events;

final class TestSecondSubscriber implements EventSubscriber
{
    public function __construct(EntityManagerInterface $em)
    {
        $em->getMetadataFactory()->getMetadataFor(Test::class);
    }


    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postUpdate,
            Events::postRemove,
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        // dummy
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        // dummy
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        // dummy
    }
}
