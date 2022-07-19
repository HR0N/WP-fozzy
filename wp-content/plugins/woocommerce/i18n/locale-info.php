<?php
/**
 * Locales information
 *
 * @package WooCommerce\i18n
 * @version 5.7.0
 */

defined( 'ABSPATH' ) || exit;

$locales = include 'currency-info.php';

return array(
	'AD' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ca_AD',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'AE' => array(
		'currency_code'  => 'AED',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_AE',
		'name'           => 'United Arab Emirates dirham',
		'singular'       => 'UAE dirham',
		'plural'         => 'UAE dirhams',
		'short_symbol'   => null,
		'locales'        => $locales['AED'],
	),
	'AF' => array(
		'currency_code'  => 'AFN',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'fa_AF',
		'name'           => 'Afghan afghani',
		'singular'       => 'Afghan Afghani',
		'plural'         => 'Afghan Afghanis',
		'short_symbol'   => '؋',
		'locales'        => $locales['AFN'],
	),
	'AG' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_AG',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'AI' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_AI',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'AL' => array(
		'currency_code'  => 'ALL',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sq_AL',
		'name'           => 'Albanian lek',
		'singular'       => 'Albanian lek',
		'plural'         => 'Albanian lekë',
		'short_symbol'   => null,
		'locales'        => $locales['ALL'],
	),
	'AM' => array(
		'currency_code'  => 'AMD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'hy_AM',
		'name'           => 'Armenian dram',
		'singular'       => 'Armenian dram',
		'plural'         => 'Armenian drams',
		'short_symbol'   => '֏',
		'locales'        => $locales['AMD'],
	),
	'AO' => array(
		'currency_code'  => 'AOA',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_AO',
		'name'           => 'Angolan kwanza',
		'singular'       => 'Angolan kwanza',
		'plural'         => 'Angolan kwanzas',
		'short_symbol'   => 'Kz',
		'locales'        => $locales['AOA'],
	),
	'AR' => array(
		'currency_code'  => 'ARS',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_AR',
		'name'           => 'Argentine peso',
		'singular'       => 'Argentine peso',
		'plural'         => 'Argentine pesos',
		'short_symbol'   => '$',
		'locales'        => $locales['ARS'],
	),
	'AS' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_AS',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'AT' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'de_AT',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'AU' => array(
		'currency_code'  => 'AUD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_AU',
		'name'           => 'Australian dollar',
		'singular'       => 'Australian dollar',
		'plural'         => 'Australian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['AUD'],
	),
	'AW' => array(
		'currency_code'  => 'AWG',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nl_AW',
		'name'           => 'Aruban florin',
		'singular'       => 'Aruban florin',
		'plural'         => 'Aruban florin',
		'short_symbol'   => null,
		'locales'        => $locales['AWG'],
	),
	'AX' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sv_AX',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'AZ' => array(
		'currency_code'  => 'AZN',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'az_AZ',
		'name'           => 'Azerbaijani manat',
		'singular'       => 'Azerbaijani manat',
		'plural'         => 'Azerbaijani manats',
		'short_symbol'   => '₼',
		'locales'        => $locales['AZN'],
	),
	'BA' => array(
		'currency_code'  => 'BAM',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'bs_BA',
		'name'           => 'Bosnia and Herzegovina convertible mark',
		'singular'       => 'Bosnia-Herzegovina convertible mark',
		'plural'         => 'Bosnia-Herzegovina convertible marks',
		'short_symbol'   => 'KM',
		'locales'        => $locales['BAM'],
	),
	'BB' => array(
		'currency_code'  => 'BBD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_BB',
		'name'           => 'Barbadian dollar',
		'singular'       => 'Barbadian dollar',
		'plural'         => 'Barbadian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['BBD'],
	),
	'BD' => array(
		'currency_code'  => 'BDT',
		'currency_pos'   => 'right',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'bn_BD',
		'name'           => 'Bangladeshi taka',
		'singular'       => 'Bangladeshi taka',
		'plural'         => 'Bangladeshi takas',
		'short_symbol'   => '৳',
		'locales'        => $locales['BDT'],
	),
	'BE' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nl_BE',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'BF' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_BF',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'BG' => array(
		'currency_code'  => 'BGN',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'bg_BG',
		'name'           => 'Bulgarian lev',
		'singular'       => 'Bulgarian lev',
		'plural'         => 'Bulgarian leva',
		'short_symbol'   => null,
		'locales'        => $locales['BGN'],
	),
	'BH' => array(
		'currency_code'  => 'BHD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 3,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_BH',
		'name'           => 'Bahraini dinar',
		'singular'       => 'Bahraini dinar',
		'plural'         => 'Bahraini dinars',
		'short_symbol'   => null,
		'locales'        => $locales['BHD'],
	),
	'BI' => array(
		'currency_code'  => 'BIF',
		'currency_pos'   => 'right',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'rn_BI',
		'name'           => 'Burundian franc',
		'singular'       => 'Burundian franc',
		'plural'         => 'Burundian francs',
		'short_symbol'   => null,
		'locales'        => $locales['BIF'],
	),
	'BJ' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_BJ',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'BL' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_BL',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'BM' => array(
		'currency_code'  => 'BMD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_BM',
		'name'           => 'Bermudian dollar',
		'singular'       => 'Bermudan dollar',
		'plural'         => 'Bermudan dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['BMD'],
	),
	'BN' => array(
		'currency_code'  => 'BND',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ms_BN',
		'name'           => 'Brunei dollar',
		'singular'       => 'Brunei dollar',
		'plural'         => 'Brunei dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['BND'],
	),
	'BO' => array(
		'currency_code'  => 'BOB',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_BO',
		'name'           => 'Bolivian boliviano',
		'singular'       => 'Bolivian boliviano',
		'plural'         => 'Bolivian bolivianos',
		'short_symbol'   => 'Bs',
		'locales'        => $locales['BOB'],
	),
	'BQ' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nl_BQ',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'BR' => array(
		'currency_code'  => 'BRL',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_BR',
		'name'           => 'Brazilian real',
		'singular'       => 'Brazilian real',
		'plural'         => 'Brazilian reals',
		'short_symbol'   => 'R$',
		'locales'        => $locales['BRL'],
	),
	'BS' => array(
		'currency_code'  => 'BSD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_BS',
		'name'           => 'Bahamian dollar',
		'singular'       => 'Bahamian dollar',
		'plural'         => 'Bahamian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['BSD'],
	),
	'BT' => array(
		'currency_code'  => 'BTN',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'dz_BT',
		'name'           => 'Bhutanese ngultrum',
		'singular'       => 'Bhutanese ngultrum',
		'plural'         => 'Bhutanese ngultrums',
		'short_symbol'   => null,
		'locales'        => $locales['BTN'],
	),
	'BW' => array(
		'currency_code'  => 'BWP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_BW',
		'name'           => 'Botswana pula',
		'singular'       => 'Botswanan pula',
		'plural'         => 'Botswanan pulas',
		'short_symbol'   => 'P',
		'locales'        => $locales['BWP'],
	),
	'BY' => array(
		'currency_code'  => 'BYN',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'be_BY',
		'name'           => 'Belarusian ruble',
		'singular'       => 'Belarusian ruble',
		'plural'         => 'Belarusian rubles',
		'short_symbol'   => 'р.',
		'locales'        => $locales['BYN'],
	),
	'BZ' => array(
		'currency_code'  => 'BZD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_BZ',
		'name'           => 'Belize dollar',
		'singular'       => 'Belize dollar',
		'plural'         => 'Belize dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['BZD'],
	),
	'CA' => array(
		'currency_code'  => 'CAD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_CA',
		'name'           => 'Canadian dollar',
		'singular'       => 'Canadian dollar',
		'plural'         => 'Canadian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['CAD'],
	),
	'CC' => array(
		'currency_code'  => 'AUD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_CC',
		'name'           => 'Australian dollar',
		'singular'       => 'Australian dollar',
		'plural'         => 'Australian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['AUD'],
	),
	'CD' => array(
		'currency_code'  => 'CDF',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sw_CD',
		'name'           => 'Congolese franc',
		'singular'       => 'Congolese franc',
		'plural'         => 'Congolese francs',
		'short_symbol'   => null,
		'locales'        => $locales['CDF'],
	),
	'CF' => array(
		'currency_code'  => 'XAF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_CF',
		'name'           => 'Central African CFA franc',
		'singular'       => 'Central African CFA franc',
		'plural'         => 'Central African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XAF'],
	),
	'CG' => array(
		'currency_code'  => 'XAF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_CG',
		'name'           => 'Central African CFA franc',
		'singular'       => 'Central African CFA franc',
		'plural'         => 'Central African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XAF'],
	),
	'CH' => array(
		'currency_code'  => 'CHF',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '\'',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'de_CH',
		'name'           => 'Swiss franc',
		'singular'       => 'Swiss franc',
		'plural'         => 'Swiss francs',
		'short_symbol'   => null,
		'locales'        => $locales['CHF'],
	),
	'CI' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_CI',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'CK' => array(
		'currency_code'  => 'NZD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_CK',
		'name'           => 'New Zealand dollar',
		'singular'       => 'New Zealand dollar',
		'plural'         => 'New Zealand dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['NZD'],
	),
	'CL' => array(
		'currency_code'  => 'CLP',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_CL',
		'name'           => 'Chilean peso',
		'singular'       => 'Chilean peso',
		'plural'         => 'Chilean pesos',
		'short_symbol'   => '$',
		'locales'        => $locales['CLP'],
	),
	'CM' => array(
		'currency_code'  => 'XAF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_CM',
		'name'           => 'Central African CFA franc',
		'singular'       => 'Central African CFA franc',
		'plural'         => 'Central African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XAF'],
	),
	'CN' => array(
		'currency_code'  => 'CNY',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'zh_CN',
		'name'           => 'Chinese yuan',
		'singular'       => 'Chinese yuan',
		'plural'         => 'Chinese yuan',
		'short_symbol'   => '¥',
		'locales'        => $locales['CNY'],
	),
	'CO' => array(
		'currency_code'  => 'COP',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_CO',
		'name'           => 'Colombian peso',
		'singular'       => 'Colombian peso',
		'plural'         => 'Colombian pesos',
		'short_symbol'   => '$',
		'locales'        => $locales['COP'],
	),
	'CR' => array(
		'currency_code'  => 'CRC',
		'currency_pos'   => 'left',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_CR',
		'name'           => 'Costa Rican colón',
		'singular'       => 'Costa Rican colón',
		'plural'         => 'Costa Rican colóns',
		'short_symbol'   => '₡',
		'locales'        => $locales['CRC'],
	),
	'CU' => array(
		'currency_code'  => 'CUC',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_CU',
		'name'           => 'Cuban convertible peso',
		'singular'       => 'Cuban convertible peso',
		'plural'         => 'Cuban convertible pesos',
		'short_symbol'   => '$',
		'locales'        => $locales['CUC'],
	),
	'CV' => array(
		'currency_code'  => 'CVE',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_CV',
		'name'           => 'Cape Verdean escudo',
		'singular'       => 'Cape Verdean escudo',
		'plural'         => 'Cape Verdean escudos',
		'short_symbol'   => null,
		'locales'        => $locales['CVE'],
	),
	'CW' => array(
		'currency_code'  => 'ANG',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nl_CW',
		'name'           => 'Netherlands Antillean guilder',
		'singular'       => 'Netherlands Antillean guilder',
		'plural'         => 'Netherlands Antillean guilders',
		'short_symbol'   => null,
		'locales'        => $locales['ANG'],
	),
	'CX' => array(
		'currency_code'  => 'AUD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_CX',
		'name'           => 'Australian dollar',
		'singular'       => 'Australian dollar',
		'plural'         => 'Australian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['AUD'],
	),
	'CY' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'el_CY',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'CZ' => array(
		'currency_code'  => 'CZK',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'cs_CZ',
		'name'           => 'Czech koruna',
		'singular'       => 'Czech koruna',
		'plural'         => 'Czech korunas',
		'short_symbol'   => 'Kč',
		'locales'        => $locales['CZK'],
	),
	'DE' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'de_DE',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'DG' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_DG',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'DJ' => array(
		'currency_code'  => 'DJF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_DJ',
		'name'           => 'Djiboutian franc',
		'singular'       => 'Djiboutian franc',
		'plural'         => 'Djiboutian francs',
		'short_symbol'   => null,
		'locales'        => $locales['DJF'],
	),
	'DK' => array(
		'currency_code'  => 'DKK',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'da_DK',
		'name'           => 'Danish krone',
		'singular'       => 'Danish krone',
		'plural'         => 'Danish kroner',
		'short_symbol'   => 'kr',
		'locales'        => $locales['DKK'],
	),
	'DM' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_DM',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'DO' => array(
		'currency_code'  => 'DOP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_DO',
		'name'           => 'Dominican peso',
		'singular'       => 'Dominican peso',
		'plural'         => 'Dominican pesos',
		'short_symbol'   => '$',
		'locales'        => $locales['DOP'],
	),
	'DZ' => array(
		'currency_code'  => 'DZD',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_DZ',
		'name'           => 'Algerian dinar',
		'singular'       => 'Algerian dinar',
		'plural'         => 'Algerian dinars',
		'short_symbol'   => null,
		'locales'        => $locales['DZD'],
	),
	'EA' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_EA',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'EC' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_EC',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'EE' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'et_EE',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'EG' => array(
		'currency_code'  => 'EGP',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_EG',
		'name'           => 'Egyptian pound',
		'singular'       => 'Egyptian pound',
		'plural'         => 'Egyptian pounds',
		'short_symbol'   => 'E£',
		'locales'        => $locales['EGP'],
	),
	'EH' => array(
		'currency_code'  => 'MAD',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_EH',
		'name'           => 'Moroccan dirham',
		'singular'       => 'Moroccan dirham',
		'plural'         => 'Moroccan dirhams',
		'short_symbol'   => null,
		'locales'        => $locales['MAD'],
	),
	'ER' => array(
		'currency_code'  => 'ERN',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ti_ER',
		'name'           => 'Eritrean nakfa',
		'singular'       => 'Eritrean nakfa',
		'plural'         => 'Eritrean nakfas',
		'short_symbol'   => null,
		'locales'        => $locales['ERN'],
	),
	'ES' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_ES',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'ET' => array(
		'currency_code'  => 'ETB',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'am_ET',
		'name'           => 'Ethiopian birr',
		'singular'       => 'Ethiopian birr',
		'plural'         => 'Ethiopian birrs',
		'short_symbol'   => null,
		'locales'        => $locales['ETB'],
	),
	'FI' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fi_FI',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'FJ' => array(
		'currency_code'  => 'FJD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_FJ',
		'name'           => 'Fijian dollar',
		'singular'       => 'Fijian dollar',
		'plural'         => 'Fijian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['FJD'],
	),
	'FK' => array(
		'currency_code'  => 'FKP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_FK',
		'name'           => 'Falkland Islands pound',
		'singular'       => 'Falkland Islands pound',
		'plural'         => 'Falkland Islands pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['FKP'],
	),
	'FM' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_FM',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'FO' => array(
		'currency_code'  => 'DKK',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fo_FO',
		'name'           => 'Danish krone',
		'singular'       => 'Danish krone',
		'plural'         => 'Danish kroner',
		'short_symbol'   => 'kr',
		'locales'        => $locales['DKK'],
	),
	'FR' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_FR',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'GA' => array(
		'currency_code'  => 'XAF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_GA',
		'name'           => 'Central African CFA franc',
		'singular'       => 'Central African CFA franc',
		'plural'         => 'Central African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XAF'],
	),
	'GB' => array(
		'currency_code'  => 'GBP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'oz',
		'dimension_unit' => 'foot',
		'direction'      => 'ltr',
		'default_locale' => 'en_GB',
		'name'           => 'Pound sterling',
		'singular'       => 'British pound',
		'plural'         => 'British pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['GBP'],
	),
	'GD' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_GD',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'GE' => array(
		'currency_code'  => 'GEL',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ka_GE',
		'name'           => 'Georgian lari',
		'singular'       => 'Georgian lari',
		'plural'         => 'Georgian laris',
		'short_symbol'   => '₾',
		'locales'        => $locales['GEL'],
	),
	'GF' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_GF',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'GG' => array(
		'currency_code'  => 'GBP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_GG',
		'name'           => 'Pound sterling',
		'singular'       => 'British pound',
		'plural'         => 'British pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['GBP'],
	),
	'GH' => array(
		'currency_code'  => 'GHS',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ak_GH',
		'name'           => 'Ghana cedi',
		'singular'       => 'Ghanaian cedi',
		'plural'         => 'Ghanaian cedis',
		'short_symbol'   => 'GH₵',
		'locales'        => $locales['GHS'],
	),
	'GI' => array(
		'currency_code'  => 'GIP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_GI',
		'name'           => 'Gibraltar pound',
		'singular'       => 'Gibraltar pound',
		'plural'         => 'Gibraltar pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['GIP'],
	),
	'GL' => array(
		'currency_code'  => 'DKK',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'kl_GL',
		'name'           => 'Danish krone',
		'singular'       => 'Danish krone',
		'plural'         => 'Danish kroner',
		'short_symbol'   => 'kr',
		'locales'        => $locales['DKK'],
	),
	'GM' => array(
		'currency_code'  => 'GMD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_GM',
		'name'           => 'Gambian dalasi',
		'singular'       => 'Gambian dalasi',
		'plural'         => 'Gambian dalasis',
		'short_symbol'   => null,
		'locales'        => $locales['GMD'],
	),
	'GN' => array(
		'currency_code'  => 'GNF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_GN',
		'name'           => 'Guinean franc',
		'singular'       => 'Guinean franc',
		'plural'         => 'Guinean francs',
		'short_symbol'   => 'FG',
		'locales'        => $locales['GNF'],
	),
	'GP' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_GP',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'GQ' => array(
		'currency_code'  => 'XAF',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_GQ',
		'name'           => 'Central African CFA franc',
		'singular'       => 'Central African CFA franc',
		'plural'         => 'Central African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XAF'],
	),
	'GR' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'el_GR',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'GT' => array(
		'currency_code'  => 'GTQ',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_GT',
		'name'           => 'Guatemalan quetzal',
		'singular'       => 'Guatemalan quetzal',
		'plural'         => 'Guatemalan quetzals',
		'short_symbol'   => 'Q',
		'locales'        => $locales['GTQ'],
	),
	'GU' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_GU',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'GW' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_GW',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'GY' => array(
		'currency_code'  => 'GYD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_GY',
		'name'           => 'Guyanese dollar',
		'singular'       => 'Guyanaese dollar',
		'plural'         => 'Guyanaese dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['GYD'],
	),
	'HK' => array(
		'currency_code'  => 'HKD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'zh_Hant_HK',
		'name'           => 'Hong Kong dollar',
		'singular'       => 'Hong Kong dollar',
		'plural'         => 'Hong Kong dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['HKD'],
	),
	'HN' => array(
		'currency_code'  => 'HNL',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_HN',
		'name'           => 'Honduran lempira',
		'singular'       => 'Honduran lempira',
		'plural'         => 'Honduran lempiras',
		'short_symbol'   => 'L',
		'locales'        => $locales['HNL'],
	),
	'HR' => array(
		'currency_code'  => 'HRK',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'hr_HR',
		'name'           => 'Croatian kuna',
		'singular'       => 'Croatian kuna',
		'plural'         => 'Croatian kunas',
		'short_symbol'   => 'kn',
		'locales'        => $locales['HRK'],
	),
	'HT' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_HT',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'HU' => array(
		'currency_code'  => 'HUF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'hu_HU',
		'name'           => 'Hungarian forint',
		'singular'       => 'Hungarian forint',
		'plural'         => 'Hungarian forints',
		'short_symbol'   => 'Ft',
		'locales'        => $locales['HUF'],
	),
	'IC' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_IC',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'ID' => array(
		'currency_code'  => 'IDR',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'id_ID',
		'name'           => 'Indonesian rupiah',
		'singular'       => 'Indonesian rupiah',
		'plural'         => 'Indonesian rupiahs',
		'short_symbol'   => 'Rp',
		'locales'        => $locales['IDR'],
	),
	'IE' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_IE',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'IL' => array(
		'currency_code'  => 'ILS',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'he_IL',
		'name'           => 'Israeli new shekel',
		'singular'       => 'Israeli new shekel',
		'plural'         => 'Israeli new shekels',
		'short_symbol'   => '₪',
		'locales'        => $locales['ILS'],
	),
	'IM' => array(
		'currency_code'  => 'GBP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_IM',
		'name'           => 'Pound sterling',
		'singular'       => 'British pound',
		'plural'         => 'British pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['GBP'],
	),
	'IN' => array(
		'currency_code'  => 'INR',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'hi_IN',
		'name'           => 'Indian rupee',
		'singular'       => 'Indian rupee',
		'plural'         => 'Indian rupees',
		'short_symbol'   => '₹',
		'locales'        => $locales['INR'],
	),
	'IO' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_IO',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'IQ' => array(
		'currency_code'  => 'IQD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_IQ',
		'name'           => 'Iraqi dinar',
		'singular'       => 'Iraqi dinar',
		'plural'         => 'Iraqi dinars',
		'short_symbol'   => null,
		'locales'        => $locales['IQD'],
	),
	'IR' => array(
		'currency_code'  => 'IRR',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'fa_IR',
		'name'           => 'Iranian rial',
		'singular'       => 'Iranian rial',
		'plural'         => 'Iranian rials',
		'short_symbol'   => null,
		'locales'        => $locales['IRR'],
	),
	'IS' => array(
		'currency_code'  => 'ISK',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'is_IS',
		'name'           => 'Icelandic króna',
		'singular'       => 'Icelandic króna',
		'plural'         => 'Icelandic krónur',
		'short_symbol'   => 'kr',
		'locales'        => $locales['ISK'],
	),
	'IT' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'it_IT',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'JE' => array(
		'currency_code'  => 'GBP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_JE',
		'name'           => 'Pound sterling',
		'singular'       => 'British pound',
		'plural'         => 'British pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['GBP'],
	),
	'JM' => array(
		'currency_code'  => 'JMD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_JM',
		'name'           => 'Jamaican dollar',
		'singular'       => 'Jamaican dollar',
		'plural'         => 'Jamaican dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['JMD'],
	),
	'JO' => array(
		'currency_code'  => 'JOD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 3,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_JO',
		'name'           => 'Jordanian dinar',
		'singular'       => 'Jordanian dinar',
		'plural'         => 'Jordanian dinars',
		'short_symbol'   => null,
		'locales'        => $locales['JOD'],
	),
	'JP' => array(
		'currency_code'  => 'JPY',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ja_JP',
		'name'           => 'Japanese yen',
		'singular'       => 'Japanese yen',
		'plural'         => 'Japanese yen',
		'short_symbol'   => '¥',
		'locales'        => $locales['JPY'],
	),
	'KE' => array(
		'currency_code'  => 'KES',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sw_KE',
		'name'           => 'Kenyan shilling',
		'singular'       => 'Kenyan shilling',
		'plural'         => 'Kenyan shillings',
		'short_symbol'   => null,
		'locales'        => $locales['KES'],
	),
	'KG' => array(
		'currency_code'  => 'KGS',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ky_KG',
		'name'           => 'Kyrgyzstani som',
		'singular'       => 'Kyrgystani som',
		'plural'         => 'Kyrgystani soms',
		'short_symbol'   => null,
		'locales'        => $locales['KGS'],
	),
	'KH' => array(
		'currency_code'  => 'KHR',
		'currency_pos'   => 'right',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'km_KH',
		'name'           => 'Cambodian riel',
		'singular'       => 'Cambodian riel',
		'plural'         => 'Cambodian riels',
		'short_symbol'   => '៛',
		'locales'        => $locales['KHR'],
	),
	'KI' => array(
		'currency_code'  => 'AUD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_KI',
		'name'           => 'Australian dollar',
		'singular'       => 'Australian dollar',
		'plural'         => 'Australian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['AUD'],
	),
	'KM' => array(
		'currency_code'  => 'KMF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_KM',
		'name'           => 'Comorian franc',
		'singular'       => 'Comorian franc',
		'plural'         => 'Comorian francs',
		'short_symbol'   => 'CF',
		'locales'        => $locales['KMF'],
	),
	'KN' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_KN',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'KP' => array(
		'currency_code'  => 'KPW',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ko_KP',
		'name'           => 'North Korean won',
		'singular'       => 'North Korean won',
		'plural'         => 'North Korean won',
		'short_symbol'   => '₩',
		'locales'        => $locales['KPW'],
	),
	'KR' => array(
		'currency_code'  => 'KRW',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ko_KR',
		'name'           => 'South Korean won',
		'singular'       => 'South Korean won',
		'plural'         => 'South Korean won',
		'short_symbol'   => '₩',
		'locales'        => $locales['KRW'],
	),
	'KW' => array(
		'currency_code'  => 'KWD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 3,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_KW',
		'name'           => 'Kuwaiti dinar',
		'singular'       => 'Kuwaiti dinar',
		'plural'         => 'Kuwaiti dinars',
		'short_symbol'   => null,
		'locales'        => $locales['KWD'],
	),
	'KY' => array(
		'currency_code'  => 'KYD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_KY',
		'name'           => 'Cayman Islands dollar',
		'singular'       => 'Cayman Islands dollar',
		'plural'         => 'Cayman Islands dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['KYD'],
	),
	'KZ' => array(
		'currency_code'  => 'KZT',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ru_KZ',
		'name'           => 'Kazakhstani tenge',
		'singular'       => 'Kazakhstani tenge',
		'plural'         => 'Kazakhstani tenges',
		'short_symbol'   => '₸',
		'locales'        => $locales['KZT'],
	),
	'LA' => array(
		'currency_code'  => 'LAK',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'lo_LA',
		'name'           => 'Lao kip',
		'singular'       => 'Laotian kip',
		'plural'         => 'Laotian kips',
		'short_symbol'   => '₭',
		'locales'        => $locales['LAK'],
	),
	'LB' => array(
		'currency_code'  => 'LBP',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_LB',
		'name'           => 'Lebanese pound',
		'singular'       => 'Lebanese pound',
		'plural'         => 'Lebanese pounds',
		'short_symbol'   => 'L£',
		'locales'        => $locales['LBP'],
	),
	'LC' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_LC',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'LI' => array(
		'currency_code'  => 'CHF',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '\'',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'de_LI',
		'name'           => 'Swiss franc',
		'singular'       => 'Swiss franc',
		'plural'         => 'Swiss francs',
		'short_symbol'   => null,
		'locales'        => $locales['CHF'],
	),
	'LK' => array(
		'currency_code'  => 'LKR',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'si_LK',
		'name'           => 'Sri Lankan rupee',
		'singular'       => 'Sri Lankan rupee',
		'plural'         => 'Sri Lankan rupees',
		'short_symbol'   => 'Rs',
		'locales'        => $locales['LKR'],
	),
	'LR' => array(
		'currency_code'  => 'LRD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_LR',
		'name'           => 'Liberian dollar',
		'singular'       => 'Liberian dollar',
		'plural'         => 'Liberian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['LRD'],
	),
	'LS' => array(
		'currency_code'  => 'LSL',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_LS',
		'name'           => 'Lesotho loti',
		'singular'       => 'Lesotho loti',
		'plural'         => 'Lesotho lotis',
		'short_symbol'   => null,
		'locales'        => $locales['LSL'],
	),
	'LT' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'lt_LT',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'LU' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_LU',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'LV' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'lv_LV',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'LY' => array(
		'currency_code'  => 'LYD',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 3,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_LY',
		'name'           => 'Libyan dinar',
		'singular'       => 'Libyan dinar',
		'plural'         => 'Libyan dinars',
		'short_symbol'   => null,
		'locales'        => $locales['LYD'],
	),
	'MA' => array(
		'currency_code'  => 'MAD',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_MA',
		'name'           => 'Moroccan dirham',
		'singular'       => 'Moroccan dirham',
		'plural'         => 'Moroccan dirhams',
		'short_symbol'   => null,
		'locales'        => $locales['MAD'],
	),
	'MC' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_MC',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'MD' => array(
		'currency_code'  => 'MDL',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ro_MD',
		'name'           => 'Moldovan leu',
		'singular'       => 'Moldovan leu',
		'plural'         => 'Moldovan lei',
		'short_symbol'   => null,
		'locales'        => $locales['MDL'],
	),
	'ME' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sr_Latn_ME',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'MF' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_MF',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'MG' => array(
		'currency_code'  => 'MGA',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'mg_MG',
		'name'           => 'Malagasy ariary',
		'singular'       => 'Malagasy ariary',
		'plural'         => 'Malagasy ariaries',
		'short_symbol'   => 'Ar',
		'locales'        => $locales['MGA'],
	),
	'MH' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_MH',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'MK' => array(
		'currency_code'  => 'MKD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'mk_MK',
		'name'           => 'Macedonian denar',
		'singular'       => 'Macedonian denar',
		'plural'         => 'Macedonian denari',
		'short_symbol'   => null,
		'locales'        => $locales['MKD'],
	),
	'ML' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_ML',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'MM' => array(
		'currency_code'  => 'MMK',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'my_MM',
		'name'           => 'Burmese kyat',
		'singular'       => 'Myanmar kyat',
		'plural'         => 'Myanmar kyats',
		'short_symbol'   => 'K',
		'locales'        => $locales['MMK'],
	),
	'MN' => array(
		'currency_code'  => 'MNT',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'mn_MN',
		'name'           => 'Mongolian tögrög',
		'singular'       => 'Mongolian tugrik',
		'plural'         => 'Mongolian tugriks',
		'short_symbol'   => '₮',
		'locales'        => $locales['MNT'],
	),
	'MO' => array(
		'currency_code'  => 'MOP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'zh_Hant_MO',
		'name'           => 'Macanese pataca',
		'singular'       => 'Macanese pataca',
		'plural'         => 'Macanese patacas',
		'short_symbol'   => null,
		'locales'        => $locales['MOP'],
	),
	'MP' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_MP',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'MQ' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_MQ',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'MR' => array(
		'currency_code'  => 'MRU',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_MR',
		'name'           => 'Mauritanian ouguiya',
		'singular'       => 'Mauritanian ouguiya',
		'plural'         => 'Mauritanian ouguiyas',
		'short_symbol'   => null,
		'locales'        => $locales['MRU'],
	),
	'MS' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_MS',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'MT' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'mt_MT',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'MU' => array(
		'currency_code'  => 'MUR',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_MU',
		'name'           => 'Mauritian rupee',
		'singular'       => 'Mauritian rupee',
		'plural'         => 'Mauritian rupees',
		'short_symbol'   => 'Rs',
		'locales'        => $locales['MUR'],
	),
	'MV' => array(
		'currency_code'  => 'MVR',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => '',
		'name'           => 'Maldivian rufiyaa',
		'singular'       => 'Maldivian rufiyaa',
		'plural'         => 'Maldivian rufiyaas',
		'short_symbol'   => null,
		'locales'        => $locales['MVR'],
	),
	'MW' => array(
		'currency_code'  => 'MWK',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_MW',
		'name'           => 'Malawian kwacha',
		'singular'       => 'Malawian kwacha',
		'plural'         => 'Malawian kwachas',
		'short_symbol'   => null,
		'locales'        => $locales['MWK'],
	),
	'MX' => array(
		'currency_code'  => 'MXN',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_MX',
		'name'           => 'Mexican peso',
		'singular'       => 'Mexican peso',
		'plural'         => 'Mexican pesos',
		'short_symbol'   => '$',
		'locales'        => $locales['MXN'],
	),
	'MY' => array(
		'currency_code'  => 'MYR',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ms_MY',
		'name'           => 'Malaysian ringgit',
		'singular'       => 'Malaysian ringgit',
		'plural'         => 'Malaysian ringgits',
		'short_symbol'   => 'RM',
		'locales'        => $locales['MYR'],
	),
	'MZ' => array(
		'currency_code'  => 'MZN',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_MZ',
		'name'           => 'Mozambican metical',
		'singular'       => 'Mozambican metical',
		'plural'         => 'Mozambican meticals',
		'short_symbol'   => null,
		'locales'        => $locales['MZN'],
	),
	'NA' => array(
		'currency_code'  => 'NAD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_NA',
		'name'           => 'Namibian dollar',
		'singular'       => 'Namibian dollar',
		'plural'         => 'Namibian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['NAD'],
	),
	'NC' => array(
		'currency_code'  => 'XPF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_NC',
		'name'           => 'CFP franc',
		'singular'       => 'CFP franc',
		'plural'         => 'CFP francs',
		'short_symbol'   => null,
		'locales'        => $locales['XPF'],
	),
	'NE' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_NE',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'NF' => array(
		'currency_code'  => 'AUD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_NF',
		'name'           => 'Australian dollar',
		'singular'       => 'Australian dollar',
		'plural'         => 'Australian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['AUD'],
	),
	'NG' => array(
		'currency_code'  => 'NGN',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_NG',
		'name'           => 'Nigerian naira',
		'singular'       => 'Nigerian naira',
		'plural'         => 'Nigerian nairas',
		'short_symbol'   => '₦',
		'locales'        => $locales['NGN'],
	),
	'NI' => array(
		'currency_code'  => 'NIO',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_NI',
		'name'           => 'Nicaraguan córdoba',
		'singular'       => 'Nicaraguan córdoba',
		'plural'         => 'Nicaraguan córdobas',
		'short_symbol'   => 'C$',
		'locales'        => $locales['NIO'],
	),
	'NL' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nl_NL',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'NO' => array(
		'currency_code'  => 'NOK',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nb_NO',
		'name'           => 'Norwegian krone',
		'singular'       => 'Norwegian krone',
		'plural'         => 'Norwegian kroner',
		'short_symbol'   => 'kr',
		'locales'        => $locales['NOK'],
	),
	'NP' => array(
		'currency_code'  => 'NPR',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ne_NP',
		'name'           => 'Nepalese rupee',
		'singular'       => 'Nepalese rupee',
		'plural'         => 'Nepalese rupees',
		'short_symbol'   => 'Rs',
		'locales'        => $locales['NPR'],
	),
	'NR' => array(
		'currency_code'  => 'AUD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_NR',
		'name'           => 'Australian dollar',
		'singular'       => 'Australian dollar',
		'plural'         => 'Australian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['AUD'],
	),
	'NU' => array(
		'currency_code'  => 'NZD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_NU',
		'name'           => 'New Zealand dollar',
		'singular'       => 'New Zealand dollar',
		'plural'         => 'New Zealand dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['NZD'],
	),
	'NZ' => array(
		'currency_code'  => 'NZD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_NZ',
		'name'           => 'New Zealand dollar',
		'singular'       => 'New Zealand dollar',
		'plural'         => 'New Zealand dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['NZD'],
	),
	'OM' => array(
		'currency_code'  => 'OMR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 3,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_OM',
		'name'           => 'Omani rial',
		'singular'       => 'Omani rial',
		'plural'         => 'Omani rials',
		'short_symbol'   => null,
		'locales'        => $locales['OMR'],
	),
	'PA' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_PA',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'PE' => array(
		'currency_code'  => 'PEN',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_PE',
		'name'           => 'Sol',
		'singular'       => 'Peruvian sol',
		'plural'         => 'Peruvian soles',
		'short_symbol'   => null,
		'locales'        => $locales['PEN'],
	),
	'PF' => array(
		'currency_code'  => 'XPF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_PF',
		'name'           => 'CFP franc',
		'singular'       => 'CFP franc',
		'plural'         => 'CFP francs',
		'short_symbol'   => null,
		'locales'        => $locales['XPF'],
	),
	'PG' => array(
		'currency_code'  => 'PGK',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_PG',
		'name'           => 'Papua New Guinean kina',
		'singular'       => 'Papua New Guinean kina',
		'plural'         => 'Papua New Guinean kina',
		'short_symbol'   => null,
		'locales'        => $locales['PGK'],
	),
	'PH' => array(
		'currency_code'  => 'PHP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_PH',
		'name'           => 'Philippine peso',
		'singular'       => 'Philippine piso',
		'plural'         => 'Philippine pisos',
		'short_symbol'   => '₱',
		'locales'        => $locales['PHP'],
	),
	'PK' => array(
		'currency_code'  => 'PKR',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ur_PK',
		'name'           => 'Pakistani rupee',
		'singular'       => 'Pakistani rupee',
		'plural'         => 'Pakistani rupees',
		'short_symbol'   => 'Rs',
		'locales'        => $locales['PKR'],
	),
	'PL' => array(
		'currency_code'  => 'PLN',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pl_PL',
		'name'           => 'Polish złoty',
		'singular'       => 'Polish zloty',
		'plural'         => 'Polish zlotys',
		'short_symbol'   => 'zł',
		'locales'        => $locales['PLN'],
	),
	'PM' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_PM',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'PN' => array(
		'currency_code'  => 'NZD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_PN',
		'name'           => 'New Zealand dollar',
		'singular'       => 'New Zealand dollar',
		'plural'         => 'New Zealand dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['NZD'],
	),
	'PR' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_PR',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'PS' => array(
		'currency_code'  => 'JOD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 3,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_PS',
		'name'           => 'Jordanian dinar',
		'singular'       => 'Jordanian dinar',
		'plural'         => 'Jordanian dinars',
		'short_symbol'   => null,
		'locales'        => $locales['JOD'],
	),
	'PT' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_PT',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'PW' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_PW',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'PY' => array(
		'currency_code'  => 'PYG',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_PY',
		'name'           => 'Paraguayan guaraní',
		'singular'       => 'Paraguayan guarani',
		'plural'         => 'Paraguayan guaranis',
		'short_symbol'   => '₲',
		'locales'        => $locales['PYG'],
	),
	'QA' => array(
		'currency_code'  => 'QAR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_QA',
		'name'           => 'Qatari riyal',
		'singular'       => 'Qatari rial',
		'plural'         => 'Qatari rials',
		'short_symbol'   => null,
		'locales'        => $locales['QAR'],
	),
	'RE' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_RE',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'RO' => array(
		'currency_code'  => 'RON',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ro_RO',
		'name'           => 'Romanian leu',
		'singular'       => 'Romanian leu',
		'plural'         => 'Romanian lei',
		'short_symbol'   => 'lei',
		'locales'        => $locales['RON'],
	),
	'RS' => array(
		'currency_code'  => 'RSD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sr_RS',
		'name'           => 'Serbian dinar',
		'singular'       => 'Serbian dinar',
		'plural'         => 'Serbian dinars',
		'short_symbol'   => null,
		'locales'        => $locales['RSD'],
	),
	'RU' => array(
		'currency_code'  => 'RUB',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'ru_RU',
		'name'           => 'Russian ruble',
		'singular'       => 'Russian ruble',
		'plural'         => 'Russian rubles',
		'short_symbol'   => '₽',
		'locales'        => $locales['RUB'],
	),
	'RW' => array(
		'currency_code'  => 'RWF',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'rw_RW',
		'name'           => 'Rwandan franc',
		'singular'       => 'Rwandan franc',
		'plural'         => 'Rwandan francs',
		'short_symbol'   => 'RF',
		'locales'        => $locales['RWF'],
	),
	'SA' => array(
		'currency_code'  => 'SAR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_SA',
		'name'           => 'Saudi riyal',
		'singular'       => 'Saudi riyal',
		'plural'         => 'Saudi riyals',
		'short_symbol'   => null,
		'locales'        => $locales['SAR'],
	),
	'SB' => array(
		'currency_code'  => 'SBD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_SB',
		'name'           => 'Solomon Islands dollar',
		'singular'       => 'Solomon Islands dollar',
		'plural'         => 'Solomon Islands dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['SBD'],
	),
	'SC' => array(
		'currency_code'  => 'SCR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_SC',
		'name'           => 'Seychellois rupee',
		'singular'       => 'Seychellois rupee',
		'plural'         => 'Seychellois rupees',
		'short_symbol'   => null,
		'locales'        => $locales['SCR'],
	),
	'SD' => array(
		'currency_code'  => 'SDG',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_SD',
		'name'           => 'Sudanese pound',
		'singular'       => 'Sudanese pound',
		'plural'         => 'Sudanese pounds',
		'short_symbol'   => null,
		'locales'        => $locales['SDG'],
	),
	'SE' => array(
		'currency_code'  => 'SEK',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sv_SE',
		'name'           => 'Swedish krona',
		'singular'       => 'Swedish krona',
		'plural'         => 'Swedish kronor',
		'short_symbol'   => 'kr',
		'locales'        => $locales['SEK'],
	),
	'SG' => array(
		'currency_code'  => 'SGD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_SG',
		'name'           => 'Singapore dollar',
		'singular'       => 'Singapore dollar',
		'plural'         => 'Singapore dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['SGD'],
	),
	'SH' => array(
		'currency_code'  => 'SHP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_SH',
		'name'           => 'Saint Helena pound',
		'singular'       => 'St. Helena pound',
		'plural'         => 'St. Helena pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['SHP'],
	),
	'SI' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sl_SI',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'SJ' => array(
		'currency_code'  => 'NOK',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nb_SJ',
		'name'           => 'Norwegian krone',
		'singular'       => 'Norwegian krone',
		'plural'         => 'Norwegian kroner',
		'short_symbol'   => 'kr',
		'locales'        => $locales['NOK'],
	),
	'SK' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sk_SK',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'SL' => array(
		'currency_code'  => 'SLL',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_SL',
		'name'           => 'Sierra Leonean leone',
		'singular'       => 'Sierra Leonean leone',
		'plural'         => 'Sierra Leonean leones',
		'short_symbol'   => null,
		'locales'        => $locales['SLL'],
	),
	'SM' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'it_SM',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'SN' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'wo_SN',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'SO' => array(
		'currency_code'  => 'SOS',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'so_SO',
		'name'           => 'Somali shilling',
		'singular'       => 'Somali shilling',
		'plural'         => 'Somali shillings',
		'short_symbol'   => null,
		'locales'        => $locales['SOS'],
	),
	'SR' => array(
		'currency_code'  => 'SRD',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'nl_SR',
		'name'           => 'Surinamese dollar',
		'singular'       => 'Surinamese dollar',
		'plural'         => 'Surinamese dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['SRD'],
	),
	'SS' => array(
		'currency_code'  => 'SSP',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_SS',
		'name'           => 'South Sudanese pound',
		'singular'       => 'South Sudanese pound',
		'plural'         => 'South Sudanese pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['SSP'],
	),
	'ST' => array(
		'currency_code'  => 'STN',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_ST',
		'name'           => 'São Tomé and Príncipe dobra',
		'singular'       => 'São Tomé & Príncipe dobra',
		'plural'         => 'São Tomé & Príncipe dobras',
		'short_symbol'   => 'Db',
		'locales'        => $locales['STN'],
	),
	'SV' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_SV',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'SX' => array(
		'currency_code'  => 'ANG',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_SX',
		'name'           => 'Netherlands Antillean guilder',
		'singular'       => 'Netherlands Antillean guilder',
		'plural'         => 'Netherlands Antillean guilders',
		'short_symbol'   => null,
		'locales'        => $locales['ANG'],
	),
	'SY' => array(
		'currency_code'  => 'SYP',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_SY',
		'name'           => 'Syrian pound',
		'singular'       => 'Syrian pound',
		'plural'         => 'Syrian pounds',
		'short_symbol'   => '£',
		'locales'        => $locales['SYP'],
	),
	'SZ' => array(
		'currency_code'  => 'SZL',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_SZ',
		'name'           => 'Swazi lilangeni',
		'singular'       => 'Swazi lilangeni',
		'plural'         => 'Swazi emalangeni',
		'short_symbol'   => null,
		'locales'        => $locales['SZL'],
	),
	'TC' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_TC',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'TD' => array(
		'currency_code'  => 'XAF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_TD',
		'name'           => 'Central African CFA franc',
		'singular'       => 'Central African CFA franc',
		'plural'         => 'Central African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XAF'],
	),
	'TG' => array(
		'currency_code'  => 'XOF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_TG',
		'name'           => 'West African CFA franc',
		'singular'       => 'West African CFA franc',
		'plural'         => 'West African CFA francs',
		'short_symbol'   => null,
		'locales'        => $locales['XOF'],
	),
	'TH' => array(
		'currency_code'  => 'THB',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'th_TH',
		'name'           => 'Thai baht',
		'singular'       => 'Thai baht',
		'plural'         => 'Thai baht',
		'short_symbol'   => '฿',
		'locales'        => $locales['THB'],
	),
	'TJ' => array(
		'currency_code'  => 'TJS',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'tg_TJ',
		'name'           => 'Tajikistani somoni',
		'singular'       => 'Tajikistani somoni',
		'plural'         => 'Tajikistani somonis',
		'short_symbol'   => null,
		'locales'        => $locales['TJS'],
	),
	'TK' => array(
		'currency_code'  => 'NZD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_TK',
		'name'           => 'New Zealand dollar',
		'singular'       => 'New Zealand dollar',
		'plural'         => 'New Zealand dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['NZD'],
	),
	'TL' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'pt_TL',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'TM' => array(
		'currency_code'  => 'TMT',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'tk_TM',
		'name'           => 'Turkmenistan manat',
		'singular'       => 'Turkmenistani manat',
		'plural'         => 'Turkmenistani manat',
		'short_symbol'   => null,
		'locales'        => $locales['TMT'],
	),
	'TN' => array(
		'currency_code'  => 'TND',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 3,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_TN',
		'name'           => 'Tunisian dinar',
		'singular'       => 'Tunisian dinar',
		'plural'         => 'Tunisian dinars',
		'short_symbol'   => null,
		'locales'        => $locales['TND'],
	),
	'TO' => array(
		'currency_code'  => 'TOP',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'to_TO',
		'name'           => 'Tongan paʻanga',
		'singular'       => 'Tongan paʻanga',
		'plural'         => 'Tongan paʻanga',
		'short_symbol'   => 'T$',
		'locales'        => $locales['TOP'],
	),
	'TR' => array(
		'currency_code'  => 'TRY',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'tr_TR',
		'name'           => 'Turkish lira',
		'singular'       => 'Turkish lira',
		'plural'         => 'Turkish Lira',
		'short_symbol'   => '₺',
		'locales'        => $locales['TRY'],
	),
	'TT' => array(
		'currency_code'  => 'TTD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_TT',
		'name'           => 'Trinidad and Tobago dollar',
		'singular'       => 'Trinidad & Tobago dollar',
		'plural'         => 'Trinidad & Tobago dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['TTD'],
	),
	'TV' => array(
		'currency_code'  => 'AUD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_TV',
		'name'           => 'Australian dollar',
		'singular'       => 'Australian dollar',
		'plural'         => 'Australian dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['AUD'],
	),
	'TW' => array(
		'currency_code'  => 'TWD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'zh_Hant',
		'name'           => 'New Taiwan dollar',
		'singular'       => 'New Taiwan dollar',
		'plural'         => 'New Taiwan dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['TWD'],
	),
	'TZ' => array(
		'currency_code'  => 'TZS',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sw_TZ',
		'name'           => 'Tanzanian shilling',
		'singular'       => 'Tanzanian shilling',
		'plural'         => 'Tanzanian shillings',
		'short_symbol'   => null,
		'locales'        => $locales['TZS'],
	),
	'UA' => array(
		'currency_code'  => 'UAH',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'uk_UA',
		'name'           => 'Ukrainian hryvnia',
		'singular'       => 'Ukrainian hryvnia',
		'plural'         => 'Ukrainian hryvnias',
		'short_symbol'   => '₴',
		'locales'        => $locales['UAH'],
	),
	'UG' => array(
		'currency_code'  => 'UGX',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sw_UG',
		'name'           => 'Ugandan shilling',
		'singular'       => 'Ugandan shilling',
		'plural'         => 'Ugandan shillings',
		'short_symbol'   => null,
		'locales'        => $locales['UGX'],
	),
	'UM' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_UM',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'US' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'oz',
		'dimension_unit' => 'foot',
		'direction'      => 'ltr',
		'default_locale' => 'en_US',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'UY' => array(
		'currency_code'  => 'UYU',
		'currency_pos'   => 'left_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_UY',
		'name'           => 'Uruguayan peso',
		'singular'       => 'Uruguayan peso',
		'plural'         => 'Uruguayan pesos',
		'short_symbol'   => '$',
		'locales'        => $locales['UYU'],
	),
	'UZ' => array(
		'currency_code'  => 'UZS',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'uz_AF',
		'name'           => 'Uzbekistani som',
		'singular'       => 'Uzbekistani som',
		'plural'         => 'Uzbekistani som',
		'short_symbol'   => null,
		'locales'        => $locales['UZS'],
	),
	'VA' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'it_VA',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'VC' => array(
		'currency_code'  => 'XCD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_VC',
		'name'           => 'East Caribbean dollar',
		'singular'       => 'East Caribbean dollar',
		'plural'         => 'East Caribbean dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['XCD'],
	),
	'VE' => array(
		'currency_code'  => 'VES',
		'currency_pos'   => 'left',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'es_VE',
		'name'           => 'Bolívar soberano',
		'singular'       => 'Venezuelan bolívar',
		'plural'         => 'Venezuelan bolívars',
		'short_symbol'   => null,
		'locales'        => $locales['VES'],
	),
	'VG' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_VG',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'VI' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_VI',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
	'VN' => array(
		'currency_code'  => 'VND',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'vi_VN',
		'name'           => 'Vietnamese đồng',
		'singular'       => 'Vietnamese dong',
		'plural'         => 'Vietnamese dong',
		'short_symbol'   => '₫',
		'locales'        => $locales['VND'],
	),
	'VU' => array(
		'currency_code'  => 'VUV',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_VU',
		'name'           => 'Vanuatu vatu',
		'singular'       => 'Vanuatu vatu',
		'plural'         => 'Vanuatu vatus',
		'short_symbol'   => null,
		'locales'        => $locales['VUV'],
	),
	'WF' => array(
		'currency_code'  => 'XPF',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_WF',
		'name'           => 'CFP franc',
		'singular'       => 'CFP franc',
		'plural'         => 'CFP francs',
		'short_symbol'   => null,
		'locales'        => $locales['XPF'],
	),
	'WS' => array(
		'currency_code'  => 'WST',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_WS',
		'name'           => 'Samoan tālā',
		'singular'       => 'Samoan tala',
		'plural'         => 'Samoan tala',
		'short_symbol'   => null,
		'locales'        => $locales['WST'],
	),
	'XK' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sq_XK',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'YE' => array(
		'currency_code'  => 'YER',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => '.',
		'decimal_sep'    => ',',
		'num_decimals'   => 0,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'rtl',
		'default_locale' => 'ar_YE',
		'name'           => 'Yemeni rial',
		'singular'       => 'Yemeni rial',
		'plural'         => 'Yemeni rials',
		'short_symbol'   => null,
		'locales'        => $locales['YER'],
	),
	'YT' => array(
		'currency_code'  => 'EUR',
		'currency_pos'   => 'right_space',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'fr_YT',
		'name'           => 'Euro',
		'singular'       => 'euro',
		'plural'         => 'euros',
		'short_symbol'   => '€',
		'locales'        => $locales['EUR'],
	),
	'ZA' => array(
		'currency_code'  => 'ZAR',
		'currency_pos'   => 'left',
		'thousand_sep'   => ' ',
		'decimal_sep'    => ',',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_ZA',
		'name'           => 'South African rand',
		'singular'       => 'South African rand',
		'plural'         => 'South African rand',
		'short_symbol'   => 'R',
		'locales'        => $locales['ZAR'],
	),
	'ZM' => array(
		'currency_code'  => 'ZMW',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'en_ZM',
		'name'           => 'Zambian kwacha',
		'singular'       => 'Zambian kwacha',
		'plural'         => 'Zambian kwachas',
		'short_symbol'   => 'ZK',
		'locales'        => $locales['ZMW'],
	),
	'ZW' => array(
		'currency_code'  => 'USD',
		'currency_pos'   => 'left',
		'thousand_sep'   => ',',
		'decimal_sep'    => '.',
		'num_decimals'   => 2,
		'weight_unit'    => 'kg',
		'dimension_unit' => 'cm',
		'direction'      => 'ltr',
		'default_locale' => 'sn_ZW',
		'name'           => 'United States (US) dollar',
		'singular'       => 'US dollar',
		'plural'         => 'US dollars',
		'short_symbol'   => '$',
		'locales'        => $locales['USD'],
	),
);
