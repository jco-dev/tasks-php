<?php
class QueryBuilder{

    public function __construct(public $pdo){}
    public function selectAll($table, $class)
    {
            $query = $this->pdo->prepare("SELECT * FROM {$table}");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function create($table, $params): void
    {
        $cols = implode(", ", array_keys($params));
        $placeholders = ":" .implode(", :", array_keys($params));
        $sql = "INSERT INTO {$table} ({$cols}) VALUES ($placeholders)";
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute($params);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function update($table, $id, $params): void
    {
        $cols = implode( ", ", array_map(function($col){
            return "{$col}=:{$col}";
        }, array_keys($params)));
        $sql = "UPDATE {$table} SET {$cols} WHERE id=:id";
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute([...$params, 'id' => $id ]);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function delete($table, $id): void
    {
        $sql = "DELETE FROM {$table} WHERE id=:id";
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute([ 'id' => $id ]);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}