<?php

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^ORM/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$mySQLFactory = new MySQLFactory();
$serviceWithMySQLDB = new Service($mySQLFactory);
$serviceWithMySQLDB->DBConnectionMethod();
$serviceWithMySQLDB->DBQueryBuilderMethod();
$serviceWithMySQLDB->DBRecordMethod();

$postgresSQLFactory = new PostgresSQLFactory();
$serviceWithPostgresSQLDB = new Service($postgresSQLFactory);
$serviceWithPostgresSQLDB->DBQueryBuilderMethod();

$oracleFactory = new OracleFactory();
$serviceWithOracleDB = new Service($oracleFactory);
$serviceWithOracleDB->DBConnectionMethod();