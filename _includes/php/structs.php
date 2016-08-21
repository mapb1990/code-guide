<?php

// Not so great
if ($var->is_course_item() or $var->is_category_item())
    and ($var->gradetype == GRADE_TYPE_SCALE
    or $var->gradetype == GRADE_TYPE_VALUE)
) :
    return $someStuff;
else :
    return false;
endif;

// Much better
$courseCategory = $var->is_course_item() || $var->is_category_item();
$scaleValue = in_array($var->gradetype, [GRADE_TYPE_SCALE, GRADE_TYPE_VALUE]);
 
if ($coursecategory && $scalevalue) {
    return $someStuff;
}

return false;
