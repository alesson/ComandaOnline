<?php
	$VERSAO = "1.0.0"; 
	ob_start();  
	// define('CHAVE_ACESSO', $CHAVE_ACESSO); topo
	include "inc/topo.php";/////////////////////////////////////////////////////////////////// TOPO COM CONEXÃO
	include "inc/verificasessao.php";
	// if(!isset($_SESSION))session_start();
	// if(!isset($_SESSION['userid']) || ($_SESSION['status'] != 1)) {
	    ?>
	    <script type="text/javascript">
	      // window.location.href="logout.php";
	    </script>
	    <?php 
	    // exit;
	// } 
	$query_user = mysqli_query($conn,"SELECT * FROM sp_usuarios WHERE id=".$_SESSION['userid']);
	$user = mysqli_fetch_array($query_user,MYSQLI_ASSOC);
?>
<div class="bar-top show-for-large-up" style="height:50px;">	
	<div class="small-12 large-2 columns" style="padding-left: 0px;">
		<a href="index.php"><img src="img/logo.png" class="logo"></a>
	</div>  
</div> 
<?php 
	switch ($_SESSION['nivel']) { 
	    case '1': 
    		include "inc/menu1.php";
     		break;
	    case '2': 
			include "inc/menu1.php";
			break; 
	    default:
			echo "<script>alert('Por motivos de segurança será feito logout!\nPor favor faça seu login novamente.');window.location.href='logout.php'</script>"; 
			exit; 
			break;
	}
?>
<div style="padding-top:50px;">	
	<div class="small-12 columns show-for-medium-down">
		<a href="index.php"><img src="img/logo.png" style="width:100%;" class="logo"></a>
		<hr>
	</div>
	<div class="small-12 large-10 columns" style="float:right; ">
		<?php
	        if(isset($_GET['go']))
	          $filename = 'files/'.$_GET['go'].'.php';
	        else
	          $filename = 'files/inicial.php';

	        if (file_exists($filename)) {
	            include $filename;
	        } else {
	            include "404.php";
	        }
	    ?>
	</div>
</div> 
<?php include 'inc/rodape.php'; ?>