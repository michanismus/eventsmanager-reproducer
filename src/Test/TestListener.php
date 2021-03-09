<?php declare(strict_types=1);

namespace App\Test;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Events;

final class TestListener
{
    public function loadClassMetadata(
        LoadClassMetadataEventArgs $loadClassMetadataEventArgs
    ): void {
        // dummy
        dd('listener');
    }
}
