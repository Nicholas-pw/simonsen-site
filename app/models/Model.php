<?php

/**
 * Model Base
 * 
 * Classe base para todos os models da aplicação.
 * Fornece conexão com banco de dados e métodos comuns.
 * 
 * Para uso futuro quando o banco de dados for implementado.
 */

class Model {
    protected $db;
    protected $table;
    
    public function __construct() {
        // Conexão com banco será implementada futuramente
        // $this->db = $this->connect();
    }
    
    /**
     * Conecta ao banco de dados
     * @return PDO
     */
    protected function connect() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            
            return new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            if (DEBUG_MODE) {
                die("Erro de conexão: " . $e->getMessage());
            } else {
                die("Erro ao conectar ao banco de dados.");
            }
        }
    }
    
    /**
     * Busca todos os registros
     * @return array
     */
    public function all() {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }
    
    /**
     * Busca um registro por ID
     * @param int $id
     * @return array|false
     */
    public function find($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    
    /**
     * Cria um novo registro
     * @param array $data
     * @return bool|int
     */
    public function create(array $data) {
        $fields = array_keys($data);
        $values = array_values($data);
        
        $fieldList = implode(', ', $fields);
        $placeholders = ':' . implode(', :', $fields);
        
        $sql = "INSERT INTO {$this->table} ({$fieldList}) VALUES ({$placeholders})";
        $stmt = $this->db->prepare($sql);
        
        if ($stmt->execute(array_combine($fields, $values))) {
            return $this->db->lastInsertId();
        }
        
        return false;
    }
    
    /**
     * Atualiza um registro
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update($id, array $data) {
        $fields = [];
        foreach ($data as $key => $value) {
            $fields[] = "{$key} = :{$key}";
        }
        $fieldList = implode(', ', $fields);
        
        $sql = "UPDATE {$this->table} SET {$fieldList} WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        
        $data['id'] = $id;
        return $stmt->execute($data);
    }
    
    /**
     * Deleta um registro
     * @param int $id
     * @return bool
     */
    public function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
    
    /**
     * Busca registros com condições personalizadas
     * @param array $conditions
     * @return array
     */
    public function where(array $conditions) {
        $where = [];
        foreach ($conditions as $key => $value) {
            $where[] = "{$key} = :{$key}";
        }
        $whereClause = implode(' AND ', $where);
        
        $sql = "SELECT * FROM {$this->table} WHERE {$whereClause}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($conditions);
        
        return $stmt->fetchAll();
    }
}
