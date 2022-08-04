<?php

namespace App\Entity\Model\TopM\Artikel;

class Artikel
{

    private ?string $Artikelnummer = null;
    private ?string $Bezeichnung = null;
    private ?string $Bezeichnung1 = null;
    private ?string $Bezeichnung2 = null;
    private ?int $Warengruppe = null;
    private ?int $Unterwarengruppe = null;
    private ?string $Einheit = null;
    private ?int $Faktor = null;
    private ?string $Einheit2 = null;
    private ?int $Faktor2 = null;
    private ?string $Online = null;
    private ?string $Sperre = null;
    private ?int $MwSt = null;
    private ?string $Hmvnr = null;
    private ?int $EAN = null;
    private ?string $PZN = null;
    private ?string $Lieferantennr = null;
    private ?string $Lieferant = null;
    private ?string $Bestellnr = null;
    private ?int $Verfuegbar = null;
    private ?float $VK00 = null;
    private ?float $VK01 = null;
    private ?float $VK02 = null;
    private ?float $VK03 = null;
    private ?float $VK04 = null;
    private ?float $EK = null;
    private ?float $BruttoEK = null;
    private ?float $NullEK = null;

    /**
     * @return string|null
     */
    public function getArtikelnummer(): ?string
    {
        return $this->Artikelnummer;
    }

    /**
     * @param string|null $Artikelnummer
     * @return Artikel
     */
    public function setArtikelnummer(?string $Artikelnummer): Artikel
    {
        $this->Artikelnummer = $Artikelnummer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBezeichnung(): ?string
    {
        return $this->Bezeichnung;
    }

    /**
     * @param string|null $Bezeichnung
     * @return Artikel
     */
    public function setBezeichnung(?string $Bezeichnung): Artikel
    {
        $this->Bezeichnung = $Bezeichnung;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBezeichnung1(): ?string
    {
        return $this->Bezeichnung1;
    }

    /**
     * @param string|null $Bezeichnung1
     * @return Artikel
     */
    public function setBezeichnung1(?string $Bezeichnung1): Artikel
    {
        $this->Bezeichnung1 = $Bezeichnung1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBezeichnung2(): ?string
    {
        return $this->Bezeichnung2;
    }

    /**
     * @param string|null $Bezeichnung2
     * @return Artikel
     */
    public function setBezeichnung2(?string $Bezeichnung2): Artikel
    {
        $this->Bezeichnung2 = $Bezeichnung2;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWarengruppe(): ?int
    {
        return $this->Warengruppe;
    }

    /**
     * @param int|null $Warengruppe
     * @return Artikel
     */
    public function setWarengruppe(?int $Warengruppe): Artikel
    {
        $this->Warengruppe = $Warengruppe;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUnterwarengruppe(): ?int
    {
        return $this->Unterwarengruppe;
    }

    /**
     * @param int|null $Unterwarengruppe
     * @return Artikel
     */
    public function setUnterwarengruppe(?int $Unterwarengruppe): Artikel
    {
        $this->Unterwarengruppe = $Unterwarengruppe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEinheit(): ?string
    {
        return $this->Einheit;
    }

    /**
     * @param string|null $Einheit
     * @return Artikel
     */
    public function setEinheit(?string $Einheit): Artikel
    {
        $this->Einheit = $Einheit;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFaktor(): ?int
    {
        return $this->Faktor;
    }

    /**
     * @param int|null $Faktor
     * @return Artikel
     */
    public function setFaktor(?int $Faktor): Artikel
    {
        $this->Faktor = $Faktor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEinheit2(): ?string
    {
        return $this->Einheit2;
    }

    /**
     * @param string|null $Einheit2
     * @return Artikel
     */
    public function setEinheit2(?string $Einheit2): Artikel
    {
        $this->Einheit2 = $Einheit2;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFaktor2(): ?int
    {
        return $this->Faktor2;
    }

    /**
     * @param int|null $Faktor2
     * @return Artikel
     */
    public function setFaktor2(?int $Faktor2): Artikel
    {
        $this->Faktor2 = $Faktor2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOnline(): ?string
    {
        return $this->Online;
    }

    /**
     * @param string|null $Online
     * @return Artikel
     */
    public function setOnline(?string $Online): Artikel
    {
        $this->Online = $Online;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSperre(): ?string
    {
        return $this->Sperre;
    }

    /**
     * @param string|null $Sperre
     * @return Artikel
     */
    public function setSperre(?string $Sperre): Artikel
    {
        $this->Sperre = $Sperre;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMwSt(): ?int
    {
        return $this->MwSt;
    }

    /**
     * @param int|null $MwSt
     * @return Artikel
     */
    public function setMwSt(?int $MwSt): Artikel
    {
        $this->MwSt = $MwSt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHmvnr(): ?string
    {
        return $this->Hmvnr;
    }

    /**
     * @param string|null $Hmvnr
     * @return Artikel
     */
    public function setHmvnr(?string $Hmvnr): Artikel
    {
        $this->Hmvnr = $Hmvnr;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEAN(): ?int
    {
        return $this->EAN;
    }

    /**
     * @param int|null $EAN
     * @return Artikel
     */
    public function setEAN(?int $EAN): Artikel
    {
        $this->EAN = $EAN;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPZN(): ?string
    {
        return $this->PZN;
    }

    /**
     * @param string|null $PZN
     * @return Artikel
     */
    public function setPZN(?string $PZN): Artikel
    {
        $this->PZN = $PZN;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLieferantennr(): ?string
    {
        return $this->Lieferantennr;
    }

    /**
     * @param string|null $Lieferantennr
     * @return Artikel
     */
    public function setLieferantennr(?string $Lieferantennr): Artikel
    {
        $this->Lieferantennr = $Lieferantennr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLieferant(): ?string
    {
        return $this->Lieferant;
    }

    /**
     * @param string|null $Lieferant
     * @return Artikel
     */
    public function setLieferant(?string $Lieferant): Artikel
    {
        $this->Lieferant = $Lieferant;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBestellnr(): ?string
    {
        return $this->Bestellnr;
    }

    /**
     * @param string|null $Bestellnr
     * @return Artikel
     */
    public function setBestellnr(?string $Bestellnr): Artikel
    {
        $this->Bestellnr = $Bestellnr;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVerfuegbar(): ?int
    {
        return $this->Verfuegbar;
    }

    /**
     * @param int|null $Verfuegbar
     * @return Artikel
     */
    public function setVerfuegbar(?int $Verfuegbar): Artikel
    {
        $this->Verfuegbar = $Verfuegbar;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVK00(): ?float
    {
        return $this->VK00;
    }

    /**
     * @param float|null $VK00
     * @return Artikel
     */
    public function setVK00(?float $VK00): Artikel
    {
        $this->VK00 = $VK00;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVK01(): ?float
    {
        return $this->VK01;
    }

    /**
     * @param float|null $VK01
     * @return Artikel
     */
    public function setVK01(?float $VK01): Artikel
    {
        $this->VK01 = $VK01;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVK02(): ?float
    {
        return $this->VK02;
    }

    /**
     * @param float|null $VK02
     * @return Artikel
     */
    public function setVK02(?float $VK02): Artikel
    {
        $this->VK02 = $VK02;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVK03(): ?float
    {
        return $this->VK03;
    }

    /**
     * @param float|null $VK03
     * @return Artikel
     */
    public function setVK03(?float $VK03): Artikel
    {
        $this->VK03 = $VK03;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVK04(): ?float
    {
        return $this->VK04;
    }

    /**
     * @param float|null $VK04
     * @return Artikel
     */
    public function setVK04(?float $VK04): Artikel
    {
        $this->VK04 = $VK04;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getEK(): ?float
    {
        return $this->EK;
    }

    /**
     * @param float|null $EK
     * @return Artikel
     */
    public function setEK(?float $EK): Artikel
    {
        $this->EK = $EK;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getBruttoEK(): ?float
    {
        return $this->BruttoEK;
    }

    /**
     * @param float|null $BruttoEK
     * @return Artikel
     */
    public function setBruttoEK(?float $BruttoEK): Artikel
    {
        $this->BruttoEK = $BruttoEK;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNullEK(): ?float
    {
        return $this->NullEK;
    }

    /**
     * @param float|null $NullEK
     * @return Artikel
     */
    public function setNullEK(?float $NullEK): Artikel
    {
        $this->NullEK = $NullEK;
        return $this;
    }
}
