<?php
/**
 * Created by PhpStorm.
 * User: tuxer
*/
/**
 * Class Database to manage database connectivity
 *  All the methods and members kept static to prevent multiple instantiation
 * @package Udaan
 */
final class Database {

    # variables that store connection information
    private static $dsn = "mysql:host=localhost;dbname=team17";
    private static $user = "root";
    private static $pass = "";

    # boolean to determine whether the database is connected or not
    private static $is_db_connected = false;

    # database handler variable that will be used for PDO queries.
    public static $DBH;


    /**
     *
     * static function to connect to database. Arbitrarily kept static .
     * @param null
     * @return PDO PDO data handle
     */
    public static function connect()
    {

        try {

            #  if database is not connected, connect to the database . Better approach because connect() could be called more than once
            if(!self::$is_db_connected || self::$DBH==null || !isset(self::$DBH) )
            {
                self::$DBH = new PDO(self::$dsn,self::$user, self::$pass);
                self::$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                self::$DBH->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                self::$DBH->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);

                self::$is_db_connected = true; // set to true after successfull connection
            }
            return self::$DBH;
        }
        catch(PDOException $e) {

        }
    }

}
