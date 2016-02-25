<?php
/**
 * Created by PhpStorm.
 * User: mauriciorocha
 * Date: 20/02/16
 * Time: 10:48
 */


return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => '123456',
                    'dbname' => 'zf2angularjs',
                    'driverOptions' => array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    )
                )
            )
        )
    )
);