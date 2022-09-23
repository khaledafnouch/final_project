<?php


error_reporting(E_ALL | E_STRICT);

// define constants
define('PROJECT_DIR', realpath('./'));
define('LOCALE_DIR', PROJECT_DIR .'/locale');
define('DEFAULT_LOCALE', 'en_US');

require_once('../gettext.inc');

$supported_locales = array('en_US', 'sr_CS', 'de_CH');
$encoding = 'UTF-8';

$locale = (isset($_GET['lang']))? $_GET['lang'] : DEFAULT_LOCALE;

// gettext setup
T_setlocale(LC_MESSAGES, $locale);
// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, LOCALE_DIR);
// bind_textdomain_codeset is supported only in PHP 4.2.0+
if (function_exists('bind_textdomain_codeset')) 
  bind_textdomain_codeset($domain, $encoding);
textdomain($domain);

header("Content-type: text/html; charset=$encoding");
?>
<html>
<head>
<title>PHP-gettext dropin example</title>
</head>
<body>
<h1>PHP-gettext as a dropin replacement</h1>
<p>Example showing how to use PHP-gettext as a dropin replacement for the native gettext library.</p>
<?php
print "<p>";
foreach($supported_locales as $l) {
	print "[<a href=\"?lang=$l\">$l</a>] ";
}
print "</p>\n";

if (!locale_emulation()) {
	print "<p>locale '$locale' is supported by your system, using native gettext implementation.</p>\n";
}
else {
	print "<p>locale '$locale' is _not_ supported on your system, using the default locale '". DEFAULT_LOCALE ."'.</p>\n";
}
?>

<hr />

<?php
// using PHP-gettext
print "<pre>";
print _("This is how the story goes.\n\n");
for ($number=6; $number>=0; $number--) {
  print sprintf(T_ngettext("%d pig went to the market\n", 
			  "%d pigs went to the market\n", $number), 
		 $number );
}
print "</pre>\n";
?>

<hr />
<p>&laquo; <a href="./">back</a></p>
</body>
</html>
