<style>
    * { margin: 5px; padding: 0 }
</style>

<?php
//define
$myVar = "Hello 4AI";
//outout
echo $myVar;
/*Theorie:
    C/Windows/system32/drivers/etc/hosts
    Apache VHosts
    Apache Konfiguration

    CMD: "php index.php" -> Textausgabe
*/
//include, include_once, require, require_once
require_once("Classes/Flag.php");
require_once("Interfaces/FlagInterface.php");
require_once("Classes/RecFlag.php");
require_once("Classes/TriFlag.php");

use \WSF\Flags\Classes\RecFlag as RecFlag;
use \WSF\Flags\Classes\TriFlag as TriFlag;

$flag = array(
    new RecFlag(array("Flagge", 24.50, 2, .5, "#fff")),
    new TriFlag(array("Triforce", 89.99, 1, 1, "#aa0"))
);

foreach ($flag as &$elem)
    echo $elem;

echo "<span style=\"color:gray\">";
var_dump($flag);
echo "</span>";