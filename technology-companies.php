<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL;
echo "\t\t\t\t\t\t\t\t\t" . 'Add code to output the $companies array in its current form.' . PHP_EOL;
echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL . PHP_EOL;

foreach ($companies as $company => $founders) {
    echo "\033[35m{$company}'s founders:\033[0m" . PHP_EOL;
    foreach ($founders as $founder) {
        echo "\t{$founder}" . PHP_EOL;
    }
    echo PHP_EOL;
}

echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL;
echo "\t\t\t\t\t\t\t\t\t" . 'Sort the $companies array by company name and output the results.' . PHP_EOL;
echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL . PHP_EOL;

ksort($companies);

foreach ($companies as $company => $founders) {
    echo "\033[35m{$company}'s founders:\033[0m" . PHP_EOL;
    foreach ($founders as $founder) {
        echo "\t{$founder}" . PHP_EOL;
    }
    echo PHP_EOL;
}

echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL;
echo "\t\t\t\tSort the people in each company alphabetically. You will need to use a foreach loop and will need to reassign each inner array after sorting." . PHP_EOL;
echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL . PHP_EOL;

foreach ($companies as $company => $founders) {
    echo "\033[35m{$company}'s founders:\033[0m" . PHP_EOL;
    asort($founders);
    $companies[$company] = $founders;
    foreach ($founders as $index => $founder) {
        echo "\t{$founder}" . PHP_EOL;
    }
    echo PHP_EOL;
}

echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL;
echo "\t\t\t\tSort the companies from 'biggest' to 'smallest'. This may be easier than you think, but be sure you don't loose the company names!" . PHP_EOL;
echo str_repeat("\033[36m\xe2\x98\xba\033[0m", 200) . PHP_EOL . PHP_EOL;

arsort($companies);

foreach ($companies as $company => $founders) {
    echo "\033[35m{$company}'s founders:\033[0m" . PHP_EOL;
    foreach ($founders as $founder) {
        echo "\t{$founder}" . PHP_EOL;
    }
    echo PHP_EOL;
}

























