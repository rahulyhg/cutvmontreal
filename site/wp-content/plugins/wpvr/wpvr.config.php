<?php
	
	/*
	 *****
	 *****    WPVR CONFIG FILE
	 *****
	 *****    THIS CONFIG FILE IS INTENDED TO ADVANCED USERS
	 *****    IF YOU ARE NOT, PLEASE DO NOT EDIT THIS FILE !
	 *****
	 *****
	 *
	 */


	/* USER DEFINED FUNCTIONS */
	
	/* Enable debug Mode */
	define( 'WPVR_DEBUG_MODE' , FALSE );

	/* Enable API debug Mode */
	define( 'WPVR_API_DEBUG_MODE' , FALSE );

	/* Enable API RESPONSE debugging */
	define( 'WPVR_API_RESPONSE_DEBUG' , FALSE );
	define( 'WPVR_ENABLE_ASYNC_DEBUG' , FALSE );

	/* Enable API debug Mode */
	define( 'WPVR_META_DEBUG_MODE' , TRUE);

	/* Enable ASYNC SOURCES RUN */
	define( 'WPVR_ENABLE_ASYNC_RUN' , TRUE );
	define( 'WPVR_ENABLE_ASYNC_FETCH' , FALSE );

	define( 'WPVR_ASYNC_ADDING_BUFFER' , 5 );

	/* Define your own cron Endpoint */
	define( 'WPVR_CRON_ENDPOINT' , 'automation' );



	/* Enable Sandbox for testing purposes */
	define( 'WPVR_ENABLE_SANDBOX' , FALSE );
	
	/* Enable this if you have locked yourself out by mistake */
	define( 'WPVR_IS_LOCKED_OUT' , FALSE );
	
	/* Refuse sources with wanted videos bigger than this value ? */
	/* Set to FALSE to accept any number */
	define( 'WPVR_MAX_WANTED_VIDEOS' , FALSE );

	/* Automatically add video title words as tags ? */
	define( 'WPVR_TAGS_FROM_TITLE_ENABLE' , FALSE );
	
	/* Should the plugin accept empty source names ? */
	define( 'WPVR_ACCEPT_EMPTY_SOURCE_NAMES' , FALSE );
	
	/* Maximum number of Categories to autopost to  */
	define( 'WPVR_MAX_POSTING_CATS' , 255 );
	
	/* Slug for uncategorized Category*/
	define( 'WPVR_UNCATEGORIZED' , 'uncategorized' );
	
	
	/* Manage Videos Default Layout */
	/* Possible values : sgrid , bgrid , grid , list */
	define( 'WPVR_MANAGE_LAYOUT' , 'bgrid' );

	/* Manage Videos Default Videos Per Page */
	define( 'WPVR_MANAGE_PERPAGE' , 20 );
	define( 'WPVR_DEFERRED_PERPAGE' , 40 );
	define( 'WPVR_UNWANTED_PERPAGE' , 40 );

	/* Hard REfresh the AntiDuplicates Table on each Test and on each Run ? */
	/* Needs more resources */
	define( 'WPVR_ENABLE_HARD_REFRESH' , FALSE );

	/* SET THIS TO TRUE TO USE VIDEO SERVICES IMAGES WITHOUT DONWLOADING THUMBS */
	define( 'WPVR_DISABLE_THUMBS_DOWNLOAD' , FALSE );
	
	
	/* USER DEFINED FUNCTIONS */
	/*************************************************/
	/* VIDEO SERVICES */
	define( 'WPVR_ENABLE_YOUTUBE' , TRUE );
	define( 'WPVR_ENABLE_DAILYMOTION' , TRUE );
	define( 'WPVR_ENABLE_VIMEO' , TRUE );
	/* VIDEO SERVICES  */


	/* COMPONENTS */

	/* Enable/Disable the plugin Addons */
	define( 'WPVR_ENABLE_ADDONS' , TRUE );
	
	/* Enable/Disable Admin Actions */
	define( 'WPVR_ENABLE_SETTERS' , TRUE );
	
	/* Enable/Disable Use minified css assets */
	define( 'WPVR_USE_MIN_CSS' , TRUE );
	define( 'WPVR_USE_LOCAL_FONTAWESOME' , TRUE );

	/* Enable/Disable Use minified js assets */
	define( 'WPVR_USE_MIN_JS' , FALSE );
	
	/*Enable data Fillers to adapt to populate custom fields with video data*/
	define( 'WPVR_ENABLE_DATA_FILLERS' , TRUE );
	
	/* Enableor Disable Wordpress Post Formats */
	define( 'WPVR_ENABLE_POST_FORMATS' , TRUE );
	
	/* Enable this to get full video description */
	define( 'WPVR_FULL_DESC' , FALSE );
	
	
	/* COMPONENTS */
	/*************************************************/
	/* FRONT END AUTO CUSTOMIZATIONS  */

	/* Prevent from showing featured image on single video */
	define( 'WPVR_REMOVE_THUMB_SINGLE' , FALSE );
	
	/* Prevent from showing content on archive loop */
	define( 'WPVR_REMOVE_FLOW_CONTENT' , FALSE );
	
	/* Prevent from showing tags on archive loop */
	define( 'WPVR_REMOVE_FLOW_TAGS' , FALSE );
	
	/* EGFIX */
	define( 'WPVR_EG_FIX' , FALSE );

	/* Smooth Screens */
	define( 'WPVR_SMOOTH_SCREEN_ENABLED' , TRUE );

	/* FRONT AUTO CUSTOMIZATIONS  */
	/*************************************************/
	/* TEChNICAL OPTIONS  */
	
	/* Enable Hierarchy in Posting Category Select ? */
	define( 'WPVR_HIERARCHICAL_CATS_ENABLED' , TRUE );
	
	/* Buffer on Bulk Import Videos */
	define( 'WPVR_BULK_IMPORT_BUFFER' , 2 );
	
	/* Define whether to enable or no the batch adding videos button */
	define( 'WPVR_BATCH_ADDING_ENABLED' , FALSE );
	
	/* Increase PHP Max Execution Time to improve performances [in seconds] */
	define( 'WPVR_MAX_EXECUTION_TIME' , 600 );
	
	/* Force connection to APIS with credentials */
	define( 'WPVR_FORCE_CREDENTIALS_API_CONNECT' , FALSE );
	
	/* Enable/Disable Showing Demo NOtice Message */
	define( 'WPVR_IS_DEMO' , FALSE );
	
	/* Defining non admin Users capabilities */
	/**********************************************************************************/
	/* Non Admin users can manage options ? */
	define( 'WPVR_NONADMIN_CAP_OPTIONS' , TRUE );

	/* Non Admin users can show logs */
	define( 'WPVR_NONADMIN_CAP_LOG' , TRUE );

	/* Non Admin users can import sources/videos */
	define( 'WPVR_NONADMIN_CAP_IMPORT' , TRUE );
	
	/* Non Admin users can run actions (testing, running, etc ...) */
	define( 'WPVR_NONADMIN_CAP_ACTIONS' , TRUE );

	/* Non Admin users can manage imported videos ?*/
	define( 'WPVR_NONADMIN_CAP_MANAGE' , TRUE );

	/* Non Admin users can manage deferred videos ?*/
	define( 'WPVR_NONADMIN_CAP_DEFERRED' , TRUE );
	/**********************************************************************************/
	
	/* Enable Admin BAr Menu ? */
	define( 'WPVR_ENABLE_ADMINBAR_MENU' , TRUE );
	
	/* Defining non admin Users capabilities */
	/**********************************************************************************/

	/* Enable debug Mode */
	define( 'WPVR_DEV_MODE' , FALSE );

	/* Force to USe Async ACtions URL */
	define( 'WPVR_ACTIONS_URL_ASYNC_FIX' , FALSE );

	/**********************************************************************************/

	/* Change AUTH LIST NAME */
	define('WPVR_AUTH_CUSTOM_LIST', 'WPVR_USERS_'.WPVR_VERSION );

	/* TEChNICAL OPTIONS  */
	/***********************************************/

