<?php
namespace Drupal\ethereum\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\ethereum\EthereumServerInterface;


/**
 * Defines the EthereumServer entity.
 *
 * @ConfigEntityType(
 *   id = "ethereum_server",
 *   label = @Translation("Ethereum Server"),
 *   handlers = {
 *     "list_builder" = "Drupal\ethereum\Controller\EthereumServerListBuilder",
 *     "form" = {
 *       "add" = "Drupal\ethereum\Form\EthereumServerForm",
 *       "edit" = "Drupal\ethereum\Form\EthereumServerForm",
 *       "delete" = "Drupal\ethereum\Form\EthereumServerDeleteForm",
 *     }
 *   },
 *   config_prefix = "ethereum_server",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "description" = "description",*
 *     "url" = "url",
 *     "network_id" = "network_id",
 *     "is_enabled" = "is_enabled",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/ethereum/network/server/{ethereum_server}/edit",
 *     "delete-form" = "/admin/config/ethereum/network/server/{ethereum_server}/delete",
 *   }
 * )
 */
class EthereumServer extends ConfigEntityBase implements EthereumServerInterface {

  /**
   * Server ID.
   *
   * @var string
   */
  protected $id;

  /**
   * Server name.
   *
   * @var string
   */
  protected $label;


  /**
   * Enable server.
   *
   * @var boolean
   */
  protected $description;

  /**
   * Server address (incl. port).
   *
   * @var string/uri
   */
  protected $url;

  /**
   * Server Ethereum network ID.
   *
   * @see EthereumController::getNetworks()
   *
   * @var integer
   */
  protected $network_id;

  /**
   * Enable server.
   *
   * @var boolean
   */
  protected $is_enabled;

}
