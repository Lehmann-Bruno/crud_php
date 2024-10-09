
<?php


    include("conecta.php");


    $matricula = $_POST["matricula"];
    $nome      = $_POST["nome"];
    $curso     = $_POST["curso"];
    $idade     = $_POST["idade"];




    if(isset($_POST["inserir"]))
    {


        $comando = $pdo->prepare("INSERT INTO alunos VALUES($matricula,'$nome','$curso',$idade)");
        $resultado = $comando->execute();
        echo("Dados inseridos");
    }

    if(isset($_POST["alterar"]))
    {
    
    $comando = $pdo->prepare("UPDATE alunos SET nome='$nome',curso='$curso',idade=$idade WHERE matricula='$matricula' ");
    $resultado = $comando->execute();
    echo("Dados alterados");
    
    
    }
    
    
    if(isset($_POST["deletar"]))
    {
    $comando = $pdo->prepare("DELETE FROM alunos WHERE matricula=$matricula");
            $resultado = $comando->execute();
        echo("Dados deletados");
        // header("location: index.html");
    
    
    }
    
    
    if(isset($_POST["listar"]))
        {
            $comando = $pdo->prepare("SELECT * FROM alunos WHERE matricula='$matricula' ");
            $resultado = $comando->execute();
    
    
            while($linha = $comando->fetch())
            {
                $nome      = $linha["nome"];
                $curso     = $linha["curso"];
                $idade     = $linha["idade"];
                echo("
                    $nome $curso $idade
                ");
            }
        }
?>    
