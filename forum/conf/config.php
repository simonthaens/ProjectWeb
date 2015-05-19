<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.10';

// Database
$Configuration['Database']['Name'] = 'forumdb';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = '';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledLocales
$Configuration['EnabledLocales']['vf_nl'] = 'nl';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['cleditor'] = TRUE;
$Configuration['EnabledPlugins']['AddMenuitem'] = TRUE;
$Configuration['EnabledPlugins']['Facebook'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'TEDxPXL';
$Configuration['Garden']['Cookie']['Salt'] = 'WUXPMYOD5W';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '3';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6Le5FgcTAAAAALRBhpZ6_vfU1MUS5pElKnCJcmUh';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6Le5FgcTAAAAANDc7eaGxSeVd672HnvfksZyJ3IM';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Registration']['SendConnectEmail'] = '1';
$Configuration['Garden']['Email']['SupportName'] = 'TEDxPXL';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.10';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Simplex';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_simplex';
$Configuration['Garden']['Locale'] = 'en-CA';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['AddMenuitem']['Name1'] = '';
$Configuration['Plugins']['AddMenuitem']['Link1'] = '';
$Configuration['Plugins']['AddMenuitem']['Name2'] = '';
$Configuration['Plugins']['AddMenuitem']['Link2'] = '';
$Configuration['Plugins']['AddMenuitem']['Name3'] = '';
$Configuration['Plugins']['AddMenuitem']['Link3'] = '';
$Configuration['Plugins']['AddMenuitem']['Name4'] = 'Homepage';
$Configuration['Plugins']['AddMenuitem']['Link4'] = 'http://localhost/ProjectWeb/';
$Configuration['Plugins']['AddMenuitem']['Name5'] = '';
$Configuration['Plugins']['AddMenuitem']['Link5'] = '';
$Configuration['Plugins']['Facebook']['ApplicationID'] = '1451930728434038';
$Configuration['Plugins']['Facebook']['Secret'] = 'c434c8af20bb1c43aa3f9ac70adac407';
$Configuration['Plugins']['Facebook']['UseFacebookNames'] = '1';
$Configuration['Plugins']['Facebook']['SocialReactions'] = FALSE;
$Configuration['Plugins']['Facebook']['SocialSharing'] = FALSE;

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.10';
$Configuration['Vanilla']['Discussions']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['Layout'] = 'table';

// Last edited by admin (127.0.0.1)2015-05-19 11:46:09