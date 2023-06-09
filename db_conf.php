<?php
$host = "host = 127.0.0.1";
$port = "port = 5432";
$dbname = "dbname = postgres";
$credentials = "user = postgres password=1";

$conn = pg_connect("$host $port $dbname $credentials");
if (!$conn) {
    echo "Error : Unable to open database\n";
} else {
}



// DbService class
class DbService
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }


    public function test()
    {
        return "working";
    }

    public function getAllTasks()
    {
        $query = "SELECT * FROM tasks";
        $result = pg_exec($this->conn, $query);

        if (!$result) {
            echo "Error executing query.";
            return array();
        }

        $tasks = array();
        while ($row = pg_fetch_assoc($result)) {
            $tasks[] = $row;
        }

        return $tasks;
    }

    public function updateTask($id, $value)
    {

        $q = "update tasks set checked = $value where id= $id";
        return pg_exec($this->conn, $q);
    }

    public function insert($value)
    {


        $q = "insert into tasks (title,checked,date_time) values ('$value',false,timezone('Asia/Tashkent', now()));";
        return pg_exec($this->conn, $q);
    }

    public function delete($id)
    {

        $q = "delete from tasks  where id = $id;";
//        $q = "insert into tasks (title,checked) values ('$id',false);";

         pg_exec($this->conn, $q);

        return "salom";
    }


}

// Usage
//global $dbService;
$dbService = new DbService($conn);
$allTasks = $dbService->getAllTasks();

//// Output the tasks
//foreach ($allTasks as $task) {
//    echo "Task ID: " . $task['id'] . ", Name: " . $task['name'] . "<br>";
//}

//$allTasks->
// Close the database connection





?>


