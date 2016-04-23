<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Database
{
    const INI_FILE = "config_db.ini";

    private $host;
    private $user;
    private $pass;
    private $database;
    private $con;

    function Database() //this appears to be a constructor, not the __construct method
    {
        if (!$settings = parse_ini_file(self::INI_FILE, TRUE))
        {
            throw new exception('Unable to open ' . self::INI_FILE);
        }
        $this->host = $settings["db_host"];
        $this->user = $settings["db_user"];
        $this->pass = $settings["db_pass"];
        $this->database = $settings["db_name"];
    }

    function getDbConnection()
    {
        $this->openDatabaseConnection();
        return $this->con;
    }

    function openDatabaseConnection()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->database);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    function closeDatabaseConnection()
    {
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else
        mysqli_close($this->con);
    }
}
?>