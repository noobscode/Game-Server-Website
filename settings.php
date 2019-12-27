<?php
/*
* This is a config file for The Game Server Website
* Created by Alexander Nordbø (https://github.com/noobscode/)
* Latest versions - https://github.com/noobscode/Game-Server-Website
*/

//======================================================================
// General Configuration
//======================================================================

	define( "SITE_URL" , "https://example.com" );
	# Your website URL

	define( "SITE_TITLE" , "Game Server Website" );
    # Server name will be used as title

    define( "SITE_SLOGAN" , "A beautiful Bootstrap Game Server Website Template with API to battlemetrics.com and rust-servers.net" );
    # Server or project slogan, will be used as slogan and description


//======================================================================
// API Configuration
//======================================================================

// We currently support Rust-Servers.Net and Battlemetrics.com API
// Note that they both have their pros and cons due to what they give us in terms of information from the json data.

// If you want you can use them both at the same time. This way you can have a table / server list showing rust servers using rust-servers.net API
// and use battlemetrics.com API for other servers like CS, Arma, Ark etc.

define( "API_BattleMetrics_com" , "ON" );
# Enable Battlemetrics.com API

define( "API_Rustservers_net" , "OFF" );
# Enable Rust-Servers.Net API

//======================================================================
// Turn tips on/off
//======================================================================

define( "tips" , "OFF" );
# If you enable this it will insert a line between each module with a description for that module.

//======================================================================
// Social Section
//======================================================================

$DiscordInvLink = "https://discord.com";

define( "social_twitter" , "OFF" );
# Twitter Handle

//======================================================================
// Content Configuration
//======================================================================

define( "MODULE_TopHeader" , "ON" );
# Show Top Header

define( "MODULE_herotext" , "ON" );
# Display some header text above server list.

define( "MODULE_Servers" , "ON" );
# Show server list on page)

define( "MODULE_maintenance" , "ON" );
# Display maintenance status.

define( "MODULE_Cards" , "ON" );
# 3 column Bootstrap cards bellow the server list.

define( "MODULE_pricing_table" , "ON" );
# 3 column pricing table

define( "MODULE_rules" , "OFF" );
# Display rules.

define( "MODULE_rules_accordion" , "ON" );
# Display rules in a collapse menu.

define( "MODULE_faq" , "OFF" );
# Display FAQ.

define( "MODULE_faq_accordion" , "ON" );
# Display FAQ in a collapse menu.

?>