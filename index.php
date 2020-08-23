<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grade Predictor</title>
  </head>
  <body>
    <header>
      <h2>Grade Predictor</h2>
    </header>
      <main>
        <form class="form-item" action="index.php" method="post">
          <label for="form-item">Choose your grade</label>
          <select class="input-item" name="grade">
            <option value="default" selected>default</option>
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="F">F</option>

          </select>
          <input type="submit" name="submit" value="Predict">
        </form>
      </main>
      <?php
          $grade = $_POST['grade'];
          switch ($grade) {
            case 'A+':
              echo "Congratulations you are an exellent student";
              break;
            case 'A':
              echo "congrat you had A thats great keep it up";
              break;
            case 'B+':
              echo "congrat you had B+ thats great keep it up";
              break;
              case 'B':
                echo "congrat you had B please keep it up but you need to study harder";
                break;
              case 'C+':
                  echo "congrat you had C+ please keep it up but you need to study harder";
                break;
              case 'C':
                  echo "congrat you had C please keep it up but you need to study harder";
                break;
              case 'D':
                  echo "congrat you had D please keep it up but you need to study harder";
                break;
              case 'F':
                echo "You are the worse student ever, you have failed";
                break;

            default:
              echo "Please choose a grade";
              break;
          }
      ?>
  </body>
</html>
