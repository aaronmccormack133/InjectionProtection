<?php
$ch = curl_init();

$startUrl = "http://alphaonenow.org/info.php?id=13";
//add in a ' to the quotations in the append url bit. 
$appendUrl = $startUrl."'";

echo $appendUrl.PHP_EOL;

curl_setopt($ch, CURLOPT_URL, $appendUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

$data = curl_exec($ch);

if($data === FALSE){
	echo "curl error " . curl_error($ch);
}
/*
$errorCheck = strpos($text, "SQL");

if ($errorCheck==false){
    echo "no";
}
else{
    echo "<br>SQL ERROR FOUND :D";
}
 */
global $mySqlDB;
$mySqlArr = array("SQL", 
    "Warning.*?mysql_", 
    "MySqlException \(0x", 
    "valid MySql result", 
    "check the manual that corresponds to your (MySQL|MariaDB) server version", 
    "MySqlClient", 
    "com\.mysql\.jdbc\.exceptions"
);

global $postgreSQLDB;
$postgreSQLDB = array("PostgreSQL.*?ERROR",
	"Warning.*?\Wpg_",
	"valid PostgreSQL result",
	"Npgsql\.",
	"PG::SyntaxError:",
	"org\.postgresql\.util\.PSQLException",
	"ERROR:\s\ssyntax error at or near"
);

global $msSqlServerDB;
$msSqlServerDB = array("Driver.*? SQL[\-\_\ ]*Server",
	"OLE DB.*? SQL Server",
	"\bSQL Server[^&lt;&quot;]+Driver",
	"Warning.*?(mssql|sqlsrv)_",
	"\bSQL Server[^&lt;&quot;]+[0-9a-fA-F]{8}",
	"System\.Data\.SqlClient\.SqlException",
	"(?s)Exception.*?\WRoadhouse\.Cms\.",
	"Microsoft SQL Native Client error '[0-9a-fA-F]{8}",
	"com\.microsoft\.sqlserver\.jdbc\.SQLServerException",
	"ODBC SQL Server Driver",
	"SQLServer JDBC Driver",
	"macromedia\.jdbc\.sqlserver",
	"com\.jnetdirect\.jsql"
);

global $msAccessDB;
$msAccess = array("Microsoft Access (\d+ )?Driver",
	"JET Database Engine",
	"Access Database Engine",
	"ODBC Microsoft Access",
	"Syntax error \(missing operator\) in query expression"
);

global $oracleDB;
$oracleDB = array("\bORA-\d{5}",
	"Oracle error",
	"Oracle.*?Driver",
	"Warning.*?\Woci_",
	"Warning.*?\Wora_",
	"oracle\.jdbc\.driver",
	"quoted string not properly terminated",
	"SQL command not properly ended"
);

global $ibmDB2;
$ibmDB2 = array("CLI Driver.*?DB2",
	"DB2 SQL error",
	"\bdb2_\w+\(",
	"SQLSTATE.+SQLCODE"
);

global $informixDB;
$informixDB = array("Exception.*?Informix",
	"Informix ODBC Driver",
	"com\.informix\.jdbc",
	"weblogic\.jdbc\.informix"
);

global $firebirdDB;
$firebirdDB = array("Dynamic SQL Error",
	"Warning.*?ibase_"
);

global $SQLiteDB;
$SQLiteDB = array("SQLite/JDBCDriver",
	"SQLite\.Exception",
	"(Microsoft|System)\.Data\.SQLite\.SQLiteException",
	"Warning.*?sqlite_",
	"Warning.*?SQLite3::",
	"\[SQLITE_ERROR\]",
	"SQLite error \d+:",
	"sqlite3.OperationalError:"
);

global $SAPMaxDB;
$SAPMaxDB = array("SQL error.*?POS([0-9]+)",
	"Warning.*?maxdb"
);

global $sybaseDB;
$sybaseDB = array("Warning.*?sybase",
	"Sybase message",
	"Sybase.*?Server message",
	"SybSQLException",
	"com\.sybase\.jdbc"
);
global $ingresDB;
$ingresDB = array("Warning.*?ingres_",
	"Ingres SQLSTATE",
	"Ingres\W.*?Driver"
);

global $frontbaseDB;
$frontbaseDB = array("Exception (condition )?\d+\. Transaction rollback",
	"com\.frontbase\.jdbc"
);

global $hsqlDB;
$hsqlDB = array("org\.hsqldb\.jdbc",
	"Unexpected end of command in statement \[",
	"Unexpected token.*?in statement \["
);

function checkingPage($haystack, $needle){
    if(is_array($needle)){
        foreach($needle as $pin){
            if(is_array($pin)){
                return strpos($haystack, $pin) !== false;
            }
            else{
                $pos = strpos($haystack, $pin);
				return $pos;
            }
        }
    }
    else{
        return strpos($haystack, $needle);
    }
}

function sqlCheck($page, $sqlArray){
	foreach($sqlArray as $elem){
		$result = strpos($page, $elem);
		if($result == false){
			echo "Page is not vulnerable";
		}
		else{
			echo "Page is ".$sqlArray." vulnerable";
		}
	}
}

sqlCheck($data, $mySqlDB);



#https://stackoverflow.com/questions/9576772/check-if-string-exists-in-a-web-page
#code^^^
?>
