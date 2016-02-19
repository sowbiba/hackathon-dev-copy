<?php

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     *
     * @TODO
     * @return string
     */
    public function generatePalindrome()
    {
        $newString = $this->str;

        for ($i = strlen($this->str)-1; $i>=0; $i--) {
            //$str = iconv("ISO-8859-1", "UTF-8", $this->str[$i]);
            $str = html_entity_decode(htmlentities($this->str[$i], ENT_QUOTES, 'UTF-8'), ENT_QUOTES , 'ISO-8859-15');
            $newString .= $str;
        }

        return $newString;
    }

}
