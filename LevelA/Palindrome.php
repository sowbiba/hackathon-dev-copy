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
            $str = utf8_encode($this->str[$i]);
            $newString .= $str;
        }

        return $newString;
    }

}
