<?php

    class Allergen
    {
        private $allergy_index = [
            "cats" => 128,
            "pollen" => 64,
            "chocolate" => 32,
            "tomatoes" => 16,
            "strawberries" => 8,
            "shellfish" => 4,
            "peanuts" => 2,
            "eggs" => 1
        ];

        function listAllergies($input_number)
        {
            $result_string = "";
            $remainder = $input_number;

            foreach ($this->allergy_index as $type => $value) {
                if ($remainder == 0) {
                    return $result_string;
                } elseif ($value == $remainder) {
                    $result_string .= $type;
                    return $result_string;
                } elseif ($remainder/$value > 1) {
                    $remainder = $remainder % $value;
                    $result_string .= $type;
                }
            }
        }
    }

?>
