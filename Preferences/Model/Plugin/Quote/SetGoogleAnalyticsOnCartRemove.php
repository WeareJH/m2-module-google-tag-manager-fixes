<?php
namespace Jh\GoogleTagManagerFixes\Preferences\Model\Plugin\Quote;

use Magento\Quote\Model\Quote;
use Magento\GoogleTagManager\Model\Plugin\Quote\SetGoogleAnalyticsOnCartRemove as MagentoSetGoogleAnalyticsOnCartRemove;

/** Overridden to check item data exists before calling GTM events */
class SetGoogleAnalyticsOnCartRemove extends MagentoSetGoogleAnalyticsOnCartRemove
{
    public function afterRemoveItem(Quote $subject, $result, $itemId)
    {
        $item = $subject->getItemById($itemId);

        if (!$item) {
            return $result;
        }

        return parent::afterRemoveItem($subject, $result, $itemId);
    }

    public function aroundUpdateItem(
        Quote $subject,
        \Closure $proceed,
        $itemId,
        $buyRequest,
        $params = null
    ) {
        $result = $proceed($itemId, $buyRequest, $params);
        $item   = $subject->getItemById($itemId);

        if (!$item) {
            return $result;
        }

        return parent::aroundUpdateItem($subject, $proceed, $itemId, $buyRequest, $params = null);
    }
}
