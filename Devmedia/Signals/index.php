<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

require "vendor/autoload.php";
echo "<h1>Bonjour netbeans</h1>";

use Signals\Signal;

class Mock
{
    public $signal;
    public function __construct(){$this->signal = new Signal("THE SIGNAL");}
    public function getSignal(){ return $this->signal;}
    public function dispatch()
    {
        $valueObjects = array("coucou","kiki");
        $this->signal->dispatch($valueObjects);
    }
}

$mock = new Mock();

$signal = $mock->getSignal();

$listener = function($p1,$p2) use($signal) {
    echo "ClosureListener #1<br/>";
    echo "P2 : $p2 P1 : $p1<br/>";
};

$fn = function($p1,$p2) use($signal) {
    echo "ClosureListener #2<br/>";
    echo "p1 : $p1 p2 : $p2<br/>";
};
echo "<h2>OUTPUTS</h2>";

$mock->getSignal()->add($fn);
$mock->getSignal()->add($listener);

$mock->dispatch();

?>