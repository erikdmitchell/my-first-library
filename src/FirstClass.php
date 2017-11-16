<?php

namespace erikdmitchell\my_first_library;

class FirstClass
{
    /**
     * Encodes a string by a simple shift of characters
     *
     * @param string $string
     * @return string
     * @throws \Exception
     */
    public function encodeString($string)
    {
        $string=strtolower($string);
        $src="abcdefghijklmnopqrstuvwxyz0123456789 ";
        $dst="jklmnopqrstuvwxyz0123456789abcdefghi ";
        for ($i=0; $i<strlen($string); $i++) {
            $pos=strpos($src, $string[$i]);
            if ($pos===false) {
                throw new \Exception("Please provide only numbers and alphanumerical characters");
            }
            $string[$i]=$dst[$pos];
        }
        return $string;
    }

    /**
     * Decodes a string by a simple shift of characters
     *
     * @param string $string
     * @return string
     * @throws \Exception
     */
    public function decodeString($string)
    {
        $string=strtolower($string);
        $src="jklmnopqrstuvwxyz0123456789abcdefghi ";
        $dst="abcdefghijklmnopqrstuvwxyz0123456789 ";
        for ($i=0; $i<strlen($string); $i++) {
            $pos=strpos($src, $string[$i]);
            if ($pos===false) {
                throw new \Exception("Please provide only numbers and alphanumerical characters");
            }
            $string[$i]=$dst[$pos];
        }
        return $string;
    }
}