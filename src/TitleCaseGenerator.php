<?php

    class TitleCaseGenerator
    {
        function makeTitleCase_multipleWords($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {
                array_push($output_titlecased, ucfirst($word));
                }
            return implode(" ", $output_titlecased);
        }

        function makeTitleCase_manageCapsSingleWord($input_title)
        {
            $input_lower = strtolower($input_title);
            $output_first_cap = ucfirst($input_lower);
            return $output_first_cap;
        }

        function makeTitleCase_manageCapsMultipleWords($input_title)
        {
            $title_array = explode(" ", $input_title);
            $output = array();
            foreach ($title_array as $word) {

                // for each word in title array, make all letters lowercase,
                // capitalize the first letter and add it to the output array.
                array_push($output, ucfirst(strtolower($word)));
            }
            return implode(" ", $output);
        }


}

?>
