<?php
class TitleCaseGenerator
{



    function makeTitleCase($input_title)
    {
        $prepositions = array(
            'on', 'in', 'at', 'since', 'for'
        );
        $title_array = explode(" ", $input_title);
        $output = array();
        foreach ($title_array as $word) {
            // initialize output word
            $output_word = "";

            // Check for Mc prefix in a given word, then apply title case rules
            // Otherwise, make all letters lowercase and capitalize the first letter.
            // In both cases add the title-cased word to the output array.
            $word_lower = strtolower($word);
            $prefix_mc = substr($word_lower, 0, 2);
            $prefix_mac = substr($word_lower, 0, 3);


            if ($prefix_mc == "mc") {
                $restOfName = substr($word_lower, 2);
                $restOfNameTitleCase = ucfirst($restOfName);
                $prefix_mc = ucfirst($prefix_mc);
                $output_word = $prefix_mc . $restOfNameTitleCase;
            } elseif ($prefix_mac == "mac") {
                $restOfName = substr($word_lower, 3);
                $restOfNameTitleCase = ucfirst($restOfName);
                $prefix_mac = ucfirst($prefix_mac);
                $output_word = $prefix_mac . $restOfNameTitleCase;
            } elseif (in_array($word_lower, $prepositions)) {
                // We already made the word lowercase so that we could test
                // for membership in prepositions, so we don't need to do
                // that again, we can just use the $word_lower variable.
                $output_word = $word_lower;
            } else {
                $output_word = ucfirst($word_lower);
            }

            // no matter what we checked for in between, we still need to add
            // the changed word to the title array
            array_push($output, $output_word);
        }
        return implode(" ", $output);
    }
}
?>
