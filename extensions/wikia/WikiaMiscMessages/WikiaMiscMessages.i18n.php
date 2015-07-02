<?php
$messages = array();

$messages['en'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>Hello $2,<br /><br />
The Wikia you created is now available at <a href="$1">$1</a>.  We hope to see you editing there soon!<br /><br />
We have added some information and tips on your <a href="$5">user talk Page</a> to help you get started. If you have any questions, just reply to this e-mail or browse our help pages at <a href="http://help.wikia.com/">Wikia Help</a>.<br /><br />
Good luck with the project,<br /><br />
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia Community Team<br /></p>',
	'confirmemail_body-HTML' => '<p>Hello $2,<br /><br />
Thank you for registering with Wikia.<br /><br />
Please activate your new account by <a href="$3">confirming your e-mail address here</a>.<br /><br /><br />
We look forward to seeing you soon!<br /><br />
The Wikia Community Team<br />
<a href="http://community.wikia.com/">community.wikia.com</a><br /></p>',
	'confirmemailreminder_body-HTML' => '<p>Hello $1,<br /><br />
Last week you joined Wikia, but you still need to confirm your account. Please do so by clicking <a href="$2">here</a>.<br /><br />
We look forward to seeing you soon!<br /><br />
The Wikia Community Team<br />
<a href="http://www.wikia.com/">www.wikia.com</a></p>',
	'createaccount-text-HTML' => '<p>Someone created an account for your e-mail address on {{SITENAME}} ($4) named "$2", with password "$3".<br />
You should log in and change your password now.<br /><br />
You may ignore this message if this account was created in error.</p>',
	'enotif_body-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
There has been an edit to a page you are watching on {{SITENAME}}.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the current version.<br /><br />
$NEWPAGEHTML<br /><br />
$PAGESUMMARY<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.wikia.com">Check out our featured wikis!</a></li>
<li>Want to control which e-mails you receive? Go to <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_article_comment-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
An article you following, $PAGETITLE, has new comments.<br /><br />
To see the comment thread, follow the link below: <a href="$PAGETITLE_URL#article-comments">$PAGETITLE</a> <br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">{{ns:special}}:Preferences<a>.</li>
</ul></p>',
	'enotif_body_blogs_comment-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
$PAGEEDITOR made a comment on the blog post "$BLOGTITLE".<br /><br />
<a href="$PAGETITLE_URL#comments">View the comments</a><br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.wikia.com">Check out our featured wikis!</a></li>
<li>Want to control which e-mails you receive? Go to <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_delete-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A page you are watching on {{SITENAME}} has been deleted.<br /><br />
The page was at <a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}"> User Preferences</a></li>
</ul></p>',
	'enotif_body_move-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A page you are watching on {{SITENAME}} has been moved.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the current version.<br /><br />
$PAGESUMMARY<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_prl_chn-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A problem has been updated for a page you are watching on {{SITENAME}}.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the page.<br /><br />
For a list of recent problem reports, see <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a><br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_prl_rep-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A problem has been reported for a page you are watching on {{SITENAME}}.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the page.<br /><br />
For a list of recent problem reports, see <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a><br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_protect-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A page you are watching on {{SITENAME}} has been protected.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the current version.<br /><br />
$PAGESUMMARY<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_restore-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A page you are watching on {{SITENAME}} has been restored from deletion.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the current version.<br /><br />
$PAGESUMMARY<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}"> User Preferences</a></li>
</ul></p>',
	'enotif_body_rights-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
User rights on {{SITENAME}} have been changed for a person whose user page you are watching. You can see their user page here: <a href="$PAGETITLE_URL">$PAGETITLE</a><br /><br />
$PAGESUMMARY<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">Click here</a> for a log of all recent rights changes.<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_unprotect-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A page you are watching on {{SITENAME}} has been unprotected.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the current version.<br /><br />
$PAGESUMMARY<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Check out our featured wikis! <a href="http://www.wikia.com">Visit Them Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul></p>',
	'enotif_body_upload-HTML' => '<p>Dear $WATCHINGUSERNAME,<br /><br />
A file you are watching on {{SITENAME}} has been uploaded.<br /><br />
See <a href="$PAGETITLE_URL">$PAGETITLE</a> for the current version.<br /><br />
$PAGESUMMARY<br /><br />
Please visit and edit often...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Have you checked out our hubs? <a href="http://www.wikia.com/wiki/Category:Hubs">Visit Here!</a></li>
<li>Want to control which e-mails you receive? Go to: <a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}<a>.</li>
</ul></p>',
	'enotif_lastvisited-HTML' => 'To see all changes to this page since your last visit, <a href="$1">click here</a>',
	'founderemails-email-page-edited-body-HTML' => '<strong>Hey $1,</strong><br /><br />
It looks like $2 has edited your wiki! Why don\'t you drop by their <a href="$3">userpage</a> to say hello?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-email-user-registered-body-HTML' => '<strong>Hey $1,</strong><br /><br />
It looks like $2 has registered on your wiki! Why don\'t you drop by their <a href="$3">userpage</a> to say hello?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'flobalwatchlist-digest-email-body-HTML' => '<p>Dear $1,<br /><br />
This is a list of pages on your Wikia watchlist that have been edited since you last visited them.<br /><br />
$2<br /><br />
This is a list of blog pages on your Wikia watchlist that have been edited or commented since you last visited them.<br /><br />
$3<br /><br />
Please visit and edit often...<br /><br />
Wikia<br /><hr />
<ul>
<li>To change your preferences for watchlist notifications, please visit <a href="http://community.wikia.com/wiki/Special:Preferences">Your Preferences</a></li>
<li>To mark all pages from this Weekly Digest as visited, see the option in the "Watchlist" tab of your Preferences page</li>
</ul></p>',
	'passwordremindertext-HTML' => '<p>Hi,<br /><br />
The login password for user "$2" is now "$3".<br /><br />
If you did not request a new password, don’t worry. The replacement password has been sent only to you at this e-mail address. Your account is secure and you can continue to use your old password.<br /><br />
Thanks,<br /><br />
The Wikia Community Team<br /><br />
www.wikia.com<br /><hr />
<ul>
<li>To change your preferences or password, go to: <a href="http://community.wikia.com/wiki/Special:Preferences">User Preferences</a>.</li>
<li>This password reminder was requested from the following address: $1.</li>
</ul></p>',
	'reconfirmemail_body-HTML' => '<p>Hello $2,<br /><br />
Thank you for updating the e-mail address for your Wikia account. Please confirm this is the correct e-mail address by <a href="$3">clicking here</a>.<br /><br /><br />
We look forward to seeing you on Wikia!<br /><br />
The Wikia Community Team<br />
www.wikia.com<br /></p>',
);

$messages['de'] = array(
	'confirmemail_body-html' => '<p>Hallo,<br /><br />

dies ist eine automatisch erstellte Nachricht. <br /><br />

Jemand mit der IP-Adresse $1, wahrscheinlich Du selbst, hat eine Bestätigung dieser E-Mail-Adresse für das Benutzerkonto "$2" für {{SITENAME}} angefordert.<br /><br />

Um die E-Mail-Funktion für {{SITENAME}} (wieder) zu aktivieren und um zu bestätigen, dass dieses Benutzerkonto wirklich zu Deiner E-Mail-Adresse und damit zu Dir gehört, öffne bitte folgenden Link in Deinem Browser: <a href="$3">$3</a><br /><br />

Sollte der vorstehende Link in Deinem E-Mail-Programm über mehrere Zeilen gehen, musst du ihn eventuell per Hand in die URL-Zeile des Browsers einfügen. <br /><br />

Der Bestätigungscode ist bis zum folgenden Zeitpunkt gültig: $4<br /><br />

Wenn diese E-Mail-Adresse *nicht* zu dem genannten Benutzerkonto gehört, folge diesem Link bitte *nicht*.<br /><br />
<hr />
<br />
{{SITENAME}}: <a href="{{fullurl:{{Mediawiki:mainpage}}}}">{{fullurl:{{Mediawiki:mainpage}}}}</a>
</p>',
	'createaccount-text-html' => '<p>Es wurde für dich ein Benutzerkonto „$2“ auf {{SITENAME}} ($4) erstellt. Das automatisch generierte Passwort für „$2“ ist „$3“. Du solltest dich nun anmelden und das Passwort ändern.<br /><br />

Falls das Benutzerkonto irrtümlich angelegt wurde, kannst du diese Nachricht ignorieren.
<br /></p>',
	'enotif_body-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE $CHANGEDORCREATED.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGEHTML<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br /><hr />
Um die Einstellungen Deiner Beobachtungsliste anzupassen, besuche: <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a>
</p>',
	'enotif_body_delete-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE gelöscht.<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_move-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE verschoben.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a><li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a>
</ul>
</p>',
	'enotif_body_prl_rep-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
Ein Benutzer von {{SITENAME}} hat ein Problem auf einer Seite gemeldet, die du beobachtest.<br />
<br />
Klicke hier, um die Seite aufzurufen: <a href="$PAGETITLE_URL">$PAGETITLE_URL</a><br />
<br />
Um eine Liste aller aktuellen Problemmeldungen anzuzeigen, besuche <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{fullurl:{{ns:special}}:ProblemReports}}</a><br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_protect-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE geschützt.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_restore-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE wiederhergestellt.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a>
</ul>
</p>',
	'enotif_body_rights-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
es gab eine Änderung der Benutzerrechte eines {{SITENAME}}-Benutzers, dessen Benutzerseite du beobachtest. Die entsprechende Seite findest du hier: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
Um eine Liste aller aktuellen Log-Einträge anzuzeigen, besuche <a href="{{fullurl:{{ns:special}}:Log}}">{{fullurl:{{ns:special}}:Log}}</a><br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_unprotect-html' => '<p>Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE entsperrt.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_lastvisited-html' => 'Alle Änderungen auf einen Blick, <a href="$1">klicke hier</a>',
	'globalwatchlist-digest-email-body-html' => '<p>Hallo $1,
<br /><br />
Das ist eine Liste von Seiten die nach deinem letzten Besuch geändert wurden und seither noch nicht wieder besucht hast.
<br /><br />
$2
<br /><br />
Das ist eine Liste von Seiten die jemand nach dir kommentiert oder editiert hat, und die du seither noch nicht wieder besucht hast.
<br /><br />
$3
<br /><br />
Bitte besuche uns und bearbeite oft...
<br /><br />
Wikia
<br /><hr />
<ul>
<li>Um deine Benachrichtigungseinstellungen zu ändern, besuche <a href="http://de.wikia.com/wiki/Special:Preferences">deine Einstellungen</a></li>
<li>Um alle Seiten von der wöchentlichen Zusammenfassung als besucht zu markieren, besuche den "Beobachtungsliste"-Tab in deinen Einstellungen</li>
</ul>
</p>',
	'passwordremindertext-html' => '<p>Jemand mit der IP-Adresse $1, wahrscheinlich du selbst, hat ein neues Passwort für die Anmeldung bei {{SITENAME}} ($4) angefordert.<br />
<br />
Das automatisch generierte Passwort für Benutzer „$2“ lautet nun: $3<br /><br />

Du solltest dich jetzt anmelden und das Passwort ändern: <a href="{{fullurl:{{ns:special}}:Userlogin}}" rel="nofollow">{{fullurl:{{ns:special}}:Userlogin}}</a><br />
Das neue Passwort ist {{PLURAL:$5|1 Tag|$5 Tage}} gültig.<br />
<br />
Bitte ignoriere diese E-Mail, falls du sie nicht selbst angefordert hast. Das alte Passwort bleibt weiterhin gültig.<br />
</p>',
	'confirmemail_body-HTML' => '<p>
Hallo,<br /><br />

dies ist eine automatisch erstellte Nachricht. <br /><br />

Jemand mit der IP-Adresse $1, wahrscheinlich Du selbst, hat eine Bestätigung dieser E-Mail-Adresse für das Benutzerkonto "$2" für {{SITENAME}} angefordert.<br /><br />

Um die E-Mail-Funktion für {{SITENAME}} (wieder) zu aktivieren und um zu bestätigen, dass dieses Benutzerkonto wirklich zu Deiner E-Mail-Adresse und damit zu Dir gehört, öffne bitte folgenden Link in Deinem Browser: <a href="$3">$3</a><br /><br />

Sollte der vorstehende Link in Deinem E-Mail-Programm über mehrere Zeilen gehen, musst du ihn eventuell per Hand in die URL-Zeile des Browsers einfügen. <br /><br />

Der Bestätigungscode ist bis zum folgenden Zeitpunkt gültig: $4<br /><br />

Wenn diese E-Mail-Adresse *nicht* zu dem genannten Benutzerkonto gehört, folge diesem Link bitte *nicht*.<br /><br />
<hr />
<br />
{{SITENAME}}: <a href="{{fullurl:{{Mediawiki:mainpage}}}}">{{fullurl:{{Mediawiki:mainpage}}}}</a>
</p>',
	'confirmemailreminder_body-HTML' => '<p>Hallo $1,<br />
<br />
Letzte Woche hast du dich bei Wikia angemeldet, aber du hast deinen Account immernoch nicht bestätigt. Bitte bestätige deinen Account indem du <a href="$2">hier</a> klickst.<br />
<br />
Wir freuen uns darauf dich bald wieder zu sehen!<br />
<br />
Das Wikia Community Team<br />
<a href="http://de.wikia.com/wiki/Wikia">de.wikia.com</a>
</p>',
	'createaccount-text-HTML' => '<p>
Es wurde für dich ein Benutzerkonto „$2“ auf {{SITENAME}} ($4) erstellt. Das automatisch generierte Passwort für „$2“ ist „$3“. Du solltest dich nun anmelden und das Passwort ändern.<br /><br />

Falls das Benutzerkonto irrtümlich angelegt wurde, kannst du diese Nachricht ignorieren.
<br /></p>',
	'enotif_body-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE $CHANGEDORCREATED.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGEHTML<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br /><hr />
Um die Einstellungen Deiner Beobachtungsliste anzupassen, besuche: <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a><br />
<b>Folge uns auf</b><br />
<ul>
<li>Facebook: <a href="http://facebook.com/wikia.de">facebook.com/wikia.de</a></li>
<li>Twitter: <a href="http://twitter.com/wikia_de">twitter.com/wikia_de</a></li>
</ul>
</p>',
	'enotif_body_article_comment-HTML' => '<p>Hallo $WATCHINGUSERNAME,
<br /><br />
$PAGEEDITOR hat einen Kommentar auf der Seite "$PAGETITLE" hinterlassen.
<br /><br />
Um alle Kommentare zu sehen, folge diesem Link:
<a href="$PAGETITLE_URL">$PAGETITLE</a>
<br /><br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem
<br /><hr />
<ul>
<li>Um die Einstellungen deiner Beobachtungsliste anzupassen, besuche: <a href="{{fullurl:Special:Watchlist/edit}}">{{ns:special}}:Watchlist/edit<a>.</li>
</ul><br />
<b>Folge uns auf</b><br />
<ul>
<li>Facebook: <a href="http://facebook.com/wikia.de">facebook.com/wikia.de</a></li>
<li>Twitter: <a href="http://twitter.com/wikia_de">twitter.com/wikia_de</a></li>
</ul>
</p>',
	'enotif_body_delete-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE gelöscht.<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_move-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE verschoben.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a><li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a>
</ul>
</p>',
	'enotif_body_prl_rep-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
Ein Benutzer von {{SITENAME}} hat ein Problem auf einer Seite gemeldet, die du beobachtest.<br />
<br />
Klicke hier, um die Seite aufzurufen: <a href="$PAGETITLE_URL">$PAGETITLE_URL</a><br />
<br />
Um eine Liste aller aktuellen Problemmeldungen anzuzeigen, besuche <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{fullurl:{{ns:special}}:ProblemReports}}</a><br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_protect-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE geschützt.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_restore-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE wiederhergestellt.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a>
</ul>
</p>',
	'enotif_body_rights-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
es gab eine Änderung der Benutzerrechte eines {{SITENAME}}-Benutzers, dessen Benutzerseite du beobachtest. Die entsprechende Seite findest du hier: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
Um eine Liste aller aktuellen Log-Einträge anzuzeigen, besuche <a href="{{fullurl:{{ns:special}}:Log}}">{{fullurl:{{ns:special}}:Log}}</a><br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_body_unprotect-HTML' => '<p>
Hallo $WATCHINGUSERNAME,<br />
<br />
die {{SITENAME}}-Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE entsperrt.<br />
<br />
Aktuelle Version: <a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Kontakt zum Benutzer:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Du die Seite wieder besucht hast. Auf Deiner Beobachtungsseite kannst Du alle Benachrichtigungsmarker zusammen zurücksetzen.<br />
<br />
Dein freundliches {{SITENAME}}-Benachrichtigungssystem<br />
<br />
<hr />
<ul>
<li>Möchtest du die Einstellungen deiner Beobachtungsliste anpassen? Besuche <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Eine Reihe weiterer Wikis findest du in unseren Hubs: <a href="http://de.wikia.com/wiki/Kategorie:Hubs">http://de.wikia.com/wiki/Kategorie:Hubs</a></li>
</ul>
</p>',
	'enotif_lastvisited-HTML' => 'Für alle Änderungen auf einen Blick <a href="$1">klicke hier</a>.',
	'founderemails-email-user-registered-body-HTML' => 'Hallo $USERNAME,<br /><br />
Es sieht so aus, als ob sich $EDITORNAME in deinem Wiki registriert hat! Warum besuchst du nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a>, um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia-Team</div>',
	'passwordremindertext-HTML' => '<p>
Jemand mit der IP-Adresse $1, wahrscheinlich du selbst, hat ein neues Passwort für die Anmeldung bei {{SITENAME}} ($4) angefordert.<br />
<br />
Das automatisch generierte Passwort für Benutzer „$2“ lautet nun: $3<br /><br />

Du solltest dich jetzt anmelden und das Passwort ändern: <a href="{{fullurl:{{ns:special}}:Userlogin}}">{{fullurl:{{ns:special}}:Userlogin}}</a><br />
Das neue Passwort ist {{PLURAL:$5|1 Tag|$5 Tage}} gültig.<br />
<br />
Bitte ignoriere diese E-Mail, falls du sie nicht selbst angefordert hast. Das alte Passwort bleibt weiterhin gültig.<br />
</p>',
);

$messages['es'] = array(
	'confirmemail_body-html' => '<p>Hola $2,
<br /><br />
¡Te damos la bienvenida a Wikia!
<br /><br />
Con las miles de comunidades que existen en Wikia, hay muchas formas de divertirse aquí. Te recomendamos tomar algo de tu tiempo conociendo Wikia, ya sea visitando su página principal (<a href="http://es.wikia.com">es.wikia.com</a>), siguiendo un tutorial (<a href="http://es.wikia.com/wiki/Ayuda:Tutorial_1">Tutorial 1</a>), leyendo artículos interesantes y geniales, escribiendo contenidos en tu tema favorito, o conociendo a otros miembros de la comunidad.
<br /><br />
Para activar completamente tu cuenta, te pedimos que confirmes tu dirección de correo electrónico haciendo clic en el enlace de más abajo o pegándolo en tu navegador.
<br /><br />
<a href="$3">$3</a>
<br /><br />
Este enlace de confirmación expirará en $4.
<br /><br />
(Este nombre de usuario fue creado por la siguiente dirección: $1 en el wiki {{SITENAME}}. Si la cuenta *no* es tuya, sigue este enlace para cancelar la confirmación de la dirección de correo: $5 )
<br /><br />
¡Esperamos verte en Wikia!<br />
El equipo comunitario de Wikia<br />
<a href="http://es.wikia.com>es.wikia.com</a>
</p>',
	'createaccount-text-html' => '<p>Alguien creó una cuenta para este correo electrónico en  {{SITENAME}} ($4) con el nombre "$2", y la contraseña "$3".<br />
Por favor entra y cambia tu contraseña ahora.<br />
<br />
Puedes ignorar este mensaje si esta cuenta fue creada erróneamente.<br />
</p>',
	'enotif_body-html' => '<p>Estimado/a $WATCHINGUSERNAME,<br />
<br />
Una de las páginas de tu lista de seguimiento en {{SITENAME}} ha tenido cambios.<br />
<br />
Puedes ver su versión actual en <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br />
$NEWPAGEHTML<br />
<br />
El resumen de edición es: "$PAGESUMMARY"<br />
<br />
Esperamos que sigas visitando y editando {{SITENAME}}.<br />
<hr/>
<ul>
<li>¿Quieres especificar qué correos electrónicos recibes de Wikia? Visita: <a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}</a>.</li>
<li>Para ver los nuevos wikis creados esta semana, puedes visitar <http://www.wikia.com/wiki/New_wikis_this_week>.</li>
</ul>
</p>',
	'enotif_body_blogs_comment-html' => '<p>Estimado $WATCHINGUSERNAME,<br />
<br />
$PAGEEDITOR puso un comentario en la entrada de blog "$BLOGTITLE". <br />
<br />
Para ver el comentario, sigue el enlace de debajo:<br />
<a href="$PAGETITLE_URL">$PAGETITLE</a><br />
<br />
Por favor, visita la entrada y edítala a menudo para seguir los cambios...<br />
<br />
Wikia<br />
</p>',
	'enotif_lastvisited-html' => '<a href="$1">Visita</a> para ver todos los cambios en esta página desde tu última visita.',
	'globalwatchlist-digest-email-body-html' => '<p>Estimado/a $1,<br />
<br />
Esta es una lista de las páginas de tu lista de seguimiento de Wikia que han sido editadas desde tu última visita.<br />
<br />
$2
<br />
Por favor visítalas y edítalas si lo consideras necesario...<br />
<br />
Wikia<br />
<br />
<ul>
<li>Para cambiar tus preferencias para las notificaciones de tu lista de seguimiento, por favor, visita <a href="http://www.wikia.com/wiki/Special:Preferences">Preferences</a></li>
<li>Para marcar todas las páginas como visitadas de este Boletín Semanal ve a la pestaña de "Seguimiento"  en tus Preferencias</li>
</ul>
</p>',
	'passwordremindertext-html' => '<p>Hola<br />
La contraseña para el usuario "$2" es ahora "$3".<br />
Si no solicitaste una nueva contraseña, no te preocupes. La contraseña de reemplazo ha sido enviada sólo a ti a esta dirección de correo. Tu cuenta seguirá segura y puedes continuar utilizando tu antigua contraseña.<br /><br />

Gracias,
<br /><br />
El Equipo Comunitario de Wikia
<br /><br />
www.wikia.com
<br /><hr />
<ul>
<li>Para cambiar tus preferencias o tu contraseña, visita: <a href="http://www.wikia.com/wiki/Special:Preferences">Special:Preferences</a>.</li>
<li>Este recordatorio de contraseña fue solicitado por la siguiente dirección: $1.</li>
</ul>
</p>',
	'autocreatewiki-welcomebody-HTML' => '<p>
Hola $2!<br />
<br />
¡Tu wiki ha sido creado! Aquí lo tienes: <a href="$1">$1</a><br />
<br />
¡Es el momento de comenzar la aventura! Hemos añadido algunos enlaces en tu <a href="$5">página de discusión</a> para ayudarte a comenzar y animarte a explorar sitios de Wikia en los que encontrarás páginas de ayuda que te podrían resultar interesantes. Si tienes preguntas o no sabes por dónde empezar, contéstanos a este email o echa un vistazo a nuestras <a href="http://ayuda.wikia.com/">páginas de ayuda</a>.<br />
<br />
También puedes mirar nuestro <a href="http://comunidad.wikia.com/wiki/Blog:Noticias_de_Wikia">blog de noticias</a>, donde encontrarás consejos e información sobre las nuevas funcionalidades y herramientas que añadimos a los wikis.<br />
<br />
¡Buena suerte con el wiki!<br />

<a href="http://comunidad.wikia.com/wiki/User:$4">$3</a><br />
Equipo comunitario de Wikia<br />
</p>
<br /><hr />
<p>
¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.
</p>',
	'confirmemail_body-HTML' => 'Hola $2,
<br /><br />
¡Te damos la bienvenida a Wikia!
<br /><br />
Por favor, tómate un descanso para activar tu nueva cuenta <a href="$3">confirmando tu dirección de correo electrónico</a>.
<br /><br />
Y ahora, llegó el momento... ¡hora de empezar la aventura!<br>
<ul><li>Echa un vistazo a la <a href="{{fullurl:{{ns:special}}:WikiActivity}}">actividad reciente</a> de la comunidad en la que acabas de participar. Comienza a contribuir mejorando las páginas que ya hay o creando nuevas páginas.</li>
<li>Explora <a href="http://comunidad.wikia.com/wiki/Lista_de_Wikis">nuestras comunidades</a> sobre videojuegos, entretenimiento o cualquier otro tema y diviértete descubriendo cosas nuevas.</li>
<li>Descubre qué sucede en Wikia y conoce a otros usuarios de Wikia en nuestro <a href="http://comunidad.wikia.com/wiki/Wikia">wiki comunitario</a>.</li></ul>
<br />
¡Diviértete!<br>
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'confirmemailreminder_body-HTML' => '<p>Hola $1,<br />
<br />
La última semana te uniste a Wikia, pero aún necesitas confirmar tu cuenta. Por favor, hazlo haciendo click <a href="$2">aquí</a>.<br />
<br />
¡Esperamos verte pronto!<br />
<br />
El Equipo Comunitario de Wikia<br />
<a href="http://www.wikia.com/">www.wikia.com</a>
</p>',
	'createaccount-text-HTML' => 'Hola,<br /><br />

Alguien creó una cuenta de usuario en  {{SITENAME}} con el nombre "$2" y la contraseña "$3". <br /><br />

Por favor, identifícate en $4<br /><br />

Si no necesitas esta cuenta, puedes ignorar este mensaje o contactar con nosotros a través de community@wikia.com para informarnos al respecto.<br /><br />

- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
Una de las páginas que estás siguiendo en {{SITENAME}}, $PAGETITLE, ha sido editada por $PAGEEDITOR.
<br /><br />
¿Quieres ver qué ha cambiado?  Visita <a href="$PAGETITLE_URL">$PAGETITLE</a> para ver la versión actual de la página.
<br /><br />
$NEWPAGEHTML
<br /><br />
$PAGESUMMARY
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_article_comment-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
Hay nuevos comentarios en la página $PAGETITLE de {{SITENAME}}. Usa el siguiente enlace para ver todos los comentarios: <a href="$PAGETITLE_URL#article-comments">$PAGETITLE</a>
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_blogs_comment-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
$PAGEEDITOR ha añadido un nuevo comentario a la entrada de blog "$BLOGTITLE"
<br /><br />
Visita <a href="$PAGETITLE_URL#comments">la entrada de blog</a> para ver los nuevos comentarios. 
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_delete-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
Una de las páginas que seguías en {{SITENAME}} ha sido borrada. La página se encontraba antes en <a href="$PAGETITLE_URL">$PAGETITLE</a> 
<br /><br />
$PAGESUMMARY
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_move-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
Una de las páginas que estabas siguiendo en {{SITENAME}} fue renombrada. Visita <a href="$PAGETITLE_URL">$PAGETITLE</a> para ver el nombre actual.
<br /><br />
$PAGESUMMARY
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_protect-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
Una página que sigues en {{SITENAME}} ha sido protegida. Visita <a href="$PAGETITLE_URL">$PAGETITLE</a> para ver la página.
<br /><br />
$PAGESUMMARY
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_restore-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />Una de las páginas que estabas siguiendo en {{SITENAME}} y que había sido borrada anteriormente, ha sido restaurada. Visita <a href="$PAGETITLE_URL">$PAGETITLE</a> para ver la versión actual.
<br /><br />
$PAGESUMMARY
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_rights-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
Los permisos de usuario en {{SITENAME}} han sido cambiados para el siguiente usuario: <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br /><br />
$PAGESUMMARY
<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">Haz clic aquí</a>  para ver un registro de todos los cambios recientes en los permisos de usuarios.
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_body_unprotect-HTML' => 'Hola $WATCHINGUSERNAME,
<br /><br />
Una de las páginas que sigues en {{SITENAME}} ha sido desprotegida. Puedes ver la página en <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br /><br />
$PAGESUMMARY
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'enotif_lastvisited-HTML' => '<a href="$1">Visita</a> para ver todos los cambios en esta página desde tu última visita.',
	'flobalwatchlist-digest-email-body-HTML' => '<p>Hhola $1,<br /><br />
Esta es una lista de páginas de tu lista de seguimiento que han sido editadas desde que las visitaste por última vez:<br /><br />
$2<br /><br />
Esta es una lista de páginas de blog de tu lista de seguimiento que han sido editadas o comentadas desde que las visitaste por última vez:<br /><br />
$3<br /><br />
Por favor, visítalas y edítalas a menudo...<br /><br />
Wikia<br /><hr />
<ul>
<li>Para cambiar tus preferencias sobre notificaciones de tu lista de seguimiento, visita por favor <a href="http://es.c.wikia.com/wiki/Special:Preferences">tus preferencias</a></li>
<li>Para marcar todas las páginas como visitadas, busca la opción "Lista de seguimiento" en tus preferencias.</li>
</ul></p>',
	'passwordremindertext-HTML' => '$1,
<br /><br />
La contraseña para el usuario "$2" ha sido cambiada a "$3".
<br /><br />
¿No solicitaste una nueva contraseña? No te preocupes, tu cuenta está segura; la contraseña solo la hemos enviado a esta dirección de correo electrónico, así que puedes continuar usando tu antigua contraseña sin problemas.
<br /><br />
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
	'reconfirmemail_body-HTML' => 'Hola $2,
<br /><br />
Gracias por actualizar tu dirección de email en tu cuenta de Wikia Por favor, confirma que esta es la dirección de correo electrónico correcta haciendo haciendo <a href="$3">aquí</a>, solo te tomará un minuto.
<br /><br />
¡Gracias!<br>
- Equipo comunitario de Wikia
<br /><hr />
<p>
<ul>
<li>Si necesitas ayuda o consejos, visita nuestra <a href="http://comunidad.wikia.com">comunidad central</a>.</li>
<li>¿Quieres dejar de recibir estos mensajes? Puedes darte de baja en el servicio de emails desde tus preferencias <a href="http://comunidad.wikia.com/Especial:Preferencias">aquí</a>.</li>
</ul>
</p>',
);

$messages['fa'] = array(
	'confirmemail_body-HTML' => 'سلام $2،

از ثبت‌نام شما در ویکیا متشکریم! <br>

لطفا با <a href="$3">تایید آدرس پست الکترونیکی خود</a> یک دقیقه صرف فعال‌سازی حساب کاربری جدید خود کنید.<br>

آماده‌اید برای شروع؟<br>

<ul><li>یک نگاهی به تمام <a href="{{fullurl:{{ns:special}}:WikiActivity}}">فعالیت‌های اخیر</a> جامعه‌ای که پیوسته‌اید بکنید! فعالیت خود را با گذاشتن پیغام و یا ویرایش صفحات آغاز کنید.</li>
<li>ویدیوی ویکیا را <a href="http://www.wikia.com/Special:LandingPage">تماشا</a> و شروع کنید به کاوش‌کردن در یکی از ویکی‌های مورد علاقۀ ما در بازی‌ها، سرگرمی‌ها، و شیوۀ زندگی.
</li>
<li>با جامعۀ ویکیا دیدار داشته‌باشید، آنچه در حال اتفاق افتادن است را بیاموزید، و کمک پیدا کنید - همه را در<a href="http://community.wikia.com/wiki/Community_Central">ویکیای مرکزی</a>.</li></ul>


خوش باشید!<br/>

- بخش پشتبانی جامعۀ ویکیا<br>

<br /><hr />
<p>
<ul>
<li>Find help and advice on <a href="http://community.wikia.com">Community Central</a>.</li>
<li>Want to control which emails you receive? Go to <a href="{{fullurl:{{ns:special}}:Preferences}}">User Preferences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Click <a href="$UNSUBSCRIBEURL">here</a> to unsubscribe from all Wikia emails.</div>',
);

$messages['fr'] = array(
	'confirmemail_body-html' => '<p>Quelqu’un, probablement vous, à partir de l’adresse IP $1,<br />
a enregistré un compte « $2 » avec cette adresse de courriel<br />
sur le site {{SITENAME}}.
<br /><br />
Pour confirmer que ce compte vous appartient vraiment et afin<br />
d’activer les fonctions de messagerie sur {{SITENAME}},<br />
veuillez suivre ce lien dans votre navigateur:<br />
<br /><br />
<a href="$3">$3</a>
<br /><br />
Si vous n’avez *pas* enregistré ce compte, n’ouvrez pas ce lien ;<br />
vous pouvez suivre l’autre lien ci-dessous pour annuler la<br />
confirmation de votre adresse courriel :<br />
<br /><br />
<a href="$5">$5</a>
<br /><br />
Ce code de confirmation expirera le $4.
<br /></p>',
	'createaccount-text-html' => '<p>Quelqu’un a créé un compte pour votre adresse de courriel sur {{SITENAME}} ($4) intitulé « $2 », avec le mot de passe « $3 ».<br />
Vous devriez ouvrir une session et modifier dès à présent votre mot de passe.<br />
<br />
Ignorez ce message si ce compte a été créé par erreur.<br />
</p>',
	'enotif_body-html' => '<p>Cher $WATCHINGUSERNAME,<br />
<br />
la page $PAGETITLE de {{SITENAME}} a été $CHANGEDORCREATED le $PAGEEDITDATE par $PAGEEDITOR, voyez <a href="$PAGETITLE_URL">$PAGETITLE</a> pour la version actuelle.<br />
<br />
$NEWPAGEHTML<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Contactez l’éditeur :<br />
courriel : $PAGEEDITOR_EMAIL<br />
wiki : $PAGEEDITOR_WIKI<br />
<br />
Il n’y aura pas de nouvelles notifications en cas d’autres modifications à moins que vous ne visitiez cette page. Vous pouvez aussi remettre à zéro le notificateur pour toutes les pages de votre liste de suivi.<br />
<br />
Votre système de notification {{SITENAME}}<br />
<hr />
Pour modifier les paramètres de votre liste de suivi, visitez<br />
<a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a><br />
<br />
Retour et assistance :<br />
<a href="{{fullurl:{{MediaWiki:Helppage}}}}">{{fullurl:{{MediaWiki:Helppage}}}}</a>
</p>',
	'enotif_body_delete-html' => '<p>Bonjour $WATCHINGUSERNAME,<br />
<br />
la page « $PAGETITLE » de {{SITENAME}} a été effacé de $PAGEEDITOR le $PAGEEDITDATE.<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Contacter cet utilisateur:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Il n\'aura plus des messages depuis vous avez visité cette page. Sur ta page de la liste de suivi tu peux organiser tes pages suives.<br />
<br />
Votre system gentil de messages de {{SITENAME}}<br />
<br />
<hr />
<ul>
<li>Veuillez rganiser tes préférences de la liste de suivi ?  Visitez <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Plus des trucs vous trouvez sur : <a href="http://fr.wikia.com">http://fr.wikia.com</a></li>
</ul>
</p>',
	'enotif_body_restore-html' => '<p>Bonjour $WATCHINGUSERNAME,<br />
<br />
la page « $PAGETITLE » de {{SITENAME}} a été restauré de $PAGEEDITOR le $PAGEEDITDATE.<br />
<br />
Version currente: <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br />
$NEWPAGE<br />
<br />
$PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Contacter l\'utilisateur:<br />
E-Mail: $PAGEEDITOR_EMAIL<br />
Wiki: $PAGEEDITOR_WIKI<br />
<br />
Il n\'aura plus des messages depuis vous avez visité cette page. Sur ta page de la liste de suivi tu peux organiser tes pages suives.<br />
<br />
Votre system gentil de messages de {{SITENAME}}<br />
<br />
<hr />
<ul>
<li>Veuillez rganiser tes préférences de la liste de suivi ?  Visitez <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a></li>
<li>Plus des trucs vous trouvez sur : <a href="http://fr.wikia.com">http://fr.wikia.com</a></li>
</ul>
</p>',
	'enotif_lastvisited-html' => 'Pour tous les changements depuis votre dernière visite, voyez <a href="$1">ce lien</a>',
	'globalwatchlist-digest-email-body-html' => '<p>Bonjour $1,<br />
<br />
Au dessous vous trouvez une liste des toutes pages qui étaient modifiés après votre dernière visite.<br />
<br />
$2<br />
<br />
Visitez et modifiez, si le cas échant...<br />
<br />
Wikia<br /><br />
<ul>
<li>Vous pouvez modifier vos préférences ici, si vous ne voulez plus recevoir: <a href="http://www.wikia.com/wiki/Special:Preferences">http://www.wikia.com/wiki/Special:Preferences</a></li>
</ul>
</p>',
	'passwordremindertext-html' => '<p>Quelqu’un (probablement vous, ayant l’adresse IP $1) a demandé un nouveau mot de<br />
passe pour {{SITENAME}} ($4). Un mot de passe temporaire a été créé pour<br />
l’utilisateur « $2 » et est « $3 ». Si cela était votre intention, vous devrez<br />
vous connecter et choisir un nouveau mot de passe.<br />
Votre mot de passe temporaire expirera dans $5 jour{{PLURAL:$5||s}}.<br />
<br />
Si vou n’êtes pas l’auteur de cette demande, ou si vous vous souvenez à présent<br />
de votre ancien mot de passe et que vous ne souhaitez plus en changer, vous<br />
pouvez ignorer ce message et continuer à utiliser votre ancien mot de passe.<br />
</p>',
	'autocreatewiki-welcomebody-HTML' => '<p>Bonjour $2 !<br /><br />
Le wikia que vous avez créé est maintenant accessible via <a href="$1">$1</a>.<br /><br />
Prêt à commencer ? Nous avons ajouté quelques liens sur <a href="$5">votre page de discussion</a> pour vous aider à commencer et vous encourager à explorer les nombreuses zones d\'aide de Wikia. Si vous avez des questions ou vous sentez un peu perdu, répondez à ce message ou regardez nos <a href="http://communaute.wikia.com/wiki/Catégorie:Aide">pages d\'aide </a>.<br /><br />
Vous pouvez aussi regarder le <a href="http://communaute.wikia.com/wiki/Blog:Actualit%C3%A9_Wikia">blog d\'actualité</a> où vous trouverez des trucs et astuces, des informations sur les nouvelles fonctionnalités et les nouveautés sur Wikia.<br /><br />
Bonnes modifications !<br /><br />
L’équipe Wikia<br /><br />
<a href="http://communaute.wikia.com/wiki/Utilisateur:$4">$3</a></p>',
	'confirmemail_body-HTML' => '<p>Bonjour $2,
<br /><br />
Merci de vous êtes inscrit sur Wikia !
<br /><br />
Veuillez prendre une minute pour activer votre nouveau compte en <a href="$3">confirmant votre adresse e-mail</a>.
<br /><br />
Prêt à commencer ?<br>
<ul><li>Regardez l\'<a href="{{fullurl:{{ns:special}}:WikiActivity}}">activité récente</a> de la communauté que vous venez de rejoindre ! Commencez à contribuer en laissant des commentaires ou en modifiant des pages.</li>
<li><a href="http://fr.wikia.com/Wikia">Découvrez</a> quelques wikias de jeux vidéo, divertissement et mode de vie.</li>
<li>Rencontrez la communauté Wikia, restez informé des derniers évènements et trouvez de l\'aide, tout cela sur le <a href="http://communaute.wikia.com/wiki/Centre_des_communautés">Centre des communautés</a>.</li></ul>
<br />
Bonnes modifications !<br>
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>',
	'confirmemailreminder_body-HTML' => 'Bonjour $1,

La semaine dernière vous avez rejoint Wikia, mais vous devez cependant confirmer votre compte. 

Vous pouvez le faire en cliquant sur <a href="$2">ce lien</a>.

À très bientôt. 
-----------
L\'équipe de la communauté Wikia. 

<a href="http://www.wikia.com/">www.wikia.com</a>',
	'createaccount-text-HTML' => '<p>
Quelqu’un a créé un compte pour votre adresse e-mail sur {{SITENAME}} ($4), « $2 », avec le mot de passe « $3 ».<br />
Vous devriez ouvrir une session et modifier dès à présent votre mot de passe.<br />
<br />
Ignorez ce message si ce compte a été créé par erreur.<br />
</p>',
	'enotif_body-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Une des pages que vous suivez sur {{SITENAME}}, $PAGETITLE, a été modifiée par $PAGEEDITOR.
<br /><br />
Voulez-vous savoir ce qui a été fait ?  Consultez <a href="$PAGETITLE_URL">$PAGETITLE</a> pour voir la version actuelle.
<br /><br />
$NEWPAGEHTML
<br /><br />
$PAGESUMMARY
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_article_comment-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Un nouveau commentaire a été laissé sur « $PAGETITLE » sur {{SITENAME}}. Utilisez <a href="$PAGETITLE_URL#WikiaArticleComments">ce lien</a> pour voir tous les commentaires.
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="http://communaute.wikia.com/Special:Preferences">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_blogs_comment-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Un nouveau commentaire a été laissé sur le billet de blog « $BLOGTITLE » par $PAGEEDITOR.
<br /><br />
Venez voir <a href="$PAGETITLE_URL#comments">ce qui se dit</a>. 
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_delete-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Une page que vous suivez sur Messaging Wiki a été supprimée. L’adresse de la page était <a href="$PAGETITLE_URL">$PAGETITLE</a> 
<br /><br />
$PAGESUMMARY
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_move-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Une page que vous suivez sur {{SITENAME}} a été renommée. Allez à <a href="$PAGETITLE_URL">$PAGETITLE</a> pour en savoir plus.
<br /><br />
$PAGESUMMARY
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_protect-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Une page que vous suivez sur {{SITENAME}} a été protégée. Rendez vous sur <a href="$PAGETITLE_URL">$PAGETITLE</a> pour voir la page.
<br /><br />
$PAGESUMMARY
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails  que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_restore-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />Une page que vous suivez sur {{SITENAME}} qui a été précédemment supprimée a été restaurée. Consultez <a href="$PAGETITLE_URL">$PAGETITLE</a> pour voir la version actuelle.
<br /><br />
$PAGESUMMARY
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_rights-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Les droits utilisateur sur {{SITENAME}} ont été modifiés pour l’utilisateur suivant : <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br /><br />
$PAGESUMMARY
<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">Cliquez ici</a> pour le journal de toutes les modifications de droits utilisateur récentes.
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_unprotect-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Une page que vous suivez sur {{SITENAME}} est maintenant déprotégée. Vous pouvez voir cette page à <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br /><br />
$PAGESUMMARY
<br /><br />
— L’équipe Wikiat</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_body_upload-HTML' => '<p>$WATCHINGUSERNAME,
<br /><br />
Un fichier que vous suivez sur {{SITENAME}} a été importé.
<br /><br />
Consultez <a href="$PAGETITLE_URL">$PAGETITLE</a> pour la version actuelle.
<br /><br />
$PAGESUMMARY
<br /><br />
— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'enotif_lastvisited-HTML' => 'Pour toutes les modifications depuis votre dernière visite, <a href="$1">cliquez ici</a>',
	'founderemails-email-user-registered-body-HTML' => 'Bonjour $USERNAME,<br /><br />
On dirait que $EDITORNAME a créé un compte sur votre wikia ! Pourquoi ne pas passer lui dire bonjour sur sa <a href="$EDITORTALKPAGEURL">page de discussion</a> ?<br /><br />

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">– L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner à tous les e-mails de Wikia.</div>',
	'passwordremindertext-HTML' => '<p>
Quelqu’un (probablement vous, ayant l’adresse IP $1) a demandé un nouveau mot de<br />
passe pour {{SITENAME}} ($4). Un mot de passe temporaire a été créé pour<br />
l’utilisateur « $2 » et est « $3 ». Si cela était votre intention, vous devrez<br />
vous connecter et choisir un nouveau mot de passe.<br />
Votre mot de passe temporaire expirera dans $5 jour{{PLURAL:$5||s}}.<br />
<br />
Si vou n’êtes pas l’auteur de cette demande, ou si vous vous souvenez à présent<br />
de votre ancien mot de passe et que vous ne souhaitez plus en changer, vous<br />
pouvez ignorer ce message et continuer à utiliser votre ancien mot de passe.<br />
</p>',
);

$messages['it'] = array(
	'confirmemail_body-html' => '<p>Qualcuno, probabilmente tu stesso dall\'indirizzo IP $1, ha registrato l\'account "$2" su {{SITENAME}} indicando questo indirizzo e-mail.
<br /><br />
Per confermare che l\'account ti appartiene veramente e attivare le funzioni relative all\'invio di e-mail su {{SITENAME}}, apri il collegamento seguente con il tuo browser:
<br /><br />
<a href="$3">$3</a>
<br /><br />
Se *non* hai registrato tu l\'account, segui questo collegamento per annullare la conferma dell\'indirizzo e-mail:
<br /><br />
<a href="$5">$5</a>
<br /><br />
Questo codice di conferma scadrà automaticamente alle $4.
</p>',
	'createaccount-text-html' => '<p>Qualcuno ha creato un accesso a {{SITENAME}} ($4) a nome di $2, associato a questo indirizzo di posta elettronica. La password per l\'utente "$2" è impostata a "$3".<br />
È opportuno eseguire un accesso quanto prima e cambiare la password immediatamente.<br />
<br /><br />
Se l\'accesso è stato creato per errore, si può ignorare questo messaggio.<br />
</p>',
	'enotif_body-html' => '<p>Gentile $WATCHINGUSERNAME,<br />
<br />
la pagina $PAGETITLE di {{SITENAME}} è stata $CHANGEDORCREATED in data $PAGEEDITDATE da $PAGEEDITOR; la versione attuale si trova all\'indirizzo <a href="$PAGETITLE_URL">$PAGETITLE</a>.<br />
<br />
$NEWPAGEHTML<br />
<br />
Riassunto della modifica, inserito dall\'autore: $PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Contatta l\'autore della modifica:<br />
via e-mail: $PAGEEDITOR_EMAIL<br />
sul sito: $PAGEEDITOR_WIKI<br />
<br />
Non verranno inviate altre notifiche in caso di ulteriori cambiamenti, a meno che tu non visiti la pagina. Inoltre, è possibile reimpostare l\'avviso di notifica per tutte le pagine nella lista degli osservati speciali.<br />
<br />
Il sistema di notifica di {{SITENAME}}, al tuo servizio<br />
<hr/ >
Per modificare le impostazioni della lista degli osservati speciali, visita <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a><br />
<br />
Per dare il tuo feedback e ricevere ulteriore assistenza: <a href="{{fullurl:Help:Aiuto}}">{{fullurl:Help:Aiuto}}</a>.<br />
</p>',
	'passwordremindertext-html' => '<p>Qualcuno (probabilmente tu, con indirizzo IP $1) ha richiesto l\'invio di una nuova password di accesso a {{SITENAME}} ($4).<br />
Una password temporanea per l\'utente "$2" è stata impostata a "$3".<br />
È opportuno eseguire un accesso quanto prima e cambiare la password immediatamente. La password temporanea scadrà dopo {{PLURAL:$5|un giorno|$5 giorni}}.<br />
<br />
Se non sei stato tu a fare la richiesta, oppure hai ritrovato la password e non desideri più cambiarla, puoi ignorare questo messaggio e continuare a usare la vecchia password.<br />
</p>',
	'autocreatewiki-welcomebody-HTML' => '<p>Ciao $2,<br /><br />
La wiki che hai creato ora è disponibile su <a href="$1">$1</a>. Ci auguriamo di vedere presto i tuoi contributi!<br /><br />
Abbiamo aggiunto alcune informazioni e suggerimenti nella tua <a href="$5">pagina di discussione</a> per aiutarti a mettere in moto la tua wiki. Per qualunque domanda, puoi rispondere a questa email o leggere le pagine di aiuto sulla <a href="http://it.community.wikia.com/wiki/Aiuto:Contenuti">Wiki della Community</a>.<br /><br />
Buona fortuna per il tuo progetto,<br /><br /> 
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia Community Team<br /></p>',
	'confirmemail_body-HTML' => '<p>
Qualcuno, probabilmente tu stesso dall\'indirizzo IP $1, ha registrato l\'account "$2" su {{SITENAME}} indicando questo indirizzo e-mail.
<br /><br />
Per confermare che l\'account ti appartiene veramente e attivare le funzioni relative all\'invio di e-mail su {{SITENAME}}, apri il collegamento seguente con il tuo browser:
<br /><br />
<a href="$3">$3</a>
<br /><br />
Se *non* hai registrato tu l\'account, segui questo collegamento per annullare la conferma dell\'indirizzo e-mail:
<br /><br />
<a href="$5">$5</a>
<br /><br />
Questo codice di conferma scadrà automaticamente alle $4.
</p>',
	'confirmemailreminder_body-HTML' => '<p>Ciao $1,<br /><br />
La scorsa settimana ti sei registrato su Wikia, ma devi ancora confermare il tuo account. Per favore fallo cliccando <a href="$2">qui</a>.<br /><br />
Ti aspettiamo presto!<br /><br />
Il Community Team di Wikia<br />
<a href="http://www.wikia.com/">www.wikia.com</a></p>',
	'createaccount-text-HTML' => '<p>
Qualcuno ha creato un accesso a {{SITENAME}} ($4) a nome di $2, associato a questo indirizzo di posta elettronica. La password per l\'utente "$2" è impostata a "$3".<br />
È opportuno eseguire un accesso quanto prima e cambiare la password immediatamente.<br />
<br /><br />
Se l\'accesso è stato creato per errore, si può ignorare questo messaggio.<br />
</p>',
	'enotif_body-HTML' => '<p>
Gentile $WATCHINGUSERNAME,<br />
<br />
la pagina $PAGETITLE di {{SITENAME}} è stata $CHANGEDORCREATED in data $PAGEEDITDATE da $PAGEEDITOR; la versione attuale si trova all\'indirizzo <a href="$PAGETITLE_URL">$PAGETITLE</a>.<br />
<br />
$NEWPAGEHTML<br />
<br />
Riassunto della modifica, inserito dall\'autore: $PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Contatta l\'autore della modifica:<br />
via e-mail: $PAGEEDITOR_EMAIL<br />
sul sito: $PAGEEDITOR_WIKI<br />
<br />
Non verranno inviate altre notifiche in caso di ulteriori cambiamenti, a meno che tu non visiti la pagina. Inoltre, è possibile reimpostare l\'avviso di notifica per tutte le pagine nella lista degli osservati speciali.<br />
<br />
Il sistema di notifica di {{SITENAME}}, al tuo servizio<br />
<hr/ >
Per modificare le impostazioni della lista degli osservati speciali, visita <a href="{{fullurl:Special:Watchlist/edit}}">{{fullurl:Special:Watchlist/edit}}</a><br />
<br />
Per dare il tuo feedback e ricevere ulteriore assistenza: <a href="{{fullurl:Help:Aiuto}}">{{fullurl:Help:Aiuto}}</a>.<br />
</p>',
	'enotif_body_blogs_comment-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
$PAGEEDITOR ha commentato il blog post "$BLOGTITLE".<br /><br />
<a href="$PAGETITLE_URL#comments">Vedi i commenti</a><br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.wikia.com">Scopri le wiki in vetrina!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su le <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_delete-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Una pagina che stavi seguendo su {{SITENAME}} è stata cancellata.<br /><br />
La pagina si trovava su <a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_move-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Una pagina che seguivi su {{SITENAME}} è stata spostata.<br /><br />
Vai su <a href="$PAGETITLE_URL">$PAGETITLE</a> per la versione corrente.<br /><br />
$PAGESUMMARY<br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_prl_chn-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Un problema è stato aggiornato per una pagina che stai seguendo su {{SITENAME}}.<br /><br />
Vai su <a href="$PAGETITLE_URL">$PAGETITLE</a> per la pagina.<br /><br />
Per una lista di problemi segnalati di recenti, vedi <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a><br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_prl_rep-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Un problema è stato segnalato per una pagina che stai seguendo su {{SITENAME}}.<br /><br />
Vai su <a href="$PAGETITLE_URL">$PAGETITLE</a> per la pagina.<br /><br />
Per una lista di problemi segnalati di recenti, vedi <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a><br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_protect-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Una pagina che stai seguendo su {{SITENAME}} è stata protetta.<br /><br />
Vai su <a href="$PAGETITLE_URL">$PAGETITLE</a> per la versione corrente.<br /><br />
$PAGESUMMARY<br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_restore-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Una pagina che stavi seguendo su {{SITENAME}} è stata ripristinata dopo la rimozione.<br /><br />
Vai su <a href="$PAGETITLE_URL">$PAGETITLE</a>per la versione corrente.<br /><br />
$PAGESUMMARY<br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_rights-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
I diritti utente su {{SITENAME}} sono cambiati per una persona di cui stai seguendo la pagina utente. Puoi controllare la pagina utente qui: <a href="$PAGETITLE_URL">$PAGETITLE</a><br /><br />
$PAGESUMMARY<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">Clicca qui</a> per il registro di tutte le ultime modifiche ai diritti utente.<br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_unprotect-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Ad una pagina che stai seguendo su {{SITENAME}} è stata rimossa la protezione.<br /><br />
Vai su <a href="$PAGETITLE_URL">$PAGETITLE</a> per la versione corrente.<br /><br />
$PAGESUMMARY<br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'enotif_body_upload-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />
Un file che stai seguendo su {{SITENAME}} è stato caricato.<br /><br />
Vai su <a href="$PAGETITLE_URL">$PAGETITLE</a> per la versione corrente.<br /><br />
$PAGESUMMARY<br /><br />
Per favore modifica e visita spesso...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>Scopri le wiki in vetrina! <a href="http://www.wikia.com">Le trovi qui!</a></li>
<li>Vuoi controllare quali e-mail ricevi? Vai su: <a href="{{fullurl:{{ns:special}}:Preferences}}">preferenze utente</a></li>
</ul></p>',
	'passwordremindertext-HTML' => '<p>
Qualcuno (probabilmente tu, con indirizzo IP $1) ha richiesto l\'invio di una nuova password di accesso a {{SITENAME}} ($4).<br />
Una password temporanea per l\'utente "$2" è stata impostata a "$3".<br />
È opportuno eseguire un accesso quanto prima e cambiare la password immediatamente. La password temporanea scadrà dopo {{PLURAL:$5|un giorno|$5 giorni}}.<br />
<br />
Se non sei stato tu a fare la richiesta, oppure hai ritrovato la password e non desideri più cambiarla, puoi ignorare questo messaggio e continuare a usare la vecchia password.<br />
</p>',
);

$messages['ja'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>
こんにちは、$2 さん！<br />
<br />
あなたのウィキアコミュニティが作成されました！ 閲覧してみてください: <a href="$1">$1</a><br />
<br />
スタートする準備はできましたか？　私たちはあなたの<a href="$5">トークページ</a>にリンクを載せてあなたがスタートできるようにしています。そしてあなたがウィキアのあちこちにある数多くの役に立つエリアを探索するよう奨励しています。もし何か質問や少し戸惑いがあるときは、このメールに返信するか、<a href="http://ja.community.wikia.com/wiki/ヘルプ%3Aコンテンツ">ヘルプページ</a>を調べてみてください。<br />
<br />
ヒントとコツ、新機能やウィキアで起きた新しい出来事などについての情報が見つかる<a href="http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins">設立者＆管理者ブログ</a> (英語) と<a href="http://ja.community.wikia.com/wiki/ブログ%3Aウィキアスタッフブログ">ウィキアスタッフブログ</a>を閲覧することもできます。<br />
<br />
それでは楽しい編集を！<br />

<a href="http://ja.community.wikia.com/wiki/User:$4">$3</a><br />
ウィキア・コミュニティサポート<br />
</p>
<br /><hr />
<p>

私たちが送信するメッセージを減らしたいですか？ <a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>で定期購読を解除するか電子メールの設定を変更することができます。
</p>',
	'confirmemail_body-HTML' => 'こんにちは、$2 さん
<br /><br />
ウィキアに登録していただきありがとうございます！
<br /><br />
<a href="$3">あなたのメールアドレスの確認</a>によってあなたの新しいアカウントを有効にするため少し時間をください。
<br /><br />
始める用意はできましたか？<br>
<ul><li>あなたがたったいま参加したコミュニティの<a href="{{fullurl:{{ns:special}}:WikiActivity}}">最近の活動</a>のすべてを見てください！ コメントを残すかページを編集することで投稿を始めてみてください。</li>
<li>ウィキアビデオを<a href="http://www.wikia.com/Special:LandingPage">見て</a>ゲーム、エンターテイメント、ライフスタイルの中からお気に入りのウィキアを探索してみてください。</li>
<li>ウィキアのコミュニティと接触し、何が起きているかを知り、ヘルプを探してみてください - <a href="http://ja.community.wikia.com/wiki/コミュニティセントラル">コミュニティセントラル</a>にはそれがすべてあります</li></ul>
<br />
大いに楽しんでください！<br />
- ウィキア・コミュニティサポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちからのメッセージの受信を減らしたいですか？ Eメールの設定を<a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>で変更するか登録解除することができます。</li>
</ul>
</p>',
	'createaccount-text-HTML' => 'こんにちは<br /><br />

あなたが {{SITENAME}} でユーザー名「$2」、パスワード「$3」として作ろうとしたアカウントが作成されました。<br /><br />

$4 でログインしてください<br /><br />

もしこのアカウントが必要ない場合は、このメッセージを無視するか、 community@wikia.com に質問の問い合わせをすることができます。<br /><br />

- ウィキアコミュニティーサポート

<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ 電子メールの設定を<a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>で変更するか登録解除することができます。</li>
</ul>
</p>',
	'enotif_body-HTML' => 'こんにちは、$WATCHINGUSERNAME さん
<br /><br />
あなたがフォローしている {{SITENAME}} のページ $PAGETITLE が $PAGEEDITOR によって編集されました。
<br /><br />
何が更新されたのか興味がありますか？現在のバージョンの <a href="$PAGETITLE_URL">$PAGETITLE</a> をご覧ください。
<br /><br />
$NEWPAGEHTML
<br /><br />
$PAGESUMMARY
<br /><br />
- ウィキア・コミュニティサポート


<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ 電子メールの設定を<a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>で変更するか登録解除することができます。</li>
</ul>
</p>',
	'enotif_body_article_comment-HTML' => 'こんにちは、$WATCHINGUSERNAME さん
<br /><br />
{{SITENAME}} の $PAGETITLE に新しいコメントがあります。すべてのコメントを閲覧するには次のリンクをご利用ください : <a href="$PAGETITLE_URL#WikiaArticleComments">$PAGETITLE</a>
<br /><br />
- ウィキア・コミュニティ・サポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみよう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/特別:Preferences">こちら</a>にて定期購読解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'enotif_body_blogs_comment-HTML' => 'こんにちは、$WATCHINGUSERNAME さん
<br /><br />
ブログ投稿「$BLOGTITLE」に新しいコメントが $PAGEEDITOR によってつけられました。
<br /><br />
<a href="$PAGETITLE_URL#comments">会話・雑談が進行している場所</a>に来てください。 
<br /><br />
- ウィキア・コミュニティ・サポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com">コミュニティセントラル</a>でヘルプやアドバイスを探す。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？　<a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>にて定期購読解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'enotif_body_delete-HTML' => 'こんにちは、$WATCHINGUSERNAME さん
<br /><br />
あなたが {{SITENAME}} でフォローしているページは削除されました。このページは以前は <a href="$PAGETITLE_URL">$PAGETITLE</a> にありました
<br /><br />
$PAGESUMMARY
<br /><br />
- ウィキアコミュニティーサポート

<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ 電子メールの設定を<a href="http://ja.community.wikia.com/特別:Preferences">こちら</a>で定期購読を解除するか電子メールの設定を変更することができます。</li>
</ul>
</p>',
	'enotif_body_move-HTML' => 'こんにちは $WATCHINGUSERNAME さん、
<br /><br />
あなたが {{SITENAME}} でフォローしているページ名が変更されました。 詳細を確認するには <a href="$PAGETITLE_URL">$PAGETITLE</a> にアクセスしてください。
<br /><br />
$PAGESUMMARY
<br /><br />
- ウィキア・コミュニティ・サポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>にて定期購読解除や電子メールの設定を変更することができます。</li>
</ul>
</p>',
	'enotif_body_prl_chn-HTML' => '<p>
$WATCHINGUSERNAME さん、
<br /><br />
あなたが {{SITENAME}} でフォローしているページに関する問題レポートがアップデートされました。<a href="$PAGETITLE_URL">$PAGETITLE</a>にてそのページをご覧ください。
<br /><br />
最近の問題レポートの一覧は、<a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a>をご覧ください。
<br /><br />
{{SITENAME}} のコミュニティに参加して Wiki の改良を手助けしていることに感謝します！

<br /><br />
- ウィキア・コミュニティ・チーム
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com">ウィキアでの最近の出来事を調べよう！</a></li>
<li>私たちが送信するメッセージの受信を減らしたいですか？　<a href="http://ja.community.wikia.com/wiki/特別:Preferences">こちら</a>にて定期購読解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'enotif_body_prl_rep-HTML' => '<p>
$WATCHINGUSERNAME さん、
<br /><br />
あなたが {{SITENAME}} でフォローしているページに関する問題が報告されました。
<br /><br />
<a href="$PAGETITLE_URL">$PAGETITLE</a> でそのページをご覧ください。最近の問題レポートに関しては、<a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a>をご覧ください。
<br /><br />
{{SITENAME}} コミュニティに参加し、Wikiの改良の手助けをしていることに感謝します！
<br /><br />
- ウィキア・コミュニティ・チーム
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com">ウィキアでの最近の出来事を調べてみよう！</a></li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/wiki/特別:Preferences">こちら</a>にて定期購読の解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'enotif_body_protect-HTML' => 'こんにちは、$WATCHINGUSERNAME さん、
<br /><br />
あなたが {{SITENAME}} でフォローしているページが保護されました。ページを確認するには <a href="$PAGETITLE_URL">$PAGETITLE</a> にアクセスしてください。
<br /><br />
$PAGESUMMARY
<br /><br />
- ウィキア・コミュニティ・サポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>にて定期購読解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'enotif_body_restore-HTML' => 'こんにちは、$WATCHINGUSERNAME さん
<br /><br />{{SITENAME}} で以前削除され、あなたがフォローしているページが復帰しました。現在のバージョンを確認するには <a href="$PAGETITLE_URL">$PAGETITLE</a> をご覧ください。
<br /><br />
$PAGESUMMARY
<br /><br />
- ウィキア・コミュニティ・サポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>にて定期購読解除や電子メールの設定を変更することができます。</li>
</ul>
</p>',
	'enotif_body_rights-HTML' => 'こんにちは、$WATCHINGUSERNAME さん
<br /><br />
{{SITENAME}} 次のユーザーのユーザー権限が変更されました: <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br /><br />
$PAGESUMMARY
<br /><br />
最近のユーザー権限変更のすべてのログの確認は <a href="{{fullurl:{{ns:special}}:Log/rights}}">ここをクリック</a>してください。
<br /><br />
- ウィキア・コミュニティ・サポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>にて定期購読解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'enotif_body_unprotect-HTML' => 'こんにちは、$WATCHINGUSERNAME さん
<br /><br />
あなたが {{SITENAME}} でフォローしているページは現在保護解除されています。<a href="$PAGETITLE_URL">$PAGETITLE</a> でこのページを閲覧することができます。
<br /><br />
$PAGESUMMARY
<br /><br />
- ウィキア・コミュニティ・サポート
<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>にて定期購読解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'enotif_body_upload-HTML' => '<p>$WATCHINGUSERNAME 様、<br /><br />
あなたが {{SITENAME}} でウォッチしているファイルがアップロードされました。<br /><br />
現在のバージョンは <a href="$PAGETITLE_URL">$PAGETITLE</a> をご覧ください。<br /><br />
$PAGESUMMARY<br /><br />
下記のサイトに頻繁にアクセスして編集してみてください...<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>ウィキアのハブをご覧になりましたか？ <a href="http://ja.community.wikia.com/wiki/カテゴリ:ハブ">こちらからアクセス！</a></li>
<li>受信する電子メールを制御したいですか？　アクセス: <a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}<a>.</li>
</ul></p>',
	'enotif_lastvisited-HTML' => '最後にアクセスして以来のこのページのすべての変更を閲覧するには、<a href="$1">こちらをクリック</a>',
	'founderemails-email-user-registered-body-HTML' => '$USERNAME さん、<br /><br />
$EDITORNAME が $WIKINAME に参加しました。<br /><br />
歓迎のメッセージを送るなどして、編集してもらえるように誘導してきましょう。参加者が多ければ多いほど、ウィキの成長は早まります。<br /><br />
トークページ:<br />
<a href="$EDITORTALKPAGEURL">$EDITORTALKPAGEURL</a><br /><br />
-- ウィキアチーム',
	'passwordremindertext-HTML' => '$1 さん、
<br /><br />
ユーザー「$2」のログインパスワードが「$3」に変更されました。
<br /><br />
新しいパスワードをリクエストした覚えがありませんか？ 心配いりません。あなたのアカウントは安全です。パスワードの変更はこの電子メールアドレスにのみ送信されています。古いパスワードの利用を継続することができます。
<br /><br />
- ウィキア・コミュニティ・サポート

<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティセントラル</a>でヘルプやアドバイスを探してみよう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ <a href="http://ja.community.wikia.com/Special:Preferences">こちら</a>にて定期購読解除や電子メールの設定変更をすることができます。</li>
</ul>
</p>',
	'reconfirmemail_body-HTML' => 'こんにちは、$2 さん
<br /><br />
あなたのウィキアのアカウントのメールアドレスを更新していただきありがとうございます。お手数ですが<a href="$3">こちらをクリック</a>してメールアドレスの確認をお願いします。
<br /><br />
ありがとうございます！<br>
- ウィキア・コミュニティサポート

<br /><hr />
<p>
<ul>
<li><a href="http://ja.community.wikia.com/wiki/">コミュニティーセントラル</a>でヘルプやアドバイスを探してみましょう。</li>
<li>私たちが送信するメッセージの受信を減らしたいですか？ Eメールの設定を<a href="http://ja.community.wikia.com/wiki/特別:個人設定">こちら</a>で変更するか登録解除することができます。</li>
</ul>
</p>',
);

$messages['ko'] = array(
	'confirmemail_body-HTML' => '안녕하세요, $2 님.
<br /><br />
위키아에 가입해주셔서 감사합니다!
<br /><br />
<a href="$3">이곳</a>에서 이메일 주소를 인증해 계정을 활성화해 주세요.
<br /><br />
시작할 준비가 되셨나요?<br>
<ul><li>귀하가 참여한 커뮤니티에서 <a href="{{fullurl:{{ns:special}}:WikiActivity}}">최근 일어난 일</a>들을 알아 보세요! 댓글을 남기거나 문서를 편집해 기여를 시작하실 수 있습니다.</li>
<li><a href="http://www.wikia.com/Special:LandingPage">영상</a>을 시청하시고 저희가 추천해드리는, 게임, 엔터테인먼트, 생활 등 다양한 분야의 위키를 탐방해 보시는 건 어떨까요?</li>
<li><a href="http://ko.community.wikia.com/wiki/">위키아 중앙 커뮤니티</a>에서 다양한 사람들과 대화를 나누고, 도움을 구해 보세요.</li></ul>
<br />
즐거운 위키아 이용 되세요!<br>
- 위키아 커뮤니티 지원팀
<br /><hr />
<p>
<ul>
<li>위키아 중앙 커뮤니티에서 도움을 구하실 수 있습니다: <a href="http://ko.community.wikia.com">위키아 중앙 커뮤니티</a>.</li>
<li>알림을 받고 싶지 않으신가요? 이곳에서 알림 설정을 변경하실 수 있습니다: <a href="http://ko.community.wikia.com/특수기능:환경설정">특수기능:환경설정</a></li>',
	'confirmemailreminder_body-HTML' => '<p>$1님 안녕하세요.<br />
<br />
지난 주에 위키아에 가입하셨지만 아직 계정 인증을 하지 않으셨습니다. <a href="$2">여기</a>를 눌러 계정 인증을 해주시기 바랍니다.<br />
<br />
조만간 위키아에서 만나뵐 수 있기를 기대합니다.
<br />
<br />
위키아 커뮤니티 팀 드림<br />
<a href="http://www.wikia.com/">www.wikia.com</a>
</p>',
	'enotif_body_article_comment-HTML' => '<p> $WATCHINGUSERNAME님, <br /><br /> $PAGEEDITOR 사용자가 "$PAGETITLE" 문서에 댓글을 남겼습니다. <br /><br /> 댓글을 보시려면 다음 링크로 들어가세요: <a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br /> 자주 방문해주시고 기여도 많이 부탁드립니다. <br /><br /> {{SITENAME}} <br /><hr /> <ul> <li>메일로 알림받는 항목들을 관리하고 싶으신가요? <a href="{{fullurl:{{ns:special}}:환경설정}}">{{ns:special}}:환경설정<a>에서 해주세요.</li> </ul> </p>',
	'reconfirmemail_body-HTML' => '안녕하세요, $2 님.
<br /><br />
방금 막 귀하의 위키아 이메일 주소를 변경하신 것을 확인했습니다. 이 이메일 주소가 맞다면 <a href="$3">이곳</a>을 클릭해 인증해 주세요.
<br /><br />
감사합니다!<br>
- 위키아 커뮤니티 지원팀

<br /><hr />
<p>
<ul>
<li>위키아 중앙 커뮤니티에서 도움을 구하실 수 있습니다: <a href="http://ko.community.wikia.com">위키아 중앙 커뮤니티</a></li>
<li>알림을 받고 싶지 않으신가요? 이곳에서 알림 설정을 변경하실 수 있습니다: <a href="http://ko.community.wikia.com/특수기능:환경설정">특수기능:환경설정</a></li>
</ul>
</p>',
);

$messages['nl'] = array(
	'enotif_body_article_comment-HTML' => '<p>Hoi $WATCHINGUSERNAME,
<br /><br />
$ PAGEEDITOR heeft een opmerking geplaatst bij "$PAGETITLE".
<br /><br />
Je kunt de discussie bekijken via de volgende verwijzing: <a href="$PAGETITLE_URL">$PAGETITLE</a> 
<br /><br />
Kom alsjeblieft vaak langs en bewerk veelvuldig...
<br /><br />
Wikia
<br /><hr />
<ul>
<li>Wilt je bepalen welke e-mails je ontvangt? <a href="{{fullurl:{{ns:special}}:Preferences}}">Pas dan je Voorkeuren<a> aan.</li>
</ul>
</p>',
);

$messages['nl-informal'] = array(
	'autocreatewiki-welcomebody-html' => 'Hallo $2,


De Wikia die je gemaakt hebt is nu beschikbaar op <a href="$1">$1</a>. We hopen je daar snel te zien bewerken!


We hebben wat informatie en tips toegevoegd op <a href="$5">je overleg pagina</a> om je op gang te helpen komen. Als je enige vragen hebt, reageer dan op deze e-mail of bekijk onze hulp pagina\'s op <a href="http://hulp.wikia.com/">Wikia Hulp</a>.
Veel succes met je project,


<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia Community Team',
	'confirmemail_body-html' => 'Hallo $2,

Bedankt voor het registreren bij Wikia.


Activeer a.u.b. je nieuwe account door <a href="$3">je email adres te bevestigen.</a>


We kijken er naar uit om je binnenkort te zien!

Het Wikia Community Team<br />
<a href="http://community.wikia.com/">http://community.wikia.com/</a>',
	'createaccount-text-html' => 'Iemand maakte een account met jouw e-mail adres op {{SITENAME}} ($4) genaamd "$2", met het wachtwoord "$3". <br />
Je zou in moeten loggen en je wachtwoord nu veranderen.
<br /><br />
Je kan dit bericht negeren, als de aanmaak van deze account een fout was.',
	'reconfirmemail_body-html' => 'Hallo $2,

Bedankt voor het updaten van het mail adres voor je Wikia account. Bevestig a.u.b. dat dit het correcte email adres is door <a href="$3">hier te klikken</a>.


We kijken er naar uit om je op Wikia te zien!

Het Wikia Community Team <br />
<a href="http://community.wikia.com/">community.wikia.com</a>',
);

$messages['pl'] = array(
	'confirmemail_body-html' => '<p>Ktoś łącząc się z komputera o adresie IP $1<br/ >
zarejestrował w {{GRAMMAR:MS.lp|{{SITENAME}}}} konto „$2” podając niniejszy adres e‐mail.<br />
<br />
Aby potwierdzić, że to Ty zarejestrowałeś to konto oraz, aby włączyć<br />
wszystkie funkcje korzystające z poczty elektronicznej, otwórz w swojej<br />
przeglądarce ten link:<br />
<br /><br />
<a href="$3">$3</a >
<br /><br />
Jeśli to *nie* Ty zarejestrowałeś konto, otwórz w swojej przeglądarce<br />
poniższy link, aby anulować potwierdzenie adresu e‐mail:<br />
<br /><br />
<a href="$5">$5</a>
<br /><br />
Kod zawarty w linku straci ważność $4.
<br /></p>',
	'createaccount-text-html' => '<p>Ktoś utworzył w {{GRAMMAR:MS.lp|{{SITENAME}}}} ($4), podając Twój adres e‐mail, konto „$2”. Aktualnym hasłem jest „$3”.<br />
Zaloguj się teraz i je zmień.<br />
<br />
Możesz zignorować tę wiadomość, jeśli konto zostało utworzone przez pomyłkę.<br />
</p>',
	'enotif_body-html' => '<p>Drogi (droga) $WATCHINGUSERNAME,<br />
<br />
strona $PAGETITLE w {{GRAMMAR:MS.lp|{{SITENAME}}}} została $CHANGEDORCREATED $PAGEEDITDATE przez użytkownika $PAGEEDITOR. Zobacz na stronie <a href="$PAGETITLE_URL">$PAGETITLE</a> aktualną wersję.<br />
<br />
$NEWPAGEHTML<br />
<br />
Opis zmiany: $PAGESUMMARY $PAGEMINOREDIT<br />
<br />
Skontaktuj się z autorem:<br />
mail: $PAGEEDITOR_EMAIL<br />
wiki: $PAGEEDITOR_WIKI<br />
<br />
W przypadku kolejnych zmian nowe powiadomienia nie zostaną wysłane, dopóki nie odwiedzisz tej strony.<br />
Możesz także zresetować wszystkie flagi powiadomień na swojej liście stron obserwowanych.<br />
<br />
Wiadomość systemu powiadomień {{GRAMMAR:D.lp|{{SITENAME}}}}<br />
<br />
<hr />
W celu zmiany ustawień swojej listy obserwowanych odwiedź<br />
<a href="{{fullurl:{{ns:special}}:Watchlist/edit}}">{{fullurl:{{ns:special}}:Watchlist/edit}}</a>
<br /><br />
Pomoc:<br />
<a href="{{fullurl:{{MediaWiki:Helppage}}}}">{{fullurl:{{MediaWiki:Helppage}}}}</a><br />
</p>',
	'passwordremindertext-html' => '<p>Ktoś (prawdopodobnie Ty, spod adresu IP $1)<br />
poprosił o przesłanie nowego hasła do {{GRAMMAR:D.lp|{{SITENAME}}}} ($4).<br/ >
Dla użytkownika „$2” zostało wygenerowane tymczasowe hasło i jest nim „$3”.<br />
Jeśli było to zamierzone działanie, to po zalogowaniu się, musisz podać nowe hasło. <br />
Tymczasowe hasło wygaśnie za {{PLURAL:$5|1 dzień|$5 dni}}.<br />
<br />
Jeśli to nie Ty prosiłeś o przesłanie hasła lub przypomniałeś sobie hasło i nie chcesz go zmieniać, wystarczy, że zignorujesz tę wiadomość i dalej będziesz się posługiwać swoim dotychczasowym hasłem.<br />
</p>',
	'confirmemail_body-HTML' => '<p>
Ktoś łącząc się z komputera o adresie IP $1<br/ >
zarejestrował w {{GRAMMAR:MS.lp|{{SITENAME}}}} konto „$2” podając niniejszy adres e‐mail.<br />
<br />
Aby potwierdzić, że to Ty zarejestrowałeś to konto oraz, aby włączyć<br />
wszystkie funkcje korzystające z poczty elektronicznej, otwórz w swojej<br />
przeglądarce ten link:<br />
<br /><br />
<a href="$3">$3</a >
<br /><br />
Jeśli to *nie* Ty zarejestrowałeś konto, otwórz w swojej przeglądarce<br />
poniższy link, aby anulować potwierdzenie adresu e‐mail:<br />
<br /><br />
<a href="$5">$5</a>
<br /><br />
Kod zawarty w linku straci ważność $4.
<br /></p>',
	'createaccount-text-HTML' => '<p>
Ktoś utworzył w {{GRAMMAR:MS.lp|{{SITENAME}}}} ($4), podając Twój adres e‐mail, konto „$2”. Aktualnym hasłem jest „$3”.<br />
Zaloguj się teraz i je zmień.<br />
<br />
Możesz zignorować tę wiadomość, jeśli konto zostało utworzone przez pomyłkę.<br />
</p>',
	'enotif_body-HTML' => 'Witaj $WATCHINGUSERNAME,
<br /><br />
Strona $PAGETITLE na {{SITENAME}} została zmieniona przez użytkownika $PAGEEDITOR.
<br /><br />
Zobacz na stronie <a href="$PAGETITLE_URL">$PAGETITLE</a> aktualną wersję.
<br /><br />
$NEWPAGEHTML
<br /><br />
$PAGESUMMARY
<br /><br />
— Zespół Wikii


<br /><hr />
<p>
<ul>
<li>Aby uzyskać dodatkową pomoc od społeczności Wikii, odwiedź <a href="http://spolecznosc.wikia.com">Centrum Społeczności</a>.</li>
<li>W celu zmiany ustawień powiadomień e-mail, odwiedź <a href="http://spolecznosc.wikia.com/wiki/Special:Preferences">tą stronę</a>.</li>
</ul>
</p>',
	'enotif_body_article_comment-HTML' => '<p>Witaj $WATCHINGUSERNAME,
<br /><br />
Na {{SITENAME}} pojawił się nowy komentarz na stronie $PAGETITLE . Użyj tego linku aby zobaczyć wszystkie komentarze: <a href="$PAGETITLE_URL#WikiaArticleComments">$PAGETITLE</a>
<br /><br />
- Zespół Wikii
<br /><br />
___________________________________________
<ul>
<li>Aby uzyskać dodatkową pomoc od społeczności Wikii, odwiedź <a href="http://spolecznosc.wikia.com">Centrum Społeczności</a>.</li>
<li>W celu zmiany ustawień powiadomień e-mail, odwiedź <a href="http://spolecznosc.wikia.com/wiki/Special:Preferences">tą stronę</a>.</li>
</ul>
</p>',
	'enotif_lastvisited-HTML' => 'Aby zobaczyć wszystkie zmiany od Twojej ostatniej wizyty, <a href="$1">kliknij tutaj</a>',
	'passwordremindertext-HTML' => '<p>
Ktoś (prawdopodobnie Ty, spod adresu IP $1)<br />
poprosił o przesłanie nowego hasła do {{GRAMMAR:D.lp|{{SITENAME}}}} ($4).<br/ >
Dla użytkownika „$2” zostało wygenerowane tymczasowe hasło i jest nim „$3”.<br />
Jeśli było to zamierzone działanie, to po zalogowaniu się, musisz podać nowe hasło. <br />
Tymczasowe hasło wygaśnie za {{PLURAL:$5|1 dzień|$5 dni}}.<br />
<br />
Jeśli to nie Ty prosiłeś o przesłanie hasła lub przypomniałeś sobie hasło i nie chcesz go zmieniać, wystarczy, że zignorujesz tę wiadomość i dalej będziesz się posługiwać swoim dotychczasowym hasłem.<br />
</p>',
);

$messages['pt-br'] = array(
	'enotif_body_delete-HTML' => '<p>Caro $WATCHINGUSERNAME,<br /><br />Uma página que você estava vigiando na {{SITENAME}} foi deletada.<br /><br /> A página estava em <a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br /> Por favor, visite e edite frequentemente...<br /><br />{{SITENAME}}<br /><hr /><ul><li>Confira as nossas wikias em destaque!<a href="http://www.pt.wikia.com">Visite-as aqui!</a></li><li>Quer controlar quais emails você recebe? Vá a: <a href="{{fullurl:{{ns:special}}:Preferences}}"> Minhas preferências</a></li>
</ul></p>',
);

$messages['ru'] = array(
	'enotif_body-HTML' => 'Здравствуйте, $WATCHINGUSERNAME.
<br /><br />
Одна из страниц, которую Вы отслеживаете, $PAGETITLE на {{SITENAME}}, была отредактирована $PAGEEDITOR.
<br /><br />
Хотите узнать, что изменилось? Зайдите на <a href="$PAGETITLE_URL">$PAGETITLE</a>, чтобы увидеть текущую версию страницы.
<br /><br />
$NEWPAGEHTML
<br /><br />
$PAGESUMMARY
<br /><br />
- Команда Викия


<br /><hr />
<p>
<ul>
<li>Найти помощь и совет можно на <a href="http://www.community.wikia.com">Community Central</a> и <a href="http://www.ru.community.wikia.com">Вики Сообщества</a>.</li>
<li>Хотите уменьшить количество данных писем? Вы можете отписаться от рассылки или внести в неё коррективы на <a href="http://community.wikia.com/Special:Preferences">странице личных настроек</a>.</li>
</ul>
</p>',
	'enotif_body_article_comment-HTML' => '<p>Уважаемый $WATCHINGUSERNAME,
<br /><br />
Участник $PAGEEDITOR оставил комментарий на "$PAGETITLE".
<br /><br />
Чтобы увидеть данный комментарий, проследуйте по этой ссылке: <a href="$PAGETITLE_URL">$PAGETITLE</a>
<br /><br />
Викия
<br /><hr />
<ul>
<li>Чтобы настроить уведомления по email, <a href="{{fullurl:Special:Preferences}}">обновите личные настройки<a>.</li>
</ul>
</p>',
	'enotif_lastvisited-HTML' => 'Чтобы просмотреть все изменения, произошедшие с вашего последнего посещения 
это страницы, <a href="$1">нажмите здесь</a>',
);

$messages['sv'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>
Hej $2,<br />
<br />
Wikia du skapat är nu tillgänglig på <a href="$1">$1</a>. Vi hoppas att ni redigering där snart!<br />
<br />
Vi har lagt till lite information och tips om din <a href="$5">användardiskussionsida</a> för att hjälpa dig komma igång. Om du har några frågor, bara svara på denna post eller bläddra våra hjälpsidor på <a href="http://hjalp.wikia.com/">Wikia Hjälp</a>.<br />
<br />
Lycka till med projektet,<br />
<br />
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia Community Support <br />
</p>',
	'confirmemail_body-HTML' => '<p>
Hej $2,<br />
<br />
Tack för din registrering med Wikia.<br />
<br />
Vänligen aktivera det nya kontot genom att <a href="$3">bekräftar din e-postadress här</a>.<br />
<br />
<br />
Vi ser fram emot att se dig snart!<br />
<br />
Wikia Community Team<br />
<a href="http://community.wikia.com/">community.wikia.com</a><br />
</p>',
	'createaccount-text-HTML' => '<p>
Någon har skapat ett konto åt din e-postadress på {{SITENAME}} ($4) med namnet "$2" och lösenordet "$3".<br />
Du bör nu logga in och ändra ditt lösenord.
<br /><br />
Du kan ignorera detta meddelande om kontot skapats av misstag.
</p>',
	'passwordremindertext-HTML' => '<p>
Hej,<br />
Inloggningslösenordet för användaren "$2" är nu "$3".<br />
Om du inte begära ett nytt lösenord, oroa dig inte. Att ersätta lösenord har skickats bara till dig på denna e-postadress. Ditt konto är säkert och du kan fortsätta använda ditt gamla lösenord.<br />
<br />
Tack,
<br /><br />
Wikia Community Team
<br /><br />
www.wikia.com
<br />
<hr />
<ul>
<li>Om du vill ändra dina inställningar eller lösenord, gå till: <a href="http://community.wikia.com/wiki/Special:Preferences">Användarinställningar</a>.</li>
<li>Detta lösenord påminnelse begärdes från följande adress: $1.</li>
</ul>
</p>',
	'reconfirmemail_body-HTML' => '<p>Hej $2,<br/>
<br/>
Tack för att uppdatera e-postadressen för Wikia konto. Bekräfta detta är rätt e-postadress genom att <a href="$3">klicka här</a>.<br/>
<br/>
<br/>
Vi ser fram emot att träffa er på Wikia!<br/>
<br/>
Wikia Community Team<br/>
www.wikia.com<br/>
</p>',
);

$messages['zh'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>嗨 $2,<br /><br />
您创建的Wiki已经可以在 <a href="$1">$1</a>访问。 期望很快能看到您的编辑！<br /><br />
我们在您的<a href="$5">用户对话页</a>提供了一些资讯来协助您开始。如果有任何问题，可以浏览我们的 <a href="http://zh.community.wikia.com/wiki/help:content">帮助中心</a>.<br /><br />
祝一切顺利。<br /><br />
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia社区团队<br /></p>',
	'confirmemail_body-HTML' => '<p> $2您好,<br /><br />
谢谢您在Wikia注册帐号。<br /><br />
请<a href="$3">点击这里确认您的电子邮件地址confirming your e-mail </a>以激活您的帐号<br /><br /><br />
我们期待很快能见到您！<br /><br />
Wikia支持团队<br />
<a href="http://zh.community.wikia.com/">zh.community.wikia.com</a><br /></p>',
	'createaccount-text-HTML' => '<p>有人用你的电子邮件地址在{{SITENAME}} ($4) 创建了名为"$2"的帐号，密码为 "$3".<br />
你应该立刻登入并更改你的密码。<br /><br />
如果你并没有申请这个帐号，请直接忽略这个讯息。</p>',
	'enotif_body-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
有人编辑了你在{{SITENAME}}监视的页面。<br /><br />
点击进入 <a href="$PAGETITLE_URL">$PAGETITLE</a>查看目前的版本。<br /><br />
$NEWPAGEHTML<br /><br />
$PAGESUMMARY<br /><br />
请常访问和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh.wikia.com">查看我们的特色Wiki社区！</a></li>
<li>想要设定收到的电子邮件通知，请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_article_comment-HTML' => '<p>Hi，$WATCHINGUSERNAME,
<br /><br />
{{SITENAME}}上的$PAGETITLE有评论哦。点击如下链接查看全部评论：
<br /><br />
依如下链接查看评论：<a href="$PAGETITLE_URL">$PAGETITLE</a>$PAGETITLE_URL#WikiaArticleComments
<br /><br />
- Wikia社区支持
<br /><br />

___________________________________________
<ul>
<li>在社区中心寻求帮助或建议：<a href="http://zh.community.wikia.com">http://zh.community.wikia.com</a><li>
<li>管理您收到的邮件，退订或改变邮件设置请点击： <a href="http://zh.community.wikia.com/Special:Preferences">http://zh.community.wikia.com/Special:Preferences</a></li>
</ul>
</p>',
	'enotif_body_blogs_comment-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
$PAGEEDITOR 评论了博客帖子"$BLOGTITLE"。<br /><br />
<a href="$PAGETITLE_URL#comments">查看评论</a><br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_delete-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在 {{SITENAME}} 监视的一个页面已被删除<br /><br />
该页面位置在<a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br />
请常访问并参与编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh.wikia.com">在这里</a>访问我们的特色Wiki社区</li>
<li>想要设定收到的电子邮件？请进入<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_move-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上监视的一个页面已被移动。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://www.zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_prl_rep-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}所监视的一个页面已被提报错误。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看详情。<br /><br />
点击 <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a>查看最近的错误回报。<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_protect-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上监视的一个页面已被保护。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_restore-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}监视的一个页面已被恢复。<br /><br />
参见 <a href="$PAGETITLE_URL">$PAGETITLE</a> 的最新版本。<br /><br />
$PAGESUMMARY<br /><br />
请常访问和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.zh.wikia.com">在这里</a>访问我们的特色Wiki社区。 </li>
<li>想要设定要收到的电子邮件？请进入 <a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_rights-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}监视的一个用户的权限已经更改。你可以进入该用户的用户页：<a href="$PAGETITLE_URL">$PAGETITLE</a><br /><br />
$PAGESUMMARY<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">点击这里</a>查询所有最近的权限更改。<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_unprotect-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上监视的一个页面已解除保护。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_upload-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
一个你在 {{SITENAME}} 监视的档案上传了新的版本。<br /><br />
点击<a href="$PAGETITLE_URL">$PAGETITLE</a>查看最新版本。 <br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>想知道有哪些有趣的社区吗？ <a href="http://zh.wikia.com/">访问这里！</a></li>
<li>想要设定收到哪些电子邮件吗？进入：<a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}<a>.</li>
</ul></p>',
	'enotif_lastvisited-HTML' => '<a href="$1">点击这里</a>来查看自从你上次造访该页面后的所有更改。',
	'founderemails-email-page-edited-body-HTML' => '<strong>嗨 $1,</strong><br /><br />
$2 编辑了你的 wiki! 何不到他们的<a href="$3">用户页</a>打个招呼？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 团队</div>',
	'passwordremindertext-HTML' => '<p>您好<br /><br />
用户"$2" 的密码已更新为"$3"。<br /><br />
如果您并没有申请新帐号，请别担心。这个临时密码仅仅由这个电子信箱寄给您，因此您的帐号是安全的，您也可以继续使用旧密码登入。<br /><br />
谢谢,<br /><br />
Wikia 社区团队<br /><br />
www.wikia.com<br /><hr />
<ul>
<li>要改更您的个人设定或密码，请进入: <a href="http://zh.community.wikia.com/wiki/Special:Preferences">用户设定</li>
<li>这个密码提醒是由以下IP位址所申请发送： $1.</li>
</ul></p>',
	'reconfirmemail_body-HTML' => '<p> $2您好,<br /><br />
谢谢您更新了Wikia帐号连结的电子信箱。请 <a href="$3">点击这里</a>以确认这是正确的电子信箱。<br /><br /><br />
我们期待在Wikia见到您！<br /><br />
Wikia社区团队<br />
zh.wikia.com<br /></p>',
);

$messages['zh-hans'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>嗨 $2,<br /><br />
您创建的Wiki已经可以在 <a href="$1">$1</a>访问。 期望很快能看到您的编辑！<br /><br />
我们在您的<a href="$5">用户对话页</a>提供了一些资讯来协助您开始。如果有任何问题，可以浏览我们的 <a href="http://zh.community.wikia.com/wiki/help:content">帮助中心</a>.<br /><br />
祝一切顺利。<br /><br />
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia社区团队<br /></p>',
	'confirmemail_body-HTML' => '<p> $2您好,<br /><br />
谢谢您在Wikia注册帐号。<br /><br />
请<a href="$3">点击这里确认您的电子邮件地址confirming your e-mail </a>以激活您的帐号<br /><br /><br />
我们期待很快能见到您！<br /><br />
Wikia支持团队<br />
<a href="http://zh.community.wikia.com/">zh.community.wikia.com</a><br /></p>',
	'createaccount-text-HTML' => '<p>有人用你的电子邮件地址在{{SITENAME}} ($4) 创建了名为"$2"的帐户，密码为 "$3".<br />
你应该立刻登入并更改你的密码。<br /><br />
如果你并没有申请这个帐户，请直接忽略这个讯息。</p>',
	'enotif_body-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
有人编辑了你在{{SITENAME}}监视的页面。<br /><br />
点击进入 <a href="$PAGETITLE_URL">$PAGETITLE</a>查看目前的版本。<br /><br />
$NEWPAGEHTML<br /><br />
$PAGESUMMARY<br /><br />
请常访问和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh.wikia.com">查看我们的特色Wiki社区！</a></li>
<li>想要设定收到的电子邮件通知，请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_article_comment-HTML' => '<p>Hi，$WATCHINGUSERNAME,
<br /><br />
{{SITENAME}}上的$PAGETITLE有评论哦。点击如下链接查看全部评论：
<br /><br />
依如下链接查看评论：<a href="$PAGETITLE_URL">$PAGETITLE</a>$PAGETITLE_URL#WikiaArticleComments
<br /><br />
- Wikia社区支持
<br /><br />

___________________________________________
<ul>
<li>在社区中心寻求帮助或建议：<a href="http://zh.community.wikia.com">http://zh.community.wikia.com</a><li>
<li>管理您收到的邮件，退订或改变邮件设置请点击： <a href="http://zh.community.wikia.com/Special:Preferences">http://zh.community.wikia.com/Special:Preferences</a></li>
</ul>
</p>',
	'enotif_body_blogs_comment-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
$PAGEEDITOR 评论了博客帖子"$BLOGTITLE"。<br /><br />
<a href="$PAGETITLE_URL#comments">查看评论</a><br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_delete-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在 {{SITENAME}} 监视的一个页面已被删除<br /><br />
该页面位置在<a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br />
请常访问并参与编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh.wikia.com">在这里</a>访问我们的特色Wiki社区</li>
<li>想要设定收到的电子邮件？请进入<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_move-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上监视的一个页面已被移动。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://www.zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_prl_rep-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}所监视的一个页面已被提报错误。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看详情。<br /><br />
点击 <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a>查看最近的错误回报。<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_protect-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上监视的一个页面已被保护。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_restore-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}监视的一个页面已被恢复。<br /><br />
参见 <a href="$PAGETITLE_URL">$PAGETITLE</a> 的最新版本。<br /><br />
$PAGESUMMARY<br /><br />
请常访问和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.zh.wikia.com">在这里</a>访问我们的特色Wiki社区。 </li>
<li>想要设定要收到的电子邮件？请进入 <a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_rights-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}监视的一个用户的权限已经更改。你可以进入该用户的用户页：<a href="$PAGETITLE_URL">$PAGETITLE</a><br /><br />
$PAGESUMMARY<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">点击这里</a>查询所有最近的权限更改。<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_unprotect-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上监视的一个页面已解除保护。<br /><br />
进入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>请<a href="http://zh.wikia.com">进入这里</a>看我们的特色Wiki社区</li>
<li>想要设定收到哪些邮件？请造访<a href="{{fullurl:{{ns:special}}:Preferences}}">用户设定</a></li>
</ul></p>',
	'enotif_body_upload-HTML' => '<p>亲爱的 $WATCHINGUSERNAME,<br /><br />
一个你在 {{SITENAME}} 监视的档案上传了新的版本。<br /><br />
点击<a href="$PAGETITLE_URL">$PAGETITLE</a>查看最新版本。 <br /><br />
$PAGESUMMARY<br /><br />
请常造访和编辑<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>想知道有哪些有趣的社区吗？ <a href="http://zh.wikia.com/">访问这里！</a></li>
<li>想要设定收到哪些电子邮件吗？进入：<a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}<a>.</li>
</ul></p>',
	'enotif_lastvisited-HTML' => '<a href="$1">点击这里</a>来查看自从你上次造访该页面后的所有更改。',
	'founderemails-email-page-edited-body-HTML' => '<strong>嗨 $1,</strong><br /><br />
$2 编辑了你的 wiki! 何不到他们的<a href="$3">用户页</a>打个招呼？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 团队</div>',
	'passwordremindertext-HTML' => '<p>您好<br /><br />
用户"$2" 的密码已更新为"$3"。<br /><br />
如果您并没有申请新帐号，请别担心。这个临时密码仅仅由这个电子信箱寄给您，因此您的帐号是安全的，您也可以继续使用旧密码登入。<br /><br />
谢谢,<br /><br />
Wikia 社区团队<br /><br />
www.wikia.com<br /><hr />
<ul>
<li>要改更您的个人设定或密码，请进入: <a href="http://zh.community.wikia.com/wiki/Special:Preferences">用户设定</li>
<li>这个密码提醒是由以下IP位址所申请发送： $1.</li>
</ul></p>',
	'reconfirmemail_body-HTML' => '<p> $2您好,<br /><br />
谢谢您更新了Wikia帐号连结的电子信箱。请 <a href="$3">点击这里</a>以确认这是正确的电子信箱。<br /><br /><br />
我们期待在Wikia见到您！<br /><br />
Wikia社区团队<br />
zh.wikia.com<br /></p>',
);

$messages['zh-hant'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>嗨 $2,<br /><br />
您創建的Wiki已經可以在 <a href="$1">$1</a>訪問。 期望很快能看到您的編輯！<br /><br />
我們在您的<a href="$5">用戶對話頁</a>提供了一些資訊來協助您開始。如果有任何問題，可以瀏覽我們的 <a href="http://zh.community.wikia.com/wiki/help:content">幫助中心</a>.<br /><br />
祝一切順利。<br /><br />
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia社區團隊<br /></p>',
	'confirmemail_body-HTML' => '<p> $2您好,<br /><br />
謝謝您在Wikia註冊帳號。<br /><br />
請<a href="$3">點擊這裡確認您的電子郵件地址confirming your e-mail </a>以啟用您的帳號<br /><br /><br />
我們期待很快能見到您！<br /><br />
Wikia支持團隊<br />
<a href="http://zh.community.wikia.com/">zh.community.wikia.com</a><br /></p>',
	'createaccount-text-HTML' => '<p>有人用你的電子郵件地址在{{SITENAME}} ($4) 創建了名為"$2"的帳號，密碼為 "$3".<br />
你應該立刻登入並更改你的密碼。<br /><br />
如果你並沒有申請這個帳號，請直接忽略這個訊息。</p>',
	'enotif_body-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
有人編輯了你在{{SITENAME}}監視的頁面。<br /><br />
點擊進入 <a href="$PAGETITLE_URL">$PAGETITLE</a>查看目前的版本。<br /><br />
$NEWPAGEHTML<br /><br />
$PAGESUMMARY<br /><br />
請常訪問和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh-tw.wikia.com">查看我們的特色Wiki社區！</a></li>
<li>想要設定收到的電子郵件通知，請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_article_comment-HTML' => '<p>Hi，$WATCHINGUSERNAME,
<br /><br />
{{SITENAME}} 上的 $PAGETITLE 有新評論。
<br /><br />
點此連結查看評論：<a href="$PAGETITLE_URL">$PAGETITLE</a>$PAGETITLE_URL#WikiaArticleComments
<br /><br />
- Wikia 社群支援小組
<br /><br />

___________________________________________
<ul>
<li>您可在社區中心尋找協助和建議：<a href="http://zh.community.wikia.com">http://community.wikia.com</a><li>
<li>不想收到這麼多訊息？您可以在以下頁面退訂或變更電子信箱設定：<a href="http://zh.community.wikia.com/Special:Preferences">http://zh.community.wikia.com/Special:Preferences</a></li>
</ul>
</p>',
	'enotif_body_blogs_comment-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
$PAGEEDITOR 評論了網誌文章"$BLOGTITLE"。<br /><br />
<a href="$PAGETITLE_URL#comments">查看評論</a><br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_delete-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在 {{SITENAME}} 監視的一個頁面已被刪除<br /><br />
該頁面位置在<a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br />
請常訪問並參與編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh-tw.wikia.com">在這裡</a>訪問我們的特色Wiki社區</li>
<li>想要設定收到的電子郵件？請進入<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_move-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已被移動。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://www.zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_prl_rep-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}所監視的一個頁面已被提報錯誤。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看詳情。<br /><br />
點擊 <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a>查看最近的錯誤回報。<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_protect-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已被保護。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_restore-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}監視的一個頁面已被恢復。<br /><br />
參見 <a href="$PAGETITLE_URL">$PAGETITLE</a> 的最新版本。<br /><br />
$PAGESUMMARY<br /><br />
請常訪問和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.zh-tw.wikia.com">在這裡</a>訪問我們的特色Wiki社區。 </li>
<li>想要設定要收到的電子郵件？請進入 <a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_rights-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}監視的一個用戶的權限已經更改。你可以進入該用戶的用戶頁：<a href="$PAGETITLE_URL">$PAGETITLE</a><br /><br />
$PAGESUMMARY<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">點擊這裡</a>查詢所有最近的權限更改。<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_unprotect-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已解除保護。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_upload-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
一個你在 {{SITENAME}} 監視的檔案上傳了新的版本。<br /><br />
點擊<a href="$PAGETITLE_URL">$PAGETITLE</a>查看最新版本。 <br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>想知道有哪些有趣的社區嗎？ <a href="http://zh-tw.wikia.com/">訪問這裡！</a></li>
<li>想要設定收到哪些電子郵件嗎？進入：<a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}<a>.</li>
</ul></p>',
	'enotif_lastvisited-HTML' => '<a href="$1">點擊這裡</a>來查看自從你上次造訪該頁面後的所有更改。',
	'founderemails-email-page-edited-body-HTML' => '<strong>嗨 $1,</strong><br /><br />
$2 編輯了你的 wiki! 何不到他們的<a href="$3">用戶頁</a>打個招呼？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 團隊</div>',
	'founderemails-email-user-registered-body-HTML' => '嗨$USERNAME,<br /><br />
$EDITORNAME在你的Wiki上註冊了！何不訪問一下新成員的<a href="$EDITORTALKPAGEURL">對話頁</a>去打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia團隊</div>',
	'passwordremindertext-HTML' => '<p>您好<br /><br />
用戶"$2" 的密碼已更新為"$3"。<br /><br />
如果您並沒有申請新帳號，請別擔心。這個臨時密碼僅僅由這個電子信箱寄給您，因此您的帳號是安全的，您也可以繼續使用舊密碼登入。<br /><br />
謝謝,<br /><br />
Wikia 社區團隊<br /><br />
www.wikia.com<br /><hr />
<ul>
<li>要改更您的個人設定或密碼，請進入: <a href="http://zh.community.wikia.com/wiki/Special:Preferences">用戶設定</li>
<li>這個密碼提醒是由以下IP位址所申請發送： $1.</li>
</ul></p>',
	'reconfirmemail_body-HTML' => '<p> $2您好,<br /><br />
謝謝您更新了Wikia帳號連結的電子信箱。請 <a href="$3">點擊這裡</a>以確認這是正確的電子信箱。<br /><br /><br />
我們期待在Wikia見到您！<br /><br />
Wikia社區團隊<br />
zh-tw.wikia.com<br /></p>',
);

$messages['zh-hk'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>嗨 $2,<br /><br />
您創建的Wiki已經可以在 <a href="$1">$1</a>訪問。 期望很快能看到您的編輯！<br /><br />
我們在您的<a href="$5">用戶對話頁</a>提供了一些資訊來協助您開始。如果有任何問題，可以瀏覽我們的 <a href="http://zh.community.wikia.com/wiki/help:content">幫助中心</a>.<br /><br />
祝一切順利。<br /><br />
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia社區團隊<br /></p>',
	'confirmemail_body-HTML' => '<p> $2您好,<br /><br />
謝謝您在Wikia註冊帳號。<br /><br />
請<a href="$3">點擊這裡確認您的電子郵件地址confirming your e-mail </a>以啟用您的帳號<br /><br /><br />
我們期待很快能見到您！<br /><br />
Wikia支持團隊<br />
<a href="http://zh.community.wikia.com/">zh.community.wikia.com</a><br /></p>',
	'createaccount-text-HTML' => '<p>有人用你的電子郵件地址在{{SITENAME}} ($4) 創建了名為"$2"的帳號，密碼為 "$3".<br />
你應該立刻登入並更改你的密碼。<br /><br />
如果你並沒有申請這個帳號，請直接忽略這個訊息。</p>',
	'enotif_body-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
有人編輯了你在{{SITENAME}}監視的頁面。<br /><br />
點擊進入 <a href="$PAGETITLE_URL">$PAGETITLE</a>查看目前的版本。<br /><br />
$NEWPAGEHTML<br /><br />
$PAGESUMMARY<br /><br />
請常訪問和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh-tw.wikia.com">查看我們的特色Wiki社區！</a></li>
<li>想要設定收到的電子郵件通知，請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_article_comment-HTML' => '<p>Hi，$WATCHINGUSERNAME,
<br /><br />
{{SITENAME}} 上的 $PAGETITLE 有新評論。
<br /><br />
點此連結查看評論：<a href="$PAGETITLE_URL">$PAGETITLE</a>$PAGETITLE_URL#WikiaArticleComments
<br /><br />
- Wikia 社群支援小組
<br /><br />

___________________________________________
<ul>
<li>您可在社區中心尋找協助和建議：<a href="http://zh.community.wikia.com">http://community.wikia.com</a><li>
<li>不想收到這麼多訊息？您可以在以下頁面退訂或變更電子信箱設定：<a href="http://zh.community.wikia.com/Special:Preferences">http://zh.community.wikia.com/Special:Preferences</a></li>
</ul>
</p>',
	'enotif_body_blogs_comment-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
$PAGEEDITOR 評論了網誌文章"$BLOGTITLE"。<br /><br />
<a href="$PAGETITLE_URL#comments">查看評論</a><br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_delete-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在 {{SITENAME}} 監視的一個頁面已被刪除<br /><br />
該頁面位置在<a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br />
請常訪問並參與編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh-tw.wikia.com">在這裡</a>訪問我們的特色Wiki社區</li>
<li>想要設定收到的電子郵件？請進入<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_move-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已被移動。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://www.zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_prl_rep-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}所監視的一個頁面已被提報錯誤。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看詳情。<br /><br />
點擊 <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a>查看最近的錯誤回報。<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_protect-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已被保護。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_restore-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}監視的一個頁面已被恢復。<br /><br />
參見 <a href="$PAGETITLE_URL">$PAGETITLE</a> 的最新版本。<br /><br />
$PAGESUMMARY<br /><br />
請常訪問和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.zh-tw.wikia.com">在這裡</a>訪問我們的特色Wiki社區。 </li>
<li>想要設定要收到的電子郵件？請進入 <a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_rights-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}監視的一個用戶的權限已經更改。你可以進入該用戶的用戶頁：<a href="$PAGETITLE_URL">$PAGETITLE</a><br /><br />
$PAGESUMMARY<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">點擊這裡</a>查詢所有最近的權限更改。<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_unprotect-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已解除保護。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_upload-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
一個你在 {{SITENAME}} 監視的檔案上傳了新的版本。<br /><br />
點擊<a href="$PAGETITLE_URL">$PAGETITLE</a>查看最新版本。 <br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>想知道有哪些有趣的社區嗎？ <a href="http://zh-tw.wikia.com/">訪問這裡！</a></li>
<li>想要設定收到哪些電子郵件嗎？進入：<a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}<a>.</li>
</ul></p>',
	'enotif_lastvisited-HTML' => '<a href="$1">點擊這裡</a>來查看自從你上次造訪該頁面後的所有更改。',
	'founderemails-email-page-edited-body-HTML' => '<strong>嗨 $1,</strong><br /><br />
$2 編輯了你的 wiki! 何不到他們的<a href="$3">用戶頁</a>打個招呼？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 團隊</div>',
	'founderemails-email-user-registered-body-HTML' => '嗨$USERNAME,<br /><br />
$EDITORNAME在你的Wiki上註冊了！何不訪問一下新成員的<a href="$EDITORTALKPAGEURL">對話頁</a>去打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia團隊</div>',
	'passwordremindertext-HTML' => '<p>您好<br /><br />
用戶"$2" 的密碼已更新為"$3"。<br /><br />
如果您並沒有申請新帳號，請別擔心。這個臨時密碼僅僅由這個電子信箱寄給您，因此您的帳號是安全的，您也可以繼續使用舊密碼登入。<br /><br />
謝謝,<br /><br />
Wikia 社區團隊<br /><br />
www.wikia.com<br /><hr />
<ul>
<li>要改更您的個人設定或密碼，請進入: <a href="http://zh.community.wikia.com/wiki/Special:Preferences">用戶設定</li>
<li>這個密碼提醒是由以下IP位址所申請發送： $1.</li>
</ul></p>',
	'reconfirmemail_body-HTML' => '<p> $2您好,<br /><br />
謝謝您更新了Wikia帳號連結的電子信箱。請 <a href="$3">點擊這裡</a>以確認這是正確的電子信箱。<br /><br /><br />
我們期待在Wikia見到您！<br /><br />
Wikia社區團隊<br />
zh-tw.wikia.com<br /></p>',
);

$messages['zh-tw'] = array(
	'autocreatewiki-welcomebody-HTML' => '<p>嗨 $2,<br /><br />
您創建的Wiki已經可以在 <a href="$1">$1</a>訪問。 期望很快能看到您的編輯！<br /><br />
我們在您的<a href="$5">用戶對話頁</a>提供了一些資訊來協助您開始。如果有任何問題，可以瀏覽我們的 <a href="http://zh.community.wikia.com/wiki/help:content">幫助中心</a>.<br /><br />
祝一切順利。<br /><br />
<a href="http://community.wikia.com/wiki/User:$4">$3</a><br />
Wikia社區團隊<br /></p>',
	'confirmemail_body-HTML' => '<p> $2您好,<br /><br />
謝謝您在Wikia註冊帳號。<br /><br />
請<a href="$3">點擊這裡確認您的電子郵件地址confirming your e-mail </a>以啟用您的帳號<br /><br /><br />
我們期待很快能見到您！<br /><br />
Wikia支持團隊<br />
<a href="http://zh.community.wikia.com/">zh.community.wikia.com</a><br /></p>',
	'createaccount-text-HTML' => '<p>有人用你的電子郵件地址在{{SITENAME}} ($4) 創建了名為"$2"的帳號，密碼為 "$3".<br />
你應該立刻登入並更改你的密碼。<br /><br />
如果你並沒有申請這個帳號，請直接忽略這個訊息。</p>',
	'enotif_body-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
有人編輯了你在{{SITENAME}}監視的頁面。<br /><br />
點擊進入 <a href="$PAGETITLE_URL">$PAGETITLE</a>查看目前的版本。<br /><br />
$NEWPAGEHTML<br /><br />
$PAGESUMMARY<br /><br />
請常訪問和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh-tw.wikia.com">查看我們的特色Wiki社區！</a></li>
<li>想要設定收到的電子郵件通知，請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_article_comment-HTML' => '<p>Hi，$WATCHINGUSERNAME,
<br /><br />
{{SITENAME}} 上的 $PAGETITLE 有新評論。
<br /><br />
點此連結查看評論：<a href="$PAGETITLE_URL">$PAGETITLE</a>$PAGETITLE_URL#WikiaArticleComments
<br /><br />
- Wikia 社群支援小組
<br /><br />

___________________________________________
<ul>
<li>您可在社區中心尋找協助和建議：<a href="http://zh.community.wikia.com">http://community.wikia.com</a><li>
<li>不想收到這麼多訊息？您可以在以下頁面退訂或變更電子信箱設定：<a href="http://zh.community.wikia.com/Special:Preferences">http://zh.community.wikia.com/Special:Preferences</a></li>
</ul>
</p>',
	'enotif_body_blogs_comment-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
$PAGEEDITOR 評論了網誌文章"$BLOGTITLE"。<br /><br />
<a href="$PAGETITLE_URL#comments">查看評論</a><br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_delete-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在 {{SITENAME}} 監視的一個頁面已被刪除<br /><br />
該頁面位置在<a href="$PAGETITLE_URL">$PAGETITLE</a> <br /><br />
$PAGESUMMARY<br /><br />
請常訪問並參與編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://zh-tw.wikia.com">在這裡</a>訪問我們的特色Wiki社區</li>
<li>想要設定收到的電子郵件？請進入<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_move-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已被移動。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://www.zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_prl_rep-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}所監視的一個頁面已被提報錯誤。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看詳情。<br /><br />
點擊 <a href="{{fullurl:{{ns:special}}:ProblemReports}}">{{ns:special}}:ProblemReports</a>查看最近的錯誤回報。<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_protect-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已被保護。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_restore-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}監視的一個頁面已被恢復。<br /><br />
參見 <a href="$PAGETITLE_URL">$PAGETITLE</a> 的最新版本。<br /><br />
$PAGESUMMARY<br /><br />
請常訪問和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li><a href="http://www.zh-tw.wikia.com">在這裡</a>訪問我們的特色Wiki社區。 </li>
<li>想要設定要收到的電子郵件？請進入 <a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_rights-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}監視的一個用戶的權限已經更改。你可以進入該用戶的用戶頁：<a href="$PAGETITLE_URL">$PAGETITLE</a><br /><br />
$PAGESUMMARY<br /><br />
<a href="{{fullurl:{{ns:special}}:Log/rights}}">點擊這裡</a>查詢所有最近的權限更改。<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh-tw.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_unprotect-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
你在{{SITENAME}}上監視的一個頁面已解除保護。<br /><br />
進入 <a href="$PAGETITLE_URL">$PAGETITLE</a> 查看目前版本。<br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>請<a href="http://zh.wikia.com">進入這裡</a>看我們的特色Wiki社區</li>
<li>想要設定收到哪些郵件？請造訪<a href="{{fullurl:{{ns:special}}:Preferences}}">用戶設定</a></li>
</ul></p>',
	'enotif_body_upload-HTML' => '<p>親愛的 $WATCHINGUSERNAME,<br /><br />
一個你在 {{SITENAME}} 監視的檔案上傳了新的版本。<br /><br />
點擊<a href="$PAGETITLE_URL">$PAGETITLE</a>查看最新版本。 <br /><br />
$PAGESUMMARY<br /><br />
請常造訪和編輯<br /><br />
{{SITENAME}}<br /><hr />
<ul>
<li>想知道有哪些有趣的社區嗎？ <a href="http://zh-tw.wikia.com/">訪問這裡！</a></li>
<li>想要設定收到哪些電子郵件嗎？進入：<a href="{{fullurl:{{ns:special}}:Preferences}}">{{fullurl:{{ns:special}}:Preferences}}<a>.</li>
</ul></p>',
	'enotif_lastvisited-HTML' => '<a href="$1">點擊這裡</a>來查看自從你上次造訪該頁面後的所有更改。',
	'founderemails-email-page-edited-body-HTML' => '<strong>嗨 $1,</strong><br /><br />
$2 編輯了你的 wiki! 何不到他們的<a href="$3">用戶頁</a>打個招呼？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 團隊</div>',
	'founderemails-email-user-registered-body-HTML' => '嗨$USERNAME,<br /><br />
$EDITORNAME在你的Wiki上註冊了！何不訪問一下新成員的<a href="$EDITORTALKPAGEURL">對話頁</a>去打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia團隊</div>',
	'passwordremindertext-HTML' => '<p>您好<br /><br />
用戶"$2" 的密碼已更新為"$3"。<br /><br />
如果您並沒有申請新帳號，請別擔心。這個臨時密碼僅僅由這個電子信箱寄給您，因此您的帳號是安全的，您也可以繼續使用舊密碼登入。<br /><br />
謝謝,<br /><br />
Wikia 社區團隊<br /><br />
www.wikia.com<br /><hr />
<ul>
<li>要改更您的個人設定或密碼，請進入: <a href="http://zh.community.wikia.com/wiki/Special:Preferences">用戶設定</li>
<li>這個密碼提醒是由以下IP位址所申請發送： $1.</li>
</ul></p>',
	'reconfirmemail_body-HTML' => '<p> $2您好,<br /><br />
謝謝您更新了Wikia帳號連結的電子信箱。請 <a href="$3">點擊這裡</a>以確認這是正確的電子信箱。<br /><br /><br />
我們期待在Wikia見到您！<br /><br />
Wikia社區團隊<br />
zh-tw.wikia.com<br /></p>',
);
