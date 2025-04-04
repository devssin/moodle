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
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Katalog admin';
$string['availablelangs'] = 'Dostępne paczki językowe';
$string['chooselanguagehead'] = 'Wybierz język';
$string['chooselanguagesub'] = 'Proszę wybrać język do instalacji. Ten język będzie również użyty jako domyślny język witryny, przy czym może być później zmieniony.';
$string['clialreadyconfigured'] = 'Plik config.php już istnieje. Użyj admin/cli/install_database.php jeśli chcesz zainstalować Moodle dla tej strony.';
$string['clialreadyinstalled'] = 'Plik config.php już istnieje. Użyj admin/cli/install_database.php jeśli chcesz zaktualizować Moodle dla tej strony.';
$string['cliinstallheader'] = 'Program instalacyjny Moodle {$a} z linii poleceń';
$string['clitablesexist'] = 'Tabele bazy danych już istnieją, instalacja  nie może kontynuować.';
$string['databasehost'] = 'Host bazy danych';
$string['databasename'] = 'Nazwa bazy danych';
$string['databasetypehead'] = 'Wybierz sterownik bazy danych';
$string['dataroot'] = 'Katalog danych';
$string['datarootpermission'] = 'Prawa katalogów danych';
$string['dbprefix'] = 'Prefiks tabel';
$string['dirroot'] = 'Katalog Moodle';
$string['environmenthead'] = 'Sprawdzam środowisko (ustawienia) ...';
$string['environmentsub2'] = 'Każde wydanie Moodle ma pewne minimalne wymagania wersji PHP i pewną liczbę obowiązkowych rozszerzeń PHP. Pełna kontrola środowiska odbywa się przed każdą instalacją i aktualizacją. Prosimy o kontakt z administratorem serwera, jeśli nie wiesz jak zainstalować nową wersję lub włączyć rozszerzenie PHP.';
$string['errorsinenvironment'] = 'Kontrola środowiska zakończona niepowodzeniem!';
$string['installation'] = 'Instalacja';
$string['langdownloaderror'] = 'Niestety język "{$a}" nie może zostać pobrany. Proces instalacji będzie kontynuowany w języku angielskim.';
$string['memorylimithelp'] = '<p>Limit pamięci PHP dla Twojego serwera jest ustawiony obecnie na {$a}.</p>

<p> Może to stworzyć sytuację, w której Moodle będzie miał w przyszłości problemy z pamięcią, zwłaszcza jeśli masz udostępnionych wiele modułów i/lub wielu użytkowników.</p>

<p>Jeśli jest to możliwe, zalecamy ustawienie konfiguracji PHP z wyższym limitem, np. 40M.
Istnieje kilka sposobów przeprowadzenia tej operacji, których możesz spróbować:</p>
<ol>
<li>Jeśli możesz przekompiluj PHP za pomocą <i>--enable-memory-limit</i>.
Pozwoli to Moodle ustawić samoczynnie limit pamięci.</li>
<li>Jeśli masz dostęp do pliku konfiguracyjnego php.ini, możesz w nim zmienić ustawienie <b>memory_limit</b> do wielkości np. 40M. W przypadku, gdy nie posiadasz dostępu możesz poprosić swojego administratora aby zrobił to za Ciebie.</li>
<li>Na niektórych serwerach PHP można stworzyć plik. htaccess w katalogu Moodle zawierający poniższą linię:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Jednakże na niektórych serwerach będzie uniemożliwiało to poprawne działanie <b>wszystkich</b> stron PHP (ujrzysz błędy na wyświetlanych stronach), wtedy będziesz musiał usunąć plik .htaccess.</p></li>
</ol>';
$string['paths'] = 'Ścieżki';
$string['pathserrcreatedataroot'] = 'Katalog danych ({$a->dataroot}) nie może zostać utworzony przez instalator.';
$string['pathshead'] = 'Potwierdź ścieżki';
$string['pathsrodataroot'] = 'Główny katalog danych nie ma uprawnień do zapisu. ';
$string['pathsroparentdataroot'] = 'Nadrzędny katalog ({$a->parent}) jest tylko do odczytu. Katalog danych ({$a->dataroot}) nie może zostać utworzony przez instalator. ';
$string['pathssubadmindir'] = 'Nieliczne portale używają URL /admin jako specjalnego adresu panelu sterowania. Niestety jest to sprzeczne ze standardowej lokalizacją folderu stron administratora Moodle. Można to naprawić poprzez zmianę nazwy katalogu administratora w instalacji i podanie tej nazwy tu, np.: <em>moodleadmin.</em> Linki administratora Moodle będą automatycznie poprawione.';
$string['pathssubdataroot'] = 'Potrzebny jest obszar, gdzie Moodle może zapisywać ładowane do niego pliki. Katalog ten powinien mieć prawo do odczyt i ZAPISU  przez użytkownika serwera WWW (zwykle &quot;nobody&quot; lub &quot;apache&quot;), ale może być być dostępny bezpośrednio przez sieć. Instalator spróbuje go utworzyć, jeśli nie istnieje.';
$string['pathssubdirroot'] = 'Pełna ścieżka do katalogu z instalacją Moodle.';
$string['pathssubwwwroot'] = 'Pełny adres internetowy, pod którym Moodle będzie dostępny. Moodle nie może być dostępny przy użyciu wielu adresów. Jeśli twoja witryna ma kilka adresów publicznych, należy skonfigurować trwałe przekierowania z wszystkich z nich na jeden. Jeśli Twoja witryna jest dostępna zarówno z intranetu i Internetu, korzystaj z publicznego adresu i ustaw DNS tak, aby użytkownicy Intranetu korzystali też z adresu publicznego. Jeśli adres nie jest poprawny, należy ponownie uruchomić instalację z innym adresem.';
$string['pathsunsecuredataroot'] = 'Lokalizacja głównego katalogu danych nie jest bezpieczna';
$string['pathswrongadmindir'] = 'Katalog admin nie istnieje';
$string['phpextension'] = 'rozszerzenie PHP {$a}';
$string['phpversion'] = 'Wersja PHP';
$string['phpversionhelp'] = '<p>Moodle wymaga wersji PHP co najmniej 5.6.5 lub 7.1 (7.0.x ma pewne ograniczenia silnika).</p>
<p>Aktualnie używasz wersji {$a}.</p>
<p>Musisz zaktualizować PHP lub przenieść na host z nowszą wersją PHP.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Widzisz tę stronę, ponieważ pomyślnie zainstalowałeś i uruchomiłeś pakiet <strong>{$a->packname} {$a->packversion</strong> na swoim komputerze. Gratulacje!';
$string['welcomep30'] = 'Ta wersja <strong>{$a->installername}</strong> zawiera aplikacje służące do tworzenia środowiska, w którym będzie działać <strong>Moodle</strong>, a mianowicie:';
$string['welcomep40'] = 'Pakiet zawiera <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Użycie wszystkich aplikacji w tym pakiecie podlega ich odpowiednim licencjom. Kompletny pakiet <strong>{$a->installername}</strong> jest <a href="https://www.opensource.org/docs/definition_plain.html">open source</a> i jest dystrybuowany na licencji <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Na poniższych stronach znajdziesz kilka łatwych do wykonania kroków, aby skonfigurować i skonfigurować <strong>Moodle</strong> na swoim komputerze. Możesz zaakceptować domyślne
ustawienia lub, opcjonalnie, zmienić je, aby odpowiadały Twoim potrzebom.';
$string['welcomep70'] = 'Kliknij przycisk "Dalej" żeby kontynuować instalację <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adres w sieci';
