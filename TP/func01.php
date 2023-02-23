<?php
# Create a function generateStory with three input parameters:
# $singular_noun
# $verb
# $color
$distance_unit = "thousand miles";
function generateStory($singular_noun, $verb, $color)
{
    global $distance_unit;
    $history = "The $singular_noun are lovely, $color, and deep.\n
    But I have promises to keep,\n
    And $distance_unit to go before I $verb,\n
    And $distance_unit to go before I $verb.\n";
    return $history;
}

echo generateStory("toto", "read", "blue");
echo generateStory("john", "sleep", "green");
echo generateStory("betty", "walk", "pink");
