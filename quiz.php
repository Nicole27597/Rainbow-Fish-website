<!DOCTYPE html>
<html lang="en">
<head>

  <?php require 'dbconfig.php'
  //session_start(); 
?>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="css/styling.css">

  
    

  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #336bff;">
    <a class="navbar-brand font-weight-bold" href="index.html">Rainbow Fish</a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="story.html">The Story</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold active" href="quiz.php">Quiz</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-weight-bold" href="pictures.html">Picture Show</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-weight-bold" href="author.html">The Author</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-weight-bold" href="acknow.html">Acknowledgements</a>
        </li>
      </ul>
    </div>
  </nav>

</head>
<body class="quiz">

  <div class="jumbotron">
    
      <h1 class="text-center font-weight-bold">Can you do the Quiz?</h1>
    
  </div>

<!-- Code for the quiz.
Akshay. "How to Create Simple Quiz using PHP and MySQL". technopoints.co.in. 
https://technopoints.co.in/create-simple-quiz-using-php-mysql/ (accessed Oct. 3 & 4, 2020).
-->
  <?php
    if(isset($_POST['click']) || isset($_GET['start'])) {
      @$_SESSION['clicks'] += 1;
      $c = $_SESSION['clicks'];
      if(isset($_POST['user_answer'])) { $userselected = $_POST['user_answer'];
        
      $fetch_query = "UPDATE 'quiz' SET 'user_answer'='$userselected' WHERE 'id'=$c-1";
      $result2 = mysqli_query($con,$fetch_query);
    }

    } else {
      $_SESSION['clicks'] = 0;
    }
    echo($_SESSION['clicks']);
  ?>

  <div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left">
  <span>Begin Quiz</span></button> <?php } ?></form></div>

  <form action="" method="post">
  <table><?php if(isset($c)) {
    $fetch_query = "SELECT * FROM 'quiz' WHERE id='$c'";
    $result=mysqli_query(trye$con,$fetch_query);
    $num=mysqli_num_rows($result);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); }
    ?>

  <tr><td><h3><br><?php echo @$row['question'];?></h3></td></tr>
  <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6) { ?>
  <tr><td><input required type="radio" name="user_answer" value="<?php echo $row['option A'];?>">&nbsp;<?php echo $row['option A']; ?><br>
  <tr><td><input required type="radio" name="user_answer" value="<?php echo $row['option B'];?>">&nbsp;<?php echo $row['option B'];?></td></tr>
  <tr><td><input required type="radio" name="user_answer" value="<?php echo $row['option C'];?>">&nbsp;<?php echo $row['option C']; ?></td></tr>
  <tr><td><input required type="radio" name="user_answer" value="<?php echo $row['option D'];?>">&nbsp;<?php echo $row['option D']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click">Next</button></td></tr> <?php } ?>

  <form>
  <?php if($_SESSION['clicks']>5) {
    $query3 = "SELECT 'answer', 'user_answer', FROM 'quiz';";
    $result3 = mysqli_query($con, $query3);
    $storeArray = Array();
    while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
      if($row3['answer']==$row3['user_answer']) {
        @$_SESSION['score'] += 1; 
      }
    }
  ?>

  
  <h2>Result</h2>
  <span>Number of Correct Answers:&nbsp;<?php echo $no = @$_SESSION['score'];
  session_unset(); ?></span><br>
  <span>Your Score:&nbsp<?php echo $no*2; ?></span>
  <?php } ?>


  <script>src="js/quiz.js"</script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
  integrity=”sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n” crossorigin=”anonymous”></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
  integrity=”sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo” crossorigin=”anonymous”></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
  integrity=”sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6” crossorigin=”anonymous”></script>

</body>

</html>
