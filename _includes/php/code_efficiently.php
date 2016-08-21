<?php

/**
 * Bad
 * 
 * Prints "thisisreallybad!
 * No whitespace in any of these statements 
 */
echo 'this';
echo 'is'; 
echo 'really'; 
echo 'bad!'; 

/**
 * Good
 * 
 * Prints "This is much cleaner."
 * Spaces embedded in each source string 
 */
echo 'This '
    . 'is ' 
    . 'much ' 
    . 'cleaner.';