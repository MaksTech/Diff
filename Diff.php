<?php

/**
 * Initialization file for the Diff extension.
 *
 * Documentation:	 		https://www.mediawiki.org/wiki/Extension:Diff
 * Support					https://www.mediawiki.org/wiki/Extension_talk:Diff
 * Source code:				https://gerrit.wikimedia.org/r/gitweb?p=mediawiki/extensions/Diff.git
 *
 * @file
 * @ingroup Diff
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

/**
 * This documentation group collects source code files belonging to Diff.
 *
 * @defgroup Diff Diff
 */

call_user_func( function() {
	// @codeCoverageIgnoreStart
	$extension = defined( 'MEDIAWIKI' ) ? 'mw' : 'standalone';
	require_once __DIR__ . '/Diff.' . $extension . '.php';
	// @codeCoverageIgnoreEnd
} );

