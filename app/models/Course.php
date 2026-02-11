<?php

require_once __DIR__ . '/Model.php';

/**
 * Course Model
 * 
 * Model para gerenciar cursos da faculdade.
 * Exemplo de implementação para uso futuro.
 */

class Course extends Model
{

    protected $table = 'courses';

    /**
     * Busca cursos por categoria
     * @param string $category
     * @return array
     */
    public function findByCategory($category)
    {
        return $this->where(['category' => $category]);
    }

    /**
     * Busca cursos ativos
     * @return array
     */
    public function getActiveCourses()
    {
        return $this->where(['status' => 'active']);
    }

    /**
     * Busca cursos por modalidade
     * @param string $modality (presencial, ead, hibrido)
     * @return array
     */
    public function findByModality($modality)
    {
        return $this->where(['modality' => $modality]);
    }
}

/**
 * Estrutura sugerida da tabela courses:
 * 
 * CREATE TABLE courses (
 *     id INT AUTO_INCREMENT PRIMARY KEY,
 *     name VARCHAR(255) NOT NULL,
 *     description TEXT,
 *     category ENUM('graduacao', 'pos', 'ead') NOT NULL,
 *     modality ENUM('presencial', 'ead', 'hibrido') NOT NULL,
 *     duration VARCHAR(50),
 *     period VARCHAR(50),
 *     status ENUM('active', 'inactive') DEFAULT 'active',
 *     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 *     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 * );
 */
