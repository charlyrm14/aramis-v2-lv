<?php

namespace App\Services;

class AseguradoService {

    /**
     * The function "remueveGuiones" in PHP removes any non-alphanumeric characters from a given
     * string.
     * 
     * @param fc_nombre_asegurado The function `remueveGuiones` is designed to remove any
     * non-alphanumeric characters from the input string `` and replace them with a
     * space.
     * 
     * @return the input string `` with any non-alphanumeric characters replaced by
     * a space.
     */
    public static function remueveGuiones($fc_nombre_asegurado)
    {
        return preg_replace('([^A-Za-z0-9])', ' ', $fc_nombre_asegurado);
    }

    /**
     * The function `tituloTipoAsegurado` determines if a given type of insured is a "titular" or a
     * "dependiente".
     * 
     * @param tipo_asegurado The function `tituloTipoAsegurado` takes a parameter called
     * `` which represents the type of insured person. Based on the provided code
     * snippet, if the value of `` is found in the array `` which contains
     * 
     * @return The function `tituloTipoAsegurado` is returning either "titular" or "dependiente" based
     * on the input ``. If the input is found in the array `` which contains the
     * values "1", "10", "11", or "12", then the function returns "titular". Otherwise, it returns
     * "dependiente".
     */
    public static function tipoAsegurado($fi_tipo_asegurado)
    {
        $tipos = ["1", "10", "11", "12"];

        if (in_array($fi_tipo_asegurado, $tipos)) {
            return "titular";
        }
        
        return "dependiente";
    }
}