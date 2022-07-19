<?php
/**
 * States
 *
 * Returns an array of country states. This deprecates and replaces the /states/ directory found in older versions.
 * States should be defined in English and translated native through localisation files.
 * Country codes and states (or province) names should follow the Unicode CLDR recommendation (https://cldr.unicode.org/translation/displaynames/countryregion-territory-names).
 * Countries defined with empty arrays have no states.
 *
 * @package WooCommerce\i18n
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

return array(
	'AF' => array(),
	'AL' => array( // Albanian states.
		'AL-01' => __( 'Berat', 'woocommerce' ),
		'AL-09' => __( 'Dibër', 'woocommerce' ),
		'AL-02' => __( 'Durrës', 'woocommerce' ),
		'AL-03' => __( 'Elbasan', 'woocommerce' ),
		'AL-04' => __( 'Fier', 'woocommerce' ),
		'AL-05' => __( 'Gjirokastër', 'woocommerce' ),
		'AL-06' => __( 'Korçë', 'woocommerce' ),
		'AL-07' => __( 'Kukës', 'woocommerce' ),
		'AL-08' => __( 'Lezhë', 'woocommerce' ),
		'AL-10' => __( 'Shkodër', 'woocommerce' ),
		'AL-11' => __( 'Tirana', 'woocommerce' ),
		'AL-12' => __( 'Vlorë', 'woocommerce' ),
	),
	'AO' => array( // Angolan states.
		'BGO' => __( 'Bengo', 'woocommerce' ),
		'BLU' => __( 'Benguela', 'woocommerce' ),
		'BIE' => __( 'Bié', 'woocommerce' ),
		'CAB' => __( 'Cabinda', 'woocommerce' ),
		'CNN' => __( 'Cunene', 'woocommerce' ),
		'HUA' => __( 'Huambo', 'woocommerce' ),
		'HUI' => __( 'Huíla', 'woocommerce' ),
		'CCU' => __( 'Kuando Kubango', 'woocommerce' ),
		'CNO' => __( 'Kwanza-Norte', 'woocommerce' ),
		'CUS' => __( 'Kwanza-Sul', 'woocommerce' ),
		'LUA' => __( 'Luanda', 'woocommerce' ),
		'LNO' => __( 'Lunda-Norte', 'woocommerce' ),
		'LSU' => __( 'Lunda-Sul', 'woocommerce' ),
		'MAL' => __( 'Malanje', 'woocommerce' ),
		'MOX' => __( 'Moxico', 'woocommerce' ),
		'NAM' => __( 'Namibe', 'woocommerce' ),
		'UIG' => __( 'Uíge', 'woocommerce' ),
		'ZAI' => __( 'Zaire', 'woocommerce' ),
	),
	'AR' => array( // Argentinian provinces.
		'C' => __( 'Ciudad Autónoma de Buenos Aires', 'woocommerce' ),
		'B' => __( 'Buenos Aires', 'woocommerce' ),
		'K' => __( 'Catamarca', 'woocommerce' ),
		'H' => __( 'Chaco', 'woocommerce' ),
		'U' => __( 'Chubut', 'woocommerce' ),
		'X' => __( 'Córdoba', 'woocommerce' ),
		'W' => __( 'Corrientes', 'woocommerce' ),
		'E' => __( 'Entre Ríos', 'woocommerce' ),
		'P' => __( 'Formosa', 'woocommerce' ),
		'Y' => __( 'Jujuy', 'woocommerce' ),
		'L' => __( 'La Pampa', 'woocommerce' ),
		'F' => __( 'La Rioja', 'woocommerce' ),
		'M' => __( 'Mendoza', 'woocommerce' ),
		'N' => __( 'Misiones', 'woocommerce' ),
		'Q' => __( 'Neuquén', 'woocommerce' ),
		'R' => __( 'Río Negro', 'woocommerce' ),
		'A' => __( 'Salta', 'woocommerce' ),
		'J' => __( 'San Juan', 'woocommerce' ),
		'D' => __( 'San Luis', 'woocommerce' ),
		'Z' => __( 'Santa Cruz', 'woocommerce' ),
		'S' => __( 'Santa Fe', 'woocommerce' ),
		'G' => __( 'Santiago del Estero', 'woocommerce' ),
		'V' => __( 'Tierra del Fuego', 'woocommerce' ),
		'T' => __( 'Tucumán', 'woocommerce' ),
	),
	'AT' => array(),
	'AU' => array( // Australian states.
		'ACT' => __( 'Australian Capital Territory', 'woocommerce' ),
		'NSW' => __( 'New South Wales', 'woocommerce' ),
		'NT'  => __( 'Northern Territory', 'woocommerce' ),
		'QLD' => __( 'Queensland', 'woocommerce' ),
		'SA'  => __( 'South Australia', 'woocommerce' ),
		'TAS' => __( 'Tasmania', 'woocommerce' ),
		'VIC' => __( 'Victoria', 'woocommerce' ),
		'WA'  => __( 'Western Australia', 'woocommerce' ),
	),
	'AX' => array(),
	'BD' => array( // Bangladeshi districts.
		'BD-05' => __( 'Bagerhat', 'woocommerce' ),
		'BD-01' => __( 'Bandarban', 'woocommerce' ),
		'BD-02' => __( 'Barguna', 'woocommerce' ),
		'BD-06' => __( 'Barishal', 'woocommerce' ),
		'BD-07' => __( 'Bhola', 'woocommerce' ),
		'BD-03' => __( 'Bogura', 'woocommerce' ),
		'BD-04' => __( 'Brahmanbaria', 'woocommerce' ),
		'BD-09' => __( 'Chandpur', 'woocommerce' ),
		'BD-10' => __( 'Chattogram', 'woocommerce' ),
		'BD-12' => __( 'Chuadanga', 'woocommerce' ),
		'BD-11' => __( "Cox's Bazar", 'woocommerce' ),
		'BD-08' => __( 'Cumilla', 'woocommerce' ),
		'BD-13' => __( 'Dhaka', 'woocommerce' ),
		'BD-14' => __( 'Dinajpur', 'woocommerce' ),
		'BD-15' => __( 'Faridpur ', 'woocommerce' ),
		'BD-16' => __( 'Feni', 'woocommerce' ),
		'BD-19' => __( 'Gaibandha', 'woocommerce' ),
		'BD-18' => __( 'Gazipur', 'woocommerce' ),
		'BD-17' => __( 'Gopalganj', 'woocommerce' ),
		'BD-20' => __( 'Habiganj', 'woocommerce' ),
		'BD-21' => __( 'Jamalpur', 'woocommerce' ),
		'BD-22' => __( 'Jashore', 'woocommerce' ),
		'BD-25' => __( 'Jhalokati', 'woocommerce' ),
		'BD-23' => __( 'Jhenaidah', 'woocommerce' ),
		'BD-24' => __( 'Joypurhat', 'woocommerce' ),
		'BD-29' => __( 'Khagrachhari', 'woocommerce' ),
		'BD-27' => __( 'Khulna', 'woocommerce' ),
		'BD-26' => __( 'Kishoreganj', 'woocommerce' ),
		'BD-28' => __( 'Kurigram', 'woocommerce' ),
		'BD-30' => __( 'Kushtia', 'woocommerce' ),
		'BD-31' => __( 'Lakshmipur', 'woocommerce' ),
		'BD-32' => __( 'Lalmonirhat', 'woocommerce' ),
		'BD-36' => __( 'Madaripur', 'woocommerce' ),
		'BD-37' => __( 'Magura', 'woocommerce' ),
		'BD-33' => __( 'Manikganj ', 'woocommerce' ),
		'BD-39' => __( 'Meherpur', 'woocommerce' ),
		'BD-38' => __( 'Moulvibazar', 'woocommerce' ),
		'BD-35' => __( 'Munshiganj', 'woocommerce' ),
		'BD-34' => __( 'Mymensingh', 'woocommerce' ),
		'BD-48' => __( 'Naogaon', 'woocommerce' ),
		'BD-43' => __( 'Narail', 'woocommerce' ),
		'BD-40' => __( 'Narayanganj', 'woocommerce' ),
		'BD-42' => __( 'Narsingdi', 'woocommerce' ),
		'BD-44' => __( 'Natore', 'woocommerce' ),
		'BD-45' => __( 'Nawabganj', 'woocommerce' ),
		'BD-41' => __( 'Netrakona', 'woocommerce' ),
		'BD-46' => __( 'Nilphamari', 'woocommerce' ),
		'BD-47' => __( 'Noakhali', 'woocommerce' ),
		'BD-49' => __( 'Pabna', 'woocommerce' ),
		'BD-52' => __( 'Panchagarh', 'woocommerce' ),
		'BD-51' => __( 'Patuakhali', 'woocommerce' ),
		'BD-50' => __( 'Pirojpur', 'woocommerce' ),
		'BD-53' => __( 'Rajbari', 'woocommerce' ),
		'BD-54' => __( 'Rajshahi', 'woocommerce' ),
		'BD-56' => __( 'Rangamati', 'woocommerce' ),
		'BD-55' => __( 'Rangpur', 'woocommerce' ),
		'BD-58' => __( 'Satkhira', 'woocommerce' ),
		'BD-62' => __( 'Shariatpur', 'woocommerce' ),
		'BD-57' => __( 'Sherpur', 'woocommerce' ),
		'BD-59' => __( 'Sirajganj', 'woocommerce' ),
		'BD-61' => __( 'Sunamganj', 'woocommerce' ),
		'BD-60' => __( 'Sylhet', 'woocommerce' ),
		'BD-63' => __( 'Tangail', 'woocommerce' ),
		'BD-64' => __( 'Thakurgaon', 'woocommerce' ),
	),
	'BE' => array(),
	'BG' => array( // Bulgarian states.
		'BG-01' => __( 'Blagoevgrad', 'woocommerce' ),
		'BG-02' => __( 'Burgas', 'woocommerce' ),
		'BG-08' => __( 'Dobrich', 'woocommerce' ),
		'BG-07' => __( 'Gabrovo', 'woocommerce' ),
		'BG-26' => __( 'Haskovo', 'woocommerce' ),
		'BG-09' => __( 'Kardzhali', 'woocommerce' ),
		'BG-10' => __( 'Kyustendil', 'woocommerce' ),
		'BG-11' => __( 'Lovech', 'woocommerce' ),
		'BG-12' => __( 'Montana', 'woocommerce' ),
		'BG-13' => __( 'Pazardzhik', 'woocommerce' ),
		'BG-14' => __( 'Pernik', 'woocommerce' ),
		'BG-15' => __( 'Pleven', 'woocommerce' ),
		'BG-16' => __( 'Plovdiv', 'woocommerce' ),
		'BG-17' => __( 'Razgrad', 'woocommerce' ),
		'BG-18' => __( 'Ruse', 'woocommerce' ),
		'BG-27' => __( 'Shumen', 'woocommerce' ),
		'BG-19' => __( 'Silistra', 'woocommerce' ),
		'BG-20' => __( 'Sliven', 'woocommerce' ),
		'BG-21' => __( 'Smolyan', 'woocommerce' ),
		'BG-23' => __( 'Sofia', 'woocommerce' ),
		'BG-22' => __( 'Sofia-Grad', 'woocommerce' ),
		'BG-24' => __( 'Stara Zagora', 'woocommerce' ),
		'BG-25' => __( 'Targovishte', 'woocommerce' ),
		'BG-03' => __( 'Varna', 'woocommerce' ),
		'BG-04' => __( 'Veliko Tarnovo', 'woocommerce' ),
		'BG-05' => __( 'Vidin', 'woocommerce' ),
		'BG-06' => __( 'Vratsa', 'woocommerce' ),
		'BG-28' => __( 'Yambol', 'woocommerce' ),
	),
	'BH' => array(),
	'BI' => array(),
	'BJ' => array( // Beninese states.
		'AL' => __( 'Alibori', 'woocommerce' ),
		'AK' => __( 'Atakora', 'woocommerce' ),
		'AQ' => __( 'Atlantique', 'woocommerce' ),
		'BO' => __( 'Borgou', 'woocommerce' ),
		'CO' => __( 'Collines', 'woocommerce' ),
		'KO' => __( 'Kouffo', 'woocommerce' ),
		'DO' => __( 'Donga', 'woocommerce' ),
		'LI' => __( 'Littoral', 'woocommerce' ),
		'MO' => __( 'Mono', 'woocommerce' ),
		'OU' => __( 'Ouémé', 'woocommerce' ),
		'PL' => __( 'Plateau', 'woocommerce' ),
		'ZO' => __( 'Zou', 'woocommerce' ),
	),
	'BO' => array( // Bolivian states.
		'BO-B' => __( 'Beni', 'woocommerce' ),
		'BO-H' => __( 'Chuquisaca', 'woocommerce' ),
		'BO-C' => __( 'Cochabamba', 'woocommerce' ),
		'BO-L' => __( 'La Paz', 'woocommerce' ),
		'BO-O' => __( 'Oruro', 'woocommerce' ),
		'BO-N' => __( 'Pando', 'woocommerce' ),
		'BO-P' => __( 'Potosí', 'woocommerce' ),
		'BO-S' => __( 'Santa Cruz', 'woocommerce' ),
		'BO-T' => __( 'Tarija', 'woocommerce' ),
	),
	'BR' => array( // Brazilian states.
		'AC' => __( 'Acre', 'woocommerce' ),
		'AL' => __( 'Alagoas', 'woocommerce' ),
		'AP' => __( 'Amapá', 'woocommerce' ),
		'AM' => __( 'Amazonas', 'woocommerce' ),
		'BA' => __( 'Bahia', 'woocommerce' ),
		'CE' => __( 'Ceará', 'woocommerce' ),
		'DF' => __( 'Distrito Federal', 'woocommerce' ),
		'ES' => __( 'Espírito Santo', 'woocommerce' ),
		'GO' => __( 'Goiás', 'woocommerce' ),
		'MA' => __( 'Maranhão', 'woocommerce' ),
		'MT' => __( 'Mato Grosso', 'woocommerce' ),
		'MS' => __( 'Mato Grosso do Sul', 'woocommerce' ),
		'MG' => __( 'Minas Gerais', 'woocommerce' ),
		'PA' => __( 'Pará', 'woocommerce' ),
		'PB' => __( 'Paraíba', 'woocommerce' ),
		'PR' => __( 'Paraná', 'woocommerce' ),
		'PE' => __( 'Pernambuco', 'woocommerce' ),
		'PI' => __( 'Piauí', 'woocommerce' ),
		'RJ' => __( 'Rio de Janeiro', 'woocommerce' ),
		'RN' => __( 'Rio Grande do Norte', 'woocommerce' ),
		'RS' => __( 'Rio Grande do Sul', 'woocommerce' ),
		'RO' => __( 'Rondônia', 'woocommerce' ),
		'RR' => __( 'Roraima', 'woocommerce' ),
		'SC' => __( 'Santa Catarina', 'woocommerce' ),
		'SP' => __( 'São Paulo', 'woocommerce' ),
		'SE' => __( 'Sergipe', 'woocommerce' ),
		'TO' => __( 'Tocantins', 'woocommerce' ),
	),
	'CA' => array( // Canadian states.
		'AB' => __( 'Alberta', 'woocommerce' ),
		'BC' => __( 'British Columbia', 'woocommerce' ),
		'MB' => __( 'Manitoba', 'woocommerce' ),
		'NB' => __( 'New Brunswick', 'woocommerce' ),
		'NL' => __( 'Newfoundland and Labrador', 'woocommerce' ),
		'NT' => __( 'Northwest Territories', 'woocommerce' ),
		'NS' => __( 'Nova Scotia', 'woocommerce' ),
		'NU' => __( 'Nunavut', 'woocommerce' ),
		'ON' => __( 'Ontario', 'woocommerce' ),
		'PE' => __( 'Prince Edward Island', 'woocommerce' ),
		'QC' => __( 'Quebec', 'woocommerce' ),
		'SK' => __( 'Saskatchewan', 'woocommerce' ),
		'YT' => __( 'Yukon Territory', 'woocommerce' ),
	),
	'CH' => array( // Swiss cantons.
		'AG' => __( 'Aargau', 'woocommerce' ),
		'AR' => __( 'Appenzell Ausserrhoden', 'woocommerce' ),
		'AI' => __( 'Appenzell Innerrhoden', 'woocommerce' ),
		'BL' => __( 'Basel-Landschaft', 'woocommerce' ),
		'BS' => __( 'Basel-Stadt', 'woocommerce' ),
		'BE' => __( 'Bern', 'woocommerce' ),
		'FR' => __( 'Fribourg', 'woocommerce' ),
		'GE' => __( 'Geneva', 'woocommerce' ),
		'GL' => __( 'Glarus', 'woocommerce' ),
		'GR' => __( 'Graubünden', 'woocommerce' ),
		'JU' => __( 'Jura', 'woocommerce' ),
		'LU' => __( 'Luzern', 'woocommerce' ),
		'NE' => __( 'Neuchâtel', 'woocommerce' ),
		'NW' => __( 'Nidwalden', 'woocommerce' ),
		'OW' => __( 'Obwalden', 'woocommerce' ),
		'SH' => __( 'Schaffhausen', 'woocommerce' ),
		'SZ' => __( 'Schwyz', 'woocommerce' ),
		'SO' => __( 'Solothurn', 'woocommerce' ),
		'SG' => __( 'St. Gallen', 'woocommerce' ),
		'TG' => __( 'Thurgau', 'woocommerce' ),
		'TI' => __( 'Ticino', 'woocommerce' ),
		'UR' => __( 'Uri', 'woocommerce' ),
		'VS' => __( 'Valais', 'woocommerce' ),
		'VD' => __( 'Vaud', 'woocommerce' ),
		'ZG' => __( 'Zug', 'woocommerce' ),
		'ZH' => __( 'Zürich', 'woocommerce' ),
	),
	'CL' => array( // Chilean states.
		'CL-AI' => __( 'Aisén del General Carlos Ibañez del Campo', 'woocommerce' ),
		'CL-AN' => __( 'Antofagasta', 'woocommerce' ),
		'CL-AP' => __( 'Arica y Parinacota', 'woocommerce' ),
		'CL-AR' => __( 'La Araucanía', 'woocommerce' ),
		'CL-AT' => __( 'Atacama', 'woocommerce' ),
		'CL-BI' => __( 'Biobío', 'woocommerce' ),
		'CL-CO' => __( 'Coquimbo', 'woocommerce' ),
		'CL-LI' => __( 'Libertador General Bernardo O\'Higgins', 'woocommerce' ),
		'CL-LL' => __( 'Los Lagos', 'woocommerce' ),
		'CL-LR' => __( 'Los Ríos', 'woocommerce' ),
		'CL-MA' => __( 'Magallanes', 'woocommerce' ),
		'CL-ML' => __( 'Maule', 'woocommerce' ),
		'CL-NB' => __( 'Ñuble', 'woocommerce' ),
		'CL-RM' => __( 'Región Metropolitana de Santiago', 'woocommerce' ),
		'CL-TA' => __( 'Tarapacá', 'woocommerce' ),
		'CL-VS' => __( 'Valparaíso', 'woocommerce' ),
	),
	'CN' => array( // Chinese states.
		'CN1'  => __( 'Yunnan / 云南', 'woocommerce' ),
		'CN2'  => __( 'Beijing / 北京', 'woocommerce' ),
		'CN3'  => __( 'Tianjin / 天津', 'woocommerce' ),
		'CN4'  => __( 'Hebei / 河北', 'woocommerce' ),
		'CN5'  => __( 'Shanxi / 山西', 'woocommerce' ),
		'CN6'  => __( 'Inner Mongolia / 內蒙古', 'woocommerce' ),
		'CN7'  => __( 'Liaoning / 辽宁', 'woocommerce' ),
		'CN8'  => __( 'Jilin / 吉林', 'woocommerce' ),
		'CN9'  => __( 'Heilongjiang / 黑龙江', 'woocommerce' ),
		'CN10' => __( 'Shanghai / 上海', 'woocommerce' ),
		'CN11' => __( 'Jiangsu / 江苏', 'woocommerce' ),
		'CN12' => __( 'Zhejiang / 浙江', 'woocommerce' ),
		'CN13' => __( 'Anhui / 安徽', 'woocommerce' ),
		'CN14' => __( 'Fujian / 福建', 'woocommerce' ),
		'CN15' => __( 'Jiangxi / 江西', 'woocommerce' ),
		'CN16' => __( 'Shandong / 山东', 'woocommerce' ),
		'CN17' => __( 'Henan / 河南', 'woocommerce' ),
		'CN18' => __( 'Hubei / 湖北', 'woocommerce' ),
		'CN19' => __( 'Hunan / 湖南', 'woocommerce' ),
		'CN20' => __( 'Guangdong / 广东', 'woocommerce' ),
		'CN21' => __( 'Guangxi Zhuang / 广西壮族', 'woocommerce' ),
		'CN22' => __( 'Hainan / 海南', 'woocommerce' ),
		'CN23' => __( 'Chongqing / 重庆', 'woocommerce' ),
		'CN24' => __( 'Sichuan / 四川', 'woocommerce' ),
		'CN25' => __( 'Guizhou / 贵州', 'woocommerce' ),
		'CN26' => __( 'Shaanxi / 陕西', 'woocommerce' ),
		'CN27' => __( 'Gansu / 甘肃', 'woocommerce' ),
		'CN28' => __( 'Qinghai / 青海', 'woocommerce' ),
		'CN29' => __( 'Ningxia Hui / 宁夏', 'woocommerce' ),
		'CN30' => __( 'Macao / 澳门', 'woocommerce' ),
		'CN31' => __( 'Tibet / 西藏', 'woocommerce' ),
		'CN32' => __( 'Xinjiang / 新疆', 'woocommerce' ),
	),
	'CO' => array( // Colombian states.
		'CO-AMA' => __( 'Amazonas', 'woocommerce' ),
		'CO-ANT' => __( 'Antioquia', 'woocommerce' ),
		'CO-ARA' => __( 'Arauca', 'woocommerce' ),
		'CO-ATL' => __( 'Atlántico', 'woocommerce' ),
		'CO-BOL' => __( 'Bolívar', 'woocommerce' ),
		'CO-BOY' => __( 'Boyacá', 'woocommerce' ),
		'CO-CAL' => __( 'Caldas', 'woocommerce' ),
		'CO-CAQ' => __( 'Caquetá', 'woocommerce' ),
		'CO-CAS' => __( 'Casanare', 'woocommerce' ),
		'CO-CAU' => __( 'Cauca', 'woocommerce' ),
		'CO-CES' => __( 'Cesar', 'woocommerce' ),
		'CO-CHO' => __( 'Chocó', 'woocommerce' ),
		'CO-COR' => __( 'Córdoba', 'woocommerce' ),
		'CO-CUN' => __( 'Cundinamarca', 'woocommerce' ),
		'CO-DC' => __( 'Capital District', 'woocommerce' ),
		'CO-GUA' => __( 'Guainía', 'woocommerce' ),
		'CO-GUV' => __( 'Guaviare', 'woocommerce' ),
		'CO-HUI' => __( 'Huila', 'woocommerce' ),
		'CO-LAG' => __( 'La Guajira', 'woocommerce' ),
		'CO-MAG' => __( 'Magdalena', 'woocommerce' ),
		'CO-MET' => __( 'Meta', 'woocommerce' ),
		'CO-NAR' => __( 'Nariño', 'woocommerce' ),
		'CO-NSA' => __( 'Norte de Santander', 'woocommerce' ),
		'CO-PUT' => __( 'Putumayo', 'woocommerce' ),
		'CO-QUI' => __( 'Quindío', 'woocommerce' ),
		'CO-RIS' => __( 'Risaralda', 'woocommerce' ),
		'CO-SAN' => __( 'Santander', 'woocommerce' ),
		'CO-SAP' => __( 'San Andrés & Providencia', 'woocommerce' ),
		'CO-SUC' => __( 'Sucre', 'woocommerce' ),
		'CO-TOL' => __( 'Tolima', 'woocommerce' ),
		'CO-VAC' => __( 'Valle del Cauca', 'woocommerce' ),
		'CO-VAU' => __( 'Vaupés', 'woocommerce' ),
		'CO-VID' => __( 'Vichada', 'woocommerce' ),
	),
	'CR' => array( // Costa Rican states.
		'CR-A' => __( 'Alajuela', 'woocommerce' ),
		'CR-C' => __( 'Cartago', 'woocommerce' ),
		'CR-G' => __( 'Guanacaste', 'woocommerce' ),
		'CR-H' => __( 'Heredia', 'woocommerce' ),
		'CR-L' => __( 'Limón', 'woocommerce' ),
		'CR-P' => __( 'Puntarenas', 'woocommerce' ),
		'CR-SJ' => __( 'San José', 'woocommerce' ),
	),
	'CZ' => array(),
	'DE' => array( // German states.
		'DE-BW' => __( 'Baden-Württemberg', 'woocommerce' ),
		'DE-BY' => __( 'Bavaria', 'woocommerce' ),
		'DE-BE' => __( 'Berlin', 'woocommerce' ),
		'DE-BB' => __( 'Brandenburg', 'woocommerce' ),
		'DE-HB' => __( 'Bremen', 'woocommerce' ),
		'DE-HH' => __( 'Hamburg', 'woocommerce' ),
		'DE-HE' => __( 'Hesse', 'woocommerce' ),
		'DE-MV' => __( 'Mecklenburg-Vorpommern', 'woocommerce' ),
		'DE-NI' => __( 'Lower Saxony', 'woocommerce' ),
		'DE-NW' => __( 'North Rhine-Westphalia', 'woocommerce' ),
		'DE-RP' => __( 'Rhineland-Palatinate', 'woocommerce' ),
		'DE-SL' => __( 'Saarland', 'woocommerce' ),
		'DE-SN' => __( 'Saxony', 'woocommerce' ),
		'DE-ST' => __( 'Saxony-Anhalt', 'woocommerce' ),
		'DE-SH' => __( 'Schleswig-Holstein', 'woocommerce' ),
		'DE-TH' => __( 'Thuringia', 'woocommerce' ),
	),
	'DK' => array(),
	'DO' => array( // Dominican states.
		'DO-01' => __( 'Distrito Nacional', 'woocommerce' ),
		'DO-02' => __( 'Azua', 'woocommerce' ),
		'DO-03' => __( 'Baoruco', 'woocommerce' ),
		'DO-04' => __( 'Barahona', 'woocommerce' ),
		'DO-33' => __( 'Cibao Nordeste', 'woocommerce' ),
		'DO-34' => __( 'Cibao Noroeste', 'woocommerce' ),
		'DO-35' => __( 'Cibao Norte', 'woocommerce' ),
		'DO-36' => __( 'Cibao Sur', 'woocommerce' ),
		'DO-05' => __( 'Dajabón', 'woocommerce' ),
		'DO-06' => __( 'Duarte', 'woocommerce' ),
		'DO-08' => __( 'El Seibo', 'woocommerce' ),
		'DO-37' => __( 'El Valle', 'woocommerce' ),
		'DO-07' => __( 'Elías Piña', 'woocommerce' ),
		'DO-38' => __( 'Enriquillo', 'woocommerce' ),		
		'DO-09' => __( 'Espaillat', 'woocommerce' ),
		'DO-30' => __( 'Hato Mayor', 'woocommerce' ),
		'DO-19' => __( 'Hermanas Mirabal', 'woocommerce' ),
		'DO-39' => __( 'Higüamo', 'woocommerce' ),
		'DO-10' => __( 'Independencia', 'woocommerce' ),
		'DO-11' => __( 'La Altagracia', 'woocommerce' ),
		'DO-12' => __( 'La Romana', 'woocommerce' ),
		'DO-13' => __( 'La Vega', 'woocommerce' ),
		'DO-14' => __( 'María Trinidad Sánchez', 'woocommerce' ),
		'DO-28' => __( 'Monseñor Nouel', 'woocommerce' ),
		'DO-15' => __( 'Monte Cristi', 'woocommerce' ),
		'DO-29' => __( 'Monte Plata', 'woocommerce' ),
		'DO-40' => __( 'Ozama', 'woocommerce' ),
		'DO-16' => __( 'Pedernales', 'woocommerce' ),
		'DO-17' => __( 'Peravia', 'woocommerce' ),
		'DO-18' => __( 'Puerto Plata', 'woocommerce' ),
		'DO-20' => __( 'Samaná', 'woocommerce' ),
		'DO-21' => __( 'San Cristóbal', 'woocommerce' ),
		'DO-31' => __( 'San José de Ocoa', 'woocommerce' ),
		'DO-22' => __( 'San Juan', 'woocommerce' ),
		'DO-23' => __( 'San Pedro de Macorís', 'woocommerce' ),
		'DO-24' => __( 'Sánchez Ramírez', 'woocommerce' ),
		'DO-25' => __( 'Santiago', 'woocommerce' ),
		'DO-26' => __( 'Santiago Rodríguez', 'woocommerce' ),
		'DO-32' => __( 'Santo Domingo', 'woocommerce' ),
		'DO-41' => __( 'Valdesia', 'woocommerce' ),
		'DO-27' => __( 'Valverde', 'woocommerce' ),
		'DO-42' => __( 'Yuma', 'woocommerce' ),
	),
	'DZ' => array( // Algerian states.
		'DZ-01' => __( 'Adrar', 'woocommerce' ),
		'DZ-02' => __( 'Chlef', 'woocommerce' ),
		'DZ-03' => __( 'Laghouat', 'woocommerce' ),
		'DZ-04' => __( 'Oum El Bouaghi', 'woocommerce' ),
		'DZ-05' => __( 'Batna', 'woocommerce' ),
		'DZ-06' => __( 'Béjaïa', 'woocommerce' ),
		'DZ-07' => __( 'Biskra', 'woocommerce' ),
		'DZ-08' => __( 'Béchar', 'woocommerce' ),
		'DZ-09' => __( 'Blida', 'woocommerce' ),
		'DZ-10' => __( 'Bouira', 'woocommerce' ),
		'DZ-11' => __( 'Tamanghasset', 'woocommerce' ),
		'DZ-12' => __( 'Tébessa', 'woocommerce' ),
		'DZ-13' => __( 'Tlemcen', 'woocommerce' ),
		'DZ-14' => __( 'Tiaret', 'woocommerce' ),
		'DZ-15' => __( 'Tizi Ouzou', 'woocommerce' ),
		'DZ-16' => __( 'Algiers', 'woocommerce' ),
		'DZ-17' => __( 'Djelfa', 'woocommerce' ),
		'DZ-18' => __( 'Jijel', 'woocommerce' ),
		'DZ-19' => __( 'Sétif', 'woocommerce' ),
		'DZ-20' => __( 'Saïda', 'woocommerce' ),
		'DZ-21' => __( 'Skikda', 'woocommerce' ),
		'DZ-22' => __( 'Sidi Bel Abbès', 'woocommerce' ),
		'DZ-23' => __( 'Annaba', 'woocommerce' ),
		'DZ-24' => __( 'Guelma', 'woocommerce' ),
		'DZ-25' => __( 'Constantine', 'woocommerce' ),
		'DZ-26' => __( 'Médéa', 'woocommerce' ),
		'DZ-27' => __( 'Mostaganem', 'woocommerce' ),
		'DZ-28' => __( 'M’Sila', 'woocommerce' ),
		'DZ-29' => __( 'Mascara', 'woocommerce' ),
		'DZ-30' => __( 'Ouargla', 'woocommerce' ),
		'DZ-31' => __( 'Oran', 'woocommerce' ),
		'DZ-32' => __( 'El Bayadh', 'woocommerce' ),
		'DZ-33' => __( 'Illizi', 'woocommerce' ),
		'DZ-34' => __( 'Bordj Bou Arréridj', 'woocommerce' ),
		'DZ-35' => __( 'Boumerdès', 'woocommerce' ),
		'DZ-36' => __( 'El Tarf', 'woocommerce' ),
		'DZ-37' => __( 'Tindouf', 'woocommerce' ),
		'DZ-38' => __( 'Tissemsilt', 'woocommerce' ),
		'DZ-39' => __( 'El Oued', 'woocommerce' ),
		'DZ-40' => __( 'Khenchela', 'woocommerce' ),
		'DZ-41' => __( 'Souk Ahras', 'woocommerce' ),
		'DZ-42' => __( 'Tipasa', 'woocommerce' ),
		'DZ-43' => __( 'Mila', 'woocommerce' ),
		'DZ-44' => __( 'Aïn Defla', 'woocommerce' ),
		'DZ-45' => __( 'Naama', 'woocommerce' ),
		'DZ-46' => __( 'Aïn Témouchent', 'woocommerce' ),
		'DZ-47' => __( 'Ghardaïa', 'woocommerce' ),
		'DZ-48' => __( 'Relizane', 'woocommerce' ),
	),
	'EE' => array(),
	'EC' => array( // Ecuadorian states.
		'EC-A' => __( 'Azuay', 'woocommerce' ),
		'EC-B' => __( 'Bolívar', 'woocommerce' ),
		'EC-F' => __( 'Cañar', 'woocommerce' ),
		'EC-C' => __( 'Carchi', 'woocommerce' ),
		'EC-H' => __( 'Chimborazo', 'woocommerce' ),
		'EC-X' => __( 'Cotopaxi', 'woocommerce' ),
		'EC-O' => __( 'El Oro', 'woocommerce' ),
		'EC-E' => __( 'Esmeraldas', 'woocommerce' ),
		'EC-W' => __( 'Galápagos', 'woocommerce' ),
		'EC-G' => __( 'Guayas', 'woocommerce' ),
		'EC-I' => __( 'Imbabura', 'woocommerce' ),
		'EC-L' => __( 'Loja', 'woocommerce' ),
		'EC-R' => __( 'Los Ríos', 'woocommerce' ),
		'EC-M' => __( 'Manabí', 'woocommerce' ),
		'EC-S' => __( 'Morona-Santiago', 'woocommerce' ),
		'EC-N' => __( 'Napo', 'woocommerce' ),
		'EC-D' => __( 'Orellana', 'woocommerce' ),
		'EC-Y' => __( 'Pastaza', 'woocommerce' ),
		'EC-P' => __( 'Pichincha', 'woocommerce' ),
		'EC-SE' => __( 'Santa Elena', 'woocommerce' ),
		'EC-SD' => __( 'Santo Domingo de los Tsáchilas', 'woocommerce' ),
		'EC-U' => __( 'Sucumbíos', 'woocommerce' ),
		'EC-T' => __( 'Tungurahua', 'woocommerce' ),
		'EC-Z' => __( 'Zamora-Chinchipe', 'woocommerce' ),
	),
	'EG' => array( // Egyptian states.
		'EGALX' => __( 'Alexandria', 'woocommerce' ),
		'EGASN' => __( 'Aswan', 'woocommerce' ),
		'EGAST' => __( 'Asyut', 'woocommerce' ),
		'EGBA'  => __( 'Red Sea', 'woocommerce' ),
		'EGBH'  => __( 'Beheira', 'woocommerce' ),
		'EGBNS' => __( 'Beni Suef', 'woocommerce' ),
		'EGC'   => __( 'Cairo', 'woocommerce' ),
		'EGDK'  => __( 'Dakahlia', 'woocommerce' ),
		'EGDT'  => __( 'Damietta', 'woocommerce' ),
		'EGFYM' => __( 'Faiyum', 'woocommerce' ),
		'EGGH'  => __( 'Gharbia', 'woocommerce' ),
		'EGGZ'  => __( 'Giza', 'woocommerce' ),
		'EGIS'  => __( 'Ismailia', 'woocommerce' ),
		'EGJS'  => __( 'South Sinai', 'woocommerce' ),
		'EGKB'  => __( 'Qalyubia', 'woocommerce' ),
		'EGKFS' => __( 'Kafr el-Sheikh', 'woocommerce' ),
		'EGKN'  => __( 'Qena', 'woocommerce' ),
		'EGLX'  => __( 'Luxor', 'woocommerce' ),
		'EGMN'  => __( 'Minya', 'woocommerce' ),
		'EGMNF' => __( 'Monufia', 'woocommerce' ),
		'EGMT'  => __( 'Matrouh', 'woocommerce' ),
		'EGPTS' => __( 'Port Said', 'woocommerce' ),
		'EGSHG' => __( 'Sohag', 'woocommerce' ),
		'EGSHR' => __( 'Al Sharqia', 'woocommerce' ),
		'EGSIN' => __( 'North Sinai', 'woocommerce' ),
		'EGSUZ' => __( 'Suez', 'woocommerce' ),
		'EGWAD' => __( 'New Valley', 'woocommerce' ),
	),
	'ES' => array( // Spanish states.
		'C'  => __( 'A Coruña', 'woocommerce' ),
		'VI' => __( 'Araba/Álava', 'woocommerce' ),
		'AB' => __( 'Albacete', 'woocommerce' ),
		'A'  => __( 'Alicante', 'woocommerce' ),
		'AL' => __( 'Almería', 'woocommerce' ),
		'O'  => __( 'Asturias', 'woocommerce' ),
		'AV' => __( 'Ávila', 'woocommerce' ),
		'BA' => __( 'Badajoz', 'woocommerce' ),
		'PM' => __( 'Baleares', 'woocommerce' ),
		'B'  => __( 'Barcelona', 'woocommerce' ),
		'BU' => __( 'Burgos', 'woocommerce' ),
		'CC' => __( 'Cáceres', 'woocommerce' ),
		'CA' => __( 'Cádiz', 'woocommerce' ),
		'S'  => __( 'Cantabria', 'woocommerce' ),
		'CS' => __( 'Castellón', 'woocommerce' ),
		'CE' => __( 'Ceuta', 'woocommerce' ),
		'CR' => __( 'Ciudad Real', 'woocommerce' ),
		'CO' => __( 'Córdoba', 'woocommerce' ),
		'CU' => __( 'Cuenca', 'woocommerce' ),
		'GI' => __( 'Girona', 'woocommerce' ),
		'GR' => __( 'Granada', 'woocommerce' ),
		'GU' => __( 'Guadalajara', 'woocommerce' ),
		'SS' => __( 'Gipuzkoa', 'woocommerce' ),
		'H'  => __( 'Huelva', 'woocommerce' ),
		'HU' => __( 'Huesca', 'woocommerce' ),
		'J'  => __( 'Jaén', 'woocommerce' ),
		'LO' => __( 'La Rioja', 'woocommerce' ),
		'GC' => __( 'Las Palmas', 'woocommerce' ),
		'LE' => __( 'León', 'woocommerce' ),
		'L'  => __( 'Lleida', 'woocommerce' ),
		'LU' => __( 'Lugo', 'woocommerce' ),
		'M'  => __( 'Madrid', 'woocommerce' ),
		'MA' => __( 'Málaga', 'woocommerce' ),
		'ML' => __( 'Melilla', 'woocommerce' ),
		'MU' => __( 'Murcia', 'woocommerce' ),
		'NA' => __( 'Navarra', 'woocommerce' ),
		'OR' => __( 'Ourense', 'woocommerce' ),
		'P'  => __( 'Palencia', 'woocommerce' ),
		'PO' => __( 'Pontevedra', 'woocommerce' ),
		'SA' => __( 'Salamanca', 'woocommerce' ),
		'TF' => __( 'Santa Cruz de Tenerife', 'woocommerce' ),
		'SG' => __( 'Segovia', 'woocommerce' ),
		'SE' => __( 'Sevilla', 'woocommerce' ),
		'SO' => __( 'Soria', 'woocommerce' ),
		'T'  => __( 'Tarragona', 'woocommerce' ),
		'TE' => __( 'Teruel', 'woocommerce' ),
		'TO' => __( 'Toledo', 'woocommerce' ),
		'V'  => __( 'Valencia', 'woocommerce' ),
		'VA' => __( 'Valladolid', 'woocommerce' ),
		'BI' => __( 'Biscay', 'woocommerce' ),
		'ZA' => __( 'Zamora', 'woocommerce' ),
		'Z'  => __( 'Zaragoza', 'woocommerce' ),
	),
	'FI' => array(),
	'FR' => array(),
	'GF' => array(),
	'GH' => array( // Ghanaian regions.
		'AF' => __( 'Ahafo', 'woocommerce' ),
		'AH' => __( 'Ashanti', 'woocommerce' ),
		'BA' => __( 'Brong-Ahafo', 'woocommerce' ),
		'BO' => __( 'Bono', 'woocommerce' ),
		'BE' => __( 'Bono East', 'woocommerce' ),
		'CP' => __( 'Central', 'woocommerce' ),
		'EP' => __( 'Eastern', 'woocommerce' ),
		'AA' => __( 'Greater Accra', 'woocommerce' ),
		'NE' => __( 'North East', 'woocommerce' ),
		'NP' => __( 'Northern', 'woocommerce' ),
		'OT' => __( 'Oti', 'woocommerce' ),
		'SV' => __( 'Savannah', 'woocommerce' ),
		'UE' => __( 'Upper East', 'woocommerce' ),
		'UW' => __( 'Upper West', 'woocommerce' ),
		'TV' => __( 'Volta', 'woocommerce' ),
		'WP' => __( 'Western', 'woocommerce' ),
		'WN' => __( 'Western North', 'woocommerce' ),
	),
	'GP' => array(),
	'GR' => array( // Greek regions.
		'I' => __( 'Attica', 'woocommerce' ),
		'A' => __( 'East Macedonia and Thrace', 'woocommerce' ),
		'B' => __( 'Central Macedonia', 'woocommerce' ),
		'C' => __( 'West Macedonia', 'woocommerce' ),
		'D' => __( 'Epirus', 'woocommerce' ),
		'E' => __( 'Thessaly', 'woocommerce' ),
		'F' => __( 'Ionian Islands', 'woocommerce' ),
		'G' => __( 'West Greece', 'woocommerce' ),
		'H' => __( 'Central Greece', 'woocommerce' ),
		'J' => __( 'Peloponnese', 'woocommerce' ),
		'K' => __( 'North Aegean', 'woocommerce' ),
		'L' => __( 'South Aegean', 'woocommerce' ),
		'M' => __( 'Crete', 'woocommerce' ),
	),
	'GT' => array( // Guatemalan states.
		'GT-AV' => __( 'Alta Verapaz', 'woocommerce' ),
		'GT-BV' => __( 'Baja Verapaz', 'woocommerce' ),
		'GT-CM' => __( 'Chimaltenango', 'woocommerce' ),
		'GT-CQ' => __( 'Chiquimula', 'woocommerce' ),
		'GT-PR' => __( 'El Progreso', 'woocommerce' ),
		'GT-ES' => __( 'Escuintla', 'woocommerce' ),
		'GT-GU' => __( 'Guatemala', 'woocommerce' ),
		'GT-HU' => __( 'Huehuetenango', 'woocommerce' ),
		'GT-IZ' => __( 'Izabal', 'woocommerce' ),
		'GT-JA' => __( 'Jalapa', 'woocommerce' ),
		'GT-JU' => __( 'Jutiapa', 'woocommerce' ),
		'GT-PE' => __( 'Petén', 'woocommerce' ),
		'GT-QZ' => __( 'Quetzaltenango', 'woocommerce' ),
		'GT-QC' => __( 'Quiché', 'woocommerce' ),
		'GT-RE' => __( 'Retalhuleu', 'woocommerce' ),
		'GT-SA' => __( 'Sacatepéquez', 'woocommerce' ),
		'GT-SM' => __( 'San Marcos', 'woocommerce' ),
		'GT-SR' => __( 'Santa Rosa', 'woocommerce' ),
		'GT-SO' => __( 'Sololá', 'woocommerce' ),
		'GT-SU' => __( 'Suchitepéquez', 'woocommerce' ),
		'GT-TO' => __( 'Totonicapán', 'woocommerce' ),
		'GT-ZA' => __( 'Zacapa', 'woocommerce' ),
	),
	'HK' => array( // Hong Kong states.
		'HONG KONG'       => __( 'Hong Kong Island', 'woocommerce' ),
		'KOWLOON'         => __( 'Kowloon', 'woocommerce' ),
		'NEW TERRITORIES' => __( 'New Territories', 'woocommerce' ),
	),
	'HN' => array( // Honduran states.
		'HN-AT' => __( 'Atlántida', 'woocommerce' ),
		'HN-IB' => __( 'Bay Islands', 'woocommerce' ),
		'HN-CH' => __( 'Choluteca', 'woocommerce' ),
		'HN-CL' => __( 'Colón', 'woocommerce' ),
		'HN-CM' => __( 'Comayagua', 'woocommerce' ),
		'HN-CP' => __( 'Copán', 'woocommerce' ),
		'HN-CR' => __( 'Cortés', 'woocommerce' ),
		'HN-EP' => __( 'El Paraíso', 'woocommerce' ),
		'HN-FM' => __( 'Francisco Morazán', 'woocommerce' ),
		'HN-GD' => __( 'Gracias a Dios', 'woocommerce' ),
		'HN-IN' => __( 'Intibucá', 'woocommerce' ),
		'HN-LE' => __( 'Lempira', 'woocommerce' ),
		'HN-LP' => __( 'La Paz', 'woocommerce' ),
		'HN-OC' => __( 'Ocotepeque', 'woocommerce' ),
		'HN-OL' => __( 'Olancho', 'woocommerce' ),
		'HN-SB' => __( 'Santa Bárbara', 'woocommerce' ),
		'HN-VA' => __( 'Valle', 'woocommerce' ),
		'HN-YO' => __( 'Yoro', 'woocommerce' ),
	),
	'HU' => array( // Hungarian states.
		'BK' => __( 'Bács-Kiskun', 'woocommerce' ),
		'BE' => __( 'Békés', 'woocommerce' ),
		'BA' => __( 'Baranya', 'woocommerce' ),
		'BZ' => __( 'Borsod-Abaúj-Zemplén', 'woocommerce' ),
		'BU' => __( 'Budapest', 'woocommerce' ),
		'CS' => __( 'Csongrád-Csanád', 'woocommerce' ),
		'FE' => __( 'Fejér', 'woocommerce' ),
		'GS' => __( 'Győr-Moson-Sopron', 'woocommerce' ),
		'HB' => __( 'Hajdú-Bihar', 'woocommerce' ),
		'HE' => __( 'Heves', 'woocommerce' ),
		'JN' => __( 'Jász-Nagykun-Szolnok', 'woocommerce' ),
		'KE' => __( 'Komárom-Esztergom', 'woocommerce' ),
		'NO' => __( 'Nógrád', 'woocommerce' ),
		'PE' => __( 'Pest', 'woocommerce' ),
		'SO' => __( 'Somogy', 'woocommerce' ),
		'SZ' => __( 'Szabolcs-Szatmár-Bereg', 'woocommerce' ),
		'TO' => __( 'Tolna', 'woocommerce' ),
		'VA' => __( 'Vas', 'woocommerce' ),
		'VE' => __( 'Veszprém', 'woocommerce' ),
		'ZA' => __( 'Zala', 'woocommerce' ),
	),
	'ID' => array( // Indonesian provinces.
		'AC' => __( 'Daerah Istimewa Aceh', 'woocommerce' ),
		'SU' => __( 'Sumatera Utara', 'woocommerce' ),
		'SB' => __( 'Sumatera Barat', 'woocommerce' ),
		'RI' => __( 'Riau', 'woocommerce' ),
		'KR' => __( 'Kepulauan Riau', 'woocommerce' ),
		'JA' => __( 'Jambi', 'woocommerce' ),
		'SS' => __( 'Sumatera Selatan', 'woocommerce' ),
		'BB' => __( 'Bangka Belitung', 'woocommerce' ),
		'BE' => __( 'Bengkulu', 'woocommerce' ),
		'LA' => __( 'Lampung', 'woocommerce' ),
		'JK' => __( 'DKI Jakarta', 'woocommerce' ),
		'JB' => __( 'Jawa Barat', 'woocommerce' ),
		'BT' => __( 'Banten', 'woocommerce' ),
		'JT' => __( 'Jawa Tengah', 'woocommerce' ),
		'JI' => __( 'Jawa Timur', 'woocommerce' ),
		'YO' => __( 'Daerah Istimewa Yogyakarta', 'woocommerce' ),
		'BA' => __( 'Bali', 'woocommerce' ),
		'NB' => __( 'Nusa Tenggara Barat', 'woocommerce' ),
		'NT' => __( 'Nusa Tenggara Timur', 'woocommerce' ),
		'KB' => __( 'Kalimantan Barat', 'woocommerce' ),
		'KT' => __( 'Kalimantan Tengah', 'woocommerce' ),
		'KI' => __( 'Kalimantan Timur', 'woocommerce' ),
		'KS' => __( 'Kalimantan Selatan', 'woocommerce' ),
		'KU' => __( 'Kalimantan Utara', 'woocommerce' ),
		'SA' => __( 'Sulawesi Utara', 'woocommerce' ),
		'ST' => __( 'Sulawesi Tengah', 'woocommerce' ),
		'SG' => __( 'Sulawesi Tenggara', 'woocommerce' ),
		'SR' => __( 'Sulawesi Barat', 'woocommerce' ),
		'SN' => __( 'Sulawesi Selatan', 'woocommerce' ),
		'GO' => __( 'Gorontalo', 'woocommerce' ),
		'MA' => __( 'Maluku', 'woocommerce' ),
		'MU' => __( 'Maluku Utara', 'woocommerce' ),
		'PA' => __( 'Papua', 'woocommerce' ),
		'PB' => __( 'Papua Barat', 'woocommerce' ),
	),
	'IE' => array( // Irish states.
		'CW' => __( 'Carlow', 'woocommerce' ),
		'CN' => __( 'Cavan', 'woocommerce' ),
		'CE' => __( 'Clare', 'woocommerce' ),
		'CO' => __( 'Cork', 'woocommerce' ),
		'DL' => __( 'Donegal', 'woocommerce' ),
		'D'  => __( 'Dublin', 'woocommerce' ),
		'G'  => __( 'Galway', 'woocommerce' ),
		'KY' => __( 'Kerry', 'woocommerce' ),
		'KE' => __( 'Kildare', 'woocommerce' ),
		'KK' => __( 'Kilkenny', 'woocommerce' ),
		'LS' => __( 'Laois', 'woocommerce' ),
		'LM' => __( 'Leitrim', 'woocommerce' ),
		'LK' => __( 'Limerick', 'woocommerce' ),
		'LD' => __( 'Longford', 'woocommerce' ),
		'LH' => __( 'Louth', 'woocommerce' ),
		'MO' => __( 'Mayo', 'woocommerce' ),
		'MH' => __( 'Meath', 'woocommerce' ),
		'MN' => __( 'Monaghan', 'woocommerce' ),
		'OY' => __( 'Offaly', 'woocommerce' ),
		'RN' => __( 'Roscommon', 'woocommerce' ),
		'SO' => __( 'Sligo', 'woocommerce' ),
		'TA' => __( 'Tipperary', 'woocommerce' ),
		'WD' => __( 'Waterford', 'woocommerce' ),
		'WH' => __( 'Westmeath', 'woocommerce' ),
		'WX' => __( 'Wexford', 'woocommerce' ),
		'WW' => __( 'Wicklow', 'woocommerce' ),
	),
	'IN' => array( // Indian states.
		'AP' => __( 'Andhra Pradesh', 'woocommerce' ),
		'AR' => __( 'Arunachal Pradesh', 'woocommerce' ),
		'AS' => __( 'Assam', 'woocommerce' ),
		'BR' => __( 'Bihar', 'woocommerce' ),
		'CT' => __( 'Chhattisgarh', 'woocommerce' ),
		'GA' => __( 'Goa', 'woocommerce' ),
		'GJ' => __( 'Gujarat', 'woocommerce' ),
		'HR' => __( 'Haryana', 'woocommerce' ),
		'HP' => __( 'Himachal Pradesh', 'woocommerce' ),
		'JK' => __( 'Jammu and Kashmir', 'woocommerce' ),
		'JH' => __( 'Jharkhand', 'woocommerce' ),
		'KA' => __( 'Karnataka', 'woocommerce' ),
		'KL' => __( 'Kerala', 'woocommerce' ),
		'LA' => __( 'Ladakh', 'woocommerce' ),
		'MP' => __( 'Madhya Pradesh', 'woocommerce' ),
		'MH' => __( 'Maharashtra', 'woocommerce' ),
		'MN' => __( 'Manipur', 'woocommerce' ),
		'ML' => __( 'Meghalaya', 'woocommerce' ),
		'MZ' => __( 'Mizoram', 'woocommerce' ),
		'NL' => __( 'Nagaland', 'woocommerce' ),
		'OR' => __( 'Odisha', 'woocommerce' ),
		'PB' => __( 'Punjab', 'woocommerce' ),
		'RJ' => __( 'Rajasthan', 'woocommerce' ),
		'SK' => __( 'Sikkim', 'woocommerce' ),
		'TN' => __( 'Tamil Nadu', 'woocommerce' ),
		'TS' => __( 'Telangana', 'woocommerce' ),
		'TR' => __( 'Tripura', 'woocommerce' ),
		'UK' => __( 'Uttarakhand', 'woocommerce' ),
		'UP' => __( 'Uttar Pradesh', 'woocommerce' ),
		'WB' => __( 'West Bengal', 'woocommerce' ),
		'AN' => __( 'Andaman and Nicobar Islands', 'woocommerce' ),
		'CH' => __( 'Chandigarh', 'woocommerce' ),
		'DN' => __( 'Dadra and Nagar Haveli', 'woocommerce' ),
		'DD' => __( 'Daman and Diu', 'woocommerce' ),
		'DL' => __( 'Delhi', 'woocommerce' ),
		'LD' => __( 'Lakshadeep', 'woocommerce' ),
		'PY' => __( 'Pondicherry (Puducherry)', 'woocommerce' ),
	),
	'IR' => array( // Irania states.
		'KHZ' => __( 'Khuzestan (خوزستان)', 'woocommerce' ),
		'THR' => __( 'Tehran (تهران)', 'woocommerce' ),
		'ILM' => __( 'Ilaam (ایلام)', 'woocommerce' ),
		'BHR' => __( 'Bushehr (بوشهر)', 'woocommerce' ),
		'ADL' => __( 'Ardabil (اردبیل)', 'woocommerce' ),
		'ESF' => __( 'Isfahan (اصفهان)', 'woocommerce' ),
		'YZD' => __( 'Yazd (یزد)', 'woocommerce' ),
		'KRH' => __( 'Kermanshah (کرمانشاه)', 'woocommerce' ),
		'KRN' => __( 'Kerman (کرمان)', 'woocommerce' ),
		'HDN' => __( 'Hamadan (همدان)', 'woocommerce' ),
		'GZN' => __( 'Ghazvin (قزوین)', 'woocommerce' ),
		'ZJN' => __( 'Zanjan (زنجان)', 'woocommerce' ),
		'LRS' => __( 'Luristan (لرستان)', 'woocommerce' ),
		'ABZ' => __( 'Alborz (البرز)', 'woocommerce' ),
		'EAZ' => __( 'East Azarbaijan (آذربایجان شرقی)', 'woocommerce' ),
		'WAZ' => __( 'West Azarbaijan (آذربایجان غربی)', 'woocommerce' ),
		'CHB' => __( 'Chaharmahal and Bakhtiari (چهارمحال و بختیاری)', 'woocommerce' ),
		'SKH' => __( 'South Khorasan (خراسان جنوبی)', 'woocommerce' ),
		'RKH' => __( 'Razavi Khorasan (خراسان رضوی)', 'woocommerce' ),
		'NKH' => __( 'North Khorasan (خراسان شمالی)', 'woocommerce' ),
		'SMN' => __( 'Semnan (سمنان)', 'woocommerce' ),
		'FRS' => __( 'Fars (فارس)', 'woocommerce' ),
		'QHM' => __( 'Qom (قم)', 'woocommerce' ),
		'KRD' => __( 'Kurdistan / کردستان)', 'woocommerce' ),
		'KBD' => __( 'Kohgiluyeh and BoyerAhmad (کهگیلوییه و بویراحمد)', 'woocommerce' ),
		'GLS' => __( 'Golestan (گلستان)', 'woocommerce' ),
		'GIL' => __( 'Gilan (گیلان)', 'woocommerce' ),
		'MZN' => __( 'Mazandaran (مازندران)', 'woocommerce' ),
		'MKZ' => __( 'Markazi (مرکزی)', 'woocommerce' ),
		'HRZ' => __( 'Hormozgan (هرمزگان)', 'woocommerce' ),
		'SBN' => __( 'Sistan and Baluchestan (سیستان و بلوچستان)', 'woocommerce' ),
	),
	'IS' => array(),
	'IT' => array( // Italian provinces.
		'AG' => __( 'Agrigento', 'woocommerce' ),
		'AL' => __( 'Alessandria', 'woocommerce' ),
		'AN' => __( 'Ancona', 'woocommerce' ),
		'AO' => __( 'Aosta', 'woocommerce' ),
		'AR' => __( 'Arezzo', 'woocommerce' ),
		'AP' => __( 'Ascoli Piceno', 'woocommerce' ),
		'AT' => __( 'Asti', 'woocommerce' ),
		'AV' => __( 'Avellino', 'woocommerce' ),
		'BA' => __( 'Bari', 'woocommerce' ),
		'BT' => __( 'Barletta-Andria-Trani', 'woocommerce' ),
		'BL' => __( 'Belluno', 'woocommerce' ),
		'BN' => __( 'Benevento', 'woocommerce' ),
		'BG' => __( 'Bergamo', 'woocommerce' ),
		'BI' => __( 'Biella', 'woocommerce' ),
		'BO' => __( 'Bologna', 'woocommerce' ),
		'BZ' => __( 'Bolzano', 'woocommerce' ),
		'BS' => __( 'Brescia', 'woocommerce' ),
		'BR' => __( 'Brindisi', 'woocommerce' ),
		'CA' => __( 'Cagliari', 'woocommerce' ),
		'CL' => __( 'Caltanissetta', 'woocommerce' ),
		'CB' => __( 'Campobasso', 'woocommerce' ),
		'CE' => __( 'Caserta', 'woocommerce' ),
		'CT' => __( 'Catania', 'woocommerce' ),
		'CZ' => __( 'Catanzaro', 'woocommerce' ),
		'CH' => __( 'Chieti', 'woocommerce' ),
		'CO' => __( 'Como', 'woocommerce' ),
		'CS' => __( 'Cosenza', 'woocommerce' ),
		'CR' => __( 'Cremona', 'woocommerce' ),
		'KR' => __( 'Crotone', 'woocommerce' ),
		'CN' => __( 'Cuneo', 'woocommerce' ),
		'EN' => __( 'Enna', 'woocommerce' ),
		'FM' => __( 'Fermo', 'woocommerce' ),
		'FE' => __( 'Ferrara', 'woocommerce' ),
		'FI' => __( 'Firenze', 'woocommerce' ),
		'FG' => __( 'Foggia', 'woocommerce' ),
		'FC' => __( 'Forlì-Cesena', 'woocommerce' ),
		'FR' => __( 'Frosinone', 'woocommerce' ),
		'GE' => __( 'Genova', 'woocommerce' ),
		'GO' => __( 'Gorizia', 'woocommerce' ),
		'GR' => __( 'Grosseto', 'woocommerce' ),
		'IM' => __( 'Imperia', 'woocommerce' ),
		'IS' => __( 'Isernia', 'woocommerce' ),
		'SP' => __( 'La Spezia', 'woocommerce' ),
		'AQ' => __( "L'Aquila", 'woocommerce' ),
		'LT' => __( 'Latina', 'woocommerce' ),
		'LE' => __( 'Lecce', 'woocommerce' ),
		'LC' => __( 'Lecco', 'woocommerce' ),
		'LI' => __( 'Livorno', 'woocommerce' ),
		'LO' => __( 'Lodi', 'woocommerce' ),
		'LU' => __( 'Lucca', 'woocommerce' ),
		'MC' => __( 'Macerata', 'woocommerce' ),
		'MN' => __( 'Mantova', 'woocommerce' ),
		'MS' => __( 'Massa-Carrara', 'woocommerce' ),
		'MT' => __( 'Matera', 'woocommerce' ),
		'ME' => __( 'Messina', 'woocommerce' ),
		'MI' => __( 'Milano', 'woocommerce' ),
		'MO' => __( 'Modena', 'woocommerce' ),
		'MB' => __( 'Monza e della Brianza', 'woocommerce' ),
		'NA' => __( 'Napoli', 'woocommerce' ),
		'NO' => __( 'Novara', 'woocommerce' ),
		'NU' => __( 'Nuoro', 'woocommerce' ),
		'OR' => __( 'Oristano', 'woocommerce' ),
		'PD' => __( 'Padova', 'woocommerce' ),
		'PA' => __( 'Palermo', 'woocommerce' ),
		'PR' => __( 'Parma', 'woocommerce' ),
		'PV' => __( 'Pavia', 'woocommerce' ),
		'PG' => __( 'Perugia', 'woocommerce' ),
		'PU' => __( 'Pesaro e Urbino', 'woocommerce' ),
		'PE' => __( 'Pescara', 'woocommerce' ),
		'PC' => __( 'Piacenza', 'woocommerce' ),
		'PI' => __( 'Pisa', 'woocommerce' ),
		'PT' => __( 'Pistoia', 'woocommerce' ),
		'PN' => __( 'Pordenone', 'woocommerce' ),
		'PZ' => __( 'Potenza', 'woocommerce' ),
		'PO' => __( 'Prato', 'woocommerce' ),
		'RG' => __( 'Ragusa', 'woocommerce' ),
		'RA' => __( 'Ravenna', 'woocommerce' ),
		'RC' => __( 'Reggio Calabria', 'woocommerce' ),
		'RE' => __( 'Reggio Emilia', 'woocommerce' ),
		'RI' => __( 'Rieti', 'woocommerce' ),
		'RN' => __( 'Rimini', 'woocommerce' ),
		'RM' => __( 'Roma', 'woocommerce' ),
		'RO' => __( 'Rovigo', 'woocommerce' ),
		'SA' => __( 'Salerno', 'woocommerce' ),
		'SS' => __( 'Sassari', 'woocommerce' ),
		'SV' => __( 'Savona', 'woocommerce' ),
		'SI' => __( 'Siena', 'woocommerce' ),
		'SR' => __( 'Siracusa', 'woocommerce' ),
		'SO' => __( 'Sondrio', 'woocommerce' ),
		'SU' => __( 'Sud Sardegna', 'woocommerce' ),
		'TA' => __( 'Taranto', 'woocommerce' ),
		'TE' => __( 'Teramo', 'woocommerce' ),
		'TR' => __( 'Terni', 'woocommerce' ),
		'TO' => __( 'Torino', 'woocommerce' ),
		'TP' => __( 'Trapani', 'woocommerce' ),
		'TN' => __( 'Trento', 'woocommerce' ),
		'TV' => __( 'Treviso', 'woocommerce' ),
		'TS' => __( 'Trieste', 'woocommerce' ),
		'UD' => __( 'Udine', 'woocommerce' ),
		'VA' => __( 'Varese', 'woocommerce' ),
		'VE' => __( 'Venezia', 'woocommerce' ),
		'VB' => __( 'Verbano-Cusio-Ossola', 'woocommerce' ),
		'VC' => __( 'Vercelli', 'woocommerce' ),
		'VR' => __( 'Verona', 'woocommerce' ),
		'VV' => __( 'Vibo Valentia', 'woocommerce' ),
		'VI' => __( 'Vicenza', 'woocommerce' ),
		'VT' => __( 'Viterbo', 'woocommerce' ),
	),
	'IL' => array(),
	'IM' => array(),
	'JM' => array( // Jamaican parishes.
		'JM-01' => __( 'Kingston', 'woocommerce' ),
		'JM-02' => __( 'Saint Andrew', 'woocommerce' ),
		'JM-03' => __( 'Saint Thomas', 'woocommerce' ),
		'JM-04' => __( 'Portland', 'woocommerce' ),
		'JM-05' => __( 'Saint Mary', 'woocommerce' ),
		'JM-06' => __( 'Saint Ann', 'woocommerce' ),
		'JM-07' => __( 'Trelawny', 'woocommerce' ),
		'JM-08' => __( 'Saint James', 'woocommerce' ),
		'JM-09' => __( 'Hanover', 'woocommerce' ),
		'JM-10' => __( 'Westmoreland', 'woocommerce' ),
		'JM-11' => __( 'Saint Elizabeth', 'woocommerce' ),
		'JM-12' => __( 'Manchester', 'woocommerce' ),
		'JM-13' => __( 'Clarendon', 'woocommerce' ),
		'JM-14' => __( 'Saint Catherine', 'woocommerce' ),
	),

	/**
	 * Japanese states.
	 *
	 * English notation of prefectures conform to the notation of Japan Post.
	 * The suffix corresponds with the Japanese translation file.
	 */
	'JP' => array(
		'JP01' => __( 'Hokkaido', 'woocommerce' ),
		'JP02' => __( 'Aomori', 'woocommerce' ),
		'JP03' => __( 'Iwate', 'woocommerce' ),
		'JP04' => __( 'Miyagi', 'woocommerce' ),
		'JP05' => __( 'Akita', 'woocommerce' ),
		'JP06' => __( 'Yamagata', 'woocommerce' ),
		'JP07' => __( 'Fukushima', 'woocommerce' ),
		'JP08' => __( 'Ibaraki', 'woocommerce' ),
		'JP09' => __( 'Tochigi', 'woocommerce' ),
		'JP10' => __( 'Gunma', 'woocommerce' ),
		'JP11' => __( 'Saitama', 'woocommerce' ),
		'JP12' => __( 'Chiba', 'woocommerce' ),
		'JP13' => __( 'Tokyo', 'woocommerce' ),
		'JP14' => __( 'Kanagawa', 'woocommerce' ),
		'JP15' => __( 'Niigata', 'woocommerce' ),
		'JP16' => __( 'Toyama', 'woocommerce' ),
		'JP17' => __( 'Ishikawa', 'woocommerce' ),
		'JP18' => __( 'Fukui', 'woocommerce' ),
		'JP19' => __( 'Yamanashi', 'woocommerce' ),
		'JP20' => __( 'Nagano', 'woocommerce' ),
		'JP21' => __( 'Gifu', 'woocommerce' ),
		'JP22' => __( 'Shizuoka', 'woocommerce' ),
		'JP23' => __( 'Aichi', 'woocommerce' ),
		'JP24' => __( 'Mie', 'woocommerce' ),
		'JP25' => __( 'Shiga', 'woocommerce' ),
		'JP26' => __( 'Kyoto', 'woocommerce' ),
		'JP27' => __( 'Osaka', 'woocommerce' ),
		'JP28' => __( 'Hyogo', 'woocommerce' ),
		'JP29' => __( 'Nara', 'woocommerce' ),
		'JP30' => __( 'Wakayama', 'woocommerce' ),
		'JP31' => __( 'Tottori', 'woocommerce' ),
		'JP32' => __( 'Shimane', 'woocommerce' ),
		'JP33' => __( 'Okayama', 'woocommerce' ),
		'JP34' => __( 'Hiroshima', 'woocommerce' ),
		'JP35' => __( 'Yamaguchi', 'woocommerce' ),
		'JP36' => __( 'Tokushima', 'woocommerce' ),
		'JP37' => __( 'Kagawa', 'woocommerce' ),
		'JP38' => __( 'Ehime', 'woocommerce' ),
		'JP39' => __( 'Kochi', 'woocommerce' ),
		'JP40' => __( 'Fukuoka', 'woocommerce' ),
		'JP41' => __( 'Saga', 'woocommerce' ),
		'JP42' => __( 'Nagasaki', 'woocommerce' ),
		'JP43' => __( 'Kumamoto', 'woocommerce' ),
		'JP44' => __( 'Oita', 'woocommerce' ),
		'JP45' => __( 'Miyazaki', 'woocommerce' ),
		'JP46' => __( 'Kagoshima', 'woocommerce' ),
		'JP47' => __( 'Okinawa', 'woocommerce' ),
	),
	'KE' => array( // Kenyan counties.
		'KE01' => __( 'Baringo', 'woocommerce' ),
		'KE02' => __( 'Bomet', 'woocommerce' ),
		'KE03' => __( 'Bungoma', 'woocommerce' ),
		'KE04' => __( 'Busia', 'woocommerce' ),
		'KE05' => __( 'Elgeyo-Marakwet', 'woocommerce' ),
		'KE06' => __( 'Embu', 'woocommerce' ),
		'KE07' => __( 'Garissa', 'woocommerce' ),
		'KE08' => __( 'Homa Bay', 'woocommerce' ),
		'KE09' => __( 'Isiolo', 'woocommerce' ),
		'KE10' => __( 'Kajiado', 'woocommerce' ),
		'KE11' => __( 'Kakamega', 'woocommerce' ),
		'KE12' => __( 'Kericho', 'woocommerce' ),
		'KE13' => __( 'Kiambu', 'woocommerce' ),
		'KE14' => __( 'Kilifi', 'woocommerce' ),
		'KE15' => __( 'Kirinyaga', 'woocommerce' ),
		'KE16' => __( 'Kisii', 'woocommerce' ),
		'KE17' => __( 'Kisumu', 'woocommerce' ),
		'KE18' => __( 'Kitui', 'woocommerce' ),
		'KE19' => __( 'Kwale', 'woocommerce' ),
		'KE20' => __( 'Laikipia', 'woocommerce' ),
		'KE21' => __( 'Lamu', 'woocommerce' ),
		'KE22' => __( 'Machakos', 'woocommerce' ),
		'KE23' => __( 'Makueni', 'woocommerce' ),
		'KE24' => __( 'Mandera', 'woocommerce' ),
		'KE25' => __( 'Marsabit', 'woocommerce' ),
		'KE26' => __( 'Meru', 'woocommerce' ),
		'KE27' => __( 'Migori', 'woocommerce' ),
		'KE28' => __( 'Mombasa', 'woocommerce' ),
		'KE29' => __( 'Murang’a', 'woocommerce' ),
		'KE30' => __( 'Nairobi County', 'woocommerce' ),
		'KE31' => __( 'Nakuru', 'woocommerce' ),
		'KE32' => __( 'Nandi', 'woocommerce' ),
		'KE33' => __( 'Narok', 'woocommerce' ),
		'KE34' => __( 'Nyamira', 'woocommerce' ),
		'KE35' => __( 'Nyandarua', 'woocommerce' ),
		'KE36' => __( 'Nyeri', 'woocommerce' ),
		'KE37' => __( 'Samburu', 'woocommerce' ),
		'KE38' => __( 'Siaya', 'woocommerce' ),
		'KE39' => __( 'Taita-Taveta', 'woocommerce' ),
		'KE40' => __( 'Tana River', 'woocommerce' ),
		'KE41' => __( 'Tharaka-Nithi', 'woocommerce' ),
		'KE42' => __( 'Trans Nzoia', 'woocommerce' ),
		'KE43' => __( 'Turkana', 'woocommerce' ),
		'KE44' => __( 'Uasin Gishu', 'woocommerce' ),
		'KE45' => __( 'Vihiga', 'woocommerce' ),
		'KE46' => __( 'Wajir', 'woocommerce' ),
		'KE47' => __( 'West Pokot', 'woocommerce' ),
	),
	'KR' => array(),
	'KW' => array(),
	'LA' => array( // Laotian provinces.
		'AT' => __( 'Attapeu', 'woocommerce' ),
		'BK' => __( 'Bokeo', 'woocommerce' ),
		'BL' => __( 'Bolikhamsai', 'woocommerce' ),
		'CH' => __( 'Champasak', 'woocommerce' ),
		'HO' => __( 'Houaphanh', 'woocommerce' ),
		'KH' => __( 'Khammouane', 'woocommerce' ),
		'LM' => __( 'Luang Namtha', 'woocommerce' ),
		'LP' => __( 'Luang Prabang', 'woocommerce' ),
		'OU' => __( 'Oudomxay', 'woocommerce' ),
		'PH' => __( 'Phongsaly', 'woocommerce' ),
		'SL' => __( 'Salavan', 'woocommerce' ),
		'SV' => __( 'Savannakhet', 'woocommerce' ),
		'VI' => __( 'Vientiane Province', 'woocommerce' ),
		'VT' => __( 'Vientiane', 'woocommerce' ),
		'XA' => __( 'Sainyabuli', 'woocommerce' ),
		'XE' => __( 'Sekong', 'woocommerce' ),
		'XI' => __( 'Xiangkhouang', 'woocommerce' ),
		'XS' => __( 'Xaisomboun', 'woocommerce' ),
	),
	'LB' => array(),
	'LR' => array( // Liberian provinces.
		'BM' => __( 'Bomi', 'woocommerce' ),
		'BN' => __( 'Bong', 'woocommerce' ),
		'GA' => __( 'Gbarpolu', 'woocommerce' ),
		'GB' => __( 'Grand Bassa', 'woocommerce' ),
		'GC' => __( 'Grand Cape Mount', 'woocommerce' ),
		'GG' => __( 'Grand Gedeh', 'woocommerce' ),
		'GK' => __( 'Grand Kru', 'woocommerce' ),
		'LO' => __( 'Lofa', 'woocommerce' ),
		'MA' => __( 'Margibi', 'woocommerce' ),
		'MY' => __( 'Maryland', 'woocommerce' ),
		'MO' => __( 'Montserrado', 'woocommerce' ),
		'NM' => __( 'Nimba', 'woocommerce' ),
		'RV' => __( 'Rivercess', 'woocommerce' ),
		'RG' => __( 'River Gee', 'woocommerce' ),
		'SN' => __( 'Sinoe', 'woocommerce' ),
	),
	'LU' => array(),
	'MD' => array( // Moldovan states.
		'C'  => __( 'Chișinău', 'woocommerce' ),
		'BL' => __( 'Bălți', 'woocommerce' ),
		'AN' => __( 'Anenii Noi', 'woocommerce' ),
		'BS' => __( 'Basarabeasca', 'woocommerce' ),
		'BR' => __( 'Briceni', 'woocommerce' ),
		'CH' => __( 'Cahul', 'woocommerce' ),
		'CT' => __( 'Cantemir', 'woocommerce' ),
		'CL' => __( 'Călărași', 'woocommerce' ),
		'CS' => __( 'Căușeni', 'woocommerce' ),
		'CM' => __( 'Cimișlia', 'woocommerce' ),
		'CR' => __( 'Criuleni', 'woocommerce' ),
		'DN' => __( 'Dondușeni', 'woocommerce' ),
		'DR' => __( 'Drochia', 'woocommerce' ),
		'DB' => __( 'Dubăsari', 'woocommerce' ),
		'ED' => __( 'Edineț', 'woocommerce' ),
		'FL' => __( 'Fălești', 'woocommerce' ),
		'FR' => __( 'Florești', 'woocommerce' ),
		'GE' => __( 'UTA Găgăuzia', 'woocommerce' ),
		'GL' => __( 'Glodeni', 'woocommerce' ),
		'HN' => __( 'Hîncești', 'woocommerce' ),
		'IL' => __( 'Ialoveni', 'woocommerce' ),
		'LV' => __( 'Leova', 'woocommerce' ),
		'NS' => __( 'Nisporeni', 'woocommerce' ),
		'OC' => __( 'Ocnița', 'woocommerce' ),
		'OR' => __( 'Orhei', 'woocommerce' ),
		'RZ' => __( 'Rezina', 'woocommerce' ),
		'RS' => __( 'Rîșcani', 'woocommerce' ),
		'SG' => __( 'Sîngerei', 'woocommerce' ),
		'SR' => __( 'Soroca', 'woocommerce' ),
		'ST' => __( 'Strășeni', 'woocommerce' ),
		'SD' => __( 'Șoldănești', 'woocommerce' ),
		'SV' => __( 'Ștefan Vodă', 'woocommerce' ),
		'TR' => __( 'Taraclia', 'woocommerce' ),
		'TL' => __( 'Telenești', 'woocommerce' ),
		'UN' => __( 'Ungheni', 'woocommerce' ),
	),
	'MQ' => array(),
	'MT' => array(),
	'MX' => array( // Mexican states.
		'DF' => __( 'Ciudad de México', 'woocommerce' ),
		'JA' => __( 'Jalisco', 'woocommerce' ),
		'NL' => __( 'Nuevo León', 'woocommerce' ),
		'AG' => __( 'Aguascalientes', 'woocommerce' ),
		'BC' => __( 'Baja California', 'woocommerce' ),
		'BS' => __( 'Baja California Sur', 'woocommerce' ),
		'CM' => __( 'Campeche', 'woocommerce' ),
		'CS' => __( 'Chiapas', 'woocommerce' ),
		'CH' => __( 'Chihuahua', 'woocommerce' ),
		'CO' => __( 'Coahuila', 'woocommerce' ),
		'CL' => __( 'Colima', 'woocommerce' ),
		'DG' => __( 'Durango', 'woocommerce' ),
		'GT' => __( 'Guanajuato', 'woocommerce' ),
		'GR' => __( 'Guerrero', 'woocommerce' ),
		'HG' => __( 'Hidalgo', 'woocommerce' ),
		'MX' => __( 'Estado de México', 'woocommerce' ),
		'MI' => __( 'Michoacán', 'woocommerce' ),
		'MO' => __( 'Morelos', 'woocommerce' ),
		'NA' => __( 'Nayarit', 'woocommerce' ),
		'OA' => __( 'Oaxaca', 'woocommerce' ),
		'PU' => __( 'Puebla', 'woocommerce' ),
		'QT' => __( 'Querétaro', 'woocommerce' ),
		'QR' => __( 'Quintana Roo', 'woocommerce' ),
		'SL' => __( 'San Luis Potosí', 'woocommerce' ),
		'SI' => __( 'Sinaloa', 'woocommerce' ),
		'SO' => __( 'Sonora', 'woocommerce' ),
		'TB' => __( 'Tabasco', 'woocommerce' ),
		'TM' => __( 'Tamaulipas', 'woocommerce' ),
		'TL' => __( 'Tlaxcala', 'woocommerce' ),
		'VE' => __( 'Veracruz', 'woocommerce' ),
		'YU' => __( 'Yucatán', 'woocommerce' ),
		'ZA' => __( 'Zacatecas', 'woocommerce' ),
	),
	'MY' => array( // Malaysian states.
		'JHR' => __( 'Johor', 'woocommerce' ),
		'KDH' => __( 'Kedah', 'woocommerce' ),
		'KTN' => __( 'Kelantan', 'woocommerce' ),
		'LBN' => __( 'Labuan', 'woocommerce' ),
		'MLK' => __( 'Malacca (Melaka)', 'woocommerce' ),
		'NSN' => __( 'Negeri Sembilan', 'woocommerce' ),
		'PHG' => __( 'Pahang', 'woocommerce' ),
		'PNG' => __( 'Penang (Pulau Pinang)', 'woocommerce' ),
		'PRK' => __( 'Perak', 'woocommerce' ),
		'PLS' => __( 'Perlis', 'woocommerce' ),
		'SBH' => __( 'Sabah', 'woocommerce' ),
		'SWK' => __( 'Sarawak', 'woocommerce' ),
		'SGR' => __( 'Selangor', 'woocommerce' ),
		'TRG' => __( 'Terengganu', 'woocommerce' ),
		'PJY' => __( 'Putrajaya', 'woocommerce' ),
		'KUL' => __( 'Kuala Lumpur', 'woocommerce' ),
	),
	'MZ' => array( // Mozambican provinces.
		'MZP'   => __( 'Cabo Delgado', 'woocommerce' ),
		'MZG'   => __( 'Gaza', 'woocommerce' ),
		'MZI'   => __( 'Inhambane', 'woocommerce' ),
		'MZB'   => __( 'Manica', 'woocommerce' ),
		'MZL'   => __( 'Maputo Province', 'woocommerce' ),
		'MZMPM' => __( 'Maputo', 'woocommerce' ),
		'MZN'   => __( 'Nampula', 'woocommerce' ),
		'MZA'   => __( 'Niassa', 'woocommerce' ),
		'MZS'   => __( 'Sofala', 'woocommerce' ),
		'MZT'   => __( 'Tete', 'woocommerce' ),
		'MZQ'   => __( 'Zambézia', 'woocommerce' ),
	),
	'NA' => array( // Namibian regions.
		'ER' => __( 'Erongo', 'woocommerce' ),
		'HA' => __( 'Hardap', 'woocommerce' ),
		'KA' => __( 'Karas', 'woocommerce' ),
		'KE' => __( 'Kavango East', 'woocommerce' ),
		'KW' => __( 'Kavango West', 'woocommerce' ),
		'KH' => __( 'Khomas', 'woocommerce' ),
		'KU' => __( 'Kunene', 'woocommerce' ),
		'OW' => __( 'Ohangwena', 'woocommerce' ),
		'OH' => __( 'Omaheke', 'woocommerce' ),
		'OS' => __( 'Omusati', 'woocommerce' ),
		'ON' => __( 'Oshana', 'woocommerce' ),
		'OT' => __( 'Oshikoto', 'woocommerce' ),
		'OD' => __( 'Otjozondjupa', 'woocommerce' ),
		'CA' => __( 'Zambezi', 'woocommerce' ),
	),
	'NG' => array( // Nigerian provinces.
		'AB' => __( 'Abia', 'woocommerce' ),
		'FC' => __( 'Abuja', 'woocommerce' ),
		'AD' => __( 'Adamawa', 'woocommerce' ),
		'AK' => __( 'Akwa Ibom', 'woocommerce' ),
		'AN' => __( 'Anambra', 'woocommerce' ),
		'BA' => __( 'Bauchi', 'woocommerce' ),
		'BY' => __( 'Bayelsa', 'woocommerce' ),
		'BE' => __( 'Benue', 'woocommerce' ),
		'BO' => __( 'Borno', 'woocommerce' ),
		'CR' => __( 'Cross River', 'woocommerce' ),
		'DE' => __( 'Delta', 'woocommerce' ),
		'EB' => __( 'Ebonyi', 'woocommerce' ),
		'ED' => __( 'Edo', 'woocommerce' ),
		'EK' => __( 'Ekiti', 'woocommerce' ),
		'EN' => __( 'Enugu', 'woocommerce' ),
		'GO' => __( 'Gombe', 'woocommerce' ),
		'IM' => __( 'Imo', 'woocommerce' ),
		'JI' => __( 'Jigawa', 'woocommerce' ),
		'KD' => __( 'Kaduna', 'woocommerce' ),
		'KN' => __( 'Kano', 'woocommerce' ),
		'KT' => __( 'Katsina', 'woocommerce' ),
		'KE' => __( 'Kebbi', 'woocommerce' ),
		'KO' => __( 'Kogi', 'woocommerce' ),
		'KW' => __( 'Kwara', 'woocommerce' ),
		'LA' => __( 'Lagos', 'woocommerce' ),
		'NA' => __( 'Nasarawa', 'woocommerce' ),
		'NI' => __( 'Niger', 'woocommerce' ),
		'OG' => __( 'Ogun', 'woocommerce' ),
		'ON' => __( 'Ondo', 'woocommerce' ),
		'OS' => __( 'Osun', 'woocommerce' ),
		'OY' => __( 'Oyo', 'woocommerce' ),
		'PL' => __( 'Plateau', 'woocommerce' ),
		'RI' => __( 'Rivers', 'woocommerce' ),
		'SO' => __( 'Sokoto', 'woocommerce' ),
		'TA' => __( 'Taraba', 'woocommerce' ),
		'YO' => __( 'Yobe', 'woocommerce' ),
		'ZA' => __( 'Zamfara', 'woocommerce' ),
	),
	'NL' => array(),
	'NO' => array(),
	'NP' => array( // Nepalese zones.
		'BAG' => __( 'Bagmati', 'woocommerce' ),
		'BHE' => __( 'Bheri', 'woocommerce' ),
		'DHA' => __( 'Dhaulagiri', 'woocommerce' ),
		'GAN' => __( 'Gandaki', 'woocommerce' ),
		'JAN' => __( 'Janakpur', 'woocommerce' ),
		'KAR' => __( 'Karnali', 'woocommerce' ),
		'KOS' => __( 'Koshi', 'woocommerce' ),
		'LUM' => __( 'Lumbini', 'woocommerce' ),
		'MAH' => __( 'Mahakali', 'woocommerce' ),
		'MEC' => __( 'Mechi', 'woocommerce' ),
		'NAR' => __( 'Narayani', 'woocommerce' ),
		'RAP' => __( 'Rapti', 'woocommerce' ),
		'SAG' => __( 'Sagarmatha', 'woocommerce' ),
		'SET' => __( 'Seti', 'woocommerce' ),
	),
	'NI' => array( // Nicaraguan states.
		'NI-AN' => __( 'Atlántico Norte', 'woocommerce' ),
		'NI-AS' => __( 'Atlántico Sur', 'woocommerce' ),
		'NI-BO' => __( 'Boaco', 'woocommerce' ),
		'NI-CA' => __( 'Carazo', 'woocommerce' ),
		'NI-CI' => __( 'Chinandega', 'woocommerce' ),
		'NI-CO' => __( 'Chontales', 'woocommerce' ),
		'NI-ES' => __( 'Estelí', 'woocommerce' ),
		'NI-GR' => __( 'Granada', 'woocommerce' ),
		'NI-JI' => __( 'Jinotega', 'woocommerce' ),
		'NI-LE' => __( 'León', 'woocommerce' ),
		'NI-MD' => __( 'Madriz', 'woocommerce' ),
		'NI-MN' => __( 'Managua', 'woocommerce' ),
		'NI-MS' => __( 'Masaya', 'woocommerce' ),
		'NI-MT' => __( 'Matagalpa', 'woocommerce' ),
		'NI-NS' => __( 'Nueva Segovia', 'woocommerce' ),
		'NI-RI' => __( 'Rivas', 'woocommerce' ),
		'NI-SJ' => __( 'Río San Juan', 'woocommerce' ),
	),
	'NZ' => array( // New Zealand states.
		'NL' => __( 'Northland', 'woocommerce' ),
		'AK' => __( 'Auckland', 'woocommerce' ),
		'WA' => __( 'Waikato', 'woocommerce' ),
		'BP' => __( 'Bay of Plenty', 'woocommerce' ),
		'TK' => __( 'Taranaki', 'woocommerce' ),
		'GI' => __( 'Gisborne', 'woocommerce' ),
		'HB' => __( 'Hawke’s Bay', 'woocommerce' ),
		'MW' => __( 'Manawatu-Wanganui', 'woocommerce' ),
		'WE' => __( 'Wellington', 'woocommerce' ),
		'NS' => __( 'Nelson', 'woocommerce' ),
		'MB' => __( 'Marlborough', 'woocommerce' ),
		'TM' => __( 'Tasman', 'woocommerce' ),
		'WC' => __( 'West Coast', 'woocommerce' ),
		'CT' => __( 'Canterbury', 'woocommerce' ),
		'OT' => __( 'Otago', 'woocommerce' ),
		'SL' => __( 'Southland', 'woocommerce' ),
	),
	'PA' => array( // Panamanian states.
		'PA-1' => __( 'Bocas del Toro', 'woocommerce' ),
		'PA-2' => __( 'Coclé', 'woocommerce' ),
		'PA-3' => __( 'Colón', 'woocommerce' ),
		'PA-4' => __( 'Chiriquí', 'woocommerce' ),
		'PA-5' => __( 'Darién', 'woocommerce' ),
		'PA-6' => __( 'Herrera', 'woocommerce' ),
		'PA-7' => __( 'Los Santos', 'woocommerce' ),
		'PA-8' => __( 'Panamá', 'woocommerce' ),
		'PA-9' => __( 'Veraguas', 'woocommerce' ),
		'PA-10' => __( 'West Panamá', 'woocommerce' ),
		'PA-EM' => __( 'Emberá', 'woocommerce' ),
		'PA-KY' => __( 'Guna Yala', 'woocommerce' ),
		'PA-NB' => __( 'Ngöbe-Buglé', 'woocommerce' ),
	),
	'PE' => array( // Peruvian states.
		'CAL' => __( 'El Callao', 'woocommerce' ),
		'LMA' => __( 'Municipalidad Metropolitana de Lima', 'woocommerce' ),
		'AMA' => __( 'Amazonas', 'woocommerce' ),
		'ANC' => __( 'Ancash', 'woocommerce' ),
		'APU' => __( 'Apurímac', 'woocommerce' ),
		'ARE' => __( 'Arequipa', 'woocommerce' ),
		'AYA' => __( 'Ayacucho', 'woocommerce' ),
		'CAJ' => __( 'Cajamarca', 'woocommerce' ),
		'CUS' => __( 'Cusco', 'woocommerce' ),
		'HUV' => __( 'Huancavelica', 'woocommerce' ),
		'HUC' => __( 'Huánuco', 'woocommerce' ),
		'ICA' => __( 'Ica', 'woocommerce' ),
		'JUN' => __( 'Junín', 'woocommerce' ),
		'LAL' => __( 'La Libertad', 'woocommerce' ),
		'LAM' => __( 'Lambayeque', 'woocommerce' ),
		'LIM' => __( 'Lima', 'woocommerce' ),
		'LOR' => __( 'Loreto', 'woocommerce' ),
		'MDD' => __( 'Madre de Dios', 'woocommerce' ),
		'MOQ' => __( 'Moquegua', 'woocommerce' ),
		'PAS' => __( 'Pasco', 'woocommerce' ),
		'PIU' => __( 'Piura', 'woocommerce' ),
		'PUN' => __( 'Puno', 'woocommerce' ),
		'SAM' => __( 'San Martín', 'woocommerce' ),
		'TAC' => __( 'Tacna', 'woocommerce' ),
		'TUM' => __( 'Tumbes', 'woocommerce' ),
		'UCA' => __( 'Ucayali', 'woocommerce' ),
	),
	'PH' => array( // Philippine provinces.
		'ABR' => __( 'Abra', 'woocommerce' ),
		'AGN' => __( 'Agusan del Norte', 'woocommerce' ),
		'AGS' => __( 'Agusan del Sur', 'woocommerce' ),
		'AKL' => __( 'Aklan', 'woocommerce' ),
		'ALB' => __( 'Albay', 'woocommerce' ),
		'ANT' => __( 'Antique', 'woocommerce' ),
		'APA' => __( 'Apayao', 'woocommerce' ),
		'AUR' => __( 'Aurora', 'woocommerce' ),
		'BAS' => __( 'Basilan', 'woocommerce' ),
		'BAN' => __( 'Bataan', 'woocommerce' ),
		'BTN' => __( 'Batanes', 'woocommerce' ),
		'BTG' => __( 'Batangas', 'woocommerce' ),
		'BEN' => __( 'Benguet', 'woocommerce' ),
		'BIL' => __( 'Biliran', 'woocommerce' ),
		'BOH' => __( 'Bohol', 'woocommerce' ),
		'BUK' => __( 'Bukidnon', 'woocommerce' ),
		'BUL' => __( 'Bulacan', 'woocommerce' ),
		'CAG' => __( 'Cagayan', 'woocommerce' ),
		'CAN' => __( 'Camarines Norte', 'woocommerce' ),
		'CAS' => __( 'Camarines Sur', 'woocommerce' ),
		'CAM' => __( 'Camiguin', 'woocommerce' ),
		'CAP' => __( 'Capiz', 'woocommerce' ),
		'CAT' => __( 'Catanduanes', 'woocommerce' ),
		'CAV' => __( 'Cavite', 'woocommerce' ),
		'CEB' => __( 'Cebu', 'woocommerce' ),
		'COM' => __( 'Compostela Valley', 'woocommerce' ),
		'NCO' => __( 'Cotabato', 'woocommerce' ),
		'DAV' => __( 'Davao del Norte', 'woocommerce' ),
		'DAS' => __( 'Davao del Sur', 'woocommerce' ),
		'DAC' => __( 'Davao Occidental', 'woocommerce' ),
		'DAO' => __( 'Davao Oriental', 'woocommerce' ),
		'DIN' => __( 'Dinagat Islands', 'woocommerce' ),
		'EAS' => __( 'Eastern Samar', 'woocommerce' ),
		'GUI' => __( 'Guimaras', 'woocommerce' ),
		'IFU' => __( 'Ifugao', 'woocommerce' ),
		'ILN' => __( 'Ilocos Norte', 'woocommerce' ),
		'ILS' => __( 'Ilocos Sur', 'woocommerce' ),
		'ILI' => __( 'Iloilo', 'woocommerce' ),
		'ISA' => __( 'Isabela', 'woocommerce' ),
		'KAL' => __( 'Kalinga', 'woocommerce' ),
		'LUN' => __( 'La Union', 'woocommerce' ),
		'LAG' => __( 'Laguna', 'woocommerce' ),
		'LAN' => __( 'Lanao del Norte', 'woocommerce' ),
		'LAS' => __( 'Lanao del Sur', 'woocommerce' ),
		'LEY' => __( 'Leyte', 'woocommerce' ),
		'MAG' => __( 'Maguindanao', 'woocommerce' ),
		'MAD' => __( 'Marinduque', 'woocommerce' ),
		'MAS' => __( 'Masbate', 'woocommerce' ),
		'MSC' => __( 'Misamis Occidental', 'woocommerce' ),
		'MSR' => __( 'Misamis Oriental', 'woocommerce' ),
		'MOU' => __( 'Mountain Province', 'woocommerce' ),
		'NEC' => __( 'Negros Occidental', 'woocommerce' ),
		'NER' => __( 'Negros Oriental', 'woocommerce' ),
		'NSA' => __( 'Northern Samar', 'woocommerce' ),
		'NUE' => __( 'Nueva Ecija', 'woocommerce' ),
		'NUV' => __( 'Nueva Vizcaya', 'woocommerce' ),
		'MDC' => __( 'Occidental Mindoro', 'woocommerce' ),
		'MDR' => __( 'Oriental Mindoro', 'woocommerce' ),
		'PLW' => __( 'Palawan', 'woocommerce' ),
		'PAM' => __( 'Pampanga', 'woocommerce' ),
		'PAN' => __( 'Pangasinan', 'woocommerce' ),
		'QUE' => __( 'Quezon', 'woocommerce' ),
		'QUI' => __( 'Quirino', 'woocommerce' ),
		'RIZ' => __( 'Rizal', 'woocommerce' ),
		'ROM' => __( 'Romblon', 'woocommerce' ),
		'WSA' => __( 'Samar', 'woocommerce' ),
		'SAR' => __( 'Sarangani', 'woocommerce' ),
		'SIQ' => __( 'Siquijor', 'woocommerce' ),
		'SOR' => __( 'Sorsogon', 'woocommerce' ),
		'SCO' => __( 'South Cotabato', 'woocommerce' ),
		'SLE' => __( 'Southern Leyte', 'woocommerce' ),
		'SUK' => __( 'Sultan Kudarat', 'woocommerce' ),
		'SLU' => __( 'Sulu', 'woocommerce' ),
		'SUN' => __( 'Surigao del Norte', 'woocommerce' ),
		'SUR' => __( 'Surigao del Sur', 'woocommerce' ),
		'TAR' => __( 'Tarlac', 'woocommerce' ),
		'TAW' => __( 'Tawi-Tawi', 'woocommerce' ),
		'ZMB' => __( 'Zambales', 'woocommerce' ),
		'ZAN' => __( 'Zamboanga del Norte', 'woocommerce' ),
		'ZAS' => __( 'Zamboanga del Sur', 'woocommerce' ),
		'ZSI' => __( 'Zamboanga Sibugay', 'woocommerce' ),
		'00'  => __( 'Metro Manila', 'woocommerce' ),
	),
	'PK' => array( // Pakistani states.
		'JK' => __( 'Azad Kashmir', 'woocommerce' ),
		'BA' => __( 'Balochistan', 'woocommerce' ),
		'TA' => __( 'FATA', 'woocommerce' ),
		'GB' => __( 'Gilgit Baltistan', 'woocommerce' ),
		'IS' => __( 'Islamabad Capital Territory', 'woocommerce' ),
		'KP' => __( 'Khyber Pakhtunkhwa', 'woocommerce' ),
		'PB' => __( 'Punjab', 'woocommerce' ),
		'SD' => __( 'Sindh', 'woocommerce' ),
	),
	'PL' => array(),
	'PR' => array(),
	'PT' => array(),
	'PY' => array( // Paraguayan states.
		'PY-ASU' => __( 'Asunción', 'woocommerce' ),
		'PY-1'   => __( 'Concepción', 'woocommerce' ),
		'PY-2'   => __( 'San Pedro', 'woocommerce' ),
		'PY-3'   => __( 'Cordillera', 'woocommerce' ),
		'PY-4'   => __( 'Guairá', 'woocommerce' ),
		'PY-5'   => __( 'Caaguazú', 'woocommerce' ),
		'PY-6'   => __( 'Caazapá', 'woocommerce' ),
		'PY-7'   => __( 'Itapúa', 'woocommerce' ),
		'PY-8'   => __( 'Misiones', 'woocommerce' ),
		'PY-9'   => __( 'Paraguarí', 'woocommerce' ),
		'PY-10'  => __( 'Alto Paraná', 'woocommerce' ),
		'PY-11'  => __( 'Central', 'woocommerce' ),
		'PY-12'  => __( 'Ñeembucú', 'woocommerce' ),
		'PY-13'  => __( 'Amambay', 'woocommerce' ),
		'PY-14'  => __( 'Canindeyú', 'woocommerce' ),
		'PY-15'  => __( 'Presidente Hayes', 'woocommerce' ),
		'PY-16'  => __( 'Alto Paraguay', 'woocommerce' ),
		'PY-17'  => __( 'Boquerón', 'woocommerce' ),
	),
	'RE' => array(),
	'RO' => array( // Romanian states.
		'AB' => __( 'Alba', 'woocommerce' ),
		'AR' => __( 'Arad', 'woocommerce' ),
		'AG' => __( 'Argeș', 'woocommerce' ),
		'BC' => __( 'Bacău', 'woocommerce' ),
		'BH' => __( 'Bihor', 'woocommerce' ),
		'BN' => __( 'Bistrița-Năsăud', 'woocommerce' ),
		'BT' => __( 'Botoșani', 'woocommerce' ),
		'BR' => __( 'Brăila', 'woocommerce' ),
		'BV' => __( 'Brașov', 'woocommerce' ),
		'B'  => __( 'București', 'woocommerce' ),
		'BZ' => __( 'Buzău', 'woocommerce' ),
		'CL' => __( 'Călărași', 'woocommerce' ),
		'CS' => __( 'Caraș-Severin', 'woocommerce' ),
		'CJ' => __( 'Cluj', 'woocommerce' ),
		'CT' => __( 'Constanța', 'woocommerce' ),
		'CV' => __( 'Covasna', 'woocommerce' ),
		'DB' => __( 'Dâmbovița', 'woocommerce' ),
		'DJ' => __( 'Dolj', 'woocommerce' ),
		'GL' => __( 'Galați', 'woocommerce' ),
		'GR' => __( 'Giurgiu', 'woocommerce' ),
		'GJ' => __( 'Gorj', 'woocommerce' ),
		'HR' => __( 'Harghita', 'woocommerce' ),
		'HD' => __( 'Hunedoara', 'woocommerce' ),
		'IL' => __( 'Ialomița', 'woocommerce' ),
		'IS' => __( 'Iași', 'woocommerce' ),
		'IF' => __( 'Ilfov', 'woocommerce' ),
		'MM' => __( 'Maramureș', 'woocommerce' ),
		'MH' => __( 'Mehedinți', 'woocommerce' ),
		'MS' => __( 'Mureș', 'woocommerce' ),
		'NT' => __( 'Neamț', 'woocommerce' ),
		'OT' => __( 'Olt', 'woocommerce' ),
		'PH' => __( 'Prahova', 'woocommerce' ),
		'SJ' => __( 'Sălaj', 'woocommerce' ),
		'SM' => __( 'Satu Mare', 'woocommerce' ),
		'SB' => __( 'Sibiu', 'woocommerce' ),
		'SV' => __( 'Suceava', 'woocommerce' ),
		'TR' => __( 'Teleorman', 'woocommerce' ),
		'TM' => __( 'Timiș', 'woocommerce' ),
		'TL' => __( 'Tulcea', 'woocommerce' ),
		'VL' => __( 'Vâlcea', 'woocommerce' ),
		'VS' => __( 'Vaslui', 'woocommerce' ),
		'VN' => __( 'Vrancea', 'woocommerce' ),
	),
	'SG' => array(),
	'SK' => array(),
	'SI' => array(),
	'SV' => array( // Salvadoran states.
		'SV-AH' => __( 'Ahuachapán', 'woocommerce' ),
		'SV-CA' => __( 'Cabañas', 'woocommerce' ),
		'SV-CH' => __( 'Chalatenango', 'woocommerce' ),
		'SV-CU' => __( 'Cuscatlán', 'woocommerce' ),
		'SV-LI' => __( 'La Libertad', 'woocommerce' ),
		'SV-MO' => __( 'Morazán', 'woocommerce' ),
		'SV-PA' => __( 'La Paz', 'woocommerce' ),
		'SV-SA' => __( 'Santa Ana', 'woocommerce' ),
		'SV-SM' => __( 'San Miguel', 'woocommerce' ),
		'SV-SO' => __( 'Sonsonate', 'woocommerce' ),
		'SV-SS' => __( 'San Salvador', 'woocommerce' ),
		'SV-SV' => __( 'San Vicente', 'woocommerce' ),
		'SV-UN' => __( 'La Unión', 'woocommerce' ),
		'SV-US' => __( 'Usulután', 'woocommerce' ),
	),
	'TH' => array( // Thai states.
		'TH-37' => __( 'Amnat Charoen', 'woocommerce' ),
		'TH-15' => __( 'Ang Thong', 'woocommerce' ),
		'TH-14' => __( 'Ayutthaya', 'woocommerce' ),
		'TH-10' => __( 'Bangkok', 'woocommerce' ),
		'TH-38' => __( 'Bueng Kan', 'woocommerce' ),
		'TH-31' => __( 'Buri Ram', 'woocommerce' ),
		'TH-24' => __( 'Chachoengsao', 'woocommerce' ),
		'TH-18' => __( 'Chai Nat', 'woocommerce' ),
		'TH-36' => __( 'Chaiyaphum', 'woocommerce' ),
		'TH-22' => __( 'Chanthaburi', 'woocommerce' ),
		'TH-50' => __( 'Chiang Mai', 'woocommerce' ),
		'TH-57' => __( 'Chiang Rai', 'woocommerce' ),
		'TH-20' => __( 'Chonburi', 'woocommerce' ),
		'TH-86' => __( 'Chumphon', 'woocommerce' ),
		'TH-46' => __( 'Kalasin', 'woocommerce' ),
		'TH-62' => __( 'Kamphaeng Phet', 'woocommerce' ),
		'TH-71' => __( 'Kanchanaburi', 'woocommerce' ),
		'TH-40' => __( 'Khon Kaen', 'woocommerce' ),
		'TH-81' => __( 'Krabi', 'woocommerce' ),
		'TH-52' => __( 'Lampang', 'woocommerce' ),
		'TH-51' => __( 'Lamphun', 'woocommerce' ),
		'TH-42' => __( 'Loei', 'woocommerce' ),
		'TH-16' => __( 'Lopburi', 'woocommerce' ),
		'TH-58' => __( 'Mae Hong Son', 'woocommerce' ),
		'TH-44' => __( 'Maha Sarakham', 'woocommerce' ),
		'TH-49' => __( 'Mukdahan', 'woocommerce' ),
		'TH-26' => __( 'Nakhon Nayok', 'woocommerce' ),
		'TH-73' => __( 'Nakhon Pathom', 'woocommerce' ),
		'TH-48' => __( 'Nakhon Phanom', 'woocommerce' ),
		'TH-30' => __( 'Nakhon Ratchasima', 'woocommerce' ),
		'TH-60' => __( 'Nakhon Sawan', 'woocommerce' ),
		'TH-80' => __( 'Nakhon Si Thammarat', 'woocommerce' ),
		'TH-55' => __( 'Nan', 'woocommerce' ),
		'TH-96' => __( 'Narathiwat', 'woocommerce' ),
		'TH-39' => __( 'Nong Bua Lam Phu', 'woocommerce' ),
		'TH-43' => __( 'Nong Khai', 'woocommerce' ),
		'TH-12' => __( 'Nonthaburi', 'woocommerce' ),
		'TH-13' => __( 'Pathum Thani', 'woocommerce' ),
		'TH-94' => __( 'Pattani', 'woocommerce' ),
		'TH-82' => __( 'Phang Nga', 'woocommerce' ),
		'TH-93' => __( 'Phatthalung', 'woocommerce' ),
		'TH-56' => __( 'Phayao', 'woocommerce' ),
		'TH-67' => __( 'Phetchabun', 'woocommerce' ),
		'TH-76' => __( 'Phetchaburi', 'woocommerce' ),
		'TH-66' => __( 'Phichit', 'woocommerce' ),
		'TH-65' => __( 'Phitsanulok', 'woocommerce' ),
		'TH-54' => __( 'Phrae', 'woocommerce' ),
		'TH-83' => __( 'Phuket', 'woocommerce' ),
		'TH-25' => __( 'Prachin Buri', 'woocommerce' ),
		'TH-77' => __( 'Prachuap Khiri Khan', 'woocommerce' ),
		'TH-85' => __( 'Ranong', 'woocommerce' ),
		'TH-70' => __( 'Ratchaburi', 'woocommerce' ),
		'TH-21' => __( 'Rayong', 'woocommerce' ),
		'TH-45' => __( 'Roi Et', 'woocommerce' ),
		'TH-27' => __( 'Sa Kaeo', 'woocommerce' ),
		'TH-47' => __( 'Sakon Nakhon', 'woocommerce' ),
		'TH-11' => __( 'Samut Prakan', 'woocommerce' ),
		'TH-74' => __( 'Samut Sakhon', 'woocommerce' ),
		'TH-75' => __( 'Samut Songkhram', 'woocommerce' ),
		'TH-19' => __( 'Saraburi', 'woocommerce' ),
		'TH-91' => __( 'Satun', 'woocommerce' ),
		'TH-17' => __( 'Sing Buri', 'woocommerce' ),
		'TH-33' => __( 'Sisaket', 'woocommerce' ),
		'TH-90' => __( 'Songkhla', 'woocommerce' ),
		'TH-64' => __( 'Sukhothai', 'woocommerce' ),
		'TH-72' => __( 'Suphan Buri', 'woocommerce' ),
		'TH-84' => __( 'Surat Thani', 'woocommerce' ),
		'TH-32' => __( 'Surin', 'woocommerce' ),
		'TH-63' => __( 'Tak', 'woocommerce' ),
		'TH-92' => __( 'Trang', 'woocommerce' ),
		'TH-23' => __( 'Trat', 'woocommerce' ),
		'TH-34' => __( 'Ubon Ratchathani', 'woocommerce' ),
		'TH-41' => __( 'Udon Thani', 'woocommerce' ),
		'TH-61' => __( 'Uthai Thani', 'woocommerce' ),
		'TH-53' => __( 'Uttaradit', 'woocommerce' ),
		'TH-95' => __( 'Yala', 'woocommerce' ),
		'TH-35' => __( 'Yasothon', 'woocommerce' ),
	),
	'TR' => array( // Turkish states.
		'TR01' => __( 'Adana', 'woocommerce' ),
		'TR02' => __( 'Adıyaman', 'woocommerce' ),
		'TR03' => __( 'Afyon', 'woocommerce' ),
		'TR04' => __( 'Ağrı', 'woocommerce' ),
		'TR05' => __( 'Amasya', 'woocommerce' ),
		'TR06' => __( 'Ankara', 'woocommerce' ),
		'TR07' => __( 'Antalya', 'woocommerce' ),
		'TR08' => __( 'Artvin', 'woocommerce' ),
		'TR09' => __( 'Aydın', 'woocommerce' ),
		'TR10' => __( 'Balıkesir', 'woocommerce' ),
		'TR11' => __( 'Bilecik', 'woocommerce' ),
		'TR12' => __( 'Bingöl', 'woocommerce' ),
		'TR13' => __( 'Bitlis', 'woocommerce' ),
		'TR14' => __( 'Bolu', 'woocommerce' ),
		'TR15' => __( 'Burdur', 'woocommerce' ),
		'TR16' => __( 'Bursa', 'woocommerce' ),
		'TR17' => __( 'Çanakkale', 'woocommerce' ),
		'TR18' => __( 'Çankırı', 'woocommerce' ),
		'TR19' => __( 'Çorum', 'woocommerce' ),
		'TR20' => __( 'Denizli', 'woocommerce' ),
		'TR21' => __( 'Diyarbakır', 'woocommerce' ),
		'TR22' => __( 'Edirne', 'woocommerce' ),
		'TR23' => __( 'Elazığ', 'woocommerce' ),
		'TR24' => __( 'Erzincan', 'woocommerce' ),
		'TR25' => __( 'Erzurum', 'woocommerce' ),
		'TR26' => __( 'Eskişehir', 'woocommerce' ),
		'TR27' => __( 'Gaziantep', 'woocommerce' ),
		'TR28' => __( 'Giresun', 'woocommerce' ),
		'TR29' => __( 'Gümüşhane', 'woocommerce' ),
		'TR30' => __( 'Hakkari', 'woocommerce' ),
		'TR31' => __( 'Hatay', 'woocommerce' ),
		'TR32' => __( 'Isparta', 'woocommerce' ),
		'TR33' => __( 'İçel', 'woocommerce' ),
		'TR34' => __( 'İstanbul', 'woocommerce' ),
		'TR35' => __( 'İzmir', 'woocommerce' ),
		'TR36' => __( 'Kars', 'woocommerce' ),
		'TR37' => __( 'Kastamonu', 'woocommerce' ),
		'TR38' => __( 'Kayseri', 'woocommerce' ),
		'TR39' => __( 'Kırklareli', 'woocommerce' ),
		'TR40' => __( 'Kırşehir', 'woocommerce' ),
		'TR41' => __( 'Kocaeli', 'woocommerce' ),
		'TR42' => __( 'Konya', 'woocommerce' ),
		'TR43' => __( 'Kütahya', 'woocommerce' ),
		'TR44' => __( 'Malatya', 'woocommerce' ),
		'TR45' => __( 'Manisa', 'woocommerce' ),
		'TR46' => __( 'Kahramanmaraş', 'woocommerce' ),
		'TR47' => __( 'Mardin', 'woocommerce' ),
		'TR48' => __( 'Muğla', 'woocommerce' ),
		'TR49' => __( 'Muş', 'woocommerce' ),
		'TR50' => __( 'Nevşehir', 'woocommerce' ),
		'TR51' => __( 'Niğde', 'woocommerce' ),
		'TR52' => __( 'Ordu', 'woocommerce' ),
		'TR53' => __( 'Rize', 'woocommerce' ),
		'TR54' => __( 'Sakarya', 'woocommerce' ),
		'TR55' => __( 'Samsun', 'woocommerce' ),
		'TR56' => __( 'Siirt', 'woocommerce' ),
		'TR57' => __( 'Sinop', 'woocommerce' ),
		'TR58' => __( 'Sivas', 'woocommerce' ),
		'TR59' => __( 'Tekirdağ', 'woocommerce' ),
		'TR60' => __( 'Tokat', 'woocommerce' ),
		'TR61' => __( 'Trabzon', 'woocommerce' ),
		'TR62' => __( 'Tunceli', 'woocommerce' ),
		'TR63' => __( 'Şanlıurfa', 'woocommerce' ),
		'TR64' => __( 'Uşak', 'woocommerce' ),
		'TR65' => __( 'Van', 'woocommerce' ),
		'TR66' => __( 'Yozgat', 'woocommerce' ),
		'TR67' => __( 'Zonguldak', 'woocommerce' ),
		'TR68' => __( 'Aksaray', 'woocommerce' ),
		'TR69' => __( 'Bayburt', 'woocommerce' ),
		'TR70' => __( 'Karaman', 'woocommerce' ),
		'TR71' => __( 'Kırıkkale', 'woocommerce' ),
		'TR72' => __( 'Batman', 'woocommerce' ),
		'TR73' => __( 'Şırnak', 'woocommerce' ),
		'TR74' => __( 'Bartın', 'woocommerce' ),
		'TR75' => __( 'Ardahan', 'woocommerce' ),
		'TR76' => __( 'Iğdır', 'woocommerce' ),
		'TR77' => __( 'Yalova', 'woocommerce' ),
		'TR78' => __( 'Karabük', 'woocommerce' ),
		'TR79' => __( 'Kilis', 'woocommerce' ),
		'TR80' => __( 'Osmaniye', 'woocommerce' ),
		'TR81' => __( 'Düzce', 'woocommerce' ),
	),
	'TZ' => array( // Tanzanian states.
		'TZ01' => __( 'Arusha', 'woocommerce' ),
		'TZ02' => __( 'Dar es Salaam', 'woocommerce' ),
		'TZ03' => __( 'Dodoma', 'woocommerce' ),
		'TZ04' => __( 'Iringa', 'woocommerce' ),
		'TZ05' => __( 'Kagera', 'woocommerce' ),
		'TZ06' => __( 'Pemba North', 'woocommerce' ),
		'TZ07' => __( 'Zanzibar North', 'woocommerce' ),
		'TZ08' => __( 'Kigoma', 'woocommerce' ),
		'TZ09' => __( 'Kilimanjaro', 'woocommerce' ),
		'TZ10' => __( 'Pemba South', 'woocommerce' ),
		'TZ11' => __( 'Zanzibar South', 'woocommerce' ),
		'TZ12' => __( 'Lindi', 'woocommerce' ),
		'TZ13' => __( 'Mara', 'woocommerce' ),
		'TZ14' => __( 'Mbeya', 'woocommerce' ),
		'TZ15' => __( 'Zanzibar West', 'woocommerce' ),
		'TZ16' => __( 'Morogoro', 'woocommerce' ),
		'TZ17' => __( 'Mtwara', 'woocommerce' ),
		'TZ18' => __( 'Mwanza', 'woocommerce' ),
		'TZ19' => __( 'Coast', 'woocommerce' ),
		'TZ20' => __( 'Rukwa', 'woocommerce' ),
		'TZ21' => __( 'Ruvuma', 'woocommerce' ),
		'TZ22' => __( 'Shinyanga', 'woocommerce' ),
		'TZ23' => __( 'Singida', 'woocommerce' ),
		'TZ24' => __( 'Tabora', 'woocommerce' ),
		'TZ25' => __( 'Tanga', 'woocommerce' ),
		'TZ26' => __( 'Manyara', 'woocommerce' ),
		'TZ27' => __( 'Geita', 'woocommerce' ),
		'TZ28' => __( 'Katavi', 'woocommerce' ),
		'TZ29' => __( 'Njombe', 'woocommerce' ),
		'TZ30' => __( 'Simiyu', 'woocommerce' ),
	),
	'LK' => array(),
	'RS' => array( // Serbian districts.
		'RS00' => _x( 'Belgrade', 'district', 'woocommerce' ),
		'RS14' => _x( 'Bor', 'district', 'woocommerce' ),
		'RS11' => _x( 'Braničevo', 'district', 'woocommerce' ),
		'RS02' => _x( 'Central Banat', 'district', 'woocommerce' ),
		'RS10' => _x( 'Danube', 'district', 'woocommerce' ),
		'RS23' => _x( 'Jablanica', 'district', 'woocommerce' ),
		'RS09' => _x( 'Kolubara', 'district', 'woocommerce' ),
		'RS08' => _x( 'Mačva', 'district', 'woocommerce' ),
		'RS17' => _x( 'Morava', 'district', 'woocommerce' ),
		'RS20' => _x( 'Nišava', 'district', 'woocommerce' ),
		'RS01' => _x( 'North Bačka', 'district', 'woocommerce' ),
		'RS03' => _x( 'North Banat', 'district', 'woocommerce' ),
		'RS24' => _x( 'Pčinja', 'district', 'woocommerce' ),
		'RS22' => _x( 'Pirot', 'district', 'woocommerce' ),
		'RS13' => _x( 'Pomoravlje', 'district', 'woocommerce' ),
		'RS19' => _x( 'Rasina', 'district', 'woocommerce' ),
		'RS18' => _x( 'Raška', 'district', 'woocommerce' ),
		'RS06' => _x( 'South Bačka', 'district', 'woocommerce' ),
		'RS04' => _x( 'South Banat', 'district', 'woocommerce' ),
		'RS07' => _x( 'Srem', 'district', 'woocommerce' ),
		'RS12' => _x( 'Šumadija', 'district', 'woocommerce' ),
		'RS21' => _x( 'Toplica', 'district', 'woocommerce' ),
		'RS05' => _x( 'West Bačka', 'district', 'woocommerce' ),
		'RS15' => _x( 'Zaječar', 'district', 'woocommerce' ),
		'RS16' => _x( 'Zlatibor', 'district', 'woocommerce' ),
		'RS25' => _x( 'Kosovo', 'district', 'woocommerce' ),
		'RS26' => _x( 'Peć', 'district', 'woocommerce' ),
		'RS27' => _x( 'Prizren', 'district', 'woocommerce' ),
		'RS28' => _x( 'Kosovska Mitrovica', 'district', 'woocommerce' ),
		'RS29' => _x( 'Kosovo-Pomoravlje', 'district', 'woocommerce' ),
		'RSKM' => _x( 'Kosovo-Metohija', 'district', 'woocommerce' ),
		'RSVO' => _x( 'Vojvodina', 'district', 'woocommerce' ),
	),
	'SE' => array(),
	'UA' => array( // Ukrainian oblasts.
		'VN' => __( 'Vinnytsia Oblast', 'woocommerce' ),
		'VL' => __( 'Volyn Oblast', 'woocommerce' ),
		'DP' => __( 'Dnipropetrovsk Oblast', 'woocommerce' ),
		'DT' => __( 'Donetsk Oblast', 'woocommerce' ),
		'ZT' => __( 'Zhytomyr Oblast', 'woocommerce' ),
		'ZK' => __( 'Zakarpattia Oblast', 'woocommerce' ),
		'ZP' => __( 'Zaporizhzhia Oblast', 'woocommerce' ),
		'IF' => __( 'Ivano-Frankivsk Oblast', 'woocommerce' ),
		'KV' => __( 'Kyiv Oblast', 'woocommerce' ),
		'KH' => __( 'Kirovohrad Oblast', 'woocommerce' ),
		'LH' => __( 'Luhansk Oblast', 'woocommerce' ),
		'LV' => __( 'Lviv Oblast', 'woocommerce' ),
		'MY' => __( 'Mykolaiv Oblast', 'woocommerce' ),
		'OD' => __( 'Odessa Oblast', 'woocommerce' ),
		'PL' => __( 'Poltava Oblast', 'woocommerce' ),
		'RV' => __( 'Rivne Oblast', 'woocommerce' ),
		'SM' => __( 'Sumy Oblast', 'woocommerce' ),
		'TP' => __( 'Ternopil Oblast', 'woocommerce' ),
		'KK' => __( 'Kharkiv Oblast', 'woocommerce' ),
		'KS' => __( 'Kherson Oblast', 'woocommerce' ),
		'KM' => __( 'Khmelnytskyi Oblast', 'woocommerce' ),
		'CK' => __( 'Cherkasy Oblast', 'woocommerce' ),
		'CH' => __( 'Chernihiv Oblast', 'woocommerce' ),
		'CV' => __( 'Chernivtsi Oblast', 'woocommerce' ),
	),
	'UG' => array( // Ugandan districts.
		'UG314' => __( 'Abim', 'woocommerce' ),
		'UG301' => __( 'Adjumani', 'woocommerce' ),
		'UG322' => __( 'Agago', 'woocommerce' ),
		'UG323' => __( 'Alebtong', 'woocommerce' ),
		'UG315' => __( 'Amolatar', 'woocommerce' ),
		'UG324' => __( 'Amudat', 'woocommerce' ),
		'UG216' => __( 'Amuria', 'woocommerce' ),
		'UG316' => __( 'Amuru', 'woocommerce' ),
		'UG302' => __( 'Apac', 'woocommerce' ),
		'UG303' => __( 'Arua', 'woocommerce' ),
		'UG217' => __( 'Budaka', 'woocommerce' ),
		'UG218' => __( 'Bududa', 'woocommerce' ),
		'UG201' => __( 'Bugiri', 'woocommerce' ),
		'UG235' => __( 'Bugweri', 'woocommerce' ),
		'UG420' => __( 'Buhweju', 'woocommerce' ),
		'UG117' => __( 'Buikwe', 'woocommerce' ),
		'UG219' => __( 'Bukedea', 'woocommerce' ),
		'UG118' => __( 'Bukomansimbi', 'woocommerce' ),
		'UG220' => __( 'Bukwa', 'woocommerce' ),
		'UG225' => __( 'Bulambuli', 'woocommerce' ),
		'UG416' => __( 'Buliisa', 'woocommerce' ),
		'UG401' => __( 'Bundibugyo', 'woocommerce' ),
		'UG430' => __( 'Bunyangabu', 'woocommerce' ),
		'UG402' => __( 'Bushenyi', 'woocommerce' ),
		'UG202' => __( 'Busia', 'woocommerce' ),
		'UG221' => __( 'Butaleja', 'woocommerce' ),
		'UG119' => __( 'Butambala', 'woocommerce' ),
		'UG233' => __( 'Butebo', 'woocommerce' ),
		'UG120' => __( 'Buvuma', 'woocommerce' ),
		'UG226' => __( 'Buyende', 'woocommerce' ),
		'UG317' => __( 'Dokolo', 'woocommerce' ),
		'UG121' => __( 'Gomba', 'woocommerce' ),
		'UG304' => __( 'Gulu', 'woocommerce' ),
		'UG403' => __( 'Hoima', 'woocommerce' ),
		'UG417' => __( 'Ibanda', 'woocommerce' ),
		'UG203' => __( 'Iganga', 'woocommerce' ),
		'UG418' => __( 'Isingiro', 'woocommerce' ),
		'UG204' => __( 'Jinja', 'woocommerce' ),
		'UG318' => __( 'Kaabong', 'woocommerce' ),
		'UG404' => __( 'Kabale', 'woocommerce' ),
		'UG405' => __( 'Kabarole', 'woocommerce' ),
		'UG213' => __( 'Kaberamaido', 'woocommerce' ),
		'UG427' => __( 'Kagadi', 'woocommerce' ),
		'UG428' => __( 'Kakumiro', 'woocommerce' ),
		'UG101' => __( 'Kalangala', 'woocommerce' ),
		'UG222' => __( 'Kaliro', 'woocommerce' ),
		'UG122' => __( 'Kalungu', 'woocommerce' ),
		'UG102' => __( 'Kampala', 'woocommerce' ),
		'UG205' => __( 'Kamuli', 'woocommerce' ),
		'UG413' => __( 'Kamwenge', 'woocommerce' ),
		'UG414' => __( 'Kanungu', 'woocommerce' ),
		'UG206' => __( 'Kapchorwa', 'woocommerce' ),
		'UG236' => __( 'Kapelebyong', 'woocommerce' ),
		'UG126' => __( 'Kasanda', 'woocommerce' ),
		'UG406' => __( 'Kasese', 'woocommerce' ),
		'UG207' => __( 'Katakwi', 'woocommerce' ),
		'UG112' => __( 'Kayunga', 'woocommerce' ),
		'UG407' => __( 'Kibaale', 'woocommerce' ),
		'UG103' => __( 'Kiboga', 'woocommerce' ),
		'UG227' => __( 'Kibuku', 'woocommerce' ),
		'UG432' => __( 'Kikuube', 'woocommerce' ),
		'UG419' => __( 'Kiruhura', 'woocommerce' ),
		'UG421' => __( 'Kiryandongo', 'woocommerce' ),
		'UG408' => __( 'Kisoro', 'woocommerce' ),
		'UG305' => __( 'Kitgum', 'woocommerce' ),
		'UG319' => __( 'Koboko', 'woocommerce' ),
		'UG325' => __( 'Kole', 'woocommerce' ),
		'UG306' => __( 'Kotido', 'woocommerce' ),
		'UG208' => __( 'Kumi', 'woocommerce' ),
		'UG333' => __( 'Kwania', 'woocommerce' ),
		'UG228' => __( 'Kween', 'woocommerce' ),
		'UG123' => __( 'Kyankwanzi', 'woocommerce' ),
		'UG422' => __( 'Kyegegwa', 'woocommerce' ),
		'UG415' => __( 'Kyenjojo', 'woocommerce' ),
		'UG125' => __( 'Kyotera', 'woocommerce' ),
		'UG326' => __( 'Lamwo', 'woocommerce' ),
		'UG307' => __( 'Lira', 'woocommerce' ),
		'UG229' => __( 'Luuka', 'woocommerce' ),
		'UG104' => __( 'Luwero', 'woocommerce' ),
		'UG124' => __( 'Lwengo', 'woocommerce' ),
		'UG114' => __( 'Lyantonde', 'woocommerce' ),
		'UG223' => __( 'Manafwa', 'woocommerce' ),
		'UG320' => __( 'Maracha', 'woocommerce' ),
		'UG105' => __( 'Masaka', 'woocommerce' ),
		'UG409' => __( 'Masindi', 'woocommerce' ),
		'UG214' => __( 'Mayuge', 'woocommerce' ),
		'UG209' => __( 'Mbale', 'woocommerce' ),
		'UG410' => __( 'Mbarara', 'woocommerce' ),
		'UG423' => __( 'Mitooma', 'woocommerce' ),
		'UG115' => __( 'Mityana', 'woocommerce' ),
		'UG308' => __( 'Moroto', 'woocommerce' ),
		'UG309' => __( 'Moyo', 'woocommerce' ),
		'UG106' => __( 'Mpigi', 'woocommerce' ),
		'UG107' => __( 'Mubende', 'woocommerce' ),
		'UG108' => __( 'Mukono', 'woocommerce' ),
		'UG334' => __( 'Nabilatuk', 'woocommerce' ),
		'UG311' => __( 'Nakapiripirit', 'woocommerce' ),
		'UG116' => __( 'Nakaseke', 'woocommerce' ),
		'UG109' => __( 'Nakasongola', 'woocommerce' ),
		'UG230' => __( 'Namayingo', 'woocommerce' ),
		'UG234' => __( 'Namisindwa', 'woocommerce' ),
		'UG224' => __( 'Namutumba', 'woocommerce' ),
		'UG327' => __( 'Napak', 'woocommerce' ),
		'UG310' => __( 'Nebbi', 'woocommerce' ),
		'UG231' => __( 'Ngora', 'woocommerce' ),
		'UG424' => __( 'Ntoroko', 'woocommerce' ),
		'UG411' => __( 'Ntungamo', 'woocommerce' ),
		'UG328' => __( 'Nwoya', 'woocommerce' ),
		'UG331' => __( 'Omoro', 'woocommerce' ),
		'UG329' => __( 'Otuke', 'woocommerce' ),
		'UG321' => __( 'Oyam', 'woocommerce' ),
		'UG312' => __( 'Pader', 'woocommerce' ),
		'UG332' => __( 'Pakwach', 'woocommerce' ),
		'UG210' => __( 'Pallisa', 'woocommerce' ),
		'UG110' => __( 'Rakai', 'woocommerce' ),
		'UG429' => __( 'Rubanda', 'woocommerce' ),
		'UG425' => __( 'Rubirizi', 'woocommerce' ),
		'UG431' => __( 'Rukiga', 'woocommerce' ),
		'UG412' => __( 'Rukungiri', 'woocommerce' ),
		'UG111' => __( 'Sembabule', 'woocommerce' ),
		'UG232' => __( 'Serere', 'woocommerce' ),
		'UG426' => __( 'Sheema', 'woocommerce' ),
		'UG215' => __( 'Sironko', 'woocommerce' ),
		'UG211' => __( 'Soroti', 'woocommerce' ),
		'UG212' => __( 'Tororo', 'woocommerce' ),
		'UG113' => __( 'Wakiso', 'woocommerce' ),
		'UG313' => __( 'Yumbe', 'woocommerce' ),
		'UG330' => __( 'Zombo', 'woocommerce' ),
	),
	'UM' => array(
		'81' => __( 'Baker Island', 'woocommerce' ),
		'84' => __( 'Howland Island', 'woocommerce' ),
		'86' => __( 'Jarvis Island', 'woocommerce' ),
		'67' => __( 'Johnston Atoll', 'woocommerce' ),
		'89' => __( 'Kingman Reef', 'woocommerce' ),
		'71' => __( 'Midway Atoll', 'woocommerce' ),
		'76' => __( 'Navassa Island', 'woocommerce' ),
		'95' => __( 'Palmyra Atoll', 'woocommerce' ),
		'79' => __( 'Wake Island', 'woocommerce' ),
	),
	'US' => array( // U.S. states.
		'AL' => __( 'Alabama', 'woocommerce' ),
		'AK' => __( 'Alaska', 'woocommerce' ),
		'AZ' => __( 'Arizona', 'woocommerce' ),
		'AR' => __( 'Arkansas', 'woocommerce' ),
		'CA' => __( 'California', 'woocommerce' ),
		'CO' => __( 'Colorado', 'woocommerce' ),
		'CT' => __( 'Connecticut', 'woocommerce' ),
		'DE' => __( 'Delaware', 'woocommerce' ),
		'DC' => __( 'District Of Columbia', 'woocommerce' ),
		'FL' => __( 'Florida', 'woocommerce' ),
		'GA' => _x( 'Georgia', 'US state of Georgia', 'woocommerce' ),
		'HI' => __( 'Hawaii', 'woocommerce' ),
		'ID' => __( 'Idaho', 'woocommerce' ),
		'IL' => __( 'Illinois', 'woocommerce' ),
		'IN' => __( 'Indiana', 'woocommerce' ),
		'IA' => __( 'Iowa', 'woocommerce' ),
		'KS' => __( 'Kansas', 'woocommerce' ),
		'KY' => __( 'Kentucky', 'woocommerce' ),
		'LA' => __( 'Louisiana', 'woocommerce' ),
		'ME' => __( 'Maine', 'woocommerce' ),
		'MD' => __( 'Maryland', 'woocommerce' ),
		'MA' => __( 'Massachusetts', 'woocommerce' ),
		'MI' => __( 'Michigan', 'woocommerce' ),
		'MN' => __( 'Minnesota', 'woocommerce' ),
		'MS' => __( 'Mississippi', 'woocommerce' ),
		'MO' => __( 'Missouri', 'woocommerce' ),
		'MT' => __( 'Montana', 'woocommerce' ),
		'NE' => __( 'Nebraska', 'woocommerce' ),
		'NV' => __( 'Nevada', 'woocommerce' ),
		'NH' => __( 'New Hampshire', 'woocommerce' ),
		'NJ' => __( 'New Jersey', 'woocommerce' ),
		'NM' => __( 'New Mexico', 'woocommerce' ),
		'NY' => __( 'New York', 'woocommerce' ),
		'NC' => __( 'North Carolina', 'woocommerce' ),
		'ND' => __( 'North Dakota', 'woocommerce' ),
		'OH' => __( 'Ohio', 'woocommerce' ),
		'OK' => __( 'Oklahoma', 'woocommerce' ),
		'OR' => __( 'Oregon', 'woocommerce' ),
		'PA' => __( 'Pennsylvania', 'woocommerce' ),
		'RI' => __( 'Rhode Island', 'woocommerce' ),
		'SC' => __( 'South Carolina', 'woocommerce' ),
		'SD' => __( 'South Dakota', 'woocommerce' ),
		'TN' => __( 'Tennessee', 'woocommerce' ),
		'TX' => __( 'Texas', 'woocommerce' ),
		'UT' => __( 'Utah', 'woocommerce' ),
		'VT' => __( 'Vermont', 'woocommerce' ),
		'VA' => __( 'Virginia', 'woocommerce' ),
		'WA' => __( 'Washington', 'woocommerce' ),
		'WV' => __( 'West Virginia', 'woocommerce' ),
		'WI' => __( 'Wisconsin', 'woocommerce' ),
		'WY' => __( 'Wyoming', 'woocommerce' ),
		'AA' => __( 'Armed Forces (AA)', 'woocommerce' ),
		'AE' => __( 'Armed Forces (AE)', 'woocommerce' ),
		'AP' => __( 'Armed Forces (AP)', 'woocommerce' ),
	),
	'UY' => array( // Uruguayan states.
		'UY-AR' => __( 'Artigas', 'woocommerce' ),
		'UY-CA' => __( 'Canelones', 'woocommerce' ),
		'UY-CL' => __( 'Cerro Largo', 'woocommerce' ),
		'UY-CO' => __( 'Colonia', 'woocommerce' ),
		'UY-DU' => __( 'Durazno', 'woocommerce' ),
		'UY-FS' => __( 'Flores', 'woocommerce' ),
		'UY-FD' => __( 'Florida', 'woocommerce' ),
		'UY-LA' => __( 'Lavalleja', 'woocommerce' ),
		'UY-MA' => __( 'Maldonado', 'woocommerce' ),
		'UY-MO' => __( 'Montevideo', 'woocommerce' ),
		'UY-PA' => __( 'Paysandú', 'woocommerce' ),
		'UY-RN' => __( 'Río Negro', 'woocommerce' ),
		'UY-RV' => __( 'Rivera', 'woocommerce' ),
		'UY-RO' => __( 'Rocha', 'woocommerce' ),
		'UY-SA' => __( 'Salto', 'woocommerce' ),
		'UY-SJ' => __( 'San José', 'woocommerce' ),
		'UY-SO' => __( 'Soriano', 'woocommerce' ),
		'UY-TA' => __( 'Tacuarembó', 'woocommerce' ),
		'UY-TT' => __( 'Treinta y Tres', 'woocommerce' ),
	),
	'VE' => array( // Venezuelan states.
		'VE-A' => __( 'Capital', 'woocommerce' ),
		'VE-B' => __( 'Anzoátegui', 'woocommerce' ),
		'VE-C' => __( 'Apure', 'woocommerce' ),
		'VE-D' => __( 'Aragua', 'woocommerce' ),
		'VE-E' => __( 'Barinas', 'woocommerce' ),
		'VE-F' => __( 'Bolívar', 'woocommerce' ),
		'VE-G' => __( 'Carabobo', 'woocommerce' ),
		'VE-H' => __( 'Cojedes', 'woocommerce' ),
		'VE-I' => __( 'Falcón', 'woocommerce' ),
		'VE-J' => __( 'Guárico', 'woocommerce' ),
		'VE-K' => __( 'Lara', 'woocommerce' ),
		'VE-L' => __( 'Mérida', 'woocommerce' ),
		'VE-M' => __( 'Miranda', 'woocommerce' ),
		'VE-N' => __( 'Monagas', 'woocommerce' ),
		'VE-O' => __( 'Nueva Esparta', 'woocommerce' ),
		'VE-P' => __( 'Portuguesa', 'woocommerce' ),
		'VE-R' => __( 'Sucre', 'woocommerce' ),
		'VE-S' => __( 'Táchira', 'woocommerce' ),
		'VE-T' => __( 'Trujillo', 'woocommerce' ),
		'VE-U' => __( 'Yaracuy', 'woocommerce' ),
		'VE-V' => __( 'Zulia', 'woocommerce' ),
		'VE-W' => __( 'Federal Dependencies', 'woocommerce' ),
		'VE-X' => __( 'La Guaira (Vargas)', 'woocommerce' ),
		'VE-Y' => __( 'Delta Amacuro', 'woocommerce' ),
		'VE-Z' => __( 'Amazonas', 'woocommerce' ),
	),
	'VN' => array(),
	'YT' => array(),
	'ZA' => array( // South African states.
		'EC'  => __( 'Eastern Cape', 'woocommerce' ),
		'FS'  => __( 'Free State', 'woocommerce' ),
		'GP'  => __( 'Gauteng', 'woocommerce' ),
		'KZN' => __( 'KwaZulu-Natal', 'woocommerce' ),
		'LP'  => __( 'Limpopo', 'woocommerce' ),
		'MP'  => __( 'Mpumalanga', 'woocommerce' ),
		'NC'  => __( 'Northern Cape', 'woocommerce' ),
		'NW'  => __( 'North West', 'woocommerce' ),
		'WC'  => __( 'Western Cape', 'woocommerce' ),
	),
	'ZM' => array( // Zambian provinces.
		'ZM-01' => __( 'Western', 'woocommerce' ),
		'ZM-02' => __( 'Central', 'woocommerce' ),
		'ZM-03' => __( 'Eastern', 'woocommerce' ),
		'ZM-04' => __( 'Luapula', 'woocommerce' ),
		'ZM-05' => __( 'Northern', 'woocommerce' ),
		'ZM-06' => __( 'North-Western', 'woocommerce' ),
		'ZM-07' => __( 'Southern', 'woocommerce' ),
		'ZM-08' => __( 'Copperbelt', 'woocommerce' ),
		'ZM-09' => __( 'Lusaka', 'woocommerce' ),
		'ZM-10' => __( 'Muchinga', 'woocommerce' ),
	),
);
