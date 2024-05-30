<?php

namespace App\Services;

class GeneralService {

    /**
     * The function "formatoFecha" in PHP converts a given date integer into a formatted date string in
     * the 'Y-m-d' format.
     * 
     * @param fecha_int The parameter `fecha_int` in the `formatoFecha` function is expected to be a
     * date in integer format. The function will convert this integer date into a formatted date string
     * in the 'Y-m-d' format.
     * 
     * @return The function `formatoFecha` is returning the formatted date in the 'Y-m-d' format after
     * converting the input `` to a Unix timestamp using the `strtotime` function.
     */
    public static function formatoFecha($fecha_int)
    {
        return date('Y-m-d', strtotime($fecha_int));
    }
}