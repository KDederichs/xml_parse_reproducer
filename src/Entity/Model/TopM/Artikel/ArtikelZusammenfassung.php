<?php

namespace App\Entity\Model\TopM\Artikel;

class ArtikelZusammenfassung
{
    private int $Anzahl;
    private int $Artikelsätze;
    private int $Ausführungen;
    private int $LastIndex;

    /**
     * @return int
     */
    public function getAnzahl(): int
    {
        return $this->Anzahl;
    }

    /**
     * @param int $Anzahl
     * @return ArtikelZusammenfassung
     */
    public function setAnzahl(int $Anzahl): ArtikelZusammenfassung
    {
        $this->Anzahl = $Anzahl;
        return $this;
    }

    /**
     * @return int
     */
    public function getArtikelsätze(): int
    {
        return $this->Artikelsätze;
    }

    /**
     * @param int $Artikelsätze
     * @return ArtikelZusammenfassung
     */
    public function setArtikelsätze(int $Artikelsätze): ArtikelZusammenfassung
    {
        $this->Artikelsätze = $Artikelsätze;
        return $this;
    }

    /**
     * @return int
     */
    public function getAusführungen(): int
    {
        return $this->Ausführungen;
    }

    /**
     * @param int $Ausführungen
     * @return ArtikelZusammenfassung
     */
    public function setAusführungen(int $Ausführungen): ArtikelZusammenfassung
    {
        $this->Ausführungen = $Ausführungen;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastIndex(): int
    {
        return $this->LastIndex;
    }

    /**
     * @param int $LastIndex
     * @return ArtikelZusammenfassung
     */
    public function setLastIndex(int $LastIndex): ArtikelZusammenfassung
    {
        $this->LastIndex = $LastIndex;
        return $this;
    }


}
