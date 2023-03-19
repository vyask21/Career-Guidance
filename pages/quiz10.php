<?php
ob_start();
session_start();
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz </title>
<meta name = "viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href="style10.css">
</head>
<body>

<div class="home-box custom-box ">
<h3>Instruction:</h3>
<p>Total number of questions: <span class="total-questions">60</span></p>
<!-- <button type ="button" class="btn" onclick="startQuiz()">Start Quiz</button> -->
<button type ="button" class="btn" onclick="startQuiz()">Start Quiz</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="button" class="btn" onclick="location.href='fulldemo.php';">Logout</button>
</div>

<div class="quiz-box custom-box hide">
<div class="question-number">

</div>
<div class="question-text">

</div>
<div class="option-container">

</div>
<div class="next-question-btn">
<button type="button" class="btn" onclick="next()">Next</button>
</div>
<div class="answers-indicator">

</div>
</div>

<div class="result-box custom-box hide">
<div>
<h1>Quiz Result</h1>
<table>
<tr>
<td>Total Questions</td>
<td><span class="total-question"></span></td>
</tr>
<tr>
<td>Attempt</td>
<td><span class="total-attempt"></span></td>
</tr>
<tr>
<td>Correct</td>
<td><span class="total-correct"></span></td>
</tr>
<tr>
<td>Wrong</td>
<td><span class="total-wrong"></span></td>
</tr>
<tr>
<td>Percentage</td>
<td><span class="percentage"></span></td>
</tr>
<tr>
<td>Your Total Score</td>
<td><span class="total-score"></span></td>
</tr>
<tr>
<td>Recommendation</td>
<td><span class="career-recommendation"></span></td>
</tr>
</table>
<button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
<button type="button" class="btn" onclick="goToHome()">Go To Home</button>
</div>
<br><button type="button" class="btn" onclick="location.href='knowmore10th.php';">Know More</button>
</div>

<script src="question10.js"></script>
<script src="app10.js"></script>


</body>
</html>