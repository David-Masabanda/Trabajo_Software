<?php 

function distro_get_config() {

    $config = new stdClass();

    $config->installername = 'Moodle Windows Installer';
    $config->installerversion = '2022112800';
    $config->packname = 'Xampp Portable';
    $config->packversion = '8.0.25-0 Portable (x64)';
    $config->webname = 'Apache';
    $config->webversion = '@@BITROCK_APACHE_VERSION@@';
    $config->phpname = 'PHP';
    $config->phpversion = '@@BITROCK_PHP_VERSION@@ + PEAR';
    $config->dbname = 'MariaDB';
    $config->dbversion = '@@BITROCK_MARIADB_VERSION@@';
    $config->moodlerelease = '4.2dev (Build: 20230203)';
    $config->moodleversion = '2023020300.00';
    $config->dbtype='mariadb';
    $config->dbhost='localhost';
    $config->dbuser='root';

    return $config;
}

function distro_pre_create_db($database, $dbhost, $dbuser, $dbpass, $dbname, $prefix, $dboptions, $distro) {

/// We need to change the database password in windows installer, only if != ''
    if ($dbpass !== '') {
        try {
            if ($database->connect($dbhost, $dbuser, '', 'mysql', $prefix, $dboptions)) {
                $sql = "UPDATE user SET password=password(?) WHERE user='root'";
                $params = array($dbpass);
                $database->execute($sql, $params);
                $sql = "flush privileges";
                $database->execute($sql);
            }
        } catch (Exception $ignore) {
        }
    }
}
?>
