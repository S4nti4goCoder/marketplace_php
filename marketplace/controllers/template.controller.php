<?php

class TemplateController
{
    /*=============================================
	Traemos la Vista Principal de la plantilla
	=============================================*/
    public function index()
    {
        include "views/template.php";
    }

    /*=============================================
	Ruta Principal o Dominio del sitio
	=============================================*/
    static public function path()
    {
        return "http://marketplace.com/";
    }

    /*=============================================
	Ahorro en oferta
	=============================================*/
    static public function savingValue($price, $offer, $type)
    {

        // Cuando la oferta es con descuento
        if ($type == "Discount") {
            $save = $offer * $price / 100;
            return number_format($save, 2);
        }

        // Cuando la oferta es con precio fijo
        if ($type == "Fixed") {
            $save = $price - $offer;
            return number_format($save, 2);
        }
    }

    /*=============================================
	Precio final de oferta
	=============================================*/
    static public function offerPrice($price, $offer, $type)
    {

        // Cuando la oferta es con descuento
        if ($type == "Discount") {
            $offerPrice = $price - ($offer * $price / 100);
            return number_format($offerPrice, 2);
        }

        // Cuando la oferta es con precio fijo
        if ($type == "Fixed") {
            return number_format($offer, 2);
        }
    }
}
