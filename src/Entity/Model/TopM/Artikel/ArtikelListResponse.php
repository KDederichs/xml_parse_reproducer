<?php

namespace App\Entity\Model\TopM\Artikel;

use App\Entity\Model\TopM\Common\AbstractTopMResponse;

class ArtikelListResponse extends AbstractTopMResponse
{
    private ArtikelListe $Artikellliste;
    private ArtikelZusammenfassung $Zusammenfassung;

    /**
     * @return ArtikelListe
     */
    public function getArtikellliste(): ArtikelListe
    {
        return $this->Artikellliste;
    }

    /**
     * @param ArtikelListe $Artikellliste
     * @return ArtikelListResponse
     */
    public function setArtikellliste(ArtikelListe $Artikellliste): ArtikelListResponse
    {
        $this->Artikellliste = $Artikellliste;
        return $this;
    }

    /**
     * @return ArtikelZusammenfassung
     */
    public function getZusammenfassung(): ArtikelZusammenfassung
    {
        return $this->Zusammenfassung;
    }

    /**
     * @param ArtikelZusammenfassung $Zusammenfassung
     * @return ArtikelListResponse
     */
    public function setZusammenfassung(ArtikelZusammenfassung $Zusammenfassung): ArtikelListResponse
    {
        $this->Zusammenfassung = $Zusammenfassung;
        return $this;
    }
}
