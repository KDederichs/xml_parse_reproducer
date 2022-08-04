<?php

namespace App\Controller;

use App\Entity\Model\TopM\Artikel\ArtikelListResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\UnicodeString;

class TestController extends AbstractController
{
    /**
     * @return Response
     * @Route("/test-bad")
     */
    public function badExample(SerializerInterface $serializer): Response
    {
        $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
<Daten>
<Result>
<Code>00</Code>
<Text>OK</Text>
</Result>
<Artikellliste>
<Artikel>
<Artikelnummer>0000000043 02</Artikelnummer>
<Bezeichnung>Mepilex Lite 12,5 x 12,5 cm,</Bezeichnung>
<Bezeichnung1>Silikonbeschichteter Schaumverband /dünn</Bezeichnung1>
<Bezeichnung2>OP = 5 Stück</Bezeichnung2>
<Warengruppe>50</Warengruppe>
<Unterwarengruppe>400</Unterwarengruppe>
<Einheit>Stk.</Einheit>
<Faktor>1</Faktor>
<Einheit2>OP</Einheit2>
<Faktor2>5</Faktor2>
<Online>J</Online>
<Hmvnr></Hmvnr>
<EAN></EAN>
<PZN>03642727</PZN>
<Lieferantennr>7000568</Lieferantennr>
<Lieferant>HOZ MEDI WERK GmbH &amp; Co. KG</Lieferant>
<Bestellnr>8452904</Bestellnr>
</Artikel>
<Artikel>
<Artikelnummer>0000000173 01</Artikelnummer>
<Bezeichnung>Ligasano wei&#223; 59 x 49 x 0,5,</Bezeichnung>
<Bezeichnung1>Große Platten / unsteril</Bezeichnung1>
<Bezeichnung2>OP = 25 Stück</Bezeichnung2>
<Warengruppe>50</Warengruppe>
<Unterwarengruppe>400</Unterwarengruppe>
<Einheit>OP</Einheit>
<Faktor>1</Faktor>
<Einheit2></Einheit2>
<Faktor2></Faktor2>
<Online>J</Online>
<Hmvnr></Hmvnr>
<EAN></EAN>
<PZN>04436792</PZN>
<Lieferantennr>7000146</Lieferantennr>
<Lieferant>Ligamed GmbH</Lieferant>
<Bestellnr>8452905</Bestellnr>
</Artikel>
</Artikellliste>
<Zusammenfassung>
<Anzahl>2</Anzahl>
<Artikelsätze>1</Artikelsätze>
<Ausführungen>2</Ausführungen>
<LastIndex>2</LastIndex>
</Zusammenfassung>
</Daten>';

        $data = $serializer->deserialize($xml, ArtikelListResponse::class, 'xml');
        dd($data);
    }

    /**
     * @param SerializerInterface $serializer
     * @return Response
     * @Route("/test-good")
     */
    public function goodExample(SerializerInterface $serializer): Response
    {
        $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
<Daten>
<Result>
<Code>00</Code>
<Text>OK</Text>
</Result>
<Artikellliste>
<Artikel>
<Artikelnummer>0000000043 02</Artikelnummer>
<Bezeichnung>Mepilex Lite 12,5 x 12,5 cm,</Bezeichnung>
<Bezeichnung1>Silikonbeschichteter Schaumverband /dünn</Bezeichnung1>
<Bezeichnung2>OP = 5 Stück</Bezeichnung2>
<Warengruppe>50</Warengruppe>
<Unterwarengruppe>400</Unterwarengruppe>
<Einheit>Stk.</Einheit>
<Faktor>1</Faktor>
<Einheit2>OP</Einheit2>
<Faktor2>5</Faktor2>
<Online>J</Online>
<Hmvnr></Hmvnr>
<EAN></EAN>
<PZN>03642727</PZN>
<Lieferantennr>7000568</Lieferantennr>
<Lieferant>HOZ MEDI WERK GmbH &amp; Co. KG</Lieferant>
<Bestellnr>8452904</Bestellnr>
</Artikel>
<Artikel>
<Artikelnummer>0000000173 01</Artikelnummer>
<Bezeichnung>Ligasano wei&#223; 59 x 49 x 0,5,</Bezeichnung>
<Bezeichnung1>Große Platten / unsteril</Bezeichnung1>
<Bezeichnung2>OP = 25 Stück</Bezeichnung2>
<Warengruppe>50</Warengruppe>
<Unterwarengruppe>400</Unterwarengruppe>
<Einheit>OP</Einheit>
<Faktor>1</Faktor>
<Einheit2></Einheit2>
<Faktor2></Faktor2>
<Online>J</Online>
<Hmvnr></Hmvnr>
<EAN></EAN>
<PZN>04436792</PZN>
<Lieferantennr>7000146</Lieferantennr>
<Lieferant>Ligamed GmbH</Lieferant>
<Bestellnr>8452905</Bestellnr>
</Artikel>
</Artikellliste>
<Zusammenfassung>
<Anzahl>2</Anzahl>
<Artikelsätze>1</Artikelsätze>
<Ausführungen>2</Ausführungen>
<LastIndex>2</LastIndex>
</Zusammenfassung>
</Daten>';

        $str = new UnicodeString($xml);

        $data = $serializer->deserialize($str->replace('ISO-8859-1', 'UTF-8'), ArtikelListResponse::class, 'xml');
        dd($data);
    }
}
