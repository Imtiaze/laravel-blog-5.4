<?php


if (!function_exists('imploadValue')) {

    function imploadValue($types)
    {
        $strTypes = implode(",", $types);
        return $strTypes;
    }

}

if (!function_exists('explodeValue')) {

    function explodeValue($types)
    {
        $strTypes = explode(",", $types);
        return $strTypes;
    }

}

if (!function_exists('random_code')) {

    function random_code()
    {
        return rand(1111, 9999);
    }

}

if (!function_exists('remove_special_char')) {

    function remove_special_char($text)
    {
        $t = $text;

        $specChars = array(
            ' '     => '-', '!'    => '', '"'    => '',
            '#'     => '', '$'     => '', '%'    => '',
            '&amp;' => '', '\''    => '', '('    => '',
            ')'     => '', '*'     => '', '+'    => '',
            ','     => '', '₹'     => '', '.'    => '',
            '/-'    => '', ':'     => '', ';'    => '',
            '<'     => '', '='     => '', '>'    => '',
            '?'     => '', '@'     => '', '['    => '',
            '\\'    => '', ']'     => '', '^'    => '',
            '_'     => '', '`'     => '', '{'    => '',
            '|'     => '', '}'     => '', '~'    => '',
            '-----' => '-', '----' => '-', '---' => '-',
            '/'     => '', '--'    => '-', '/_'  => '-',

        );

        foreach ($specChars as $k => $v) {
            $t = str_replace($k, $v, $t);
        }

        return $t;
    }

}
