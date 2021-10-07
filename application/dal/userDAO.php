class UserDAO{
private $db_connection;

public function __construct(){
    $this->db_connection = get_default_connection();
};

public function adduser(UserEntity $user){
    $cx = mysqli_connect($this->db_connection[])
}
}
