<?PHP
require_once __DIR__ . 'connection.php'

class model extends connection
{
    protected $table;
    protected $primaryKey = 'id';
    protected $fillable = [];

    public function all()
    {
        $query = $this->db->query('select * from' . $this->$table);
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }

    public function find($value)
    {
        $query =  $this->db->query('select * from' . $this->$table . '')
    }

}
?>