<?php

// Bad
$gradePercent=$var->grade/2*100;
echo 'Your note is '.$gradePercent.'%';


// Good
$gradePercent = $var->grade / 2 * 100;
echo 'Your note is ' . $gradePercent . '%';
