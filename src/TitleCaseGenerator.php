<?php
class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
        $title_array = explode(" ", $input_title);
        $output = array();
        foreach ($title_array as $word) {

            // Check for Mc prefix in a given word, then apply title case rules
            // Otherwise, make all letters lowercase and capitalize the first letter.
            // In both cases add the title-cased word to the output array.
            $prefix_mc = strtolower(substr($word, 0, 2));
            if ($prefix_mc == "mc") {
                $restOfName = substr($word, 2);
                $restOfNameTitleCase = ucfirst(strtolower($restOfName));
                $prefix_mc = ucfirst($prefix_mc);
                array_push($output, $prefix_mc . $restOfNameTitleCase);
            } else {
                array_push($output, ucfirst(strtolower($word)));
            }
        }
        return implode(" ", $output);
    }
}
?>
