
<?php

//1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)


function sort_array_strings_by_length($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}


$array = ["iPhone", "Samsung", "Nothing", "Oppo", "Xiaomi"];

$sorted_array = sort_array_strings_by_length($array);

echo "Here is the Array Ascending Order: \n"; 
print_r($sorted_array);


//2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concat_strings_reverse($string1, $string2) {
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    $result = '';

    for ($i = 0; $i < $len1; $i++) {
        $result .= $string1[$i];
        if ($i == $len1 - 1) {
            for ($j = $len2 - 1; $j >= 0; $j--) {
                $result .= $string2[$j];
            }
        }
    }
    return $result;
}

$str1 = "Ostad";
$str2 = "Pro";
$result = concat_strings_reverse($str1, $str2);
echo $result;

//3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function remove_first_and_last_string($array) {
    $length = count($array);
    if ($length <= 2) {
        return array();
    } else {
        return array_slice($array, 1, $length-2);
    }
}

$array = ["iPhone", "Samsung", "Nothing", "Oppo", "Xiaomi"];

$result = remove_first_and_last_string($array);

print_r($result);








//4.Write a PHP function to check if a string contains only letters and whitespace.

function has_only_letters_and_whitespace($str) {
    if(preg_match('/^[a-zA-Z\s]+$/', $str) === 1){
        return true;
    }else{
        return false;
    }
}
$str1 = "Whitespace is here";
$str2 = "This is @ at sign! ";
$result1 = has_only_letters_and_whitespace($str1);
$result2 = has_only_letters_and_whitespace($str2);
var_dump($result1); // true
var_dump($result2); // false






//5.Write a PHP function to find the second largest number in an array of numbers.


function find_second_largest($arr) {
    $length = count($arr);

    if ($length < 2) {
        return null;
    }

    $largest = $arr[0];
    $second_largest = $arr[1];

    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $largest) {
            $second_largest = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] > $second_largest && $arr[$i] != $largest) {
            $second_largest = $arr[$i];
        }
    }

    return $second_largest;
}

$array = array(40, 22, 113, 234, 55);
$result = find_second_largest($array);
echo $result; // output = 113









