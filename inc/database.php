<?php
    mysqli_report(MYSQLI_REPORT_STRICT);

    function open_database(){
        try{
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            return $conn;
        } catch (Exception $e){
            echo $e->getMessage();
            return null;
        }

    }

    function close_database($conn){
        try{
            mysqli_close($conn);
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }

    /**	Pesquisar por ID */
    function find( $table = null, $id = null ) {
        $database = open_database();
        $found = null;
        
        try {
            if ($id) {
                $sql = "SELECT * FROM " . $table . " where id = " . $id;
                $result = $database->query($sql);
                
                if ($result->num_rows > 0) {
                    $found = $result->fetch_assoc();
                }
            } else {
                $sql = "SELECT * FROM " . $table;
                $result = $database->query($sql);
                
                if ($result->num_rows > 0) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        
        close_database($database);
        return $found;
    }

    /**  Pesquisa Todos os Registros de uma Tabela	 */
    function find_all( $table ) {
        return find($table);
    }
    
    /** Inserir */
    function save( $table = null, $data = null){
        
        $database = open_database();

        $columns = null;
        $values = null;

        foreach ( $data as $key => $value){
            $columns .= trim($key, "'") . ",";
            $values .= "'$value',";
        }

        /** Remover a última vírgula */
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');
        
        $sql = "INSERT INTO " . $table . "($columns)" . "VALUES" . "($values);";

        try{
            $database->query($sql);

            $_SESSION['message'] = 'Registro cadastrado com sucesso!';
            $_SESSION['type'] = 'success';

        } catch (Exception $e) {
            $_SESSION['message'] = 'Não foi possível realizar a operação!';
            $_SESSION['type'] = 'danger';
        }

        close_database();
    }

    /** Editar/ Atualizar */
    function edit(){
        $now = date_create('now', new DateTimeZone('America/Fortaleza'));

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            if(isset($_POST['cliente'])){
                $cliente = $_POST['cliente'];
                $cliente['data_modificacao'] = $now->format("Y-m-d H:i:s");

                update('clientes', $id, $cliente);
                header('location: index.php');
            } else {
                global $cliente;
                $cliente = find('clientes', $id);
            }
        } else {
            header('location: index.php');
        }
    }

    /** Atualizar um registro em uma tabela, por ID */
    function update($table = null, $id = 0, $data = null) {
        $database = open_database();
        $items = null;
        
        foreach ($data as $key => $value) {
            $items .= trim($key, "'") . "='$value',";
        }
        
        // remove a ultima virgula
        $items = rtrim($items, ',');
        $sql  = "UPDATE " . $table;
        $sql .= " SET $items";
        $sql .= " WHERE id=" . $id . ";";
        
        try {
            $database->query($sql);
            $_SESSION['message'] = 'Registro atualizado com sucesso.';
            $_SESSION['type'] = 'success';

        } catch (Exception $e) {
            $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
            $_SESSION['type'] = 'danger';
        }
        
        close_database($database);
    }
?>