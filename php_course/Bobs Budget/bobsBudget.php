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
$netIncome = $incomeSegments[0][0] * $incomeSegments[0][1] + $incomeSegments[1][0] * $incomeSegments[1][1] + $incomeSegments[2][0] * $incomeSegments[2][1];


$annualIncome = $netIncome - $socialSecurity;
echo "Annual income after taxes and social security: ";
echo $annualIncome . "\n\n";

$annualIncome -= ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]);
echo "Annual income after deducting annual expenses: ";
echo $annualIncome . "\n\n";

$monthlyIncome = $annualIncome / 12;
echo "Monthly income before deducting monthly expenses: ";
echo $monthlyIncome . "\n\n";

$monthlyIncome -= ($monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"]);
echo "Monthly income after deducting monthly expenses: ";
echo $monthlyIncome . "\n\n";

$weeklyIncome = $monthlyIncome / 4.33;
echo "Weekly income before deducting weekly expenses: ";
echo $weeklyIncome . "\n\n";

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$weeklyIncome -= ($weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"]);
echo "Weekly income after deducting weekly expenses: ";
echo $weeklyIncome . "\n\n";

$annualSavings = $weeklyIncome * 52;
echo "You can save: ";
echo round($annualSavings, 2);
