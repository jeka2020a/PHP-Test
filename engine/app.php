<?php

    /*
        created by Eughene Zhekul (Tsyma)   

        CONTACTS:  
            email     - evgenzekul@gmail.com
            telegram  - https://t.me/eughene_link
    */

    class test1 {
        
        static function last_word($sentence) {
            $pieces = explode(' ', $sentence);
            $last_word = array_pop($pieces);
            var_dump($last_word);                   //OR we can use this function - count_chars($last_word);
        }

        static function extract_string($str)
        {
            $part__str = explode('[', $str);
            $second__part = explode(']' , $part__str[1]);
            
            if($second__part[0] == 'Hello World')
                return "";
            else
                echo $second__part[0];
        }
    }



    class test2 {

        function is_power($number,$base)
        {
            for ($i=0; ; $i++) { 
                $result = pow($base , $i); 
                if ($result == $number)
                {
                    echo "true";
                    break;
                }
                elseif ($result > $number)
                {
                    echo "false";
                    break;
                }
            }
        }


        function format_number($str)
        {
            $formatation = array_map('strval' , str_split($str)); 
            $count = count($formatation);

            for ($i=0; $i <= $count; $i++)
            {
                if (is_numeric($formatation[$i]) || $formatation[$i] == '.' || $formatation[$i] == ',')
                {
                    $res = $formatation[$i];
                    echo $res;
                }
            }
        }

        function sum_digits($int)
        {
            $formatation__int = array_map('strval' , str_split($int)); 
            $count__int = count($formatation__int);

            for ($i=0; $i <= $count__int; $i++)
                $sum = array_sum($formatation__int);
                
            echo $sum;
        }
    }





?>