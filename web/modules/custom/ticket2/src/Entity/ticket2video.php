<?php

namespace Drupal\ticket2\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Provides the Ticket2 Video entity.
 *
 * @ConfigEntityType(
 *   id = "ticket2video",
 *   label = @Translation("Ticket2 Video"),
 *   label_collection = @Translation("Ticket2 Videos"),
 *   label_singular = @Translation("ticket2 video"),
 *   label_plural = @Translation("ticket2 videos"),
 *   label_count = @PluralTranslation(
 *     singular = "@count ticket2 video",
 *     plural = "@count ticket2 videos",
 *   ),
 *   handlers = {
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     },
 *     "form" = {
 *       "default" = "Drupal\ticket2\Form\ticket2videoForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\ticket2\Entity\Handler\ticket2videoListBuilder",
 *   },
 *   admin_permission = "administer ticket2video entities",
 *   bundle_of = "ticket2",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/ticket2video/add",
 *     "canonical" = "/admin/structure/ticket2video/{ticket2video}",
 *     "collection" = "/admin/structure/ticket2video",
 *     "edit-form" = "/admin/structure/ticket2video/{ticket2video}/edit",
 *     "delete-form" = "/admin/structure/ticket2video/{ticket2video}/delete",
 *   },
 * )
 */
class ticket2video extends ConfigEntityBundleBase implements ticket2videoInterface {

  /**
   * Machine name.
   *
   * @var string
   */
  protected $id = '';

  /**
   * Name.
   *
   * @var string
   */
  protected $label = '';

}
