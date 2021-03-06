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
 * Strings for component 'tool_behat', language 'it', branch 'MOODLE_25_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allavailablesteps'] = 'Tutte le definizioni di passi disponibili';
$string['giveninfo'] = 'Fornito. Procedure per impostare l\'ambiente';
$string['installinfo'] = 'Leggere {$a} per iformazioni sull\'installazione e lo svolgimento di test';
$string['moreinfoin'] = 'Per maggiori informazioni: {$a}';
$string['newstepsinfo'] = 'Leggere {$a} per maggiori informazioni su come aggiungere definizioni di passi.';
$string['newtestsinfo'] = 'Leggere {$a} per maggiori informazioni su come preparare test.';
$string['nostepsdefinitions'] = 'Non sono presenti definizioni di passi corrispondenti al filtro';
$string['pluginname'] = 'Test di accettazione';
$string['runclitool'] = 'Per elencare le definizioni di passi è necessario creare la cartella $CFG->behat_dataroot eseguendo il tool CLI Behat. Per farlo, è possibile andare nella cartella radice di Moodle ed eseguire "{$a}"';
$string['stepsdefinitionscomponent'] = 'Area';
$string['stepsdefinitionscontains'] = 'Contiene';
$string['stepsdefinitionsfilters'] = 'Definizione passi';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Poi. Verifiche per assicurarsi che i risultati ottenuti siano quelli attesi.';
$string['viewsteps'] = 'Filtro';
$string['wheninfo'] = 'Quando. Azioni che generano un evento';
$string['wrongbehatsetup'] = 'Il setup bheat presenta dei problemi. E\' necessario accertarsi che:<ul>
<li>è possibile eseguire il comando "curl http://getcomposer.org/installer | php"</li>
<li>è possibile eseguire il comando "php composer.phar install --dev"</li>
<li>il file vendor/bin/behat ha i permessi per essere eseguito </li></ul>';
