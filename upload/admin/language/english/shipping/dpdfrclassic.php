<?php
/**
 * DPD France v5.1.0 shipping module for OpenCart 1.5
 *
 * @category   DPDFrance
 * @package    DPDFrance_Shipping
 * @author     DPD S.A.S. <ensavoirplus.ecommerce@dpd.fr>
 * @copyright  2015 DPD S.A.S., société par actions simplifiée, au capital de 18.500.000 euros, dont le siège social est situé 27 Rue du Colonel Pierre Avia - 75015 PARIS, immatriculée au registre du commerce et des sociétés de Paris sous le numéro 444 420 830 
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

// Heading
$_['heading_title']		= 'DPD CLASSIC, Europe & Intercontinental delivery';

// Text
$_['text_shipping']		= 'Shipping';
$_['text_edit']			= 'Edit';
$_['text_success']		= 'Success: You have modified DPD CLASSIC delivery!';
$_['text_activate']		= '<br/><br/><span class="help">Enable / Disable this module</span>';
$_['text_delivery']		= '<br/><br/><span class="help">Enable / Disable delivery to this zone</span>';
$_['text_agence']		= '<br/><br/><span class="help">(3 digits, i.e.: 013)</span>';
$_['text_cargo']		= '<br/><br/><span class="help">(4 or 5 digits, no depot code, no preceding zeros, dashes...)</span>';
$_['text_advalorem']	= '<br/><br/><span class="help">Disabled : Parcel insurance up to 23€ / shipped kg (cdt. LOTI). <br/>Enabled : Insurance up to the goods value, implies an additional cost : cf. your pricing conditions.</span>';
$_['text_suppiles']		= '€ <br/><br/><span class="help">(-1 to disable delivery to these areas)</span>';
$_['text_suppmontagne']	= '€ <br/><br/><span class="help">(-1 to disable delivery to these areas)</span>';
$_['text_sort_order']	= '<br/><br/><span class="help">Sort carriers in the front-office by ascending order</span>';
$_['text_franco']		= '<br/><br/><span class="help">This field should be empty if you don\'t want to set a free shipping rule.<br/>Mountain and Islands zones overcost still applies.</span>';

// Entry
$_['entry_rate']		= 'Rates:<br/><br/><span class="help">To be entered in this format:<br/>Weight:Cost, Weight:Cost, etc ... <br/><br/>Example : 0.5:5.95,1:6.30,2:6.95,5:7.95</span>';
$_['entry_tax_class']	= 'Tax Class:';
$_['entry_geo_zone']	= 'Geo Zone:';
$_['entry_status']		= 'Status:';
$_['entry_franco']		= 'Offer free shipping for carts equal or exceeding this amount:';
$_['entry_delivery']	= 'Delivery zone status:';
$_['entry_agence']		= 'DPD local depot code:';
$_['entry_cargo']		= 'DPD CLASSIC contract number:';
$_['entry_advalorem']	= 'Ad Valorem parcel insurance service:';
$_['entry_sort_order']	= 'Sort Order:';
$_['entry_suppiles']	= 'Coastal islands and Corsica overcost :';
$_['entry_suppmontagne']= 'Mountain areas overcost :';

// Error
$_['error_permission']	= 'Warning: You do not have permission to modify DPD CLASSIC delivery!';
?>