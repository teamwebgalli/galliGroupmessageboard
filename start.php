<?php
/**
 *	Elgg Group messageboard
 *	Author : Mohammed Aqeel | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Mail : info [at] webgalli[dot] com
 *	Web	: http://webgalli.com
 *	Skype : 'team.webgalli'
 *	@package Group message boards for Elgg
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */ 
elgg_register_event_handler('init', 'system', 'galliGroupmessageboard_init');

function galliGroupmessageboard_init() {
	add_group_tool_option('messageboard', elgg_echo('ggmb:enablemessageboard'), true);
	elgg_extend_view('groups/tool_latest', 'groupmessageboard/group_module');
}
