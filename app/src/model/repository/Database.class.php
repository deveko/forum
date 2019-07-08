<?php

abstract class Database
{
	private static $dbHost = "localhost";
	private static $dbName = "forum";
	private static $dbUser = "root";
	private static $dbUserPassword = "";

	private static $connection = null;

	protected static function connect()
	{

		try
		{
			self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" .self::$dbName,self::$dbUser,self::$dbUserPassword, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
		return self::$connection;
	}

	protected static function disconnect()
	{
		self::$connection = null;
	}
}
