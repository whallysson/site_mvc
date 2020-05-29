<?php 

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Category
 * @package Source\Models
 */
class Category extends Model 
{
    /**
     * Category constructor
     */
    public function __construct()
    {
        parent::__construct("categories", ["id"], ["title", "id"]);
    }

    /**
     * @param string $uri
     * @param string $columns
     * @return null|Category
     */
    public function findByUri(string $uri, string $columns = "*"): category
    {
        $find = $this->find( "uri = :uri", "uri={$uri}", $columns);
        return $find->fetch();
    }

    /**
     * @return boll
     */
    public function save(): bool 
    {

    }

}