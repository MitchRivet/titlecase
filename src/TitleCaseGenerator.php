<?php
class TitleCaseGenerator
{
    function makeTitleCase($input_title)
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
