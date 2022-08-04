<?php

namespace App\Entity\Model\TopM\Artikel;

class ArtikelListe
{
    /**
     * @var array<Artikel>
     */
    private array $Artikel;

    /**
     * @return array
     */
    public function getArtikel(): array
    {
        return $this->Artikel;
    }

    /**
     * @param array $Artikel
     * @return ArtikelListe
     */
    public function setArtikel(array $Artikel): ArtikelListe
    {
        $this->Artikel = $Artikel;
        return $this;
    }


}
