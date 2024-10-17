<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPDemo</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <br>
    <h1>Hello</h1>
    
    <p style= "font-family: consolas">&nbspoooooooooooo&nbsp<br>&nbspo &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspo<br>&nbspo&nbsp&nbsp#&nbsp&nbsp    #&nbsp&nbsp  o&nbsp<br>&nbspo &nbsp&nbsp    #&nbsp&nbsp&nbsp&nbsp    o<br>&nbspo  &nbsp#&nbsp&nbsp    #&nbsp&nbsp  o<br>&nbspo  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp        o<br>&nbspoooooooooooo</p>
    <h1>Simple Adder Challenge</h1>
    <p>Enter two numbers:</p>
    <input type="number" id="num1" placeholder="Enter first number"><br>
    <input type="number" id="num2" placeholder="Enter second number"><br>
    <button onclick="addNumbers()">Add</button>
    <p id="result"></p>
    <script>
        function addNumbers() {
            var num1 = parseInt(document.getElementById("num1").value);
            var num2 = parseInt(document.getElementById("num2").value);
            var sum = num1 + num2;
            document.getElementById("result").innerHTML = `${num1} and ${num2} add up to ${sum}.`;
        }
    </script>

<h1>Portfolio Grade Challenge</h1>
<div class = "port">
<form id="gradeForm">
    <label for="analysis">Analysis (out of 25):</label>
    <input type="number" id="analysis" name="analysis" min="0" max="25" required><br>

    <label for="design">Design (out of 25):</label>
    <input type="number" id="design" name="design" min="0" max="25" required><br>

    <label for="implementation">Implementation (out of 25):</label>
    <input type="number" id="implementation" name="implementation" min="0" max="25" required><br>

    <label for="evaluation">Evaluation (out of 25):</label>
    <input type="number" id="evaluation" name="evaluation" min="0" max="25" required><br>

    <button type="button" onclick="calculateGrade()">Submit</button>
</form>
    </div>
<div class="output" id="output"></div>

<script>

const grades = [
    { threshold: 80, grade: "A*" },
    { threshold: 67, grade: "A" },
    { threshold: 54, grade: "B" },
    { threshold: 41, grade: "C" },
    { threshold: 31, grade: "D" },
    { threshold: 22, grade: "E" },
    { threshold: 13, grade: "F" },
    { threshold: 4, grade: "G" },
    { threshold: 0, grade: "U" }
];


function getGradeAndNext(totalMark) {
    for (let i = 0; i < grades.length; i++) {
        if (totalMark >= grades[i].threshold) {
            const currentGrade = grades[i].grade;
            const marksToNext = (i === 0) ? 0 : grades[i - 1].threshold - totalMark;
            return { currentGrade, marksToNext };
        }
    }
}


function calculateGrade() {
    const analysis = parseInt(document.getElementById("analysis").value) || 0;
    const design = parseInt(document.getElementById("design").value) || 0;
    const implementation = parseInt(document.getElementById("implementation").value) || 0;
    const evaluation = parseInt(document.getElementById("evaluation").value) || 0;

    const totalMark = analysis + design + implementation + evaluation;

    const result = getGradeAndNext(totalMark);

    let outputText = `Total Mark: ${totalMark}<br>Grade: ${result.currentGrade}`;

    if (result.marksToNext > 0) {
        outputText += `<br>You need ${result.marksToNext} more marks to reach the next grade boundary.`;
    } else {
        outputText += `<br>You are at the highest grade band.`;
    }

    document.getElementById("output").innerHTML = outputText;
}
</script>
<h2>Average Calculator Challenge</h2>
    <input type="number" id="nums" placeholder="How many numbers to be averaged?">
    <button onclick="moreInput()">Do magic</button>


    <script>
        function moreInput(nums){
            for (let i = 0; i < nums; i++){
                <input type="number" id="addto" placeholder="Number">
                var sum = sum + addto
            }
            
        }
    </script>
    <a href="nextPage.php" body = "_blank">Next</a>
</body>
</html>