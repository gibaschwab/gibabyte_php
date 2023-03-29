<?php

class Model
{
    private $driver = 'mysql';
    private $host = 'localhost';
    private $dbname = 'exemplodsi';
    private $user = 'root';
    private $password = null;

    // var conexão (PDO)
    private $conex;

    // nome table
    protected $table;

    public function __construct()
    {
        $this->conex = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);

        // descobre o nome da tabela
        $tbl = strtolower(get_class($this));
        $tbl = $tbl . 's'; //add  's' no final
        $this->table = $tbl;
    }

    public function getById($id)
    {
        $sql = $this->conex->prepare("SELECT * FROM {$this->table} where id = ?");
        $sql->bindParam(1, $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);;
    }

    public function getAll()
    {
        $sql = $this->conex->query("SELECT * FROM {$this->table}");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO {$this->table} SET ";

        foreach($data as $key => $value) {
            $data_to_sql[] = "{$key} = :{$key}";
        }

        $sql .= implode(',', $data_to_sql);

        $insert = $this->conex->prepare($sql);

        foreach($data as $key => $value) {
            $insert->bindValue(":{$key}", $value);
        }

        $insert->execute();

        return $insert->errorInfo();

    }
}
