<?php

// Bad
$gradePercent=$var->grade/2*100;
echo "do some stuff";
echo 'Your note is '.$gradePercent.'%';

// Good
$gradePercent = $var->grade / 2 * 100;
echo 'do some stuff';
echo "Your note is {$gradePercent}%";
// OR
echo 'Your note is ' . $gradePercent . '%';


// Not so great
class SomeClass
{
    function showHomepage(Request $request)
    {
        $data = [
            'var1' => 1,
            'var2' => 2,
            'var3' => 3,
        ];

        return view('homepage', $data);
    }

    function getResult()
    {
        $result = $this->someMethod();
        return $result;
    }

    // ...
}

// Much better
class SomeClass
{
    function showHomepage(Request $request)
    {
        return view('homepage', [
            'var1' => 1,
            'var2' => 2,
            'var3' => 3,
        ]);
    }

    function getResult()
    {
        return $this->someMethod();
    }

    // ...
}
