<?php 

namespace Petrik\PivarcsiGergelyMate\Halloween\Models;

class Lako {

    private $nev;

    public function __construct(string $nev)
    {
        $this->nev = $nev;
    }

    public function getNev()
    {
        return $this->nev;
    }
}

?>
