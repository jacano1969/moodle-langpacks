<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'badges', language 'de', branch 'MOODLE_25_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktivitäten';
$string['activate'] = 'Zugriff erlauben';
$string['activatesuccess'] = 'Zugriff auf Auszeichnungen wurde erfolgreich aktviert';
$string['addbadgecriteria'] = 'Kriterium hinzufügen';
$string['addcourse'] = 'Kurse hinzufügen';
$string['addcourse_help'] = 'Wählen Sie alle Kurse, die zu dieser Auszeichnungsanfordderung hinzugefügt werden sollen. <Nutzen Sie die Strg-Taste, um mehrere Kurse auszuwählen.';
$string['addcriteria'] = 'Kriterium hinzufügen';
$string['addcriteriatext'] = 'Wählen Sie eine Option aus dem Auswahlmenü, um ein Kriterium für die Verleihung dieser Auszeichnung hinzuzufügen.';
$string['addtobackpack'] = 'Zum Backpack hinzufügen.';
$string['adminonly'] = 'Diese Seite ist nur für Administrator/innen erlaubt!';
$string['after'] = 'nach der Verleihung';
$string['aggregationmethod'] = 'Methode der Zusammenfassung';
$string['all'] = 'Alle';
$string['allmethod'] = 'Alle gewählten Bedingungen erfüllt sind.';
$string['allmethodactivity'] = 'Alle gewählten Aktivitäten abgeschlossen sind.';
$string['allmethodcourseset'] = 'Alle gewählten Kurse abgeschlossen sind.';
$string['allmethodmanual'] = 'Alle gewählten Rollen die Auszeichnung verleihen.';
$string['allmethodprofile'] = 'Alle gewählten Nutzerprofilfelder vollständig sind.';
$string['allowcoursebadges'] = 'Kursspezifische Auszeichnungen aktivieren';
$string['allowcoursebadges_desc'] = 'Erlaubt das Hinzufügen und Verleihen von kursspezifischen Auszeichnungen.';
$string['allowexternalbackpack'] = 'Verbindung zu externen Backpacks erlauben';
$string['allowexternalbackpack_desc'] = 'Nutzer/innen erlauben, Verbindungen zu externen Backpack-Anbietern herzustellen und externe Auszeichnungen anzuzeigen.

Hinweis: Es wird empfohlen, diese Einstellung zu deaktivieren, wenn Ihre Moodle-Site nicht über das Internet erreichbar ist (z.B. wegen einer Firewall).';
$string['any'] = 'Eins der';
$string['anymethod'] = 'Eine der gewählten Bedingungen erfüllt ist';
$string['anymethodactivity'] = 'Eine der gewählten Aktivitäten ist abgeschlossen';
$string['anymethodcourseset'] = 'Einer der gewählten Kurse abgeschlossen ist';
$string['anymethodmanual'] = 'Eine der gewählten Rollen die Auszeichnung verleiht';
$string['anymethodprofile'] = 'Eines der gewählten Nutzerprofilfelder vollständig ist';
$string['attachment'] = 'Auszeichnung an Mitteilung anhängen';
$string['attachment_help'] = 'Wenn Sie diese Checkbox markieren, dann wird die Auszeichnung als Anhang zur E-Mail hinzugefügt, die an den Ausgezeichneten versendet wird. Dieser kann sich dann die Auszeichnung herunterladen.';
$string['award'] = 'Auszeichnung verleihen';
$string['awardedtoyou'] = 'An mich verliehen';
$string['awardoncron'] = 'Die Auszeichnung ist zur Verleihung verfügbar. Zu viele Nutzer/innen haben diese Auszeichnung erhalten. Die Aktion benötigt einige Zeit.';
$string['awards'] = 'Empfänger/innen';
$string['backpackavailability'] = 'Verifizierung externer Auszeichnungen';
$string['backpackavailability_help'] = 'Für die Verifizierung von Auszeichnungen müssen externe Backpack-Dienste auf Ihre Moodle-Site zugreifen können. Derzeit scheint Ihre Moodle-Site diese Verbindung nicht zu erlauben. Damit können Auszeichnungen, die Ihre Moodle-Site verleiht, nicht von extern verifiziert werden.

##Warum sehe ich diese Mitteilung?

Es kann sein, dass Ihre Firewall verhindert, dass Nutzer/innen von außerhalb zugreifen, oder Ihre Site ist kennwortgeschützt oder Ihre Site ist nicht über das Internet erreichbar (weil es sich z.B. um eine lokale Entwicklerinstallation handelt).

##Ist das ein Problem?

Auf einer produktiven Moodle-Site sollten Sie das zutreffende Problem lösen. Andernfalls können Nutzer/innen nicht verifizieren, dass die Auszeichnung von Ihnen verliehen wurde.

##Was kann ich tun, wenn meine Moodle-Site nicht für jeden öffentlich erreichbar sein soll?

Die einzige URL, die für die Verifizierung benötigt wird, ist [ihre-site-url]/badges/assertion.php. Wenn Sie Ihre Firewall also so konfigurieren, dass der Zugriff von extern auf dieses Skript erlaubt ist, dann funktioniert die Verifizierung von Auszeichnungen.';
$string['backpackbadges'] = 'Sie haben {$a->totalbadges} Auszeichnung(en), die aus {$a->totalcollections} Sammlung(en) angezeigt werden. <a href="mybackpack.php">Backpack-Einstellungen ändern</a>.';
$string['backpackconnection'] = 'Verbindung zum Backpack';
$string['backpackconnection_help'] = 'Auf dieser Seite können Sie Verbindungen zu externen Backpack-Diensten konfigurieren. Eine Verbindung zu einem externen Backpack-Dienst ermöglicht es, externe Auszeichnungen in Moodle anzuzeigen und in Moodle erworbene Auszeichnungen in das externe Backpack zu exportieren.

Derzeit wird nur der Backpack-Dienst <a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a> unterstützt. Sie müssen sich erst bei einem externen Backpack-Dienst anmelden, bevor sie die zugehörigen Verbindung in Moodle konfigurieren können.';
$string['backpackdetails'] = 'Backpack-Einstellungen';
$string['backpackemail'] = 'E-Mail-Adresse';
$string['backpackemail_help'] = 'E-Mail-Adresse, die mit Ihrem Backpack-Dienst verknüpft ist

Wenn eine Verbindung zum Backpack-Dienst hergestellt ist, wird diese E-Mail-Adresse anstelle Ihrer internen Moodle-E-Mail-Adresse verwendet, um Auszeichnungen in Ihr Backpack zu exportieren.';
$string['backpackimport'] = 'Importeinstellungen';
$string['backpackimport_help'] = 'Wenn die Verbindung zum Backpack erfolgreich hergestellt ist, können Auszeichnungen aus Ihrem Backpack auf Ihrer Seite "Meine Auszeichnungen" und in Ihrem Nutzerprofil angezeigt werden.';
$string['badgedetails'] = 'Grundeinstellungen';
$string['badgeimage'] = 'Bild';
$string['badgeimage_help'] = 'Dieses Bild wird verwendet, wenn die Auszeichnung verliehen wird.

Fügen Sie ein Bild im JPG oder PNG Format hinzu.

Das Bild wird in quadratische Form und geeignete Größe skaliert.';
$string['badgeprivacysetting'] = 'Einstellungen zur Privatsphäre';
$string['badgeprivacysetting_help'] = 'Sie können Ihre erworbenen Auszeichnungen auf Ihrer Nutzerprofilseite anzeigen lassen. Mit dieser Einstellung legen Sie fest, ob neue Auszeichnungen automatisch angezeigt werden.

Sie können die Sichtbarkeit einer einzelnen Auszeichnung jederzeit auf der Seite \'\'Navigation > Meine Profil > Auszeichnungen\'\' ändern.';
$string['badgeprivacysetting_str'] = 'Meine Auszeichnungen automatisch im Nutezrprofil anzeigen';
$string['badgesalt'] = 'Salt für das Hashing der Empfänger-E-Mail-Adresse';
$string['badgesalt_desc'] = 'Wenn Sie hier einen Hash eintragen, dann können Backpack-Dienste Empfänger/innen einer Auszeichnung bestätigen, ohne deren E-Mail-Adresse offen zu legen. Verwenden Sie nur Ziffern und Buchstaben für den Hash.';
$string['badgesdisabled'] = 'Auszeichnungen sind auf dieser Moodle-Site nicht aktiviert.';
$string['badgesearned'] = 'Anzahl der erworbenen Auszeichnungen: {$a}';
$string['badgesettings'] = 'Einstellungen';
$string['badgestatus_0'] = 'Für andere nicht verfügbar';
$string['badgestatus_1'] = 'Für andere verfügbar';
$string['badgestatus_2'] = 'Für andere nicht verfügbar';
$string['badgestatus_3'] = 'Für andere verfügbar';
$string['badgestatus_4'] = 'Archiviert';
$string['badgestoearn'] = 'Anzahl der verfügbaren Auszeichnungen: {$a}';
$string['badgesview'] = 'Kursspezifische Auszeichnungen';
$string['badgeurl'] = 'Link zur verliehenen Auszeichnung';
$string['bawards'] = 'Empfänger/innen ({$a})';
$string['bcriteria'] = 'Kriterien';
$string['bdetails'] = 'Einstellungen';
$string['bmessage'] = 'Mitteilung';
$string['boverview'] = 'Überblick';
$string['bydate'] = 'abgeschlossen bis';
$string['clearsettings'] = 'Einstellungen löschen';
$string['completioninfo'] = 'Diese Auszeichnung wurde verliehen für den Abschluss:';
$string['completionnotenabled'] = 'Die Abschlussverfolgung ist für diesen Kurs nicht aktiviert. Deshalb kann der Kursabschluss nicht als Kriterium zur Verleihung der Auszeichnung verwendet werden. Aktivieren Sie die Abschlussverfolgung in den Kurseinstellungen.';
$string['configenablebadges'] = '';
$string['configuremessage'] = 'Mitteilung';
$string['connect'] = 'Verbinden';
$string['connected'] = 'Verbunden';
$string['contact'] = 'Kontakt';
$string['contact_help'] = 'Tragen Sie hier die E-Mail-Adresse des Verleihers der Auszeichnung ein.';
$string['copyof'] = 'Kopie von {$a}';
$string['coursebadges'] = 'Auszeichnungen';
$string['coursebadgesdisabled'] = 'Kursspezifische Auszeichnungen sind nicht aktiviert.';
$string['coursecompletion'] = 'Teilnehmer/innen müssen diesen Kurs abschließen.';
$string['create'] = 'Neue Auszeichnung';
$string['createbutton'] = 'Auszeichnung anlegen';
$string['creatorbody'] = '<p>{$a->user} hat alle Kriterien für die Verleihung der Auszeichnung erfüllt und die Auszeichnung erhalten. Sie können die Auszeichnung auf der Seite {$a->link} ansehen. </p>';
$string['creatorsubject'] = '\'{$a}\' wurde ausgezeichnet!';
$string['criteria_0'] = 'Diese Auszeichnung wird verliehen, wenn ...';
$string['criteria_1'] = 'Aktivitätsabschluss';
$string['criteria_1_help'] = 'Dieses Kriterium ermöglicht es, die Verleihung einer Auszeichnung daran zu knüpfen, dass bestimmte Aktivitäten im Kurs abgeschlossen sind.';
$string['criteria_2'] = 'Manuelle Verleihung durch Nutzer/innen einer bestimmten Rolle';
$string['criteria_2_help'] = 'Dieses Kriterium ermöglicht es, eine Auszeichnung manuell durch Nutzer/innen mit einer bestimmten Rolle zu verleihen.';
$string['criteria_3'] = 'Soziale Beteiligung';
$string['criteria_3_help'] = 'Sozial';
$string['criteria_4'] = 'Kursabschluss';
$string['criteria_4_help'] = 'Dieses Kriterium bedeutet, dass die Auszeichnung an Teilnehmer/innen verliehen wird, die den Kurs abgeschlossen haben. Bei diesem Kriterium können Sie zusätzliche Parameter festlegen, z.B. eine Mindestbewertung, die im Kurs erreicht werden muss oder ein Datum, an dem der Kurs abgeschlossen wird.';
$string['criteria_5'] = 'Mehrere Kurse abschließen';
$string['criteria_5_help'] = 'Dieses Kriterium bedeutet, dass die Auszeichnung an Nutzer/innen verliehen wird, die mehrere Kurse abgeschlossen haben. Für jeden dieser Kurse können Sie zusätzliche Parameter festlegen, z.B. eine Mindestbewertung, die im Kurs erreicht werden muss oder ein Datum, an dem der Kurs abgeschlossen wird.';
$string['criteria_6'] = 'Vervollständigung des Nutzerprofils';
$string['criteria_6_help'] = 'Dieses Kriterium ermöglicht es, die Verleihung einer Auszeichnung daran zu knüpfen, dass bestimmte Profilfelder im Nutzerprofil vervollständigt wurden. Das können Standardprofilfelder und selbst definierte Profilfelder sein.';
$string['criteria_descr'] = 'Nutzer/innen erhalten diese Auszeichnung, wenn folgende Bedingungen bzw. Kriterien erfüllt sind:';
$string['criteria_descr_0'] = 'Nutzer/innen erhalten diese Auszeichnung, wenn <strong>{$a}</strong> folgenden Bedingungen bzw. Kriterien erfüllt sind:';
$string['criteria_descr_1'] = '<strong>{$a}</strong> folgenden Aktivitäten sind abgeschlossen:';
$string['criteria_descr_2'] = 'Diese Auszeichnung muss von Nutzer/innen mit <strong>{$a}</strong> Rollen verliehen werden:';
$string['criteria_descr_4'] = 'Teilnehmer/innen müssen den Kurs abschließen.';
$string['criteria_descr_5'] = '<strong>{$a}</strong> folgenden Kurse müssen abgeschlossen sein:';
$string['criteria_descr_6'] = '<strong>{$a}</strong> folgenden Nutzerprofilfelder müssen vervollständigt sein:';
$string['criteria_descr_bydate'] = 'bis <em>{$a}</em>';
$string['criteria_descr_grade'] = 'mit minimaler Bewertung von <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Abschluss / Vervollständigung von <strong>{$a}</strong>:';
$string['criteria_descr_short1'] = 'Abschluss / Vervollständigung von <strong>{$a}</strong>:';
$string['criteria_descr_short2'] = 'wird vereleiht durch <strong>{$a}</strong>:';
$string['criteria_descr_short4'] = 'Kurs abschließen';
$string['criteria_descr_short5'] = 'Abschluss / Vervollständigung von <strong>{$a}</strong>:';
$string['criteria_descr_short6'] = 'Abschluss / Vervollständigung von <strong>{$a}</strong>:';
$string['criteria_descr_single_1'] = 'Die folgende Aktivität muss beendet werden:';
$string['criteria_descr_single_2'] = 'Diese Auszeichnung muss von Nutzer/innen mit folgender Rolle verliehen werden:';
$string['criteria_descr_single_4'] = 'Teilnehmer/innen müssen den Kurs beenden';
$string['criteria_descr_single_5'] = 'Der folgende Kurs muss abgeschlossen werden:';
$string['criteria_descr_single_6'] = 'Das folgende Nutzerprofilfeld muss vervollständigt sein:';
$string['criteria_descr_single_short1'] = 'Abschluss / Vervollständigung:';
$string['criteria_descr_single_short2'] = 'Verliehen durch:';
$string['criteria_descr_single_short4'] = 'Kurs abschließen';
$string['criteria_descr_single_short5'] = 'Abschluss / Vervollständigung:';
$string['criteria_descr_single_short6'] = 'Abschluss / Vervollständigung:';
$string['criteriasummary'] = 'Zusammenfassung der Kriterien';
$string['criterror'] = 'Parameterprobleme';
$string['criterror_help'] = 'Die Übersicht zeigt alle Parameter, die mit dieser Auszeichnung verbunden wurden, aber nicht mehr verfügbar sind. Wir empfehlen, diese Parameter zu deaktivieren, um sicherzustellen, dass Nutzer/innen diese Auszeichnung in Zukunft erwerben können.';
$string['currentimage'] = 'Aktuelles Bild';
$string['currentstatus'] = 'Aktueller Status';
$string['dateawarded'] = 'Verleihdatum';
$string['dateearned'] = 'Datum: {$a}';
$string['day'] = 'Tag(e)';
$string['deactivate'] = 'Zugriff verhindern';
$string['deactivatesuccess'] = 'Der Zugriff auf die Auszeichnung wurde erfolgreich deaktiviert.';
$string['defaultissuercontact'] = 'Name des standardmäßigen Verleihers';
$string['defaultissuercontact_desc'] = 'Tragen Sie hier eine E-Mail-Adresse ein, die standardmäßig mit dem Verleiher von Auszeichnungen auf Ihrer Moodle-Site verknüpft ist.';
$string['defaultissuername'] = 'Kontaktdaten des standardmäßigen Verleihers';
$string['defaultissuername_desc'] = 'Tragen Sie hier einen Namen ein, der standardmäßig als Verleiher von Auszeichnungen auf Ihrer Moodle-Site verwendet wird (z.B. den Namen der verleihenden Institution).';
$string['delbadge'] = 'Auszeichnung löschen';
$string['delconfirm'] = 'Sind Sie sicher, dass Sie die Auszeichnung \'{$a}\' löschen wollen?';
$string['delcritconfirm'] = 'Möchten Sie dieses Kriterium wirklich löschen?';
$string['delparamconfirm'] = 'Möchten Sie diesen Parameter wirklich löschen?';
$string['description'] = 'Beschreibung';
$string['disconnect'] = 'Verbindung aufheben';
$string['donotaward'] = 'Derzeit ist die Auszeichnung nicht verfügbar, d.h. sie kann nicht an Nutzer/innen verliehen werden. Wenn Sie die Auszeichnung verleihen wollen, müssen Sie sie aktivieren. Klicken Sie dazu auf den Button \'\'Zugriff erlauben\'\'.';
$string['editsettings'] = 'Einstellungen bearbeiten';
$string['enablebadges'] = 'Auszeichnungen';
$string['error:backpacknotavailable'] = 'Ihre Moodle-Site ist nicht über das Internet erreichbar. D.h. Auszeichnungen, die auf Ihrer Moodle-Site verliehen werden, können nicht von extrenen Backpack-Diensten verifiziert werden.';
$string['error:cannotact'] = 'Die Auszeichnung kann nicht aktiviert werden.';
$string['error:cannotawardbadge'] = 'Die Auszeichnung kann nicht an Nutzer/innen verliehen werden.';
$string['error:clone'] = 'Die Auszeichnung kann nicht dupliziert werden.';
$string['error:duplicatename'] = 'Eine Auszeichnung mit diesem Namen existiert bereits.';
$string['error:invalidbadgeurl'] = 'Unzulässige URL für Auszeichnungsverleiher';
$string['error:invalidcriteriatype'] = 'Falscher Kriteriumstyp';
$string['error:invalidexpiredate'] = 'Das Ablaufdatum muss in der Zukunft liegen.';
$string['error:invalidexpireperiod'] = 'Der Ablaufzeitraum kann nicht negativ oder gleich Null sein';
$string['error:noactivities'] = 'Es gibt in diesem Kurs keine Aktivitäten, für die der Aktivitätsabschluss konfiguriert wurde.';
$string['error:nocourses'] = 'Die Abschlussverfolgung ist für keinen Kurs Ihrer Moodle-Site aktiviert. Deshalb kann kein Kurs zur Auswahl angezeigt werden. Sie können die Abschlussverfolgung in den Kurseinstellungen aktivieren.';
$string['error:nogroups'] = '<p>Es gibt keine öffentlichen Sammlungen von Auszeichnungen in Ihrem Backpack. </p> <p>Nur öffentliche Sammlungen werden angezeigt, <a href="http://backpack.openbadges.org">gehen Sie zu Ihrem Backpack</a> und legen Sie mindestens eine öffentliche Sammlung an.</p>';
$string['error:nopermissiontoview'] = 'Sie haben kein Recht, die Ausgezeichneten zu sehen.';
$string['error:nosuchbadge'] = 'Die Auszeichnung mit der ID {$a} existiert nicht.';
$string['error:nosuchcourse'] = 'Warnung: Dieser Kurs existiert nicht mehr.';
$string['error:nosuchfield'] = 'Warnung: Dieses Nutzerprofilfeld existiert nicht mehr.';
$string['error:nosuchmod'] = 'Warnung: Diese Aktivität existiert nicht mehr.';
$string['error:nosuchrole'] = 'Warnung: Diese Rolle existiert nicht mehr.';
$string['error:nosuchuser'] = 'Der/die Nutzer/in mit dieser E-Mail-Adresse hat kein Nutzerkonto beim aktuellen Backpack-Dienst.';
$string['error:notifycoursedate'] = 'Warnung: Auszeichnungen, die mit dem Abschluss von Aktivitäten bzw. Kursen verbunden sind,  werden nicht verliehen, bevor der Kurs startet.';
$string['error:parameter'] = 'Warnung: Mindestens ein Parameter sollte gewählt werden, damit die Verleihung der Auszeichnung reibungslos funktioniert.';
$string['error:save'] = 'Die Auszeichnung kann nicht gespeichert werden.';
$string['evidence'] = 'Evidenz';
$string['existingrecipients'] = 'Vorhandene Empfänger/innen';
$string['expired'] = 'Abgelaufen';
$string['expiredate'] = 'Diese Auszeichnung verfällt am {$a}.';
$string['expireddate'] = 'Diese Auszeichnung ist am {$a} verfallen.';
$string['expireperiod'] = 'Diese Auszeichnung verfällt {$a} Tag(e) nach der Verleihung.';
$string['expireperiodh'] = 'Diese Auszeichnung verfällt {$a} Stunde(n) nach der Verleihung.';
$string['expireperiodm'] = 'Diese Auszeichnung verfällt {$a} Minute(n) nach der Verleihung.';
$string['expireperiods'] = 'Diese Auszeichnung verfällt {$a} Sekunde(n) nach der Verleihung.';
$string['expirydate'] = 'Ablaufdatum';
$string['expirydate_help'] = 'Optional können Auszeichnungen an einem bestimmten Datum verfallen oder nur eine bestimmte Zeit nach der Verleihung gültig sein und danach verfallen.';
$string['externalbadges'] = 'Meine Auszeichnungen von anderen Websites';
$string['externalbadges_help'] = 'In diesem Bereich werden Auszeichnungen aus Ihrem externen Backpack angezeigt.';
$string['externalbadgesp'] = 'Auszeichnungen von anderen Websites';
$string['externalconnectto'] = 'Wenn Sie Ihre externen Auszeichnungen anzeigen möchten, müssen Sie eine <a href="{$a}">Verbindung zu einem geeigneten Backpack</a> herstellen.';
$string['fixed'] = 'Festes Datum';
$string['hidden'] = 'Verborgen';
$string['hiddenbadge'] = 'Leider hat der Auszeichnungsersteller diese Information nicht zur Verfügung gestellt.';
$string['issuancedetails'] = 'Verfall';
$string['issuedbadge'] = 'Auszeichnungsinformationen';
$string['issuerdetails'] = 'Verleiher';
$string['issuername'] = 'Verleiher';
$string['issuername_help'] = 'Tragen Sie hier den Name des Verleihers oder der verleihenden Institution ein.';
$string['issuerurl'] = 'URL des Verleihers';
$string['localbadges'] = 'Meine Auszeichnungen von der {$a} Website';
$string['localbadgesh'] = 'Meine Auszeichnungen von dieser Website';
$string['localbadgesh_help'] = 'Diese Seite zeigt alle Auszeichnungen, die auf dieser Moodle-Site für den Abschluss von Kursen, Aktivitäten oder die Erfüllung anderer Kriterien verliehen wurden.

Sie können Ihre Auszeichnungen verwalten: Sie können einstellen, welche in Ihrem Nutzerprofil angezeigt werden sollen und welche nicht.

Sie können alle oder einzelne Auszeichnungen herunterladen und auf Ihrem Computer speichern. Heruntergeladene Auszeichnungen können in externen Backpacks angezeigt werden.';
$string['localbadgesp'] = 'Auszeichnungen von {$a}:';
$string['localconnectto'] = 'Um diese Auszeichnungen außerhalb dieser Moodle-Site zu teilen, müssen Sie eine <a href="{$a}">Verbindung zu einem Backpack</a> herstellen.';
$string['makeprivate'] = 'nicht anzeigen';
$string['makepublic'] = 'anzeigen';
$string['managebadges'] = 'Verwaltung';
$string['message'] = 'Mitteilung';
$string['messagebody'] = '<p>Ihnen wurde die Auszeichnung "%badgename%" verliehen.</p>
<p>Detaillierte Informationen zu dieser Auszeichnung finden Sie unter%badgelink%.</p>
<p>Wenn die Auszeichnung nicht als Anhang in dieser E-Mail hinzugefügt ist, können Sie sie auf der Seite {$a} herunterladen.</p>';
$string['messagesubject'] = 'Herzlichen Glückwunsch! Sie haben eine Auszeichnung erhalten!';
$string['method'] = 'Dieses Kriterium ist erfüllt, wenn ...';
$string['mingrade'] = 'Mindestbewertung notwendig';
$string['month'] = 'Monat(e)';
$string['mybackpack'] = 'Meine Backpack-Einstellungen';
$string['mybadges'] = 'Auszeichnungen';
$string['never'] = 'Nie';
$string['newbadge'] = 'Auszeichnung anlegen';
$string['newimage'] = 'Neues Bild';
$string['noawards'] = 'Diese Auszeichnung wurde noch nicht verliehen.';
$string['nobackpack'] = 'Mit diesem Nutzerkonto ist kein Backpack-Dienst verbunden.<br/>';
$string['nobackpackbadges'] = 'Es gibt keine Auszeichnungen in der gewählten Sammlung. <a href="mybackpack.php">Legen Sie weitere Sammlungen an.</a>';
$string['nobackpackcollections'] = 'Es wurden keine Sammlungen ausgewählt. <a href="mybackpack.php">Legen Sie eine Sammlung an.</a>';
$string['nobadges'] = 'Es sind keine Auszeichnungen verfügbar.';
$string['nocriteria'] = 'Es wurde noch keine Kriterien für die Verleihung dieser Auszeichnung festgelegt.';
$string['noexpiry'] = 'Diese Auszeichnung hat kein Ablaufdatum.';
$string['noparamstoadd'] = 'Es gibt keine weiteren Parameter für dieses Kriterium.';
$string['notacceptedrole'] = 'Sie haben derzeit keine Rolle, die diese Auszeichnung manuell verleihen darf.<br/>
Wenn Sie sehen wollen, wer die Auszeichnung bisher erworben hat, gehen Sie auf die Seite {$a}.';
$string['notconnected'] = 'Nicht verbunden';
$string['nothingtoadd'] = 'Es sind keine Kriterien verfügbar.';
$string['notification'] = 'Auszeichnungsersteller benachrichtigen';
$string['notification_help'] = 'Diese Einstellung legt fest, wie Auszeichnungsersteller/innen benachrichtigt werden, wenn die Auszeichnung verliehen wird.

Sie können folgende Optionen wählen:

* **Nie**: Es werden keine Benachrichtigungen versendet.

* **Immer**: Jedes Mal, wenn die Auszeichnung verliehen wird, wird eine Benachrichtigung versendet.

* **Täglich**: Auszeichnungsersteller/innen werden einmal täglich benachrichtigt.

* *Wöchentlich**: Auszeichnungsersteller/innen werden einmal wöchentlich benachrichtigt.

* **Monatlich**: Auszeichnungsersteller/innen werden einmal monatlich benachrichtigt.';
$string['notifydaily'] = 'Täglich';
$string['notifyevery'] = 'Jederzeit';
$string['notifymonthly'] = 'Monatlich';
$string['notifyweekly'] = 'Wöchentlich';
$string['numawards'] = 'Diese Auszeichnung wurde an <a href="{$a->link}">{$a->count}</a> Nutzer/innen verliehen.';
$string['numawardstat'] = 'Diese Auszeichnung wurde an {$a} Nutzer/innen verliehen.';
$string['overallcrit'] = 'gewählten Kriterien erfüllt sind.';
$string['potentialrecipients'] = 'Mögliche Empfänger/innen';
$string['recipients'] = 'Auszeichnungsempfänger/innen';
$string['relative'] = 'Relative Zeit';
$string['requiredcourse'] = 'Sie müssen mindestens einen Kurs für dieses Kriterium auswählen.';
$string['reviewbadge'] = 'Kriterien überprüfen';
$string['reviewconfirm'] = 'Diese Aktion prüft, ob es Nutzer/innen gibt, die die Kriterien für die Auszeichnung \'{$a}\' erfüllen. Wollen Sie fortfahren?';
$string['save'] = 'Speichern';
$string['searchname'] = 'Nach Name suchen';
$string['selectaward'] = 'Wählen Sie die Rolle, die diese Auszeichnung verleihen darf:';
$string['selectgroup_end'] = 'Es werden nur öffentliche Sammlungen angezeigt, <a href="http://backpack.openbadges.org">gehen Sie zu Ihrem Backapck</a> und legen Sie eine öffentliche Sammlung an.';
$string['selectgroup_start'] = 'Wählen Sie Sammlungen von Auszeichnungen aus Ihrem Backpack, um sie auf dieser Seite anzuzeigen:';
$string['selecting'] = 'Mit den gewählten Auszeichnungen...';
$string['setup'] = 'Verbindung konfigurieren';
$string['sitebadges'] = 'Globale Auszeichnungen';
$string['sitebadges_help'] = 'Globale Auszeichnungen können nur für systemweite Leistungen verliehen werden. Dazu gehört das Abschließen mehrerer Kurse oder die Vervollständigung des Nutzerprofils. Globale Auszeichnungen können auch manuell von einer Person an eine andere verliehen werden.

Auszeichnungen für kursspezifische Leistungen müssen im jeweiligen Kurs angelegt werden. Sie finden die entsprechenden kursspezifischen Auszeichnungen unter "Kurs-Administration > Auszeichnungen".';
$string['status'] = 'Status';
$string['status_help'] = 'Der Status einer Auszeichnung legt fest, wie die Auszeichnung verwendet werden kann:

* **Für andere verfügbar**: Der Zugriff auf die Auszeichnung wurde erlaubt, d.h. die Auszeichnung kann verliehen werden. In diesem Zustand können Sie keine Änderungen an den Einstellungen und Kriterien zur Verleihung der Auszeichnung vornehmen.

* **Für andere nicht verfügbar**: Der Zugriff auf die Auszeichnung wurde verhindert, d.h. die Auszeichnung kann derzeit nicht verliehen werden. Solange noch niemand diese Auszeichnung bekommen hat, können Sie in diesem Zustand die Einstellungen und Kriterien zur Verleihung der Auszeichnung ändern.

Sobald die Auszeichnung an mindestens eine Person verliehen wurde ist sie gesperrt, d.h. die Einstellungen und Kriterien zur VErleihung können nicht mehr geändert werden. Damit soll sichergestellt werden, dass alle Nutzer/innen die Auszeichnung für dieselbe Leistung erhalten. Derzeit ist es nicht möglich, Nutzer/innen einmal erworbene Auszeichnungen zu entziehen.';
$string['statusmessage_0'] = 'Diese Auszeichnung kann derzeit nicht verliehen werden. Klicken Sie auf \'\'Zugriff erlauben\'\', um die Auszeichnung wieder verfügbar zu machen.';
$string['statusmessage_1'] = 'Diese Auszeichnung kann an Nutzer/innen verliehen werden. Wenn Sie Änderungen an den Einstellungen vornehmen wollen, klicken Sie auf \'\'Zugriff  verhindern".';
$string['statusmessage_2'] = 'Diese Auszeichnung kann derzeit nicht verliehen werden, und die Kriterien zur Verleihung können nicht geändert werden. Klicken Sie auf \'\'Zugriff erlauben\'\', damit die Auszeichnung wieder zur Verfügung steht.';
$string['statusmessage_3'] = 'Diese Auszeichnung kann an Nutzer/innen verliehen werden, und die Kriterien zur Verleihung können nicht geändert werden.';
$string['statusmessage_4'] = 'Diese Auszeichnung ist derzeit archiviert.';
$string['subject'] = 'Betreff';
$string['variablesubstitution'] = 'Variable Substitution in Mitteilungen';
$string['variablesubstitution_help'] = 'In der Mitteilung, die an Ausgezeichnete versendet wird, stehen verschiedene Platzhalter im Text bzw. im Betreff. Diese Platzhalter werden durch geeignete Werte ersetzt, wenn die Mitteilung erzeugt und versendet wird. Das funktioniert jedoch nur, wenn die Syntax genau so wie ute beschrieben verwendet wird:

%badgename%
: An dieser Stelle wird der Name der Auszeichnung eingesetzt.

%username%
: An dieser Stelle wird der vollständige Name des Ausgezeichneten eingesetzt.

%badgelink%
: An dieser Stelle wird die öffentliche URL zu einer Seite eingesetzt, die Informationen zur Auszeichnung anzeigt.';
$string['viewbadge'] = 'Verliehene Auszeichnung ansehen';
$string['visible'] = 'Sichtbar';
$string['warnexpired'] = '(Diese Auszeichnung ist verfallen!)';
$string['year'] = 'Jahr(e)';
