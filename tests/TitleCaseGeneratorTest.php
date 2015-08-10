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

        function test_makeTitleCase_oneLetter()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "a";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("A", $result);
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

        function test_makeTitleCase_nonLetterCharacters()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "47 mermaids?";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("47 Mermaids?", $result);
        }

        function test_makeTitleCase_mcSurname()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "hello McGroober";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Hello McGroober", $result);
        }

        function test_makeTitleCase_macSurname()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "hello macgroober";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Hello MacGroober", $result);
        }

        function test_makeTitleCase_prepositions()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "on friday It HAd Been Twelve Years SInce The Push FOr TrANSparency";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("on Friday It Had Been Twelve Years since The Push for Transparency", $result);
        }

    }

?>
