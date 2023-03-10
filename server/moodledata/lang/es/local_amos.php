<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_amos', language 'es', version '4.2'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS significa Manipulación Automatizada de Cadenas (Automated Manipulation Of Strings). AMOS es un repositorio central de las cadenas de Moodle y de su historia. Lleva un registro de la incorporación de cadenas en inglés al código Moodle, agrupa las traducciones, gestiona tareas comunes de traducción y genera paquetes de idioma para ser desplegados en servidores Moodle.</p>
<p>Véase <a href="http://docs.moodle.org/en/AMOS">documentación AMOS</a> para más información.</p>';
$string['amos'] = 'AMOS (Herramienta de traducción de Moodle)';
$string['amos:commit'] = 'Confirmar las cadenas en espera en el repositorio principal';
$string['amos:execute'] = 'Ejecutar el AMOScript dado';
$string['amos:importfile'] = 'Importar cadenas desde archivo subido';
$string['amos:manage'] = 'Gestionar portal AMOS';
$string['amos:stage'] = 'Usar la herramienta de traducción AMOS y poner las cadenas en espera';
$string['commitstage'] = 'Confirmar cadenas en espera';
$string['committableall'] = 'todos los idiomas';
$string['committablenone'] = 'no se admiten idiomas: por favor, contacte con el coordinador de AMOS';
$string['componentsall'] = 'Todos';
$string['componentsnone'] = 'Ninguno';
$string['componentsstandard'] = 'Estándar';
$string['confirmaction'] = 'Esta operación no se puede deshacer. ¿Está seguro?';
$string['contribaccept'] = 'Aceptar';
$string['contribactions'] = 'Contribuciones a la traducción';
$string['contribapply'] = 'Aplicar';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Asignar a mí mismo';
$string['contribauthor'] = 'Autor';
$string['contribclosedno'] = 'Ocultar contribuciones resueltas';
$string['contribclosedyes'] = 'Mostrar contribuciones resueltas';
$string['contribcomponents'] = 'Componentes';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'No existen contribuciones';
$string['contribincomingsome'] = 'Contribuciones recibidas ({$a})';
$string['contriblanguage'] = 'Idioma';
$string['contribreject'] = 'Rechazar';
$string['contribstartreview'] = 'Iniciar revisión';
$string['contribstatus'] = 'Estado';
$string['contribstatus10'] = 'En revisión';
$string['contribstatus20'] = 'Rechazada';
$string['contribstatus30'] = 'Aceptada';
$string['contribstrings'] = 'Cadenas';
$string['contribstringsnone'] = '{$a->orig} (todas están ya traducidas en el paquete de idioma)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} de ellas ya tienen una traducción más reciente)';
$string['contribsubmittednone'] = 'No se han enviado contribuciones';
$string['contribsubmittedsome'] = 'Sus contribuciones ({$a})';
$string['contributions'] = 'Contribuciones';
$string['err_exception'] = 'Error: {$a}';
$string['err_invalidlangcode'] = 'Código de idioma no válido';
$string['err_parser'] = 'Error de análisis: {$a}';
$string['filtercmp'] = 'Componentes';
$string['filtercmp_desc'] = 'Mostrar cadenas de estos componentes';
$string['filterlng'] = 'Idiomas';
$string['filterlng_desc'] = 'Mostrar traducciones en estos idiomas';
$string['filtermis'] = 'Miscelánea';
$string['filtermis_desc'] = 'Condiciones adicionales en las cadenas a mostrar.';
$string['filtermisfhlp'] = 'solo cadenas de ayuda';
$string['filtermisfmis'] = 'solo cadenas ausentes u obsoletas';
$string['filtermisfstg'] = 'solo cadenas en espera';
$string['filtersid'] = 'Identificador de cadena';
$string['filtersid_desc'] = 'La clave en la matriz de cadenas';
$string['filtersidpartial'] = 'coincidencia parcial';
$string['filtertxt'] = 'Sub-cadena';
$string['filtertxt_desc'] = 'La cadena debe contener un texto dado';
$string['filtertxtcasesensitive'] = 'sensible a mayúsculas';
$string['filtertxtregex'] = 'regex';
$string['filterver'] = 'Versiones';
$string['filterver_desc'] = 'Mostrar cadenas de estas versiones de Moodle';
$string['importfile'] = 'Importar cadenas traducidas de un archivo';
$string['language'] = 'Idioma';
$string['languages'] = 'Idiomas';
$string['languagesall'] = 'Todos';
$string['languagesnone'] = 'Ninguno';
$string['log'] = 'Registro';
$string['logfilterbranch'] = 'Versiones';
$string['logfiltercommits'] = 'Filtro de confirmación';
$string['logfiltercommittedafter'] = 'Confirmadas después de';
$string['logfiltercommittedbefore'] = 'Confirmadas antes de';
$string['logfiltercomponent'] = 'Componentes';
$string['logfilterlang'] = 'Idiomas';
$string['logfiltershow'] = 'Mostrar solo confirmaciones y cadenas filtradas';
$string['logfiltersource'] = 'Fuente';
$string['logfiltersourceamos'] = 'amos (traductor basado en web)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOSscript en el mensaje de confirmación)';
$string['logfilterstringid'] = 'Identificador de la cadena';
$string['logfilterstrings'] = 'Filtro de la cadena';
$string['logfilterusergrp'] = 'Confirmador';
$string['maintainers'] = 'Mantenedores';
$string['nofiletoimport'] = 'Por favor, proporcione un archivo que desee importar.';
$string['nologsfound'] = 'No se han encontrado cadenas, por favor modifique el filtrado.';
$string['nostringsfound'] = 'No se han encontrado cadenas';
$string['nostringtoimport'] = 'No hay cadena válida en el archivo. Asegúrese de que el archivo tiene un nombre y se ha formateado correctamente.';
$string['outdatednotcommitted_help'] = 'AMOS ha detectado que la cadena puede estar obsoleta, puesto que la versión inglesa fue modificada después de haber sido traducida. Por favor, revise la traducción.';
$string['permalink'] = 'Enlace permanente';
$string['pluginclassnonstandard'] = 'Extensiones (plugins) no estándar';
$string['pluginclassstandard'] = 'Extensiones (plugins) estándar';
$string['pluginname'] = 'AMOS';
$string['savefilter'] = 'Guardar ajustes del filtro';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript es un conjunto de instrucciones a ejecutar sobre el repositorio de cadenas.';
$string['stashapply'] = 'Aplicar';
$string['stringhistory'] = 'Historia';
$string['strings'] = 'Cadenas';
$string['submitting'] = 'Enviando una contribución';
$string['translatortool'] = 'Traductor';
$string['translatortranslation'] = 'Traducción';
$string['typecontrib'] = 'Conectores no estándar';
$string['typecore'] = 'Subsistemas básicos';
$string['typestandard'] = 'Conectores estándar';
$string['version'] = 'Versión';
