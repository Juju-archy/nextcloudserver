<?php

$CONFIG = [

'instanceid' => '',

'passwordsalt' => '',

'secret' => '',

'trusted_domains' =>
   [
    'nextcloud.meetfur.com',
	'https://app-5ddd8a04-cebf-45ef-a3dc-f3d4a4015067.cleverapps.io/',
	'91.208.207.223',
	'91.208.207.222',
	'91.208.207.221',
	'91.208.207.220',
	'91.208.207.218',
	'91.208.207.217',
	'91.208.207.216',
	'91.208.207.215',
	'91.208.207.214',
  ],

'datadirectory' => '/var/www/nextcloud/data',

'version' => '0.1',

'dbtype' => 'pgsql',

/**
 * Your host server name, for example ``localhost``, ``hostname``,
 * ``hostname.example.com``, or the IP address.
 * To specify a port use ``hostname:####``, for IPv6 addresses use the URI notation ``[ip]:port``.
 * To specify a Unix socket use ``/path/to/directory/containing/socket``, e.g. ``/run/postgresql/``.
 */
'dbhost' => 'bf6ctxxovyrfqlzdhnid-postgresql.services.clever-cloud.com',

'dbname' => 'bf6ctxxovyrfqlzdhnid',

'dbuser' => 'ufuj5sflkeu5xbnp1dhz',

'dbpassword' => '31DSvBzg7nosUwlZ3JuO',

'dbtableprefix' => 'oc_',

/**
 * Enable persistent connexions to the database.
 * This setting uses the "persistent" option from doctrine dbal, which in turn
 * uses the PDO::ATTR_PERSISTENT option from the pdo driver.
 */
'dbpersistent' => '',

/**
 * Specify read only replicas to be used by Nextcloud when querying the database
 */
/**'dbreplica' => [
	['user' => 'nextcloud', 'password' => 'password1', 'host' => 'replica1', 'dbname' => ''],
	['user' => 'nextcloud', 'password' => 'password2', 'host' => 'replica2', 'dbname' => ''],
],*/

'db.log_request_id' => false,

'installed' => false,

'default_language' => 'fr',

'force_language' => 'fr',

'default_locale' => 'fr_FR',

'reduce_to_languages' => [],

'default_phone_region' => 'FR',

'force_locale' => 'fr_FR',

'default_timezone' => 'Europe/Paris',

'knowledgebaseenabled' => true,

'knowledgebase.embedded' => false,

'allow_user_to_change_display_name' => true,

'skeletondirectory' => '/home/bas/app_5ddd8a04-cebf-45ef-a3dc-f3d4a4015067/core/skeleton',

'templatedirectory' => '/home/bas/app_5ddd8a04-cebf-45ef-a3dc-f3d4a4015067/templates',

/**
 * User session
 */

/**
 * Lifetime of the remember login cookie. This should be larger than the
 * session_lifetime. If it is set to 0 remember me is disabled.
 *
 * Defaults to ``60*60*24*15`` seconds (15 days)
 */
'remember_login_cookie_lifetime' => 60*60*24*30,

'session_lifetime' => 60 * 60 * 24,

'davstorage.request_timeout' => 30,

'session_relaxed_expiry' => false,

'session_keepalive' => true,

'auto_logout' => false,

'token_auth_enforced' => false,

'token_auth_activity_update' => 60,

'auth.bruteforce.protection.enabled' => true,

'auth.bruteforce.protection.testing' => false,

'ratelimit.protection.enabled' => true,

/**
 * By default, WebAuthn is available, but it can be explicitly disabled by admins
 */
'auth.webauthn.enabled' => true,

'auth.storeCryptedPassword' => true,

'hide_login_form' => false,

//lost password path link
'lost_password_link' => 'https://nextcloud.meetfur.com/lostpassword/',

/**
 * URL to use as target for the logo link in the header (top-left logo)
 *
 * Defaults to the base URL of your Nextcloud instance
 */
'logo_url' => 'https://nextcloud.meetfur.com',

/**
 * Mail Parameters
 *
 * These configure the email settings for Nextcloud notifications and password
 * resets.
 */

'mail_domain' => 'meetfur.com',

'mail_from_address' => 'nextcloud',

'mail_smtpdebug' => false,

'mail_smtpmode' => 'smtp',

'mail_smtphost' => '127.0.0.1',

'mail_smtpport' => 25,

'mail_smtptimeout' => 10,

'mail_smtpsecure' => '',

'mail_smtpauth' => false,

'mail_smtpname' => '',

'mail_smtppassword' => '',

'mail_template_class' => '\OC\Mail\EMailTemplate',

'mail_send_plaintext_only' => false,

'mail_smtpstreamoptions' => [],

'mail_sendmailmode' => 'smtp',

/**
 * Proxy Configurations
 */

'overwritehost' => '',

'overwriteprotocol' => '',

'overwritewebroot' => '',

'overwritecondaddr' => '',

'overwrite.cli.url' => '',

/**
 * To have clean URLs without `/index.php` this parameter needs to be configured.
 *
 * This parameter will be written as "RewriteBase" on update and installation of
 * Nextcloud to your `.htaccess` file. While this value is often simply the URL
 * path of the Nextcloud installation it cannot be set automatically properly in
 * every scenario and needs thus some manual configuration.
 *
 * In a standard Apache setup this usually equals the folder that Nextcloud is
 * accessible at. So if Nextcloud is accessible via "https://mycloud.org/nextcloud"
 * the correct value would most likely be "/nextcloud". If Nextcloud is running
 * under "https://mycloud.org/" then it would be "/".
 *
 * Note that the above rule is not valid in every case, as there are some rare setup
 * cases where this may not apply. However, to avoid any update problems this
 * configuration value is explicitly opt-in.
 *
 * After setting this value run `occ maintenance:update:htaccess`. Now, when the
 * following conditions are met Nextcloud URLs won't contain `index.php`:
 *
 * - `mod_rewrite` is installed
 * - `mod_env` is installed
 *
 * Defaults to ``''`` (empty string)
 */
'htaccess.RewriteBase' => '/',

/**
 * For server setups, that don't have `mod_env` enabled or restricted (e.g. suEXEC)
 * this parameter has to be set to true and will assume mod_rewrite.
 *
 * Please check, if `mod_rewrite` is active and functional before setting this
 * parameter, and you updated your .htaccess with `occ maintenance:update:htaccess`.
 * Otherwise, your nextcloud installation might not be reachable anymore.
 * For example, try accessing resources by leaving out `index.php` in the URL.
 */
'htaccess.IgnoreFrontController' => false,

'proxy' => '',

'proxyuserpwd' => '',

'proxyexclude' => [],

'allow_local_remote_servers' => true,

/**
 * Deleted Items (trash bin)
 * These parameters control the Deleted files app.
 */
'trashbin_retention_obligation' => 'auto',

'versions_retention_obligation' => 'auto',

'appcodechecker' => false,

'updatechecker' => true,

/**
 * URL that Nextcloud should use to look for updates
 *
 * Defaults to ``https://updates.nextcloud.com/updater_server/``
 */
'updater.server.url' => 'https://updates.nextcloud.com/updater_server/',

/**
 * The channel that Nextcloud should use to look for updates
 *
 * Supported values:
 *
 * - ``daily``
 * - ``beta``
 * - ``stable``
 */
'updater.release.channel' => 'stable',

/**
 * Is Nextcloud connected to the Internet or running in a closed network?
 *
 * Defaults to ``true``
 */
'has_internet_connection' => true,

/**
 * Which domains to request to determine the availability of an Internet
 * connection. If none of these hosts are reachable, the administration panel
 * will show a warning. Set to an empty list to not do any such checks (warning
 * will still be shown).
 * If no protocol is provided, both http and https will be tested.
 * For example, 'http://www.nextcloud.com' and 'https://www.nextcloud.com'
 * will be tested for 'www.nextcloud.com'
 * If a protocol is provided, only this one will be tested.
 *
 * Defaults to the following domains:
 *
 *  - www.nextcloud.com
 *  - www.startpage.com
 *  - www.eff.org
 *  - www.edri.org
 */
'connectivity_check_domains' => [
	'www.nextcloud.com',
	'www.startpage.com',
	'www.eff.org',
	'www.edri.org'
],

'check_for_working_wellknown_setup' => true,

'check_for_working_htaccess' => true,

'check_data_directory_permissions' => true,

/** ---------------------------Very important !!!! --------------------------------------------------
 * In certain environments it is desired to have a read-only configuration file.
 * When this switch is set to ``true``, writing to the config file will be
 * forbidden. Therefore, it will not be possible to configure all options via
 * the Web interface. Furthermore, when updating Nextcloud it is required to
 * make the configuration file writable again and to set this switch to ``false``
 * for the update process.
 *
 * Defaults to ``false``
 */
'config_is_read_only' => false,

/**
 * Logging
 */

/**
 * This parameter determines where the Nextcloud logs are sent.
 * ``file``: the logs are written to file ``nextcloud.log`` in the default
 * Nextcloud data directory. The log file can be changed with parameter
 * ``logfile``.
 * ``syslog``: the logs are sent to the system log. This requires a syslog daemon
 * to be active.
 * ``errorlog``: the logs are sent to the PHP ``error_log`` function.
 * ``systemd``: the logs are sent to the Systemd journal. This requires a system
 * that runs Systemd and the Systemd journal. The PHP extension ``systemd``
 * must be installed and active.
 *
 * Defaults to ``file``
 */
'log_type' => 'file',

/**
 * This parameter determines where the audit logs are sent. See ``log_type`` for more information.
 *
 * Defaults to ``file``
 */
'log_type_audit' => 'file',

/**
 * Name of the file to which the Nextcloud logs are written if parameter
 * ``log_type`` is set to ``file``.
 *
 * Defaults to ``[datadirectory]/nextcloud.log``
 */
'logfile' => '/var/log/nextcloud.log',

/**
 * Name of the file to which the audit logs are written if parameter
 * ``log_type`` is set to ``file``.
 *
 * Defaults to ``[datadirectory]/audit.log``
 */
'logfile_audit' => '/var/log/audit.log',

/**
 * Log file mode for the Nextcloud logging type in octal notation.
 *
 * Defaults to 0640 (writeable by user, readable by group).
 */
'logfilemode' => 0640,

/**
 * Loglevel to start logging at. Valid values are: 0 = Debug, 1 = Info, 2 =
 * Warning, 3 = Error, and 4 = Fatal. The default value is Warning.
 *
 * Defaults to ``2``
 */
'loglevel' => 0,

/**
 * Loglevel used by the frontend to start logging at. The same values as
 * for ``loglevel`` can be used. If not set it defaults to the value
 * configured for ``loglevel`` or Warning if that is not set either.
 *
 * Defaults to ``2``
 */
'loglevel_frontend' => 0,

/**
 * Loglevel used by the dirty database query detection. Useful to identify
 * potential database bugs in production. Set this to loglevel or higher to
 * see dirty queries in the logs.
 *
 * Defaults to ``0`` (debug)
 */
'loglevel_dirty_database_queries' => 0,

/**
 * If you maintain different instances and aggregate the logs, you may want
 * to distinguish between them. ``syslog_tag`` can be set per instance
 * with a unique id. Only available if ``log_type`` is set to ``syslog`` or
 * ``systemd``.
 *
 * The default value is ``Nextcloud``.
 */
'syslog_tag' => 'Nextcloud',

/**
 * If you maintain different instances and aggregate the logs, you may want
 * to distinguish between them. ``syslog_tag_audit`` can be set per instance
 * with a unique id. Only available if ``log_type`` is set to ``syslog`` or
 * ``systemd``.
 *
 * The default value is the value of ``syslog_tag``.
 */
'syslog_tag_audit' => 'Nextcloud',

/**
 * Log condition for log level increase based on conditions. Once one of these
 * conditions is met, the required log level is set to debug. This allows to
 * debug specific requests, users or apps
 *
 * Supported conditions:
 *  - ``shared_secret``: if a request parameter with the name `log_secret` is set to
 *                this value the condition is met
 *  - ``users``:  if the current request is done by one of the specified users,
 *                this condition is met
 *  - ``apps``:   if the log message is invoked by one of the specified apps,
 *                this condition is met
 *  - ``matches``: if all the conditions inside a group match,
 *                this condition is met. This allows to log only entries to an app
 *                by a few users.
 *
 * Defaults to an empty array.
 */
'log.condition' => [
	'shared_secret' => '57b58edb6637fe3059b3595cf9c41b9',
	'users' => ['sample-user'],
	'apps' => ['files'],
	'matches' => [
		[
			'shared_secret' => '57b58edb6637fe3059b3595cf9c41b9',
			'users' => ['sample-user'],
			'apps' => ['files'],
			'loglevel' => 1,
			'message' => 'contains substring'
		],
	],
],

/**
 * Enables logging a backtrace with each log line. Normally, only Exceptions
 * are carrying backtrace information which are logged automatically. This
 * switch turns them on for any log message. Enabling this option will lead
 * to increased log data size.
 *
 * Defaults to ``false``.
 */
'log.backtrace' => false,

/**
 * This uses PHP.date formatting; see https://www.php.net/manual/en/function.date.php
 *
 * Defaults to ISO 8601 ``2005-08-15T15:52:01+00:00`` - see \DateTime::ATOM
 * (https://www.php.net/manual/en/class.datetime.php#datetime.constants.atom)
 */
'logdateformat' => 'F d, Y H:i:s',

/**
 * The timezone for logfiles. You may change this; see
 * https://www.php.net/manual/en/timezones.php
 *
 * Defaults to ``UTC``
 */
'logtimezone' => 'Europe/Paris',

/**
 * Append all database queries and parameters to the log file. Use this only for
 * debugging, as your logfile will become huge.
 */
'log_query' => false,

/**
 * Enables log rotation and limits the total size of logfiles. Set it to 0 for
 * no rotation. Specify a size in bytes, for example 104857600 (100 megabytes
 * = 100 * 1024 * 1024 bytes). A new logfile is created with a new name when the
 * old logfile reaches your limit. If a rotated log file is already present, it
 * will be overwritten.
 *
 * Defaults to 100 MB
 */
'log_rotate_size' => 100 * 1024 * 1024,

/**
 * Enable built-in profiler. Helpful when trying to debug performance
 * issues.
 *
 * Note that this has a performance impact and shouldn't be enabled
 * on production.
 */
'profiler' => false,

/**
 * Alternate Code Locations
 *
 * Some Nextcloud code may be stored in alternate locations.
 */

/**
 * This section is for configuring the download links for Nextcloud clients, as
 * seen in the first-run wizard and on Personal pages.
 *
 * Defaults to:
 *
 * - Desktop client: ``https://nextcloud.com/install/#install-clients``
 * - Android client: ``https://play.google.com/store/apps/details?id=com.nextcloud.client``
 * - iOS client: ``https://itunes.apple.com/us/app/nextcloud/id1125420102?mt=8``
 * - iOS client app id: ``1125420102``
 * - F-Droid client: ``https://f-droid.org/packages/com.nextcloud.client/``
 */
'customclient_desktop' =>
	'https://nextcloud.com/install/#install-clients',
'customclient_android' =>
	'https://play.google.com/store/apps/details?id=com.nextcloud.client',
'customclient_ios' =>
	'https://itunes.apple.com/us/app/nextcloud/id1125420102?mt=8',
'customclient_ios_appid' =>
		'1125420102',
'customclient_fdroid' =>
	'https://f-droid.org/packages/com.nextcloud.client/',
/**
 * Apps
 *
 * Options for the Apps folder, Apps store, and App code checker.
 */

/**
 * Set the default app to open on login. Use the app names as they appear in the
 * URL after clicking them in the Apps menu, such as documents, calendar, and
 * gallery. You can use a comma-separated list of app names, so if the first
 * app is not enabled for a user then Nextcloud will try the second one, and so
 * on. If no enabled apps are found it defaults to the dashboard app.
 *
 * Defaults to ``dashboard,files``
 */
'defaultapp' => 'dashboard,files',

/**
 * When enabled, admins may install apps from the Nextcloud app store.
 *
 * Defaults to ``true``
 */
'appstoreenabled' => true,

/**
 * Enables the installation of apps from a self-hosted apps store.
 * Requires that at least one of the configured apps directories is writeable.
 *
 * Defaults to ``https://apps.nextcloud.com/api/v1``
 */
'appstoreurl' => 'https://apps.nextcloud.com/api/v1',

/**
 * Filters allowed installable apps from the appstore.
 * Empty array will prevent all apps from the store to be found.
 */
'appsallowlist' => [],

/**
 * Use the ``apps_paths`` parameter to set the location of the Apps directory,
 * which should be scanned for available apps, and where user-specific apps
 * should be installed from the Apps store. The ``path`` defines the absolute
 * file system path to the app folder. The key ``url`` defines the HTTP Web path
 * to that folder, starting from the Nextcloud webroot. The key ``writable``
 * indicates if a Web server can write files to that folder.
 */
'apps_paths' => [
	[
		'path'=> '/home/bas/app_5ddd8a04-cebf-45ef-a3dc-f3d4a4015067/',
		'url' => '/apps',
		'writable' => true,
	],
],

/**
 * @see appcodechecker
 */

/**
 * Previews
 *
 * Nextcloud supports previews of image files, the covers of MP3 files, and text
 * files. These options control enabling and disabling previews, and thumbnail
 * size.
 */

/**
 * By default, Nextcloud can generate previews for the following filetypes:
 *
 * - Image files
 * - Covers of MP3 files
 * - Text documents
 *
 * Valid values are ``true``, to enable previews, or
 * ``false``, to disable previews
 *
 * Defaults to ``true``
 */
'enable_previews' => true,

/**
 * Number of all preview requests being processed concurrently,
 * including previews that need to be newly generated, and those that have
 * been generated.
 *
 * This should be greater than 'preview_concurrency_new'.
 * If unspecified, defaults to twice the value of 'preview_concurrency_new'.
 */
'preview_concurrency_all' => 8,

/**
 * Number of new previews that are being concurrently generated.
 *
 * Depending on the max preview size set by 'preview_max_x' and 'preview_max_y',
 * the generation process can consume considerable CPU and memory resources.
 * It's recommended to limit this to be no greater than the number of CPU cores.
 * If unspecified, defaults to the number of CPU cores, or 4 if that cannot
 * be determined.
 */
'preview_concurrency_new' => 4,

/**
 * The maximum width, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 *
 * Defaults to ``4096``
 */
'preview_max_x' => 4096,
/**
 * The maximum height, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 *
 * Defaults to ``4096``
 */
'preview_max_y' => 4096,

/**
 * Max file size for generating image previews with imagegd (default behavior).
 * If the image is bigger, it'll try other preview generators, but will most
 * likely either show the default mimetype icon or not display the image at all.
 * Set to ``-1`` for no limit and try to generate image previews on all file sizes.
 *
 * Defaults to ``50`` megabytes
 */
'preview_max_filesize_image' => 50,

/**
 * max memory for generating image previews with imagegd (default behavior)
 * Reads the image dimensions from the header and assumes 32 bits per pixel.
 * If creating the image would allocate more memory, preview generation will
 * be disabled and the default mimetype icon is shown. Set to -1 for no limit.
 *
 * Defaults to ``256`` megabytes
 */
'preview_max_memory' => 256,

/**
 * custom path for LibreOffice/OpenOffice binary
 *
 *
 * Defaults to ``''`` (empty string)
 */
'preview_libreoffice_path' => '/usr/bin/libreoffice',

/**
 * custom path for ffmpeg binary
 *
 * Defaults to ``null`` and falls back to searching ``avconv`` and ``ffmpeg`` 
 * in the configured ``PATH`` environment
 */
'preview_ffmpeg_path' => '/usr/bin/ffmpeg',

/**
 * Set the URL of the Imaginary service to send image previews to.
 * Also requires the ``OC\Preview\Imaginary`` provider to be enabled in the 
 * ``enabledPreviewProviders`` array, to create previews for these mimetypes: bmp, 
 * x-bitmap, png, jpeg, gif, heic, heif, svg+xml, tiff, webp and illustrator.
 *
 * If you want Imaginary to also create preview images from PDF Documents, you 
 * have to add the ``OC\Preview\ImaginaryPDF`` provider as well.
 *
 * See https://github.com/h2non/imaginary
 */
'preview_imaginary_url' => 'http://previews_hpb:8088/',

/**
 * If you want set a api key for imaginary.
 */
'preview_imaginary_key' => 'secret',

/**
 * Only register providers that have been explicitly enabled
 *
 * The following providers are disabled by default due to performance or privacy
 * concerns:
 *
 *  - ``OC\Preview\Font``
 *  - ``OC\Preview\HEIC``
 *  - ``OC\Preview\Illustrator``
 *  - ``OC\Preview\Movie``
 *  - ``OC\Preview\MSOffice2003``
 *  - ``OC\Preview\MSOffice2007``
 *  - ``OC\Preview\MSOfficeDoc``
 *  - ``OC\Preview\PDF``
 *  - ``OC\Preview\Photoshop``
 *  - ``OC\Preview\Postscript``
 *  - ``OC\Preview\StarOffice``
 *  - ``OC\Preview\SVG``
 *  - ``OC\Preview\TIFF``
 *  - ``OC\Preview\EMF``
 *
 *
 * Defaults to the following providers:
 *
 *  - ``OC\Preview\BMP``
 *  - ``OC\Preview\GIF``
 *  - ``OC\Preview\JPEG``
 *  - ``OC\Preview\Krita``
 *  - ``OC\Preview\MarkDown``
 *  - ``OC\Preview\MP3``
 *  - ``OC\Preview\OpenDocument``
 *  - ``OC\Preview\PNG``
 *  - ``OC\Preview\TXT``
 *  - ``OC\Preview\XBitmap``
 */
'enabledPreviewProviders' => [
	'OC\Preview\BMP',
	'OC\Preview\GIF',
	'OC\Preview\JPEG',
	'OC\Preview\Krita',
	'OC\Preview\MarkDown',
	'OC\Preview\MP3',
	'OC\Preview\OpenDocument',
	'OC\Preview\PNG',
	'OC\Preview\TXT',
	'OC\Preview\XBitmap',
],

/**
 * Maximum file size for metadata generation.
 * If a file exceeds this size, metadata generation will be skipped.
 * Note: memory equivalent to this size will be used for metadata generation.
 *
 * Default: 256 megabytes.
 */
'metadata_max_filesize' => 256,

/**
 * LDAP
 *
 * Global settings used by LDAP User and Group Backend
 */

/**
 * defines the interval in minutes for the background job that checks user
 * existence and marks them as ready to be cleaned up. The number is always
 * minutes. Setting it to 0 disables the feature.
 * See command line (occ) methods ``ldap:show-remnants`` and ``user:delete``
 *
 * Defaults to ``51`` minutes
 */
'ldapUserCleanupInterval' => 51,

/**
 * Sort groups in the user settings by name instead of the user count
 *
 * By enabling this the user count beside the group name is disabled as well.
 * @deprecated since Nextcloud 29 - Use the frontend instead or set the app config value `group.sortBy` for `core` to `2`
 */
'sort_groups_by_name' => false,

/**
 * Comments
 *
 * Global settings for the Comments infrastructure
 */

/**
 * Replaces the default Comments Manager Factory. This can be utilized if an
 * own or 3rdParty CommentsManager should be used that – for instance – uses the
 * filesystem instead of the database to keep the comments.
 *
 * Defaults to ``\OC\Comments\ManagerFactory``
 */
'comments.managerFactory' => '\OC\Comments\ManagerFactory',

/**
 * Replaces the default System Tags Manager Factory. This can be utilized if an
 * own or 3rdParty SystemTagsManager should be used that – for instance – uses the
 * filesystem instead of the database to keep the tags.
 *
 * Defaults to ``\OC\SystemTag\ManagerFactory``
 */
'systemtags.managerFactory' => '\OC\SystemTag\ManagerFactory',

/**
 * Maintenance
 *
 * These options are for halting user activity when you are performing server
 * maintenance.
 */

/**
 * Enable maintenance mode to disable Nextcloud
 *
 * If you want to prevent users from logging in to Nextcloud before you start
 * doing some maintenance work, you need to set the value of the maintenance
 * parameter to true. Please keep in mind that users who are already logged-in
 * are kicked out of Nextcloud instantly.
 *
 * Defaults to ``false``
 */
'maintenance' => false,

/**
 * UTC Hour for maintenance windows
 *
 * Some background jobs only run once a day. When an hour is defined for this config,
 * the background jobs which advertise themselves as not time sensitive will be
 * delayed during the "working" hours and only run in the 4 hours after the given time.
 * This is e.g. used for activity expiration, suspicious login training and update checks.
 *
 * A value of 1 e.g. will only run these background jobs between 01:00am UTC and 05:00am UTC.
 *
 * Defaults to ``100`` which disables the feature
 */
'maintenance_window_start' => 1,

/**
 * Log all LDAP requests into a file
 *
 * Warning: This heavily decreases the performance of the server and is only
 * meant to debug/profile the LDAP interaction manually.
 * Also, it might log sensitive data into a plain text file.
 */
'ldap_log_file' => '',

/**
 * SSL
 */

/**
 * Extra SSL options to be used for configuration.
  *
 * Defaults to an empty array.
 */
/**'openssl' => [
	'config' => '/absolute/location/of/openssl.cnf',
],*/

/**
 * Memory caching backend configuration
 *
 * Available cache backends:
 *
 * * ``\OC\Memcache\APCu``       APC user backend
 * * ``\OC\Memcache\ArrayCache`` In-memory array-based backend (not recommended)
 * * ``\OC\Memcache\Memcached``  Memcached backend
 * * ``\OC\Memcache\Redis``      Redis backend
 *
 * Advice on choosing between the various backends:
 *
 * * APCu should be easiest to install. Almost all distributions have packages.
 *   Use this for single user environment for all caches.
 * * Use Redis or Memcached for distributed environments.
 *   For the local cache (you can configure two) take APCu.
 */

/**
 * Memory caching backend for locally stored data
 *
 * * Used for host-specific data, e.g. file paths
 *
 * Defaults to ``none``
 */
'memcache.local' => 'none',

/**
 * Memory caching backend for distributed data
 *
 * * Used for installation-specific data, e.g. database caching
 * * If unset, defaults to the value of memcache.local
 *
 * Defaults to ``none``
 */
'memcache.distributed' => 'none',

/**
 * Connection details for redis to use for memory caching in a single server configuration.
 *
 * For enhanced security it is recommended to configure Redis
 * to require a password. See http://redis.io/topics/security
 * for more information.
 *
 * We also support redis SSL/TLS encryption as of version 6.
 * See https://redis.io/topics/encryption for more information.
 */
/** 'redis' => [
	'host' => 'localhost', // can also be a unix domain socket: '/tmp/redis.sock'
	'port' => 6379,
	'timeout' => 0.0,
	'read_timeout' => 0.0,
	'user' =>  '', // Optional: if not defined, no password will be used.
	'password' => '', // Optional: if not defined, no password will be used.
	'dbindex' => 0, // Optional: if undefined SELECT will not run and will use Redis Server's default DB Index.
	// If redis in-transit encryption is enabled, provide certificates
	// SSL context https://www.php.net/manual/en/context.ssl.php
	'ssl_context' => [
		'local_cert' => '/certs/redis.crt',
		'local_pk' => '/certs/redis.key',
		'cafile' => '/certs/ca.crt'
	]
],*/

/**
 * Connection details for a Redis Cluster.
 *
 * Redis Cluster support requires the php module phpredis in version 3.0.0 or
 * higher.
 *
 * Available failover modes:
 *  - \RedisCluster::FAILOVER_NONE - only send commands to master nodes (default)
 *  - \RedisCluster::FAILOVER_ERROR - failover to slaves for read commands if master is unavailable (recommended)
 *  - \RedisCluster::FAILOVER_DISTRIBUTE - randomly distribute read commands across master and slaves
 *
 * WARNING: FAILOVER_DISTRIBUTE is a not recommended setting, and we strongly
 * suggest to not use it if you use Redis for file locking. Due to the way Redis
 * is synchronized it could happen, that the read for an existing lock is
 * scheduled to a slave that is not fully synchronized with the connected master
 * which then causes a FileLocked exception.
 *
 * See https://redis.io/topics/cluster-spec for details about the Redis cluster
 *
 * Authentication works with phpredis version 4.2.1+. See
 * https://github.com/phpredis/phpredis/commit/c5994f2a42b8a348af92d3acb4edff1328ad8ce1
 */
/*'redis.cluster' => [
	'seeds' => [ // provide some or all of the cluster servers to bootstrap discovery, port required
		'localhost:7000',
		'localhost:7001',
	],
	'timeout' => 0.0,
	'read_timeout' => 0.0,
	'failover_mode' => \RedisCluster::FAILOVER_ERROR,
	'user' =>  '', // Optional: if not defined, no password will be used.
	'password' => '', // Optional: if not defined, no password will be used.
	// If redis in-transit encryption is enabled, provide certificates
	// SSL context https://www.php.net/manual/en/context.ssl.php
	'ssl_context' => [
		'local_cert' => '/certs/redis.crt',
		'local_pk' => '/certs/redis.key',
		'cafile' => '/certs/ca.crt'
	]
],*/


/**
 * Server details for one or more memcached servers to use for memory caching.
 */
/*'memcached_servers' => [
	// hostname, port and optional weight
	// or path and port 0 for unix socket. Also see:
	// https://www.php.net/manual/en/memcached.addservers.php
	// https://www.php.net/manual/en/memcached.addserver.php
	['localhost', 11211],
	//array('other.host.local', 11211),
],*/

/**
 * Connection options for memcached
 */
/*'memcached_options' => [
	// Set timeouts to 50ms
	\Memcached::OPT_CONNECT_TIMEOUT => 50,
	\Memcached::OPT_RETRY_TIMEOUT =>   50,
	\Memcached::OPT_SEND_TIMEOUT =>    50,
	\Memcached::OPT_RECV_TIMEOUT =>    50,
	\Memcached::OPT_POLL_TIMEOUT =>    50,

	// Enable compression
	\Memcached::OPT_COMPRESSION =>          true,

	// Turn on consistent hashing
	\Memcached::OPT_LIBKETAMA_COMPATIBLE => true,

	// Enable Binary Protocol
	\Memcached::OPT_BINARY_PROTOCOL =>      true,

	// Binary serializer vill be enabled if the igbinary PECL module is available
	//\Memcached::OPT_SERIALIZER => \Memcached::SERIALIZER_IGBINARY,
],*/


/**
 * Location of the cache folder, defaults to ``data/$user/cache`` where
 * ``$user`` is the current user. When specified, the format will change to
 * ``$cache_path/$user`` where ``$cache_path`` is the configured cache directory
 * and ``$user`` is the user.
 *
 * Defaults to ``''`` (empty string)
 */
'cache_path' => '',

/**
 * TTL of chunks located in the cache folder before they're removed by
 * garbage collection (in seconds). Increase this value if users have
 * issues uploading very large files via the Nextcloud Client as upload isn't
 * completed within one day.
 *
 * Defaults to ``60*60*24`` (1 day)
 */
'cache_chunk_gc_ttl' => 60*60*24,

/**
 * Using Object Store with Nextcloud
 */

/**
 * This example shows how to configure Nextcloud to store all files in a
 * swift object storage.
 *
 * It is important to note that Nextcloud in object store mode will expect
 * exclusive access to the object store container because it only stores the
 * binary data for each file. The metadata is currently kept in the local
 * database for performance reasons.
 *
 * WARNING: The current implementation is incompatible with any app that uses
 * direct file IO and circumvents our virtual filesystem. That includes
 * Encryption and Gallery. Gallery will store thumbnails directly in the
 * filesystem and encryption will cause severe overhead because key files need
 * to be fetched in addition to any requested file.
 *
 */
/*'objectstore' => [
	'class' => 'OC\\Files\\ObjectStore\\Swift',
	'arguments' => [
		// trystack will use your facebook id as the username
		'username' => 'facebook100000123456789',
		// in the trystack dashboard go to user -> settings -> API Password to
		// generate a password
		'password' => 'Secr3tPaSSWoRdt7',
		// must already exist in the objectstore, name can be different
		'container' => 'nextcloud',
		// prefix to prepend to the fileid, default is 'oid:urn:'
		'objectPrefix' => 'oid:urn:',
		// create the container if it does not exist. default is false
		'autocreate' => true,
		// required, dev-/trystack defaults to 'RegionOne'
		'region' => 'RegionOne',
		// The Identity / Keystone endpoint
		'url' => 'http://8.21.28.222:5000/v2.0',
		// uploadPartSize: size of the uploaded chunks, defaults to 524288000
		'uploadPartSize' => 524288000,
		// required on dev-/trystack
		'tenantName' => 'facebook100000123456789',
		// dev-/trystack uses swift by default, the lib defaults to 'cloudFiles'
		// if omitted
		'serviceName' => 'swift',
		// The Interface / url Type, optional
		'urlType' => 'internal'
	],
],*/

/**
 * To use swift V3
 */
/*'objectstore' => [
	'class' => 'OC\\Files\\ObjectStore\\Swift',
	'arguments' => [
		'autocreate' => true,
		'user' => [
			'name' => 'swift',
			'password' => 'swift',
			'domain' => [
				'name' => 'default',
			],
		],
		'scope' => [
			'project' => [
				'name' => 'service',
				'domain' => [
					'name' => 'default',
				],
			],
		],
		'tenantName' => 'service',
		'serviceName' => 'swift',
		'region' => 'regionOne',
		'url' => 'http://yourswifthost:5000/v3',
		'bucket' => 'nextcloud',
	],
],*/

/**
 * If this is set to true and a multibucket object store is configured then
 * newly created previews are put into 256 dedicated buckets.
 *
 * Those buckets are named like the mulibucket version but with the postfix
 * ``-preview-NUMBER`` where NUMBER is between 0 and 255.
 *
 * Keep in mind that only previews of files are put in there that don't have
 * some already. Otherwise, the old bucket will be used.
 *
 * To migrate existing previews to this new multibucket distribution of previews
 * use the occ command ``preview:repair``. For now this will only migrate
 * previews that were generated before Nextcloud 19 in the flat
 * ``appdata_INSTANCEID/previews/FILEID`` folder structure.
 */
'objectstore.multibucket.preview-distribution' => false,


/**
 * Sharing
 *
 * Global settings for Sharing
 */

/**
 * Replaces the default Share Provider Factory. This can be utilized if
 * own or 3rdParty Share Providers are used that – for instance – use the
 * filesystem instead of the database to keep the share information.
 *
 * Defaults to ``\OC\Share20\ProviderFactory``
 */
'sharing.managerFactory' => '\OC\Share20\ProviderFactory',

/**
 * Enables expiration for link share passwords sent by email (sharebymail).
 * The passwords will expire after the configured interval, the users can
 * still request a new one in the public link page.
 */
'sharing.enable_mail_link_password_expiration' => false,

/**
 * Expiration interval for passwords, in seconds.
 */
'sharing.mail_link_password_expiration_interval' => 3600,

/**
 * Define max number of results returned by the search for auto-completion of
 * users, groups, etc. The value must not be lower than 0 (for unlimited).
 *
 * If more, different sources are requested (e.g. different user backends; or
 * both users and groups), the value is applied per source and might not be
 * truncated after collecting the results. I.e. more results can appear than
 * configured here.
 *
 * Default is 25.
 */
'sharing.maxAutocompleteResults' => 25,

/**
 * Define the minimum length of the search string before we start auto-completion
 * Default is no limit (value set to 0)
 */
'sharing.minSearchStringLength' => 0,

/**
 * Set to true to enable that internal shares need to be accepted by the users by default.
 * Users can change this for their account in their personal sharing settings
 */
'sharing.enable_share_accept' => false,

/**
 * Set to true to enforce that internal shares need to be accepted
 */
'sharing.force_share_accept' => false,

/**
 * Set to ``false``, to prevent users from setting a custom share_folder
 */
'sharing.allow_custom_share_folder' => true,

/**
 * Define a default folder for shared files and folders other than root.
 * Changes to this value will only have effect on new shares.
 *
 * Defaults to ``/``
 */
'share_folder' => '/',

/**
 * Set to ``false``, to stop sending a mail when users receive a share
 */
'sharing.enable_share_mail' => true,

/**
 * Set to true to enable the feature to add exceptions for share password enforcement
 */
'sharing.allow_disabled_password_enforcement_groups' => false,

/**
 * Set to true to always transfer incoming shares by default
 * when running "occ files:transfer-ownership".
 * Defaults to false, so incoming shares are not transferred if not specifically requested
 * by a command line argument.
 */
'transferIncomingShares' => false,

/**
 * Hashing
 */

/**
 * By default, Nextcloud will use the Argon2 password hashing if available.
 * However, if for whatever reason you want to stick with the PASSWORD_DEFAULT
 * of your php version. Then set the setting to true.
 *
 * Nextcloud uses the Argon2 algorithm (with PHP >= 7.2) to create hashes by its
 * own and exposes its configuration options as following. More information can
 * be found at: https://www.php.net/manual/en/function.password-hash.php
 */
'hashing_default_password' => false,

/**
 * The number of CPU threads to be used by the algorithm for computing a hash.
 * The value must be an integer, and the minimum value is 1. Rationally it does
 * not help to provide a number higher than the available threads on the machine.
 * Values that undershoot the minimum will be ignored in favor of the minimum.
 */
'hashingThreads' => PASSWORD_ARGON2_DEFAULT_THREADS,

/**
 * The memory in KiB to be used by the algorithm for computing a hash. The value
 * must be an integer, and the minimum value is 8 times the number of CPU threads.
 * Values that undershoot the minimum will be ignored in favor of the minimum.
 */
'hashingMemoryCost' => PASSWORD_ARGON2_DEFAULT_MEMORY_COST,

/**
 * The number of iterations that are used by the algorithm for computing a hash.
 * The value must be an integer, and the minimum value is 1. Values that
 * undershoot the minimum will be ignored in favor of the minimum.
 */
'hashingTimeCost' => PASSWORD_ARGON2_DEFAULT_TIME_COST,

/**
 * The hashing cost used by hashes generated by Nextcloud
 * Using a higher value requires more time and CPU power to calculate the hashes
 */
'hashingCost' => 10,

/**
 * All other configuration options
 */

/**
 * Additional driver options for the database connection, e.g. to enable SSL
 * encryption in MySQL or specify a custom wait timeout on a cheap hoster.
 *
 * When setting up TLS/SSL for encrypting the connections, you need to ensure that
 * the passed keys and certificates are readable by the PHP process. In addition,
 * PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT might need to be set to false, if the
 * database servers certificates CN does not match with the hostname used to connect.
 * The standard behavior here is different from the MySQL/MariaDB CLI client, which
 * does not verify the server cert except --ssl-verify-server-cert is passed manually.
 */
/*'dbdriveroptions' => [
	PDO::MYSQL_ATTR_SSL_CA => '/file/path/to/ca_cert.pem',
	PDO::MYSQL_ATTR_SSL_KEY => '/file/path/to/mysql-client-key.pem',
	PDO::MYSQL_ATTR_SSL_CERT => '/file/path/to/mysql-client-cert.pem',
	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET wait_timeout = 28800'
],*/

/**
 * sqlite3 journal mode can be specified using this configuration parameter -
 * can be 'WAL' or 'DELETE' see for more details https://www.sqlite.org/wal.html
 */
//'sqlite.journal_mode' => 'DELETE',

/**
 * During setup, if requirements are met (see below), this setting is set to true
 * and MySQL can handle 4 byte characters instead of 3 byte characters.
 *
 * If you want to convert an existing 3-byte setup into a 4-byte setup please
 * set the parameters in MySQL as mentioned below and run the migration command:
 * ./occ db:convert-mysql-charset
 * The config setting will be set automatically after a successful run.
 *
 * Consult the documentation for more details.
 *
 * MySQL requires a special setup for longer indexes (> 767 bytes) which are
 * needed:
 *
 * [mysqld]
 * innodb_large_prefix=ON
 * innodb_file_format=Barracuda
 * innodb_file_per_table=ON
 *
 * Tables will be created with
 *  * character set: utf8mb4
 *  * collation:     utf8mb4_bin
 *  * row_format:    dynamic
 *
 * See:
 * https://dev.mysql.com/doc/refman/5.7/en/charset-unicode-utf8mb4.html
 * https://dev.mysql.com/doc/refman/5.7/en/innodb-parameters.html#sysvar_innodb_large_prefix
 * https://mariadb.com/kb/en/mariadb/xtradbinnodb-server-system-variables/#innodb_large_prefix
 * http://www.tocker.ca/2013/10/31/benchmarking-innodb-page-compression-performance.html
 * http://mechanics.flite.com/blog/2014/07/29/using-innodb-large-prefix-to-avoid-error-1071/
 */
'mysql.utf8mb4' => false,

/**
 * For search queries in the database, a default collation – depending on the
 * character set – is chosen. In some cases a different behaviour is desired,
 * for instances when an accent sensitive search is desired.
 *
 * MariaDB and MySQL have an overlap in available collations, but also
 * incompatible ones, also depending on the version of the database server.
 *
 * This option allows to override the automatic choice. Example:
 *
 * 'mysql.collation' => 'utf8mb4_0900_as_ci',
 *
 * This setting has no effect on setup or creating tables. In those cases
 * always utf8[mb4]_bin is being used. This setting is only taken into
 * consideration in SQL queries that utilize LIKE comparison operators.
 */
'mysql.collation' => null,

/**
 * Database types that are supported for installation.
 *
 * Available:
 * 	- sqlite (SQLite3)
 * 	- mysql (MySQL)
 * 	- pgsql (PostgreSQL)
 * 	- oci (Oracle)
 *
 * Defaults to the following databases:
 *  - sqlite (SQLite3)
 *  - mysql (MySQL)
 *  - pgsql (PostgreSQL)
 */
'supportedDatabases' => [
	'pgsql'
],

/**
 * Override where Nextcloud stores temporary files. Useful in situations where
 * the system temporary directory is on a limited space ramdisk or is otherwise
 * restricted, or if external storage which do not support streaming are in
 * use.
 *
 * The Web server user/PHP must have write access to this directory.
 * Additionally you have to make sure that your PHP configuration considers this a valid
 * tmp directory, by setting the TMP, TMPDIR, and TEMP variables to the required directories.
 * On top of that you might be required to grant additional permissions in AppArmor or SELinux.
 */
'tempdirectory' => '/tmp/nextcloudtemp',

/**
 * Override where Nextcloud stores update files while updating. Useful in situations
 * where the default `datadirectory` is on network disk like NFS, or is otherwise
 * restricted. Defaults to the value of `datadirectory` if unset.
 *
 * If set, the value MUST be located _outside_ of the installation directory of Nextcloud and
 * writable by the Web server user.
 *
 */
'updatedirectory' => '',

/**
 * Block a specific file or files and disallow the upload of files with this name.
 * This blocks any access to those files (read and write).
 * ``.htaccess`` is blocked by default.
 *
 * WARNING: USE THIS ONLY IF YOU KNOW WHAT YOU ARE DOING.
 *
 * Note that this list is case-insensitive.
 *
 * Defaults to ``array('.htaccess')``
 */
'forbidden_filenames' => ['.htaccess'],

/**
 * Disallow the upload of files with specific basenames.
 * Matching existing files can no longer be updated and in matching folders no files can be created anymore.
 *
 * The basename is the name of the file without the extension,
 * e.g. for "archive.tar.gz" the basename would be "archive".
 *
 * Note that this list is case-insensitive.
 *
 * Defaults to ``array()``
 */
'forbidden_filename_basenames' => [],

/**
 * Block characters from being used in filenames. This is useful if you
 * have a filesystem or OS which does not support certain characters like windows.
 * Matching existing files can no longer be updated and in matching folders no files can be created anymore.
 *
 * The '/' and '\' characters are always forbidden, as well as all characters in the ASCII range [0-31].
 *
 * Example for windows systems: ``array('?', '<', '>', ':', '*', '|', '"')``
 * see https://en.wikipedia.org/wiki/Comparison_of_file_systems#Limits
 *
 * Defaults to ``array()``
 */
'forbidden_filename_characters' => [],

/**
 * Deny extensions from being used for filenames.
 * Matching existing files can no longer be updated and in matching folders no files can be created anymore.
 * 
 * The '.part' extension is always forbidden, as this is used internally by Nextcloud.
 * 
 * Defaults to ``array('.filepart', '.part')``
 */
'forbidden_filename_extensions' => ['.part', '.filepart'],

/**
 * If you are applying a theme to Nextcloud, enter the name of the theme here.
 * The default location for themes is ``nextcloud/themes/``.
 *
 * Defaults to the theming app which is shipped since Nextcloud 9
 */
'theme' => '/home/bas/app_5ddd8a04-cebf-45ef-a3dc-f3d4a4015067/apps/theming/css',

/**
 * Enforce the user theme. This will disable the user theming settings
 * This must be a valid ITheme ID.
 * E.g. dark, dark-highcontrast, default, light, light-highcontrast, opendyslexic
 */
'enforce_theme' => '',

/**
 * The default cipher for encrypting files. Currently supported are:
 *  - AES-256-CTR
 *  - AES-128-CTR
 *  - AES-256-CFB
 *  - AES-128-CFB
 *
 * Defaults to ``AES-256-CTR``
 */
'cipher' => 'AES-256-CTR',

/**
 * Use the legacy base64 format for encrypted files instead of the more space-efficient
 * binary format. The option affects only newly written files, existing encrypted files
 * will not be touched and will remain readable whether they use the new format or not.
 *
 * Defaults to ``false``
 */
'encryption.use_legacy_base64_encoding' => false,

/**
 * The minimum Nextcloud desktop client version that will be allowed to sync with
 * this server instance. All connections made from earlier clients will be denied
 * by the server. Defaults to the minimum officially supported Nextcloud desktop
 * client version at the time of release of this server version.
 *
 * When changing this, note that older unsupported versions of the Nextcloud desktop
 * client may not function as expected, and could lead to permanent data loss for
 * clients or other unexpected results.
 *
 * Defaults to ``2.3.0``
 */
'minimum.supported.desktop.version' => '2.3.0',

/**
 * Option to allow local storage to contain symlinks.
 * WARNING: Not recommended. This would make it possible for Nextcloud to access
 * files outside the data directory and could be considered a security risk.
 *
 * Defaults to ``false``
 */
'localstorage.allowsymlinks' => false,

/**
 * Nextcloud overrides umask to ensure suitable access permissions
 * regardless of webserver/php-fpm configuration and worker state.
 * WARNING: Modifying this value has security implications and
 * may soft-break the installation.
 *
 * Most installs shall not modify this value.
 *
 * Defaults to ``0022``
 */
'localstorage.umask' => 0022,

/**
 * This options allows storage systems that don't allow to modify existing files
 * to overcome this limitation by removing the files before overwriting.
 *
 * Defaults to ``false``
 */
'localstorage.unlink_on_truncate' => false,

/**
 * EXPERIMENTAL: option whether to include external storage in quota
 * calculation, defaults to false.
 *
 * Defaults to ``false``
 */
'quota_include_external_storage' => false,

/**
 * When an external storage is unavailable for some reasons, it will be flagged
 * as such for 10 minutes. When the trigger is a failed authentication attempt
 * the delay is higher and can be controlled with this option. The motivation
 * is to make account lock outs at Active Directories (and compatible) more
 * unlikely.
 *
 * Defaults to ``1800`` (seconds)
 */
'external_storage.auth_availability_delay' => 1800,

/**
 * Allows to create external storages of type "Local" in the web interface and APIs.
 *
 * When disabled, it is still possible to create local storages with occ using
 * the following command:
 *
 * % php occ files_external:create /mountpoint local null::null -c datadir=/path/to/data
 *
 * Defaults to ``true``
 *
 */
'files_external_allow_create_new_local' => false,

/**
 * Specifies how often the local filesystem (the Nextcloud data/ directory, and
 * NFS mounts in data/) is checked for changes made outside Nextcloud. This
 * does not apply to external storage.
 *
 * 0 -> Never check the filesystem for outside changes, provides a performance
 * increase when it's certain that no changes are made directly to the
 * filesystem
 *
 * 1 -> Check each file or folder at most once per request, recommended for
 * general use if outside changes might happen.
 *
 * Defaults to ``0``
 */
'filesystem_check_changes' => 0,

/**
 * By default, Nextcloud will store the part files created during upload in the
 * same storage as the upload target. Setting this to false will store the part
 * files in the root of the users folder which might be required to work with certain
 * external storage setups that have limited rename capabilities.
 *
 * Defaults to ``true``
 */
'part_file_in_storage' => true,

/**
 * Where ``mount.json`` file should be stored, defaults to ``data/mount.json``
 * in the Nextcloud directory.
 *
 * Defaults to ``data/mount.json`` in the Nextcloud directory.
 */
'mount_file' => '/var/www/nextcloud/data/mount.json',

/**
 * When ``true``, prevent Nextcloud from changing the cache due to changes in
 * the filesystem for all storage.
 *
 * Defaults to ``false``
 */
'filesystem_cache_readonly' => false,

/**
 * List of trusted proxy servers
 *
 * You may set this to an array containing a combination of
 * - IPv4 addresses, e.g. `192.168.2.123`
 * - IPv4 ranges in CIDR notation, e.g. `192.168.2.0/24`
 * - IPv6 addresses, e.g. `fd9e:21a7:a92c:2323::1`
 * - IPv6 ranges in CIDR notation, e.g. `2001:db8:85a3:8d3:1319:8a20::/95`
 *
 * When an incoming request's `REMOTE_ADDR` matches any of the IP addresses
 * specified here, it is assumed to be a proxy instead of a client. Thus, the
 * client IP will be read from the HTTP header specified in
 * `forwarded_for_headers` instead of from `REMOTE_ADDR`.
 *
 * So if you configure `trusted_proxies`, also consider setting
 * `forwarded_for_headers` which otherwise defaults to `HTTP_X_FORWARDED_FOR`
 * (the `X-Forwarded-For` header).
 *
 * Defaults to an empty array.
 */
'trusted_proxies' => [],

/**
 * Headers that should be trusted as client IP address in combination with
 * `trusted_proxies`. If the HTTP header looks like 'X-Forwarded-For', then use
 * 'HTTP_X_FORWARDED_FOR' here.
 *
 * If set incorrectly, a client can spoof their IP address as visible to
 * Nextcloud, bypassing access controls and making logs useless!
 *
 * Defaults to ``'HTTP_X_FORWARDED_FOR'``
 */
'forwarded_for_headers' => ['HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR'],

/**
 * List of trusted IP ranges for admin actions
 *
 * If this list is non-empty, all admin actions must be triggered from
 * IP addresses inside theses ranges.
 *
 * Defaults to an empty array.
 */
'allowed_admin_ranges' => [],

/**
 * max file size for animating gifs on public-sharing-site.
 * If the gif is bigger, it'll show a static preview
 *
 * Value represents the maximum filesize in megabytes. Set to ``-1`` for
 * no limit.
 *
 * Defaults to ``10`` megabytes
 */
'max_filesize_animated_gifs_public_sharing' => 50,


/**
 * Enables transactional file locking.
 * This is enabled by default.
 *
 * Prevents concurrent processes from accessing the same files
 * at the same time. Can help prevent side effects that would
 * be caused by concurrent operations. Mainly relevant for
 * very large installations with many users working with
 * shared files.
 *
 * Defaults to ``true``
 */
'filelocking.enabled' => true,

/**
 * Set the lock's time-to-live in seconds.
 *
 * Any lock older than this will be automatically cleaned up.
 *
 * Defaults to ``60*60`` seconds (1 hour) or the php
 *             max_execution_time, whichever is higher.
 */
'filelocking.ttl' => 60*60,

/**
 * Memory caching backend for file locking
 *
 * Because most memcache backends can clean values without warning using redis
 * is highly recommended to *avoid data loss*.
 *
 * Defaults to ``none``
 */
'memcache.locking' => 'none',

/**
 * Enable locking debug logging
 *
 * Note that this can lead to a very large volume of log items being written which can lead
 * to performance degradation and large log files on busy instance.
 *
 * Thus enabling this in production for longer periods of time is not recommended
 * or should be used together with the ``log.condition`` setting.
 */
'filelocking.debug' => false,

/**
 * Disable the web based updater
 */
'upgrade.disable-web' => false,

/**
 * Allows to modify the cli-upgrade link in order to link to a different documentation
 */
'upgrade.cli-upgrade-link' => '',

/**
 * Allows to modify the exception server logs documentation link in order to link to a different documentation
 */
'documentation_url.server_logs' => '',

/**
 * Set this Nextcloud instance to debugging mode
 *
 * Only enable this for local development and not in production environments
 * This will disable the minifier and outputs some additional debug information
 *
 * Defaults to ``false``
 */
'debug' => false,

/**
 * Sets the data-fingerprint of the current data served
 *
 * This is a property used by the clients to find out if a backup has been
 * restored on the server. Once a backup is restored run
 * ./occ maintenance:data-fingerprint
 * To set this to a new value.
 *
 * Updating/Deleting this value can make connected clients stall until
 * the user has resolved conflicts.
 *
 * Defaults to ``''`` (empty string)
 */
'data-fingerprint' => '',

/**
 * This entry is just here to show a warning in case somebody copied the sample
 * configuration. DO NOT ADD THIS SWITCH TO YOUR CONFIGURATION!
 *
 * If you, brave person, have read until here be aware that you should not
 * modify *ANY* settings in this file without reading the documentation.
 */
'copied_sample_config' => true,

/**
 * use a custom lookup server to publish user data
 */
'lookup_server' => 'https://lookup.nextcloud.com',

/**
 * set to true if the server is used in a setup based on Nextcloud's Global Scale architecture
 */
'gs.enabled' => false,

/**
 * by default federation is only used internally in a Global Scale setup
 * If you want to allow federation outside your environment set it to 'global'
 */
'gs.federation' => 'internal',

/**
 * List of incompatible user agents opted out from Same Site Cookie Protection.
 * Some user agents are notorious and don't really properly follow HTTP
 * specifications. For those, have an opt-out.
 *
 * WARNING: only use this if you know what you are doing
 */
'csrf.optout' => [
	'/^WebDAVFS/', // OS X Finder
	'/^Microsoft-WebDAV-MiniRedir/', // Windows webdav drive
],

/**
 * By default, there is on public pages a link shown that allows users to
 * learn about the "simple sign up" - see https://nextcloud.com/signup/
 *
 * If this is set to "false" it will not show the link.
 */
'simpleSignUpLink.shown' => true,

/**
 * By default, autocompletion is enabled for the login form on Nextcloud's login page.
 * While this is enabled, browsers are allowed to "remember" login names and such.
 * Some companies require it to be disabled to comply with their security policy.
 *
 * Simply set this property to "false", if you want to turn this feature off.
 */

'login_form_autocomplete' => true,

/**
 * Timeout for the login form, after this time the login form is reset.
 * This prevents password leaks on public devices if the user forgots to clear the form.
 *
 * Default is 5 minutes (300 seconds), a value of 0 means no timeout.
 */
'login_form_timeout' => 300,

/**
 * If your user is using an outdated or unsupported browser, a warning will be shown
 * to offer some guidance to upgrade or switch and ensure a proper Nextcloud experience.
 * They can still bypass it after they have read the warning.
 *
 * Simply set this property to "true", if you want to turn this feature off.
 */

'no_unsupported_browser_warning' => false,

/**
 * Disable background scanning of files
 *
 * By default, a background job runs every 10 minutes and execute a background
 * scan to sync filesystem and database. Only users with unscanned files
 * (size < 0 in filecache) are included. Maximum 500 users per job.
 *
 * Defaults to ``false``
 */
'files_no_background_scan' => false,

/**
 * Log all queries into a file
 *
 * Warning: This heavily decreases the performance of the server and is only
 * meant to debug/profile the query interaction manually.
 * Also, it might log sensitive data into a plain text file.
 */
'query_log_file' => '',

/**
 * Log all redis requests into a file
 *
 * Warning: This heavily decreases the performance of the server and is only
 * meant to debug/profile the redis interaction manually.
 * Also, it might log sensitive data into a plain text file.
 */
'redis_log_file' => '',

/**
 * Enable diagnostics event logging
 *
 * If enabled the timings of common execution steps will be logged to the
 * Nextcloud log at debug level. log.condition is useful to enable this on
 * production systems to only log under some conditions
 */
'diagnostics.logging' => true,

/**
 * Limit diagnostics event logging to events longer than the configured threshold in ms
 *
 * when set to 0 no diagnostics events will be logged
 */
'diagnostics.logging.threshold' => 0,

/**
 * Enable profile globally
 *
 * Defaults to ``true``
 */
'profile.enabled' => true,

/**
 * Allows to override the default scopes for Account data.
 * The list of overridable properties and valid values for scopes are in
 * ``OCP\Accounts\IAccountManager``. Values added here are merged with
 * default values, which are in ``OC\Accounts\AccountManager``.
 *
 * For instance, if the phone property should default to the private scope
 * instead of the local one:
 *
 * ::
 *
 * 	[
 * 	  \OCP\Accounts\IAccountManager::PROPERTY_PHONE => \OCP\Accounts\IAccountManager::SCOPE_PRIVATE
 * 	]
 *
 */
'account_manager.default_property_scope' => [],

/**
 * Enable the deprecated Projects feature,
 * superseded by Related resources as of Nextcloud 25
 *
 * Defaults to ``false``
 */
'projects.enabled' => false,

/**
 * Enable the bulk upload feature.
 *
 * Defaults to ``true``
 */
'bulkupload.enabled' => true,

/**
 * Enables fetching open graph metadata from remote urls
 *
 * Defaults to ``true``
 */
'reference_opengraph' => true,

/**
 * Enable use of old unified search
 *
 * Defaults to ``false``
 */
'unified_search.enabled' => false,

/**
 * Enable features that are do respect accessibility standards yet.
 *
 * Defaults to ``true``
 */
'enable_non-accessible_features' => true,
];
