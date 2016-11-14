<?php 
  abstract class Operation1 {
    protected $operand_1;
    protected $operand_2;
    public function __construct($o1, $o2) {
      // Make sure we're working with numbers...
      if (!is_numeric($o1) || !is_numeric($o2)) {
        throw new Exception('Non-numeric operand.');
      }
      
      $this->operand_1 = $o1;
      $this->operand_2 = $o2;
    }
    public abstract function operate();
    public abstract function getEquation(); 
  }
// subclass for addition
  class Addition extends Operation1 {
    public function operate() {
      return $this->operand_1 + $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }
// Part 1 - Add subclasses for Subtraction, Multiplication and Division here

// subclass for subtraction
  class Subtraction extends Operation1 {
    public function operate() {
      return $this->operand_1 - $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }
// subclass for multiplication
  class Multiplication extends Operation1 {
    public function operate() {
      return $this->operand_1 * $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }
// subclass for division
  class Division extends Operation1 {
    public function operate() {
      return $this->operand_1 / $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }
// new abstract class used for cube and factorial subclasses, which only require one operand
  abstract class Operation2 {
    protected $operand;
    public function __construct($o) {
      // Make sure we're working with numbers...
      if (!is_numeric($o)) {
        throw new Exception('Non-numeric operand.');
      }  
      $this->operand = $o;
    }
    public abstract function operate();
    public abstract function getEquation(); 
  }
// subclass for cube
  class Cube extends Operation2 {
    public function operate() {
      $num = $_POST['o'];
      return $this->operand = pow($num, 3);
    }
    public function getEquation() {
      return $this->operand . ' ^3 '. ' = ' . $this->operate();
    }
  }
// subclass for factorial
  class Factorial extends Operation2 {
    public function operate() {
      $num = $_POST['o'];
      $factorial = 1;
      for ($x=$num; $x>=1; $x--)
      {
        $factorial = $factorial * $x;
      }
      return $this->operand = $factorial;
    }
    public function getEquation() {
      return $this->operand . ' ! ' . ' = ' . $this->operate();
    }
  }


// End Part 1




// Some debugs - un comment them to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";




// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
// added the following line to account for the new input field I added for Operation2
    $o = $_POST['o'];
  }
  $err = Array();


// Part 2 - Instantiate an object for each operation based on the values returned on the form
//          For example, check to make sure that $_POST is set and then check its value and 
//          instantiate its object
// 
// The Add is done below.  Go ahead and finish the remaining functions.  
// Then tell me if there is a way to do this without the ifs

//checks to see which button was clicked and takes the appropriate actions
  try {
// changed the display of the buttons to show the symbols associated with the operation, rather than just the text...helps to display as a real calculator
    if (isset($_POST['add']) && $_POST['add'] == '+') {
      $op = new Addition($o1, $o2);
    }
// Put the code for Part 2 here  \/
// instantiated Subtraction() here
    elseif (isset($_POST['sub']) && $_POST['sub'] == '-') {
      $op = new Subtraction($o1, $o2);
    }
// instantiated Multiplication() here
    elseif (isset($_POST['mult']) && $_POST['mult'] == '*') {
      $op = new Multiplication($o1, $o2);
    }
// instantiated Division() here
    elseif (isset($_POST['div']) && $_POST['div'] == '/') {
      $op = new Division($o1, $o2);
    }
// the following require only one operand, and so ($o) is used
// instantiated Cube() here
    elseif (isset($_POST['cube']) && $_POST['cube'] == '^3') {
      $op = new Cube($o);
    }
// instantiated Factorial() here
    elseif (isset($_POST['fact']) && $_POST['fact'] == '!') {
      $op = new Factorial($o);
    }

// End of Part 2   /\
  }

  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>Lab 6: Calculator</title>
<style type="text/css">
body {
  border: solid;
  padding-bottom: 35px;
  margin-right: 70em;
  min-width: 29em;
}
form {
  display: inline-block;
  padding-left: 50px;
}
#btn {
  display: inline-table;
  min-width: 80px;
  min-height: 50px;
  font-size: 2em;
  float: right;
  text-align: center;
  cursor: pointer;
  outline: none;
  background-color: silver;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}
#btn:hover {background-color: gray}
#btn:active {
  background-color: gray;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#name {
  float: left;
  margin-right: 5px;
}
#result {
  font-size: 2em;
  padding-top: 50px;
  background-color: #b0cfde;
  display: center;
  text-align: center;
}
</style>
</head>
<body>

  <pre id="result">
  <?php 
    if (isset($op)) {
      try {
        echo $op->getEquation();
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }
      
    foreach($err as $error) {
        echo $error . "\n";
    } 
  ?>
  </pre>

  <form method="post" action="lab6.php">
    <!-- added a placeholder for all of the input text fields to give the user more direction -->
    <input type="text" name="op1" id="name" placeholder="Enter Value 1" />
    <input type="text" name="op2" id="name" placeholder="Enter Value 2" />
    <br/>
    <br/>
    <!-- Only one of these will be set with their respective value at a time -->
    <!-- added symbols instead of the text for each operation button -->
    <input type="submit" id="btn" name="add" value="+" />
    <br/>
    <br/>
    <br/>
    <br/>
    <input type="submit" id="btn" name="sub" value="-" />
    <br/>
    <br/>
    <br/>
    <br/>
    <input type="submit" id="btn" name="mult" value="*" />
    <br/> 
    <br/>
    <br/> 
    <br/>
    <input type="submit" id="btn" name="div" value="/" />
    <br/>
    <br/>
    <br/>
    <br/>
    <hr>
    <br/>
    <!-- new input fields for cube and factorial functions -->
    <input type="text" name="o" id="name" placeholder="Enter Value" />
    <br/>
    <br/>
    <input type="submit" id="btn" name="cube" value="^3" />
    <br/>
    <br/>
    <br/>
    <br/>
    <input type="submit" id="btn" name="fact" value="!" />
  </form>
</body>
</html>