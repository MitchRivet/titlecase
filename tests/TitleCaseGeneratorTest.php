<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCase_manageCapsSingleWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BEOWULF";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_manageCapsMultipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "THE LITTLE MERMAID";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCase_manageMixedCase()
        {
            //Arrange
            $test_TitleCaseGenerator= new TitleCaseGenerator;
            $input = "tHe LiTtlE MeRMaiD";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }
    }



?>
