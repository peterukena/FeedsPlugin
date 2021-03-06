<?php
/**
 * @author Peter Ukena <peterukena@googlemail.com>
 */

declare(strict_types=1);

namespace Kortwotze\FeedsPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItem(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $marketingMenu = $menu->getChild('marketing');

        if ($marketingMenu instanceof ItemInterface) {
            $marketingMenu
                ->addChild('feeds', ['route' => 'kortwotze_admin_feed_index'])
                ->setLabel('kortwotze.feeds_plugin.menu.title')
                ->setLabelAttribute('icon', 'rss');
        }
    }
}