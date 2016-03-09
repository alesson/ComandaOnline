<?php  
  
  if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
    // echo "string";
    header("Location: logout.php"); 
    exit;
  } 
  include "inc/conn.php"; 
  $login = mysqli_real_escape_string($conn , $_POST['login']);
  $senha = mysqli_real_escape_string($conn , $_POST['senha']); 
  $sql = "SELECT * FROM `usuarios` WHERE (`login` = '". $login ."') AND (`senha` = '". md5($senha) ."' ) LIMIT 1";
  $query = mysqli_query($conn , $sql); 
  if (!mysqli_num_rows($query)) { 
    echo "Login inválido! <a href='logout.php'>Voltar</a>";   
  } else { 
    $resultado = mysqli_fetch_array($query,MYSQLI_ASSOC);
    if ($resultado['status'] != 1) { 
      echo "<script>alert('Usuário inativo!');window.location.href='logout.php'</script>"; 
    }  
    if (!isset($_SESSION)) session_start(); 
    $_SESSION['idkeyuser'] = $resultado['id'];
    $_SESSION['loginuser'] = $resultado['login'];
    $_SESSION['loginnivel'] = $resultado['nivel'];
    $_SESSION['status'] = $resultado['status'];  
    ?>
    <script type="text/javascript">
      window.location.href="index.php";
    </script>
    <?php
    exit; 
  }
?>