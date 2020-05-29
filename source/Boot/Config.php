<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "cafecontroll");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "http://localhost/work5.pc/sitemvc");
define("CONF_URL_TEST", "http://localhost/work5.pc/sitemvc");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "AmorimWS");
define("CONF_SITE_TITLE", "AmorimWS");
define("CONF_SITE_DESC", "AmorimWS");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "amorimws.com");

define("CONF_SITE_ADDR_STREET", "rua");
define("CONF_SITE_ADDR_NUMBER", "número");
define("CONF_SITE_ADDR_COMPLEMENT", "complemento");
define("CONF_SITE_ADDR_CITY", "cidade");
define("CONF_SITE_ADDR_STATE", "estado");
define("CONF_SITE_ADDR_ZIPCODE", "cep");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@davimorim");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@davimorim");
define("CONF_SOCIAL_FACEBOOK_APP", "177543626910717");
define("CONF_SOCIAL_FACEBOOK_PAGE", "amorimws");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "davifranciscodeamorim");
define("CONF_SOCIAL_GOOGLE_PAGE", "107305124528362639842");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "103958419096641225872");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "amorimws");
define("CONF_SOCIAL_YOUTUBE_PAGE", "amorimws");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "message");
define("CONF_MESSAGE_INFO", "info icon-info");
define("CONF_MESSAGE_SUCCESS", "success icon-check-square-o");
define("CONF_MESSAGE_WARNING", "warning icon-warning");
define("CONF_MESSAGE_ERROR", "error icon-warning");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "cafeweb");
//define("CONF_VIEW_APP", "cafeapp");
define("CONF_VIEW_APP", "cafecontrolback");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "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");
define("CONF_MAIL_SENDER", ["name" => "saasAmorim", "address" => "suporte@amorimws.com"]);
define("CONF_MAIL_SUPPORT", "suporte@amorimws.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
