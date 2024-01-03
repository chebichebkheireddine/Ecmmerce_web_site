<?php
/*Interfas doa*/

interface categoryDoaintrfase{
	public function getByeID($id_cat);
    public function getAll();
    public function insert(category $category);
    public function update(category $category ,$ide);
    public function delet($id_cat);
}

/**
 * Summary of category
 */
class category {
    private $id_cat;
    private $cat_name;
    private $cat_des;
    /**
     * Summary of __construct
     * @param mixed $cat_name
     * @param mixed $cat_des
     */
    public function __construct($cat_name,
    $cat_des){
        $this->cat_name=$cat_name;
        $this->cat_des=$cat_des;
    }

	/**
	 * @return mixed
	 */
	public function getCat_name() {
		return $this->cat_name;
	}
	
	/**
	 * @param mixed $cat_name 
	 * @return self
	 */
	public function setCat_name($cat_name): self {
		$this->cat_name = $cat_name;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCat_des() {
		return $this->cat_des;
	}
	
	/**
	 * @param mixed $cat_des 
	 * @return self
	 */
	public function setCat_des($cat_des): self {
		$this->cat_des = $cat_des;
		return $this;
	}

	/**
	 * @param mixed $id_cat 
	 * @return self
	 */
	public function setId_cat($id_cat): self {
		$this->id_cat = $id_cat;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId_cat() {
		return $this->id_cat;
	}
}
class categoryDoa implements categoryDoaintrfase{

    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param mixed $id_cat
     * @return mixed
     */
    public function getByeID($id_cat) {
        $stmt = $this->connection->prepare("SELECT * FROM category WHERE id_categori =:id_cat");

        $stmt->execute(array(':id_cat' => $id_cat));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $category = new category(
            $row['category_name'], $row['category_des']
        );
        $category->setId_cat($row['id_categori']);

        return $category;
    }

    /**
     * @return mixed
     */
    public function getAll() {
        $stmt = $this->connection->prepare("SELECT * FROM category");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $products = array();
        foreach ($rows as $row) {
            $category = new category(
                $row['category_name'], $row['category_des']
            );
        
            $category->setId_cat($row['id_categori']);
            $categorys[] = $category;
        }
        return $categorys;
    }

    /**
     * @param category $category
     * @return mixed
     */
    public function insert(category $category) {
        $stmt = $this->connection->prepare("INSERT INTO category( category_name, category_des)
        VALUES (:category_name, :category_des)");
        $stmt->execute(array(
        ':category_name'=> $category->getCat_name(),
        ':category_des'=>$category->getCat_des()));
        $category->setId_cat($this->connection->lastInsertId());
    }

    /**
     * @param category $category
     * @return mixed
     */
    
    public function update(category $category, $id) {
        $stmt = $this->connection->prepare("UPDATE category
            SET   
            category_name = :category_name,
            category_des = :category_des
            WHERE id_categori  = :id_cat");
        $stmt->execute(array(
            ':id_cat'=> $id,
            ':category_name'=>$category->getCat_name(),
            ':category_des'=>$category->getCat_des()
        ));
    }
    

    /**
     * @param mixed $id_cat
     * @return mixed
     */
    public function delet($id_cat) {
        $stmt=$this->connection->prepare("DELETE FROM category WHERE id_cat = :id_cat");
        $stmt->execute(array(':id_cat'=>$id_cat));
    }
}

?>