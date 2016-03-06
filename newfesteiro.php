<?php 
    include "inc/topo.php";
    include "inc/conn.php";
    function valida_campos($campo,$conn){
        return mysqli_real_escape_string($conn,htmlspecialchars($campo));
    }
    if(isset($_POST['nome']))$nome = valida_campos($_POST['nome'],$conn);else{$nome='';}
    if(isset($_POST['sobrenome']))$sobrenome = valida_campos($_POST['sobrenome'],$conn);else{$sobrenome='';}
    if(isset($_POST['cpf']))$cpf = valida_campos($_POST['cpf'],$conn);else{$cpf='';}
    if(isset($_POST['data_nasc']))$data_nasc = valida_campos($_POST['data_nasc'],$conn);else{$data_nasc='';}
    if(isset($_POST['email']))$email = valida_campos($_POST['email'],$conn);else{$email='';}
    $sql = "SELECT * FROM usuarios WHERE login LIKE '{$email}'";
    $sqlemail = mysqli_query($conn,$sql);
    if(mysqli_num_rows($sqlemail)){
        echo "<script>alert('E-mail já existe');window.location.href='login.php#toregister';</script>";
        exit;
    }
    if(isset($_POST['senha']))$senha = md5(valida_campos($_POST['senha'],$conn));else{$senha=md5('1234abcd');}
    if(isset($_POST['genero']))$genero = valida_campos($_POST['genero'],$conn);else{$genero='';}
    $sqlEdit = "INSERT INTO usuarios (login,senha,nivel) VALUES ('$email','$senha','1')"; 
    mysqli_query($conn,$sqlEdit);
    $newUser = mysqli_insert_id($conn);
    $sqlEdit = "INSERT INTO festeiro (nome,sobrenome,cpf,data_nasc,genero,id_usuario) VALUES ('$nome','$sobrenome','$cpf','$data_nasc','$genero','$newUser')"; 
    $q_edit = mysqli_query($conn,$sqlEdit);
    if($q_edit){                
        echo "<script>alert('cadastrado');window.location.href='index.php';</script>";
        exit;
    }
    else{
        echo "<script>alert('erro');window.location.href='index.php';</script>";
        exit;
    }
    exit;
?>