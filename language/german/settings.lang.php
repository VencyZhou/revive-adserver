<?php // $Revision: 1.19.2.7 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2000-2005 by the phpAdsNew developers                  */
/* For more information visit: http://www.phpadsnew.com                 */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/


// German
// Installer translation strings
$GLOBALS['strInstall']				= "Installation";
$GLOBALS['strChooseInstallLanguage']		= "W�hlen Sie die Sprache f�r den Installationsproze�";
$GLOBALS['strLanguageSelection']		= "Sprachauswahl";
$GLOBALS['strDatabaseSettings']			= "Datenbankeinstellungen";
$GLOBALS['strAdminSettings']			= "Einstellung f�r Administrator";
$GLOBALS['strAdvancedSettings']		= "Erg�nzende Einstellungen f�r die Datenbank";
$GLOBALS['strOtherSettings']			= "Andere Einstellungen";
$GLOBALS['strLicenseInformation']		= "Lizenzinformationen";
$GLOBALS['strAdministratorAccount']		= "Stammdaten des Administrators";
$GLOBALS['strDatabasePage']				= " Datenbank ".$phpAds_dbmsname.". ";
$GLOBALS['strInstallWarning']			= "Pr�fung von Server und Integrit�t";
$GLOBALS['strCongratulations']			= "Gl�ckwunsch!";
$GLOBALS['strInstallFailed']			= "Installation war fehlerhaft!";
$GLOBALS['strSpecifyAdmin']				= "Einstellung der Stammdaten des Administrators ";
$GLOBALS['strSpecifyLocaton']			= "Geben Sie die genaue Adresse von ".$phpAds_productname." ein.";
$GLOBALS['strWarning']				= "Warnung";
$GLOBALS['strFatalError']			= "Ein schwerer Fehler ist aufgetreten";
$GLOBALS['strUpdateError']			= "W�hrend des Updates ist ein Fehler aufgetreten";
$GLOBALS['strUpdateDatabaseError']	= "Aus unbekannten Gr�nden war die Aktualisierung der Datenbankstruktur nicht erfolgreich. Es wird empfohlen, zu versuchen, mit <b>Wiederhole Update</b> das Problem zu beheben. Sollte der Fehler - Ihrer Meinung nach - die Funktionalit�t von ".$phpAds_productname." nicht ber�hren, k�nnen Sie durch <b>Fehler ignorieren</b>  fortfahren. Das Ignorieren des Fehlers wird nicht empfohlen!";
$GLOBALS['strAlreadyInstalled']			= $phpAds_productname." ist bereits auf diesem System installiert. Zur Konfiguration nutzen Sie das <a href='settings-index.php'>Konfigurationsmen�</a>"; 
$GLOBALS['strCouldNotConnectToDB']		= "Verbindung zur Datenbank war nicht m�glich. Bitte vorgenommene Einstellung pr�fen. Pr�fen Sie ggf., ob die von Ihnen angegebene Datenbank �berhaupt auf dem Datenbank-Server vorhanden ist. ".$phpAds_productname." erstellt die Datenbank  <i>nicht</i> automatisch. ";
$GLOBALS['strCreateTableTestFailed']		= "Der von Ihnen angegebene Nutzer hat nicht die notwendigen Zugriffsrechte, um die Datenbankstruktur anlegen zu k�nnen. Wenden Sie sich an den Systemverwalter.";
$GLOBALS['strWarningPHP5beta']			= "Sie versuchen ".$phpAds_productname." auf einem Server mit einer fr�hen Testversion von PHP 5 zu installieren. Diese Versionen sind nicht f�r Produktionsumgebungen gedacht da sie normalerweise Fehler enthalten. Es wird davon abgeraten ".$phpAds_productname." mit PHP 5 zu betreiben, au�er zu Testzwecken.";
$GLOBALS['strUpdateTableTestFailed']		= " Der von Ihnen angegebene Nutzer hat nicht die notwendigen Zugriffsrechte, um die Datenbank zu aktualisieren. Wenden Sie sich an den Systemverwalter.";
$GLOBALS['strTablePrefixInvalid']		= "Ung�ltiges Vorzeichen (Pr�fix) im Tabellennamen";
$GLOBALS['strTableInUse']			= "Die genannte Datenbank wird bereits von ".$phpAds_productname.", genutzt. Verwenden Sie einen anderen Pr�fix oder lesen Sie im Handbuch die Hinweise f�r ein Upgrade.";
$GLOBALS['strTableWrongType']		= "Der gew�hlte Tabellentype wird bei der Installation von ".$phpAds_dbmsname." nicht unterst�tzt";
$GLOBALS['strMayNotFunction']			= "Folgende Probleme sind zu beheben, um fortzufahren";
$GLOBALS['strFixProblemsBefore']		= "Folgende Elemente m�ssen korrigiert werden, bevor der Installationsproze� von ".$phpAds_productname." fortgesetzt werden kann. Informationen �ber Fehlermeldungen finden sich im Handbuch.";
$GLOBALS['strFixProblemsAfter']			= "Sollten Sie die oben aufgef�hrten Fehler nicht selbst heben k�nnen, nehmen Sie Kontakt mit der Systemadministration Ihres Servers auf. Diese wird Ihnen weiterhelfen k�nnen.";
$GLOBALS['strIgnoreWarnings']			= "Ignoriere Warnungen";
$GLOBALS['strWarningDBavailable']		= "Die eingesetzte PHP-Version unterst�tzt nicht die Verbindung zum ".$phpAds_dbmsname." Datenbankserver. Die PHP- ".$phpAds_dbmsname."-Erweiterung wird ben�tigt.";
$GLOBALS['strWarningPHPversion']		= $phpAds_productname." ben�tigt PHP 4.0.3 oder h�her, um korrekt genutzt werden zu k�nnen. Sie nutzten {php_version}.";
$GLOBALS['strWarningRegisterGlobals']		= "Die PHP-Konfigurationsvaribable <i>register_globals</i> mu� gesetzt werden.";
$GLOBALS['strWarningMagicQuotesGPC']		= " Die PHP-Konfigurationsvaribable <i> magic_quotes_gpc</i> mu� gesetzt werden.";
$GLOBALS['strWarningMagicQuotesRuntime']	= " Die PHP-Konfigurationsvaribable <i> magic_quotes_runtime</i> mu� deaktiviert werden.";
$GLOBALS['strWarningMagicQuotesSybase']	= " Die PHP-Konfigurationsvaribable <i> magic_quotes_sybase</i> mu� deaktiviert werden.";


$GLOBALS['strWarningFileUploads']		= " Die PHP-Konfigurationsvaribable <i> file_uploads</i> mu� gesetzt werden.";
$GLOBALS['strWarningTrackVars']			= " Die PHP-Konfigurationsvaribable <i> track_vars</i> mu� gesetzt werden.";
$GLOBALS['strWarningPREG']				= "Die verwendete PHP-Version unterst�tzt nicht PERL-kompatible Ausdr�cke. Um fortfahren zu k�nnen wird die PHP-Erweiterung <i>PREG</i> ben�tigt.";
$GLOBALS['strConfigLockedDetected']		= $phpAds_productname." hat erkannt, da� die Datei <b>config.inc.php</b> schreibgesch�tzt ist.<br> Die Installation kann aber ohne Schreibberechtigung nicht fortgesetzt werden. <br>Weitere Informationen finden sich im Handbuch."; 

$GLOBALS['strCacheLockedDetected']		= "Der gew�hlte Cache-Type ist <i>Datei-Cache</i>. Das hierf�r vorgesehene Verzeichnis ist schreibgesch�tzt. Der Schreibschutz des Verzeichnisses mu� entfernt werden. ";
$GLOBALS['strCantUpdateDB']  			= "Ein Update der Datenbank ist derzeit nicht m�glich. Wenn Sie die Installation fortsetzen, werden alle existierende Banner, Statistiken und Inserenten gel�scht. ";
$GLOBALS['strIgnoreErrors']			= "Fehler ignorieren";
$GLOBALS['strRetryUpdate']			= "Wiederhole Update";
$GLOBALS['strTableNames']			= "Tabellenname";
$GLOBALS['strTablesPrefix']			= "Pr�fix zum Tabellenname";
$GLOBALS['strTablesType']			= "Tabellentype";
$GLOBALS['strRevCorrupt']			= "Die Datei  <b>{filename}</b> ist besch�digt oder ver�ndert worden. Sollte sie nicht von Ihnen ver�ndert worden sein, ist es angeraten, sie noch einmal auf den Server hochzuladen. Wurden �nderungen von Ihnen vorgenommen, kann diese Fehlermeldung ignoriert werden.";
$GLOBALS['strPhpBug24652']			= "Sie versuchen ".$phpAds_productname." auf einem Server mit einer fr�hen Testversion von PHP 5 zu installieren.
										   Diese Versionen sind nicht f�r den Einsatz in Produktionsumgebungen gedacht und enthalten normalerweise Fehler.
										   Einer dieser Fehler verhindert das ".$phpAds_productname." fehlerfrei l�uft.
										   Dieser <a href='http://bugs.php.net/bug.php?id=24652' target='_blank'>Fehler</a> ist bereits behoben
										   und die finale Version von PHP 5 wird von diesem Fehler nicht betroffen sein.";
$GLOBALS['strRevTooOld']			= "Die Datei <b>{filename}</b> ist �lter als die f�r diese Version von ".$phpAds_productname." vorgesehene. Es ist angeraten, diese Datei noch einmal auf den Server hochzuladen. ";
$GLOBALS['strRevMissing']			= "Die Datei <b>{filename}</b> ist nicht vorhanden und kann nicht �berpr�ft werden. Es ist angeraten, diese Datei noch einmal auf den Server hochzuladen. ";
$GLOBALS['strRevCVS']				= "Sie installieren eine noch nicht vollst�ndig �berpr�fte und getestete Version <i>(CVS checkout of</i> von ".$phpAds_productname.". Soll diese m�glicherweise instabile Version installiert werden? ";
$GLOBALS['strInstallWelcome']			= "Willkommen bei ".$phpAds_productname;
$GLOBALS['strInstallMessage']			= "Bevor ".$phpAds_productname." genutzt werden kann, m�ssen die Einstellungen konfiguriert  <br> sowie die Datenbank geschaffen (create) werden. Dr�cken Sie <b>Weiter</b> , um fortzufahren.";
$GLOBALS['strInstallMessageCheck']		= $phpAds_productname." �berpr�fte die Integrit�t der geladenen Dateien und ob ".$phpAds_productname." lauff�hig sein wird. Folgende Punkte m�ssen �berpr�ft werden, bevor die Installation fortgesetzt werden kann.";
$GLOBALS['strInstallMessageAdmin']		= " Bevor die Installation fortgesetzt werden kann, m�ssen die Stammdaten des Administrators eingerichtet werden. ";
$GLOBALS['strInstallMessageDatabase']	= $phpAds_productname." verwendet eine ".$phpAds_dbmsname."-Datenbank. Bevor die Installation fortgesetzt werden kann, ist die Angabe des Datenbank-Servers sowie Benutzername und Kennwort f�r die Datenbank notwendig. Diese Angaben werden f�r den Zugriff auf die Datenbank ben�tigt. Ggf. hat der Systemadministrator die Informationen.";
$GLOBALS['strInstallSuccess']			= "<b>die Installation von ".$phpAds_productname." war erfolgreich.</b><br><br>Damit ".$phpAds_productname." korrekt arbeitet, mu� sichergestellt sein, da� das Wartungsmodul (maintenance.php) st�ndlich aktiviert wird. N�here Informationen finden sich im Handbuch. <br><br>
F�r weitere Einstellungen auf der Konfigurationsseite dr�cken Sie  <b>Weiter</b>. 
<br>
Der Schreibschutz der Datei <i>config.inc.php</i> sollte aus Sicherheitsgr�nden wieder gesetzt werden, sobald die Installation beendet ist.";
$GLOBALS['strUpdateSuccess']		= "<b>Das Update von ".$phpAds_productname." war erfolgreich.</b><br><br>
Damit ".$phpAds_productname." korrekt arbeitet, mu� sichergestellt sein, da� das Wartungsmodul (maintenance.php) st�ndlich aktiviert wird. N�here Informationen finden sich im Handbuch. <br><br>
F�r weitere Einstellungen auf der Konfigurationsseite dr�cken Sie  <b>Weiter</b>. 
<BR>
Der Schreibschutz der Datei <i>config.inc.php</i> sollte aus Sicherheitsgr�nden wieder gesetzt werden.";

$GLOBALS['strInstallNotSuccessful']		= "<b>Die Installation von ".$phpAds_productname." war nicht erfolgreich</b><br><br>
Teile des Installationsprozesses wurden nicht beendet. Das Problem ist m�glicherweise nur tempor�r. In diesem Fall dr�cken Sie <b> Weiter</b> und beginnen Sie den Installationsproze� von neuem. N�heres zu Fehlermeldungen und -behebung findet sich im Handbuch.";
$GLOBALS['strErrorOccured']			= "Der folgende Fehler ist aufgetreten:";
$GLOBALS['strErrorInstallDatabase']		= "Die Datenbankstruktur konnte nicht angelegt werden.";
$GLOBALS['strErrorInstallConfig']		= "Die Konfigurationsdatei oder die Datenbank konnten nicht aktualisiert werden.";
$GLOBALS['strErrorInstallDbConnect']		= "Eine Verbindung zur Datenbank war nicht m�glich.";

$GLOBALS['strUrlPrefix']			= "URL Pr�fix";

$GLOBALS['strProceed']				= "Weiter &gt;";
$GLOBALS['strInvalidUserPwd']			= "Fehlerhafter Benutzername oder Kennwort";

$GLOBALS['strUpgrade']				= "Programmerg�nzung (Upgrade)";
$GLOBALS['strSystemUpToDate']		= "Das System ist up to date. Eine Erg�nzung (Upgrade) ist nicht notwendig. <br>
Dr�cken Sie <b>Weiter</b>, um zur Startseite zu gelangen.";
$GLOBALS['strSystemNeedsUpgrade']		= "Die Datenbankstruktur und die Konfigurationsdateien sollten aktualisiert werden. Dr�cken Sie <b>Weiter</b> f�r den Start des Aktualisierungslauf.
 <br><br>Abh�ngig von der derzeitig genutzten Version und der Anzahl der vorhandenen Statistiken kann dieser Proze� Ihre Datenbank stark belasten. Das Upgrade kann einige Minuten dauern.";
$GLOBALS['strSystemUpgradeBusy']		= "Aktualisierung des Systems l�uft. Bitte warten ...";
$GLOBALS['strSystemRebuildingCache']		= "Cache wird neu erstellt. Bitte warten ...";
$GLOBALS['strServiceUnavalable']		= "Dieser Service ist zur Zeit nicht erreichbar. System wird aktualisiert...";

$GLOBALS['strConfigNotWritable']		= "F�r die Datei <i>config.inc.php</i>  besteht Schreibschutz";
$GLOBALS['strPhpBug20144']				= "Die von Ihnen eingesetzte Version von PHP hat einen <a href='http://bugs.php.net/bug.php?id=20114' target='_blank'>schwerwiegenden Fehler</a>. Dadurch arbeitet ".$phpAds_productname." nicht korrekt. Es wird PHP 4.3.0 oder h�her ben�tigt. Andernfalls kann die Installation nicht fortgesetzt werden.";





/*********************************************************/
/* Configuration translations                            */
/*********************************************************/

// Global
$GLOBALS['strChooseSection']			= "Bereichsauswahl";
$GLOBALS['strDayFullNames'] 			= array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag");
$GLOBALS['strEditConfigNotPossible']   		= "�nderungen der Systemeinstellung sind nicht m�glich. Es besteht f�r die Konfigurationsdatei  <i>config.inc.php</i> Schreibschutz. ".
										  "F�r �nderungen mu� der Schreibschutz aufgehoben werden.";
$GLOBALS['strEditConfigPossible']		= "Unbefugte System�nderungen sind m�glich. Die Zugriffsrechte der Konfigurationsdatei <i>config.inc.php</i> sind auf Schreibbrechtigung gesetzt. ".
										  "Sollen keine �nderungen durch den Systemadministrator vorgenommen werden, sollte der Schreibschutz gesetzt werden. N�here Informationen im Handbuch.";



// Database
$GLOBALS['strDatabaseSettings']			= "Datenbankeinstellungen";
$GLOBALS['strDatabaseServer']			= "Datenbank Server";
$GLOBALS['strDbLocal']				= "Verbindung zum lokalen Server mittels Sockets"; // Pg only
$GLOBALS['strDbHost']				= "Datenbank Hostname";
$GLOBALS['strDbPort']				= "Datenbank Portnummer";
$GLOBALS['strDbUser']				= "Datenbank Benutzername";
$GLOBALS['strDbPassword']			= "Datenbank Kennwort";
$GLOBALS['strDbName']			= "Datenbank Name";

$GLOBALS['strDatabaseOptimalisations']		= " Datenbankoptimierungen";
$GLOBALS['strPersistentConnections']		= "Dauerhafte Verbindung zur Datenbank";
$GLOBALS['strInsertDelayed']			= "Datenbank wird zeitlich versetzt beschrieben";
$GLOBALS['strCompatibilityMode']		= "Kompatibilit�tsmodus (Datenbank)";
$GLOBALS['strCantConnectToDb']		= "Verbindung zur Datenbank nicht m�glich";


// Invocation and Delivery
$GLOBALS['strInvocationAndDelivery']		= "Einstellungen f�r Bannercode und -auslieferung";

$GLOBALS['strAllowedInvocationTypes']		= "Zugelassene Bannercodes (Mehrfachauswahl m�glich)";
$GLOBALS['strAllowRemoteInvocation']		= "Normaler Bannercode (Remote)";
$GLOBALS['strAllowRemoteJavascript']		= "Bannercode f�r Javascript ";
$GLOBALS['strAllowRemoteFrames']		= "Bannercode f�r Frames (iframe/ilayer)";
$GLOBALS['strAllowRemoteXMLRPC']		= "Bannercode bei Nutzung von XML-RPC";
$GLOBALS['strAllowLocalmode']			= "Lokaler Modus";
$GLOBALS['strAllowInterstitial']			= "Interstitial oder Floating DHTML";
$GLOBALS['strAllowPopups']			= "PopUp";

$GLOBALS['strUseAcl']				= "Auslieferungsbeschr�nkungen";

$GLOBALS['strDeliverySettings']			= "Einstellungen f�r Bannerauslieferung";
$GLOBALS['strCacheType']			= "Cache-Type f�r Bannerauslieferung";
$GLOBALS['strCacheFiles']			= "Datei-Cache";
$GLOBALS['strCacheDatabase']			= "Datenbank";
$GLOBALS['strCacheShmop']			= "Shared memory/Shmop";
$GLOBALS['strCacheSysvshm']			= "Shared memory/Sysvshm";
$GLOBALS['strExperimental']			= "Experimental";
$GLOBALS['strKeywordRetrieval']			= "Schl�sselwortselektion";
$GLOBALS['strBannerRetrieval']			= "Modus f�r Bannerselektion";
$GLOBALS['strRetrieveRandom']			= "Zufallsbasierte Bannerselektion (Voreinstellung)";
$GLOBALS['strRetrieveNormalSeq']		= "Sequentielle Bannerselektion";
$GLOBALS['strWeightSeq']			= "Gewichtungsabh�ngige Bannerselektion ";
$GLOBALS['strFullSeq']				= " Streng sequentielle Bannerselektion ";
$GLOBALS['strUseConditionalKeys']		= "Logische Operatoren bei Direktauswahl zulassen";
$GLOBALS['strUseMultipleKeys']			= "Mehrere Schl�sselw�rter je Banner f�r die Direkauswahl ";

$GLOBALS['strZonesSettings']			= "Selektion �ber Zonen";
$GLOBALS['strZoneCache']			= "Einrichten von Zwischenspeichern (Cache) f�r Zonen. Beschleunigt die Bannerauslieferung";
$GLOBALS['strZoneCacheLimit']			= "Aktualisierungsintervall der Zwischenspeicher (Cache) in Sekunden";
$GLOBALS['strZoneCacheLimitErr']		= "Aktualisierungsintervall mu� ein positiver ganzzahliger Wert sein";

$GLOBALS['strP3PSettings']			= "P3P Privacy Policies";
$GLOBALS['strUseP3P']				= "Verwendung von P3P Policies";
$GLOBALS['strP3PCompactPolicy']		= "P3P Compact Policies";
$GLOBALS['strP3PPolicyLocation']		= "P3P Policies Location"; 



// Banner Settings
$GLOBALS['strBannerSettings']			= "Bannereinstellungen";

$GLOBALS['strAllowedBannerTypes']		= "Zugelassene Bannertypen (Mehrfachnennung m�glich)";
$GLOBALS['strTypeSqlAllow']			= "Banner in Datenbank speichern (SQL)";
$GLOBALS['strTypeWebAllow']			= "Banner auf Webserver (lokal)";
$GLOBALS['strTypeUrlAllow']			= "Banner �ber URL verwalten";
$GLOBALS['strTypeHtmlAllow']			= "HTML-Banners";
$GLOBALS['strTypeTxtAllow']			= "Textanzeigen";

$GLOBALS['strTypeWebSettings']		= "Einstellungen f�r Speicherverfahren <i>Banner auf Webserver</i>";
$GLOBALS['strTypeWebMode']			= "Speichermethode";
$GLOBALS['strTypeWebModeLocal']		= "Lokales Verzeichnis";
$GLOBALS['strTypeWebModeFtp']		= "Externer FTP-Server";
$GLOBALS['strTypeWebDir']			= "Webserver-Verzeichnis";  
$GLOBALS['strTypeWebFtp']			= "FTP-Bannerserver";
$GLOBALS['strTypeWebUrl']			= "(�ffentliche) URL"; 
$GLOBALS['strTypeFTPHost']			= "FTP-Host";
$GLOBALS['strTypeFTPDirectory']		= "FTP-Verzeichnis";
$GLOBALS['strTypeFTPUsername']		= "FTP-Benutzername";
$GLOBALS['strTypeFTPPassword']		= "FTP-Kennwort";
$GLOBALS['strTypeFTPErrorDir']		= "FTP-Verzeichnis existiert nicht";
$GLOBALS['strTypeFTPErrorConnect']		= "Verbindung zum FTP Server nicht m�glich. Benutzername oder Kennwort waren fehlerhaft";
$GLOBALS['strTypeFTPErrorHost']			= "Hostname f�r FTP-Server ist fehlerhaft";
$GLOBALS['strTypeDirError']				= "Das lokale Verzeichnis existiert nicht";



$GLOBALS['strDefaultBanners']			= "Ersatzbanner <i>(kein regul�rer Banner steht zur Verf�gung)</i>";
$GLOBALS['strDefaultBannerUrl']		= "Bild-URL f�r Ersatzbanner";
$GLOBALS['strDefaultBannerTarget']		= "Ziel-URL f�r Ersatzbanner";

$GLOBALS['strTypeHtmlSettings']		= "Optionen f�r HTML-Banner";

$GLOBALS['strTypeHtmlAuto']			= "HTML-Code zum Aufzeichnen der AdClicks modifizieren";
$GLOBALS['strTypeHtmlPhp']			= "Ausf�hrbarer PHP-Code ist in HTML-Banner zugelassen ";

$GLOBALS['strCookieSettings']			= "Cookie Einstellungen";
$GLOBALS['strPackCookies']				= "Cookies komprimieren, um max. Cookieanzahl zu begrenzen";

// Host information and Geotargeting
$GLOBALS['strHostAndGeo']			= "Geotargeting (Hostinformation und Standortbestimmung) der Besucher";

$GLOBALS['strRemoteHost']			= "Host des Besuchers";
$GLOBALS['strReverseLookup']			= "Es wird versucht, den Name des Hosts f�r den Besucher zu ermitteln, wenn er nicht mitgeliefert wird";
$GLOBALS['strProxyLookup']				= "Es wird versucht, die  IP-Adresse des Besuchers zu ermitteln, wenn er einen Proxy-Server nutzt";

$GLOBALS['strGeotargeting']			= "Geotargeting (Standortbestimmung) ";
$GLOBALS['strGeotrackingType']			= "Datenbanktypen f�r Geotargeting ";
$GLOBALS['strGeotrackingLocation'] 		= "Standort der Datenbank f�r Geotargeting";
$GLOBALS['strGeotrackingLocationError'] = "Keine Datenbank f�r Geotargeting an der genannten Adresse gefunden";
$GLOBALS['strGeotrackingLocationNoHTTP']	= "Die von Ihnen angegebene Adresse ist <b>kein</b> lokales Verzeichnis auf dem Rechner (der Festplatte) des Servers. Es ist die URL einer WEB-Datei. Die richtige Schreibweise f�r ein lokales Verzeichnis sollte �hnlich aussehen wie:<br><i>{example}</i>.<BR> 
Um Geotargeting nutzen zu k�nnen, mu� korrekt angegeben werden, wohin die Datenbank kopiert wurde. ";
$GLOBALS['strGeoStoreCookie']			= "Speichern des Ergebnisses in einem Cookie zur sp�teren Nutzung";



// Statistics Settings
$GLOBALS['strStatisticsSettings']			= "Statistikeinstellungen";

$GLOBALS['strStatisticsFormat']			= "Statistikformat";
$GLOBALS['strCompactStats']				= " Statistikformat ";
$GLOBALS['strLogAdviews']				= "Jede Bannerauslieferung wird als ein AdView protokolliert";
$GLOBALS['strLogAdclicks']				= "Jeder Klick auf ein Banner wird als ein AdClick protokolliert";
$GLOBALS['strLogSource']				= "Die Parameter der Quelle werden  bei der Bannerauslieferung protokolliert";
$GLOBALS['strGeoLogStats']				= "Das Land des Besuchers wird protokolliert";
$GLOBALS['strLogHostnameOrIP']			= "Hostname oder IP-Adresse des Besuchers wird protokolliert";
$GLOBALS['strLogIPOnly']				= "Ausschlie�lich die IP-Adresse des Besuchers wird protokolliert, auch wenn der Hostname erkannt ist";
$GLOBALS['strLogIP']					= "Die IP-Adresse des Besuchers wird protokolliert";
$GLOBALS['strLogBeacon']				= " Ein Beacon (Minibild) wird verwendet, um sicherzustellen, da� nur vollst�ndige Bannerauslieferungen protokolliert werden ";

$GLOBALS['strRemoteHosts']				= "Host des Besuchers";
$GLOBALS['strIgnoreHosts']				= "AdViews und AdClicks f�r Besucher mit folgenden IP-Adressen oder Hostnamen bleiben in den Statistiken unber�cksichtigt";
$GLOBALS['strBlockAdviews']				= "Reloadsperre (Zeitraum in Sek.)";
$GLOBALS['strBlockAdclicks']			= " Reclicksperre (Zeitraum in Sek.) ";

$GLOBALS['strPreventLogging']			= "Protokollieren verhindern";
$GLOBALS['strEmailWarnings']			= "Warnungen per eMail";
$GLOBALS['strAdminEmailHeaders']		= "Kopfzeile f�r alle eMails, die versandt werden";
$GLOBALS['strWarnLimit']				= "Warnung per eMail bei Unterschreiten der definierten Untergrenze";
$GLOBALS['strWarnLimitErr']				= "Warnlimit mu� eine positive Ganzzahl sein";
$GLOBALS['strWarnAdmin']				= "Warnung per eMail an den Administrator, wenn eine Kampagne ausgelaufen ist";
$GLOBALS['strWarnClient']				= "Warnung per eMail an den Inserenten, wenn eine Kampagne ausgelaufen ist";
$GLOBALS['strQmailPatch']				= "Kopfzeile auch f�r qMail lesbar machen";

$GLOBALS['strAutoCleanTables']			= "Datenbank l�schen";
$GLOBALS['strAutoCleanStats']			= "Statistiken l�schen";
$GLOBALS['strAutoCleanUserlog']		= "Benutzerprotokoll l�schen"; 
$GLOBALS['strAutoCleanStatsWeeks']		= "Zeitraum in Wochen, nachdem Statistiken gel�scht werden <br><i>(jedoch mindestens 3 Wochen)</i>";
$GLOBALS['strAutoCleanUserlogWeeks']		= "Zeitraum in Wochen, nachdem Statistiken gel�scht werden <br><i>(3 Wochen mindestens)</i>";
$GLOBALS['strAutoCleanErr']			= "Der Zeitraum, nach dem die Daten gel�scht werden sollen, mu� mindestens 3 Wochen betragen";
$GLOBALS['strAutoCleanVacuum']		= "VACUUM ANALYZE Tabellen jede Nacht"; // only Pg


// Administrator settings
$GLOBALS['strAdministratorSettings']		= "Einstellungen f�r Administrator";

$GLOBALS['strLoginCredentials']			= "Erkennungspr�fung";
$GLOBALS['strAdminUsername']			= "Benutzername (Admin)";
$GLOBALS['strInvalidUsername']			= "Benutzername fehlerhaft";

$GLOBALS['strBasicInformation']			= "Stammdaten";
$GLOBALS['strAdminFullName']			= "Name, Vorname";
$GLOBALS['strAdminEmail']			= "E-Mail";
$GLOBALS['strCompanyName']			= "Firma";

$GLOBALS['strAdminCheckUpdates']		= "Pr�fen, ob neue Programmversionen vorhanden sind";
$GLOBALS['strAdminCheckEveryLogin']		= "Bei jedem Login";
$GLOBALS['strAdminCheckDaily']		= "T�glich";
$GLOBALS['strAdminCheckWeekly']		= "W�chentlich";
$GLOBALS['strAdminCheckMonthly']		= "Monatlich";
$GLOBALS['strAdminCheckNever']		= "Nie"; 
$GLOBALS['strAdminCheckDevBuilds']		= "Nach neuen Entwickler-Versionen suchen";

$GLOBALS['strAdminNovice']			= "L�schvorg�nge im Admin-Bereich nur mit Sicherheitsbest�tigung";
$GLOBALS['strUserlogEmail']			= "Alle ausgehende eMails protokollieren ";
$GLOBALS['strUserlogPriority']			= "St�ndliche Rekalkulation der Priorit�ten protokollieren";
$GLOBALS['strUserlogAutoClean']		= "S�ubern der Datenbank protokollieren";


// User interface settings
$GLOBALS['strGuiSettings']			= "Konfiguration Benutzerbereich (Inhaber des AdServers)";

$GLOBALS['strGeneralSettings']				= "Einstellungen f�r das Gesamtprogramm";
$GLOBALS['strAppName']				= "Name oder Bezeichnung der Anwendung";
$GLOBALS['strMyHeader']				= "Datei mit der Kopfzeile im Admin-Bereich";
$GLOBALS['strMyHeaderError']		= "Die Datei f�r die Kopfzeile wurde an angegebenen Adresse nicht vorgefunden";
$GLOBALS['strMyFooter']				= "Datei mit der Fu�zeile im Admin-Bereich";
$GLOBALS['strMyFooterError']		= "Die Datei f�r die Fu�zeile wurde an angegebenen Adresse nicht vorgefunden";
$GLOBALS['strGzipContentCompression']		= "Komprimieren mit GZIP";

$GLOBALS['strClientInterface']			= "Inserentenbereich";
$GLOBALS['strClientWelcomeEnabled']		= "Begr��ungstext f�r Inserenten verwenden";
$GLOBALS['strClientWelcomeText']		= "Begr��ungstext<br><i>(HTML Tags sind zugelassen)</i>";



// Interface defaults
$GLOBALS['strInterfaceDefaults']		= "Einstellung der Voreinstellungen";

$GLOBALS['strInventory']			= "Bestandsverzeichnis";
$GLOBALS['strShowCampaignInfo']		= "Anzeigen zus�tzlicher Informationen auf der Seite <i>�bersicht Kampagnen</i>"; 
$GLOBALS['strShowBannerInfo']			= "Anzeigen zus�tzlicher Bannerinformationen auf der Seite <i>�bersicht Banner</i> ";
$GLOBALS['strShowCampaignPreview']		= "Vorschau aller Banner auf der Seite  <i>�bersicht Banner </i>";
$GLOBALS['strShowBannerHTML']			= "Anzeige des Banners anstelle des HTML-Codes bei Vorschau von HTML-Bannern ";
$GLOBALS['strShowBannerPreview']		= "Bannervorschau oben auf allen Seiten mit dem Bezug zum Banner ";
$GLOBALS['strHideInactive']			= "Inaktive Elemente auf den �bersichtsseiten verbergen";
$GLOBALS['strGUIShowMatchingBanners']		= "Anzeige der zugeh�renden Banner auf der Seite <i>Verkn�pfte Banner</i>";
$GLOBALS['strGUIShowParentCampaigns']		= "Anzeige der zugeh�renden Kampagnen auf der Seite <i>Vekn�pfte Banner</i>";
$GLOBALS['strGUILinkCompactLimit']		= "Verbergen nicht verkn�pfter Banner, sofern es mehr sind als ";

$GLOBALS['strStatisticsDefaults'] 		= "Statistiken";
$GLOBALS['strBeginOfWeek']			= "Wochenbeginn";
$GLOBALS['strPercentageDecimals']		= "Dezimalstellen bei Prozentangaben";

$GLOBALS['strWeightDefaults']			= "Gewichtung (Voreinstellung)";
$GLOBALS['strDefaultBannerWeight']		= "Gewichtung Banner (Voreinstellung)";
$GLOBALS['strDefaultCampaignWeight']		= "Gewichtung Kampagne (Voreinstellung)";
$GLOBALS['strDefaultBannerWErr']		= "Voreinstellung f�r Bannergewichtung mu� eine positive Ganzzahl sein";
$GLOBALS['strDefaultCampaignWErr']		= " Voreinstellung f�r Kampagne mu� eine positive Ganzzahl sein";




// Not used at the moment
$GLOBALS['strTableBorderColor']		= "Table Border Color";
$GLOBALS['strTableBackColor']			= "Table Back Color";
$GLOBALS['strTableBackColorAlt']		= "Table Back Color (Alternative)";
$GLOBALS['strMainBackColor']			= "Main Back Color";
$GLOBALS['strOverrideGD']			= "Override GD Imageformat";
$GLOBALS['strTimeZone']			= "Zeitzone";

?>