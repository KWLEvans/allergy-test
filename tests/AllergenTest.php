<?php

    require_once __DIR__."/../src/Allergen.php";

    class AllergenTest extends PHPUnit_Framework_TestCase
    {
        function test_listAllergies_eggsOnly()
        {
            //Arrange
            $test_Allergen = new Allergen;
            $input = 1;

            //Act
            $result = $test_Allergen->listAllergies($input);

            //Assert
            $this->assertEquals("eggs", $result);
        }

        function test_listAllergies_eggsPeanutsShellfish() {
            //Arrange
            $test_Allergen = new Allergen;
            $input = 7;

            //Act
            $result = $test_Allergen->listAllergies($input);

            //Assert
            $this->assertEquals("shellfishpeanutseggs", $result);
        }

        function test_listAllergies_mixedSelections()
        {
            //Arrange
            $test_Allergen = new Allergen;
            $input = 86;

            //Act
            $result = $test_Allergen->listAllergies($input);

            //Assert
            $this->assertEquals("pollentomatoesshellfishpeanuts", $result);
        }
    }

?>
