
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <script src="funcao.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Cadastro Pessoa</title>

</head>
<body style="padding-left: 15px">



    <h1>Cadastro de Pessoa</h1>
    <br>


    <div style="padding-left: 15px;border: 1px solid #000; width: 500px; height: 500px;">

    <br>
    <input TYPE="button" VALUE="Atualizar" onClick='parent.location="javascript:location.reload()"' class="btn" style="border-color: black">
    <input type="button" value="Incluir Novo" onclick="gravar()" class="btn" style="border-color: black;float: right; margin-right:10px;"></input>



    <br>
    <br>


    <label>ID</label>
    <label style="margin-left: 20px;margin-right: 20px;">|</label>
    <label>PESSOA</label>
    <label style="margin-left: 20px;margin-right: 20px;">|</label>
    <label>AÇÃO</label>






    <?php
    require_once('conectar.php');






    $sql="select * from pessoa order by id asc";
    $res=mysql_query($sql) or die (mysql_error());
    $num=mysql_num_rows($res);
    for ($n=0; $n < $num; $n++){
    $cod = mysql_result($res, $n, 'id');


    echo "            
        <div>
            <label>$cod</label>
            <label style=\"margin-left: 40px;margin-right: 20px;\"></label>
        
    ";

    $nome = mysql_result($res, $n, 'nome');

    echo "
        
            <label>$nome</label>

            <label style=\"margin-left: 20px;margin-right: 20px;\"></label>

            <input type=\"button\" value=\"Editar\" style=\"margin-left:10px;\" onclick=\"editar($cod)\"></input>
            <input type=\"button\" value=\"Excluir\"; onclick=\"excluir($cod)\"></input>

            
        </div>
    ";
    }


    /*

    //PAGINAÇAO NAO FUNCIONA

    $limite = 10; // Limite por página

    // Pega página atual, se houver e for válido (maior que zero!)
    if( isset( $_GET['pagina'] ) && (int)$_GET['pagina'] >= 0){
        $pagina = (int)$_GET['pagina'];
    }else{
        $pagina = 0;
    }

    // Calcula o offset
    $offset = $limite * $pagina;

    // Se for 0 será 10*0 que será 0, começando do inicio
    // Se for 1 será 10*1 que irá começar do 15 ignorando os 15 anteriores. ;)

    $postagem = $mysqli->query('SELECT * FROM `post` ORDER BY id DESC LIMIT '.$limite.' OFFSET '.$offset);
    
    //EXIBIR PAGINAÇAO

    while($info = $postagem->fetch_array()){
    // Loop finito para repetir para cada linha existente
    ?>

    <!-- HTML PARA EXIBIÇÃO -->




    <!-- HTML PARA EXIBIÇÃO -->


    }

    //PAGINAR
    if($pagina !== 0){ // Sem isto irá exibir "Página Anterior" na primeira página.
    ?>
    <a href="meulink.com?pagina=<?php echo $pagina-1; ?>">Página Anterior</a>
    <?php
    }
    ?>
    <a href="meulink.com?pagina=<?php echo $pagina+1; ?>">Página Posterior</a>
    
    */ 




    ?>






    
    

    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">"></script>
    




    </div>



</body>
</html>