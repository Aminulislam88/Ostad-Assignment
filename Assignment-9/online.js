function gradeCalculator(grade) {
    if (isNaN(grade) || grade < 0 || grade > 100) {
      return "Error: Grade must be a number between 0 and 100";
    } else if (grade >= 90) {
      return "A";
    } else if (grade >= 80) {
      return "B";
    } else if (grade >= 70) {
      return "C";
    } else if (grade >= 60) {
      return "D";
    } else {
      return "F";
    }
  }
gradeCalculator(70);