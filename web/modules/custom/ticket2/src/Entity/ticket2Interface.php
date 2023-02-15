<?php

namespace Drupal\ticket2\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Interface for Ticket2 entities.
 */
interface ticket2Interface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

}
