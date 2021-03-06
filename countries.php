<?php
/**
 * @package Globe Trotter
 * @subpackage Countries
 * @version 1.8
 * @since 1.8
 * @author Osen Concepts < hi@osen.coke >
 * @link https://osen.co.ke/
 */
 
function countries( $code = null )
{
	$countries = array( 
		"" => "",
	    "AF" => "Afganistan",
	    "AL" => "Albania",
	    "DZ" => "Algeria",
	    "AS" => "American Samoa",
	    "AD" => "Andorra",
	    "AO" => "Angola",
	    "AI" => "Anguilla",
	    "AG" => "Antigua/Barbuda",
	    "AN" => "Antilles Nether.",
	    "AR" => "Argentina",
	    "AM" => "Armenia",
	    "AW" => "Aruba",
	    "AU" => "Australia",
	    "AT" => "Austria",
	    "AZ" => "Azerbaijan",
	    "BS" => "Bahamas",
	    "BH" => "Bahrein",
	    "BD" => "Bangladesh",
	    "BB" => "Barbados",
	    "BY" => "Belarus",
	    "BE" => "Belgium",
	    "BZ" => "Belize",
	    "BJ" => "Benin",
	    "BM" => "Bermudas",
	    "BT" => "Bhutan",
	    "BO" => "Bolivia",
	    "BA" => "Bosnia-Herzeg.",
	    "BW" => "Botswana",
	    "BR" => "Brazil",
	    "IO" => "British Indian Ocean Territory",
	    "VG" => "British Virgin Islands",
	    "BN" => "Brunei",
	    "BG" => "Bulgaria",
	    "BF" => "Burkina Faso",
	    "BU" => "Burma",
	    "BI" => "Burundi",
	    "KH" => "Cambodia",
	    "CM" => "Cameroon",
	    "CA" => "Canada",
	    "CV" => "Cape Verde",
	    "KY" => "Cayman (Islands)",
	    "CF" => "Central African Republic",
	    "TD" => "Chad",
	    "CL" => "Chile",
	    "CN" => "China",
	    "CO" => "Colombia",
	    "KM" => "Comoros",
	    "CG" => "Congo",
	    "CK" => "Cook (Islands)",
	    "CR" => "Costa Rica",
	    "CI" => "Côte d¿Ivoire",
	    "HR" => "Croatia",
	    "LD" => "Croatia",
	    "CU" => "Cuba",
	    "CY" => "Cyprus",
	    "CZ" => "Czech Republic",
	    "CD" => "Democratic Republic of the Congo",
	    "DK" => "Denmark",
	    "DJ" => "Djibouti",
	    "DM" => "Dominica",
	    "DO" => "Dominican Republic",
	    "TP" => "East Timor",
	    "EC" => "Ecuador",
	    "EG" => "Egypt",
	    "SV" => "El Salvador",
	    "GQ" => "Equatorial Guinea",
	    "ER" => "Eritrea",
	    "EE" => "Estonia",
	    "EF" => "Estonia",
	    "ET" => "Ethiopia",
	    "FK" => "Falkland Islands",
	    "FO" => "Faroe Islands",
	    "FJ" => "Fiji (Islands)",
	    "FI" => "Finland",
	    "FR" => "France",
	    "GF" => "French Guiana",
	    "PF" => "French Polynesia",
	    "GA" => "Gabon",
	    "GM" => "Gambia",
	    "GE" => "Georgia",
	    "DE" => "Germany",
	    "GH" => "Ghana",
	    "GI" => "Gibraltar",
	    "GR" => "Greece",
	    "GL" => "Greenland",
	    "GD" => "Grenada",
	    "GP" => "Guadeloupe",
	    "GU" => "Guam",
	    "GT" => "Guatemala",
	    "GN" => "Guinea",
	    "GW" => "Guinea-Bissau",
	    "GY" => "Guyana",
	    "HT" => "Haiti",
	    "NL" => "Holland",
	    "HN" => "Honduras",
	    "HK" => "Hong Kong",
	    "HU" => "Hungary",
	    "IS" => "Iceland",
	    "IN" => "India Sikkim",
	    "ID" => "Indonesia",
	    "IR" => "Iran",
	    "IQ" => "Iraq",
	    "IE" => "Ireland",
	    "IL" => "Israel",
	    "IT" => "Italy",
	    "JM" => "Jamaica",
	    "JP" => "Japan",
	    "JO" => "Jordan",
	    "KZ" => "Kazakhstan",
	    "KE" => "Kenya",
	    "KI" => "Kiribati",
	    "KW" => "Kuwait",
	    "KG" => "Kyrgyzstan",
	    "LA" => "Laos",
	    "LV" => "Latvia",
	    "LB" => "Lebanon",
	    "LS" => "Lesotho",
	    "LR" => "Liberia",
	    "LY" => "Libya",
	    "LI" => "Liechtenstein",
	    "LT" => "Lithuania",
	    "LU" => "Luxembourg",
	    "MO" => "Macau",
	    "MK" => "Macedonia",
	    "MG" => "Madagascar",
	    "MW" => "Malawi",
	    "MY" => "Malaysia",
	    "MV" => "Maldives",
	    "ML" => "Mali",
	    "MT" => "Malta",
	    "MH" => "Marshall Islands",
	    "MQ" => "Martinique",
	    "MR" => "Mauritania",
	    "MU" => "Mauritius",
	    "XM" => "Mayotte",
	    "MX" => "Mexico",
	    "FM" => "Micronesia",
	    "MD" => "Moldova",
	    "MC" => "Monaco",
	    "MN" => "Mongolia",
	    "ME" => "Montenegro",
	    "MS" => "Montserrat",
	    "MA" => "Morocco",
	    "MZ" => "Mozambique",
	    "MM" => "Myanmar",
	    "NA" => "Namibia",
	    "NR" => "Nauru",
	    "NP" => "Nepal",
	    "NC" => "New Caledonia",
	    "NZ" => "New Zealand",
	    "NI" => "Nicaragua",
	    "NE" => "Niger",
	    "NG" => "Nigeria",
	    "NU" => "Niue",
	    "NF" => "Norfolk Island",
	    "KR" => "North Korea",
	    "YE" => "North Yemen",
	    "MP" => "Northern Mariana Islands",
	    "NO" => "Norway",
	    "OM" => "Oman",
	    "PK" => "Pakistan",
	    "PW" => "Palau",
	    "PA" => "Panama",
	    "PG" => "Papua N. Guinea",
	    "PY" => "Paraguay",
	    "PE" => "Peru",
	    "PH" => "Philippines",
	    "PL" => "Poland",
	    "PT" => "Portugal",
	    "PR" => "Puerto Rico",
	    "QA" => "Qatar",
	    "RE" => "Reunion",
	    "RO" => "Romania",
	    "RU" => "Russian Federation",
	    "RW" => "Rwanda",
	    "KN" => "Saint Kitts and Nevis",
	    "LC" => "Saint Lucia",
	    "VC" => "Saint Vincent and the Grenadines",
	    "SB" => "Salomon Islands",
	    "WS" => "Samoa",
	    "SM" => "San Marino",
	    "ST" => "Sao Tome and Principe",
	    "SA" => "Saudi Arabia",
	    "SN" => "Senegal",
	    "RS" => "Serbia",
	    "CS" => "Serbia and Montenegro",
	    "SC" => "Seychelles",
	    "SL" => "Sierra Leone",
	    "SG" => "Singapore",
	    "SK" => "Slovak Republic",
	    "SI" => "Slovenia",
	    "SO" => "Somalia",
	    "ZA" => "South Africa",
	    "KP" => "South Korea",
	    "YD" => "South Yemen",
	    "ES" => "Spain",
	    "LK" => "Sri Lanka",
	    "SH" => "St. Helena",
	    "PM" => "St. Pierre and Miquelon",
	    "SD" => "Sudan",
	    "SR" => "Suriname",
	    "SJ" => "Svalbard and Jan Mayen",
	    "SZ" => "Swaziland",
	    "SE" => "Sweden",
	    "CH" => "Switzerland",
	    "SY" => "Syria",
	    "TW" => "Taiwan",
	    "TJ" => "Tajikistan",
	    "TZ" => "Tanzania",
	    "TH" => "Thailand",
	    "TG" => "Togo",
	    "TK" => "Tokelau",
	    "TO" => "Tonga",
	    "TT" => "Trinidad and Tobago",
	    "TN" => "Tunisia",
	    "TR" => "Turkey",
	    "TM" => "Turkmenistan",
	    "TC" => "Turks and Caicos Isl.",
	    "TV" => "Tuvalu",
	    "UG" => "Uganda",
	    "UA" => "Ukraine",
	    "AE" => "United Arab Emirates",
	    "GB" => "United Kingdom",
	    "US" => "United States",
	    "UY" => "Uruguay",
	    "VI" => "US Virgin Islands",
	    "UZ" => "Uzbekistan",
	    "VU" => "Vanuatu",
	    "VA" => "Vatican City",
	    "VE" => "Venezuela",
	    "VN" => "Vietnam",
	    "WF" => "Wallis and Futuna Isl.",
	    "ZM" => "Zambia",
	    "ZW" => "Zimbabwe"
	);

	return is_null( $code ) ? $countries : $countries[$code];
}
