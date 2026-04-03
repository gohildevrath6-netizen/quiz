<?php
$score = 0;

$answers = [
"q1"=>"b","q2"=>"a","q3"=>"b","q4"=>"a","q5"=>"b",
"q6"=>"a","q7"=>"b","q8"=>"a","q9"=>"b","q10"=>"a",
"q11"=>"b","q12"=>"a","q13"=>"b","q14"=>"b","q15"=>"a",
"q16"=>"c","q17"=>"a","q18"=>"b","q19"=>"b","q20"=>"a",
"q21"=>"b","q22"=>"a","q23"=>"b","q24"=>"a","q25"=>"a"
];

foreach ($answers as $q => $correct) {
    if (isset($_POST[$q]) && $_POST[$q] == $correct) {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Result</title>
</head>
<body>

<h2>Your Score: <?php echo $score; ?>/25</h2>

<?php
if ($score >= 20) {
    echo "Excellent! 🎉";
} elseif ($score >= 10) {
    echo "Good 👍";
} else {
    echo "Try Again 💪";
}
?>

</body>
</html>