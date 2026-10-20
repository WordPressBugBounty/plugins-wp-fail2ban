<?php declare(strict_types=1);
/**
 * Premium release badge implementation
 *
 * Provides styling and text content specific to the Premium badge.
 *
 * @package    wp-fail2ban\lib\badges
 * @author     Charles Lecklider
 * @link       https://src.wp-fail2ban.com/src/lib/badges/
 * @category   WordPress
 * @license    AGPL-3.0-or-later
 * @copyright  2025- Charles Lecklider
 * @since      1.6.0
 */

namespace WP_fail2ban\Lib\Badges\Badge;

use WP_fail2ban\Lib\Badges\BadgeManager;

/**
 * Premium release badge implementation
 * 
 * @since  1.6.0
 */
class PremiumBadge extends AbstractBadge
{
    /**
     * Initializes the Premium badge with specific styling and text
     *
     * Sets up the badge color, text content, and tooltip for the Premium release indicator.
     *
     * @since  1.6.0
     * @param  BadgeManager $manager The badge manager instance
     * @throws void
     */
    public function __construct(BadgeManager $manager)
    {
        parent::__construct($manager);

        $this->color = '#00A0D2';
    }

    /**
     * Extends the base badge styling with uppercase text transformation
     *
     * @since  1.6.0
     * @param  array<string,string> $extra_styles Additional CSS styles to apply
     * @throws void
     * @return string                             The complete CSS style string
     */
    protected function getStyle(array $extra_styles = []): string
    {
        return parent::getStyle(['text-transform' => 'uppercase']);
    }

    /**
     * Get the Premium badge text
     * 
     * @since  1.6.0
     * @throws void
     * @return string The text to display for the Premium badge
     */
    protected function getText(): string
    {
        $plugin_file = $this->manager->plugin_file;
        $text = 'Premium';

        /**
         * Get the Premium badge text; default to 'Premium'
         * 
         * @api
         * @since  1.6.0  Added
         * @param  string $text The text to display for the Premium badge
         * @return string The text to display for the Premium badge
         */
        return apply_filters("WP_fail2ban.lib-badges.premium.text#{$plugin_file}", $text);
    }

    /**
     * Get the Premium badge title
     * 
     * @since  1.6.0
     * @throws void
     * @return string The title to display for the Premium badge
     */
    protected function getTitle(): string
    {
        $plugin_file = $this->manager->plugin_file;
        $title = 'Premium release';

        /**
         * Get the Premium badge title; default to 'Premium release'
         * 
         * @api
         * @since  1.6.0  Added
         * @param  string $title The title to display for the Premium badge
         * @return string The title to display for the Premium badge
         */
        return apply_filters("WP_fail2ban.lib-badges.premium.title#{$plugin_file}", $title);
    }
}