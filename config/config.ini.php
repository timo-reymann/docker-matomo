; file automatically generated or modified by Matomo; you can manually override the default values in global.ini.php by redefining them in this file.
[database]
host = "<?= getenv('MATOMO_DATABASE_HOST'); ?>"
username = "<?= getenv('MATOMO_DATABASE_USERNAME'); ?>"
password = "<?= getenv('MATOMO_DATABASE_PASSWORD'); ?>"
dbname = "<?= getenv('MATOMO_DATABASE_DBNAME'); ?>"
tables_prefix = "<?= getenv('MATOMO_DATABASE_TABLES_PREFIX') ?: "matomo_"; ?>"
charset = "<?= getenv('MATOMO_DATABASE_CHARSET') ?: "utf8mb4"; ?>"

[General]
salt = "<?= getenv("MATOMO_GENERAL_SALT") ?>"
<?php foreach(explode(",", getenv("MATOMO_GENERAL_TRUSTED_HOSTS") ?: "") as $trustedHost): ?>
<?php if($trustedHost != ""): ?>
trusted_hosts[] = "<?= $trustedHost ?>"
<?php endif; ?>
<?php endforeach; ?>
force_ssl = "<?= (boolval(getenv("MATOMO_GENERAL_FORCE_SSL")) ? "1" : "0") ?>"
login_allowlist_apply_to_reporting_api_requests = 0
login_allow_logme = 1
noreply_email_name = "Matomo"
assume_secure_protocol = "<?= boolval(getenv("MATOMO_GENERAL_ASSUME_SECURE_PROTOCOL")) ? "1" : "0" ?>"
enable_trusted_host_check = 1
<?php foreach(explode(",", getenv("MATOMO_GENERAL_PROXY_CLIENT_HEADERS") ?: "") as $proxyClientHeader): ?>
<?php if($trustedHost != ""): ?>
proxy_client_headers[] = "<?= $proxyClientHeader ?>"
<?php endif; ?>
<?php endforeach; ?>
<?php foreach(explode(",", getenv("MATOMO_GENERAL_PROXY_HOST_HEADERS") ?: "") as $proxyHostHeader): ?>
<?php if($trustedHost != ""): ?>
proxy_host_headers[] = "<?= $proxyHostHeader ?>"
<?php endif; ?>
<?php endforeach; ?>

<?php if(boolval(getenv("MATOMO_MAIL_ENABLED"))): ?>
[mail]
transport = "<?= getenv("MATOMO_MAIL_TRANSPORT") ?: "smtp" ?>"
port = "<?= getenv("MATOMO_MAIL_PORT") ?: "587" ?>"
host = "<?= getenv("MATOMO_MAIL_HOST") ?>"
type = Login
username = "<?= getenv("MATOMO_MAIL_USERNAME") ?>"
password = "<?= getenv("MATOMO_MAIL_PASSWORD") ?>"
encryption = "<?= getenv("MATOMO_MAIL_ENCRYPTION") ?: "ssl" ?>"
<?php endif; ?>

[Tracker]
ignore_visits_cookie_name = "matomo_ignore"

[PluginsInstalled]
PluginsInstalled[] = "Diagnostics"
PluginsInstalled[] = "Login"
PluginsInstalled[] = "CoreAdminHome"
PluginsInstalled[] = "UsersManager"
PluginsInstalled[] = "SitesManager"
PluginsInstalled[] = "Installation"
PluginsInstalled[] = "Intl"
PluginsInstalled[] = "JsTrackerInstallCheck"
PluginsInstalled[] = "CoreVue"
PluginsInstalled[] = "CorePluginsAdmin"
PluginsInstalled[] = "CoreHome"
PluginsInstalled[] = "WebsiteMeasurable"
PluginsInstalled[] = "IntranetMeasurable"
PluginsInstalled[] = "CoreVisualizations"
PluginsInstalled[] = "Proxy"
PluginsInstalled[] = "API"
PluginsInstalled[] = "Widgetize"
PluginsInstalled[] = "Transitions"
PluginsInstalled[] = "LanguagesManager"
PluginsInstalled[] = "Actions"
PluginsInstalled[] = "Dashboard"
PluginsInstalled[] = "MultiSites"
PluginsInstalled[] = "Referrers"
PluginsInstalled[] = "UserLanguage"
PluginsInstalled[] = "DevicesDetection"
PluginsInstalled[] = "Goals"
PluginsInstalled[] = "SEO"
PluginsInstalled[] = "Events"
PluginsInstalled[] = "UserCountry"
PluginsInstalled[] = "GeoIp2"
PluginsInstalled[] = "VisitsSummary"
PluginsInstalled[] = "VisitFrequency"
PluginsInstalled[] = "VisitTime"
PluginsInstalled[] = "VisitorInterest"
PluginsInstalled[] = "Feedback"
PluginsInstalled[] = "TwoFactorAuth"
PluginsInstalled[] = "CoreConsole"
PluginsInstalled[] = "ScheduledReports"
PluginsInstalled[] = "UserCountryMap"
PluginsInstalled[] = "Live"
PluginsInstalled[] = "PrivacyManager"
PluginsInstalled[] = "ImageGraph"
PluginsInstalled[] = "Annotations"
PluginsInstalled[] = "MobileMessaging"
PluginsInstalled[] = "Overlay"
PluginsInstalled[] = "SegmentEditor"
PluginsInstalled[] = "Insights"
PluginsInstalled[] = "Morpheus"
PluginsInstalled[] = "Contents"
PluginsInstalled[] = "BulkTracking"
PluginsInstalled[] = "Resolution"
PluginsInstalled[] = "DevicePlugins"
PluginsInstalled[] = "Heartbeat"
PluginsInstalled[] = "Marketplace"
PluginsInstalled[] = "ProfessionalServices"
PluginsInstalled[] = "UserId"
PluginsInstalled[] = "CustomJsTracker"
PluginsInstalled[] = "Tour"
PluginsInstalled[] = "PagePerformance"
PluginsInstalled[] = "CustomDimensions"
