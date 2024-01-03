<?php
interface productDOAintrfa
{

    public function getByeID($id_pro);
    public function getAll();
    public function insert(Product $product);
    public function update(Product $product, $id_pro);
    public function delet($id_pro);

}
/**
 * Summary of Product
 */
class Product
{
    private $id_pro;
    private $id_category;
    private $date;
    private $pro_name;
    private $pro_img1;
    private $pro_img2;
    private $pro_prise;
    private $pro_qute;
    private $pro_prise_Old;
    private $pro_keywored;
    private $pro_Des;
    private $pro_plase;
    private $id_admin;
    private $id_custem;

    public function __construct(
        $id_category = null,
        $date = null,
        $pro_name = null,
        $pro_img1 = null,
        $pro_img2 = null,
        $pro_qute = null,
        $pro_prise = null,
        $pro_prise_Old = null,
        $pro_keywored = null,
        $pro_Des = null,
        $pro_plase = null,
        $id_admin = null,
        $id_custem = null
    )
    {
        $this->id_category = $id_category;
        $this->date = $date;
        $this->pro_name = $pro_name;
        $this->pro_img1 = $pro_img1;
        $this->pro_img2 = $pro_img2;
        $this->pro_qute = $pro_qute;
        $this->pro_prise = $pro_prise;
        $this->pro_prise_Old = $pro_prise_Old;
        $this->pro_keywored = $pro_keywored;
        $this->pro_Des = $pro_Des;
        $this->pro_plase = $pro_plase;
        $this->id_admin = $id_admin;
        $this->id_custem = $id_custem;
    }

 

    public function getIdPro()
    {
        return $this->id_pro;
    }

    public function setIdPro($id_pro)
    {
        $this->id_pro = $id_pro;
    }



    public function getIdCategory()
    {
        return $this->id_category;
    }

    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    public function getProName()
    {
        return $this->pro_name;
    }

    public function setProName($pro_name)
    {
        $this->pro_name = $pro_name;
    }

    public function getProImg1()
    {
        return $this->pro_img1;
    }

    public function setProImg1($pro_img1)
    {
        $this->pro_img1 = $pro_img1;
    }

    public function getProImg2()
    {
        return $this->pro_img2;
    }

    public function setProImg2($pro_img2)
    {
        $this->pro_img2 = $pro_img2;
    }

    public function getProPrise()
    {
        return $this->pro_prise;
    }

    public function setProPrise($pro_prise)
    {
        $this->pro_prise = $pro_prise;
    }

    public function getProPriseOld()
    {
        return $this->pro_prise_Old;
    }

    public function setProPriseOld($pro_prise_Old)
    {
        $this->pro_prise_Old = $pro_prise_Old;
    }

    public function getProKeywored()
    {
        return $this->pro_keywored;
    }

    public function setProKeywored($pro_keywored)
    {
        $this->pro_keywored = $pro_keywored;
    }

    public function getProDes()
    {
        return $this->pro_Des;
    }

    public function setProDes($pro_Des)
    {
        $this->pro_Des = $pro_Des;
    }


    public function getProPlase()
    {
        return $this->pro_plase;
    }

    public function setProPlase($pro_plase)
    {
        $this->pro_plase = $pro_plase;
    }

    public function getIdAdmin()
    {
        return $this->id_admin;
    }

    public function setIdAdmin($id_admin)
    {
        $this->id_admin = $id_admin;
    }

    public function getIdCustem()
    {
        return $this->id_custem;
    }

    public function setIdCustem($id_custem)
    {
        $this->id_custem = $id_custem;
    }

  

    public function getPro_qute()
    {
        return $this->pro_qute;
    }


    public function setPro_qute($pro_qute)
    {
            $this->pro_qute = $pro_qute;
    }

	/**
	 * @return mixed
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @return mixed
	 */
	

	/**
	 * @param mixed $date 
	 * @return self
	 */
	public function setDate($date){
		$this->date = $date;
		return $this;
	}
}
class ProductDoa implements productDOAintrfa
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getByeID($id_pro)
    {

        $stmt = $this->connection->prepare("SELECT * FROM product WHERE id_product=:id_product");

        $stmt->execute(array(':id_product' => $id_pro));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $product = new Product(
            $row['id_catgor'], $row['date'],$row['product_name'],$row['product_img1'],
            $row['product_img2'], $row['product_qut'], $row['product_prise'],
            $row['product_prise_old'], $row['product_des'], $row['product_plase'],
            $row['product_keyword'], $row['id_admin'], $row['id_custm']
        );
        $product->setIdPro($row['id_product']);

        return $product;

    }


    public function getAll()
    {
        $stmt = $this->connection->prepare("SELECT * FROM product  LIMIT 6");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $products = array();
        foreach ($rows as $row) {
            $product = new Product(
                $row['id_catgor'], $row['date'],$row['product_name'],$row['product_img1'],
                $row['product_img2'], $row['product_qut'], $row['product_prise'],
                $row['product_prise_old'], $row['product_des'], $row['product_plase'],
                $row['product_keyword'], $row['id_admin'], $row['id_custm']
            );
        
            $product->setIdPro($row['id_product']);
            $products[] = $product;
        }
        return $products;
    }
    

    public function insert(Product $product)
    {
        $stmt = $this->connection->prepare("INSERT INTO product(id_catgor, date, product_name, product_img1, product_img2, product_qut, product_prise, product_prise_old, product_des, product_plase, product_keyword, id_admin, id_custm)
        VALUES (:id_catgor, :date, :product_name, :product_img1, :product_img2, :product_qut, :product_prise, :product_prise_old, :product_des, :product_plase, :product_keyword, :id_admin, :id_custm)");
        $stmt->execute(array(
        ':id_catgor'=> $product->getIdCategory(),
        ':date'=>$product->getDate(),
        ':product_name'=>$product->getProName(),
        ':product_img1'=>$product->getProImg1(),
        ':product_img2'=>$product->getProImg2(),
        ':product_qut'=>$product->getPro_qute(),
        ':product_prise'=>$product->getProPrise(),
        ':product_prise_old'=>$product->getProPriseOld(),
        ':product_des'=>$product->getProDes(),
        ':product_plase'=>$product->getProPlase(),
        ':product_keyword'=>$product->getProKeywored(),
        ':id_admin'=>$product->getIdAdmin(),
        ':id_custm'=>$product->getIdCustem()));
        $product->setIdPro($this->connection->lastInsertId());
    }


    public function update(Product $product, $id_product)
{
    $stmt = $this->connection->prepare("UPDATE product
    SET id_catgor = :id_catgor,
        date = :datee,
        product_name = :product_name,
        product_img1 = :product_img1,
        product_img2 = :product_img2,
        product_qut = :product_qut,
        product_prise = :product_prise,
        product_prise_old = :product_prise_old,
        product_des = :product_des,
        product_plase = :product_plase,
        product_keyword = :product_keyword,
        id_admin = :id_admin,
        id_custm = :id_custm
    WHERE id_product = :id_product");
    $stmt->execute(array(
    ':id_catgor'=> $product->getIdCategory(),
    ':datee'=>$product->getDate(),
    ':product_name'=>$product->getProName(),
    ':product_img1'=>$product->getProImg1(),
    ':product_img2'=>$product->getProImg2(),
    ':product_qut'=>$product->getPro_qute(),
    ':product_prise'=>$product->getProPrise(),
    ':product_prise_old'=>$product->getProPriseOld(),
    ':product_des'=>$product->getProDes(),
    ':product_plase'=>$product->getProPlase(),
    ':product_keyword'=>$product->getProKeywored(),
    ':id_admin'=>$product->getIdAdmin(),
    ':id_custm'=>$product->getIdCustem(),
    ':id_product'=>$id_product
    ));
}


    public function delet($id_pro)
    {
        $stmt=$this->connection->prepare("DELETE FROM product WHERE id_product = :id_product");
        $stmt->execute(array(':id_product'=>$id_pro));
    }
}


?>