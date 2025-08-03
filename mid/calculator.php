<!DOCTYPE html>
<html>
<head>
  <title>Student Status Checker</title>
</head>
<body>

  <h1>Student Profile and Status Checker</h1>
  <p>Click the button below to see the student's result.</p>

  <button onclick="showStudentResult()">Check Result</button>

  <script>
   
    var studentName = "Sharup";
    var age = 22;
    var studentID = "21-45836-3";
    var isStudent = true;

    var marks = {
      Compiler: 90,
      Webtech: 90,
      Datamining: 90,
      ML: 90
    };

    var total = 0;
    var subjectCount = 0;

    for (var subject in marks) {
      total = total + marks[subject];
      subjectCount++;
    }

    var average = total / subjectCount;
    var isAdult = age >= 18;
    var hasPassed = average >= 60;

   
    console.log("===== Student Profile =====");
    console.log("Name: " + studentName);
    console.log("ID: " + studentID);
    console.log("Age: " + age + " (" + (isAdult ? "Adult" : "Minor") + ")");
    console.log("---------------------------");
    console.log("Marks by Subject:");

    for (var subject in marks) {
      console.log(subject + ": " + marks[subject]);
    }

    console.log("---------------------------");
    console.log("Total Marks: " + total);
    console.log("Average Marks: " + average.toFixed(2));
    console.log("Final Result: " + (hasPassed ? "Passed " : "Failed "));

    function showStudentResult() {
      var msg = "Student Profile\n";
      msg += "--------------------\n";
      msg += "Name: " + studentName + "\n";
      msg += "ID: " + studentID + "\n";
      msg += "Age: " + age + " (" + (isAdult ? "Adult" : "Minor") + ")\n";
      msg += "--------------------\n";
      msg += "Marks:\n";

      for (var subject in marks) {
        msg += subject + ": " + marks[subject] + "\n";
      }

      msg += "--------------------\n";
      msg += "Average: " + average.toFixed(2) + "\n";
      msg += "Result: " + (hasPassed ? "Passed " : "Failed ");

      alert(msg);
    }
  </script>

</body>
</html>
 