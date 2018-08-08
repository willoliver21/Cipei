$host = "cipei_ifms.mysql.dbaas.com.br";
            $user = "cipei_ifms";
            $pass = "cipei2016";
            $banco = "cipei_ifms";
            
<?php

    // Conexão
    define('SERVER', 'cipei_ifms.mysql.dbaas.com.br');
    define('DBNAME', 'cipei_ifms');
    define('USER', 'cipei_ifms');
    define('PASSWORD', 'cipei2016');
    
    //Recebe dados pelo GET
    $acao = (isset($_GET['acao'])) ? $_GET['acao'] : '';
    $parametro = (isset($_GET['parametro'])) ? $_GET['parametro'] : '';
    
    //Configura conexão com banco
    $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    $conexao = new PDO("mysql:host=".SERVER.";dbname=".DBNAME, USER, PASSWORD, $opcoes);
    
    //Verifica se foi solocitado consulta do autocomplete
    if($acao == 'autocomplete'):
        $where = (!empty($parametro)) ? 'WHERE nome like ?' : '';
        $sql = "SELECT nome FROM autor " . $where;
        
        $stm = $conexao->prepare($sql);
        $stm->bindValue(1, '%'.$parametro.'%');
        $stm->execute();
        $dados = $stm->fetchAll(PDO::FETCH_OBJ);
        
        $json = json_encode($dados);
        echo $json;
    endif;
    
    //Verifica se foi solicitado uma consulta para preencher o campo do formulario
    if($acao == 'consulta'):
        $where = (!empty($parametro)) ? 'WHERE nome like ?' : '';
        $sql = "SELECT nome, email, instituicao FROM autor";
        $sql .= "WHERE nome LIKE ? LIMIT 1";
        
        $stm = $conexao->prepare($sql);
        $stm->bindValue(1, $parametro. '%');
        $stm->execute();
        $dados = $stm->fetchAll(PDO::FETCH_OBJ);
        
        $json = json_encode($dados);
        echo $json;
    endif;
?>