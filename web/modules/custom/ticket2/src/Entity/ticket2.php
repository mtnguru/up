<?php

namespace Drupal\ticket2\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\user\EntityOwnerTrait;

/**
 * Provides the Ticket2 entity.
 *
 * @ContentEntityType(
 *   id = "ticket2",
 *   label = @Translation("Ticket2"),
 *   label_collection = @Translation("Ticket2s"),
 *   label_singular = @Translation("ticket2"),
 *   label_plural = @Translation("ticket2s"),
 *   label_count = @PluralTranslation(
 *     singular = "@count ticket2",
 *     plural = "@count ticket2s",
 *   ),
 *   bundle_label = @Translation("Ticket2 Type"),
 *   base_table = "ticket2",
 *   data_table = "ticket2_field_data",
 *   revision_table = "ticket2_revision",
 *   revision_data_table = "ticket2_field_revision",
 *   translatable = "TRUE",
 *   handlers = {
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     },
 *     "form" = {
 *       "default" = "Drupal\ticket2\Form\ticket2Form",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\ticket2\Entity\Handler\ticket2ListBuilder",
 *   },
 *   admin_permission = "administer ticket2 entities",
 *   entity_keys = {
 *     "id" = "ticket2_id",
 *     "label" = "title",
 *     "uuid" = "uuid",
 *     "bundle" = "type",
 *     "revision" = "revision_id",
 *     "langcode" = "langcode",
 *     "owner" = "uid",
 *     "uid" = "uid",
 *   },
 *   bundle_entity_type = "ticket2_type",
 *   field_ui_base_route = "entity.ticket2_type.edit_form",
 *   links = {
 *     "add-page" = "/ticket2/add",
 *     "add-form" = "/ticket2/add/{ticket2_type}",
 *     "canonical" = "/ticket2/{ticket2}",
 *     "collection" = "/admin/content/ticket2",
 *     "delete-form" = "/ticket2/{ticket2}/delete",
 *     "edit-form" = "/ticket2/{ticket2}/edit",
 *   },
 * )
 */
class ticket2 extends ContentEntityBase implements ticket2Interface {

  use EntityChangedTrait;

  use EntityOwnerTrait;

  // TODO: If using Drupal core prior to 8.6.x, methods from interface
  // \Drupal\user\EntityOwnerInterface must be implemented, the owner base field
  // defined, and EntityOwnerTrait and the call to ownerBaseFieldDefinitions()
  // removed. See https://www.drupal.org/project/drupal/issues/2949964.

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields += static::ownerBaseFieldDefinitions($entity_type);

    $fields['title'] = BaseFieldDefinition::create('string')
      ->setLabel(t("Title"))
      ->setRequired(TRUE)
      ->setRevisionable(TRUE)
      ->setTranslatable(TRUE)
      ->setSetting("max_length", 255)
      ->setDisplayOptions("form", [
        'type' => "string_textfield",
        'weight' => "-5",
      ])
      ->setDisplayConfigurable("view", TRUE)
      ->setDisplayConfigurable("form", TRUE);

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t("Changed"))
      ->setDescription(t("The time that the entity was last edited."))
      ->setRevisionable(TRUE)
      ->setTranslatable(TRUE);

    return $fields;
  }

}
