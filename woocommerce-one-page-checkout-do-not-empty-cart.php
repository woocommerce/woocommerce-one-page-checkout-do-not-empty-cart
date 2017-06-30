<?php
/*
 * Plugin Name: WooCommerce One Page Checkout - Do Not Empty Cart
 * Plugin URI: https://github.com/Prospress/woocommerce-one-page-checkout-do-not-empty-cart/
 * Description: By default, WooCommerce One Page Checkout will empty the cart for product selection via radio elements or Easy Pricing Tables. This changes that to allow existing cart items to persist.
 * Author: Prospress Inc.
 * Author URI: https://prospress.com/
 * License: GPLv3
 * Version: 1.0.0
 * Version: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.8
 *
 * GitHub Plugin URI: Prospress/woocommerce-one-page-checkout-do-not-empty-cart
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		WooCommerce One Page Checkout - Do Not Empty Cart
 * @author		Brent Shepherd
 * @since		1.0
*/

add_filter( 'wcopc_not_empty_cart', '__return_true', 100 );