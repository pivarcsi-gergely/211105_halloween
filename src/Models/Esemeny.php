<?php 


class Esemeny {
    private $nev;
    private $szervezo;
    public $resztvevok = array();
    private $ido;

    public function Esemeny(string $nev, Lako $szervezo, array $resztvevok, DateTime $ido)
    {
        $this->nev = $nev;
        $this->szervezo = $szervezo;
        $this->resztvevok = $resztvevok;
        $this->ido = $ido;
    }

    public function getNev()
    {
        return $this->nev;
    }
    public function getSzervezo()
    {
        return $this->szervezo;
    }
    public function getIdo()
    {
        return $this->ido->format('Y-m-d');
    }
}

?>