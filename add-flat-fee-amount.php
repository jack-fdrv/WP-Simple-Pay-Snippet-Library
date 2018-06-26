<?php
/**
 * Plugin Name: WP Simple Pay - Add Flat Fee Amount
 * Plugin URI: https://wpsimplepay.com
 * Description: Add a flat fee amount to one-time payment forms.
 * Version: 1.0
 */

/**
 * Add a flat fee amount to all one-time payment forms on the site.
 * TODO: Can be combined with a tax rate percentage value set in the global settings.
 *
 * Note: Does not work for subscription charges.
 */
function simpay_custom_add_fee_amount() {

	// Needs to return the additional amount IN CENTS
	return 300; // This will be an additional 3.00
}

add_filter( 'simpay_fee_amount', 'simpay_custom_add_fee_amount' );

/**
 * Add a flat fee amount to a specific one-time payment form.
 * TODO: Can be combined with a percentage value set for the same payment form via a filter.
 *
 * Replace 157 with the form ID to target.
 * Note: Does not work for subscription charges.
 */
function simpay_custom_form_157_fee_amount() {

	// Needs to return the additional amount IN CENTS
	return 300; // This will be an additional 3.00
}

add_filter( 'simpay_form_157_fee_amount', 'simpay_custom_form_157_fee_amount' );
