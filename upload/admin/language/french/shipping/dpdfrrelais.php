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
$_['heading_title']		= 'Livraison DPD Relais';

// Text
$_['text_shipping']		= 'Livraison';
$_['text_edit']			= 'Modifier';
$_['text_success']		= 'Félicitations, vous avez modifié la <b>Livraison DPD Relais</b> avec succès !';
$_['text_activate']		= '<br/><br/><span class="help">Activer / Désactiver ce module</span>';
$_['text_delivery']		= '<br/><br/><span class="help">Activer / Désactiver la livraison sur cette zone</span>';
$_['text_agence']		= '<br/><br/><span class="help">(Sur 3 chiffres, ex: 013)</span>';
$_['text_cargo']		= '<br/><br/><span class="help">(Sur 4 ou 5 chiffres, sans code agence, ni zéros devant, tirets...)</span>';
$_['text_advalorem']	= '<br/><br/><span class="help">Désactivé : Assurance des colis à 23€ / kg transporté (cdt. LOTI). <br/>Activé : Assurance à hauteur de la valeur marchande, implique un coût additionnel : cf. vos conditions tarifaires.</span>';
$_['text_suppiles']		= '€ <br/><br/><span class="help">(-1 pour désactiver la livraison sur ces zones)</span>';
$_['text_suppmontagne']	= '€ <br/><br/><span class="help">(-1 pour désactiver la livraison sur ces zones)</span>';
$_['text_sort_order']	= '<br/><br/><span class="help">Modifie le classement des transporteurs par ordre croissant</span>';
$_['text_franco']		= '<br/><br/><span class="help">Laissez ce champ vide si vous ne souhaitez pas établir de franco de port.<br/>Les suppléments de zones Montagne et Iles du littoral seront tout de même ajoutés.</span>';
$_['text_mypudo']		= '<br/><br/><span class="help">Attention! Réglage sensible. Aucun espace ne doit être saisi</span>';

// Entry
$_['entry_rate']		= 'Gestion frais de port : <br/><br/><span class="help">Saisir sous la forme<br/>Poids:Prix, Poids:Prix, etc ... <br/><br/>Exemple : 0.5:5.95,1:6.30,2:6.95,5:7.95</span>';
$_['entry_tax_class']	= 'Classe de Taxe :';
$_['entry_geo_zone']	= 'Zone géographique :';
$_['entry_status']		= 'État du module :';
$_['entry_franco']		= 'Offrir les frais de port à partir d\'un panier supérieur ou égal à ce montant:';
$_['entry_delivery']	= 'État de cette zone de livraison:';
$_['entry_agence']		= 'Code agence DPD :';
$_['entry_cargo']		= 'N° de contrat DPD Relais :';
$_['entry_advalorem']	= 'Assurance complémentaire Ad Valorem :';
$_['entry_sort_order']	= 'Classement :';
$_['entry_suppiles']	= 'Supplément Iles du littoral et Corse :';
$_['entry_suppmontagne']= 'Supplément Zones de montagne :';
$_['entry_mypudo']		= 'URL MyPudo :';

// Error
$_['error_permission']	= 'Attention, vous n\'avez pas la permission de modifier la <b>Livraison DPD Relais</b> !';
?>