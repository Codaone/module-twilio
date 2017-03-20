<?php
/**
 * Pmclain_Twilio extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GPL v3 License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/gpl.txt
 *
 * @category       Pmclain
 * @package        Twilio
 * @copyright      Copyright (c) 2017
 * @license        https://www.gnu.org/licenses/gpl.txt GPL v3 License
 */

namespace Pmclain\Twilio\Model\Log\Source;

use Magento\Framework\Data\OptionSourceInterface;

class EntityTypeId implements OptionSourceInterface
{
  public function toOptionArray() {
    return [
      ['label' => 'Order', 'value' => 1],
      ['label' => 'Invoice', 'value' => 2],
      ['label' => 'Shipment', 'value' => 3]
    ];
  }
}