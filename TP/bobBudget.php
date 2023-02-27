<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = $incomeSegments[0][0]*$incomeSegments[0][1]+
            $incomeSegments[1][0]*$incomeSegments[1][1]+
            $incomeSegments[2][0]*$incomeSegments[2][1];

$netIncome -= $socialSecurity;

$annualIncome = $annualExpenses['vacations']+$annualExpenses['carRepairs'];
echo "Annual Expenses : ".$annualIncome."\n";

echo "Annual salary : ".$netIncome."\n";

$monthlyIncome = $netIncome / 12;

echo "Monthly salary : ".$monthlyIncome."\n";

$monthlyIncome = $monthlyIncome - ($monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"]);

echo "Sold after expenses : ".$monthlyIncome."\n";

$moyWeek = 4.33;
$weeklyIncome = $monthlyIncome / $moyWeek;
echo "Weekly salary : ".$weeklyIncome."\n";

$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];

$weeklyIncome = $weeklyIncome - ($weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"]);

echo "Sold week : ".$weeklyIncome."\n";

$winYear = $weeklyIncome*52;
echo "You can save ".$winYear." by year !";