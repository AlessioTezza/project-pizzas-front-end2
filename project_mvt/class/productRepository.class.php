
<?php

/**
 *  Repositorio: Product
 * 
 */

class ProductRepository
{
    private Db $db;

 /**
* Constructor: Instancia de la clase Db
 */
    public function __construct(Db $db)
    {
        $this->db = $db;
    }

 /**
     * Obtiene todos los productos
     * 
     * @return array Array de objetos Product
     */
    public function findAll(): array
    {
        $rows = $this->db->findAll('products', '*');

        return array_map(function ($row) {return $this->hydrate($row);}, $rows);
    }



}
?>