<?php
const ENV_FILE_NAME = '.env';
const NEW_LINE = "/[\s,]+/";
const ENV_DELIMITER = '/=/';
const PATH = __DIR__;
function current_directory(): string
{
    return PATH;
}

function get_env($path = null): array
{
    $parameters = array();
    // if path is empty read find the env file from current directory
    $env_file_path = $path ? $path : current_directory().DIRECTORY_SEPARATOR.ENV_FILE_NAME;
    if (file_exists($env_file_path)) {
        $lines = preg_split($pattern = NEW_LINE, $subject = file_get_contents($env_file_path));
        // each lines have this format: KEY=VALUE
        if (count($lines) > 0) {
            foreach ($lines as $line) {
                $args = preg_split($pattern = ENV_DELIMITER, $subject = $line);
                // 2 elements include key and value: key is the first element, 2nd element is value
                if (count($args) == 2) {
                    $parameters[$args[0]] = $args[1];
                }
            }
        }
    }
    return $parameters;
}

function connect_database($args): bool|mysqli|null
{
    return mysqli_connect($hostname = $args['DB_HOST'], $username = $args['DB_USER'], $password = $args['DB_PASSWORD'],
        $database = $args['DB_NAME']);
}

function execute_query(mysqli $connection, $query){
    try{
        $res = $connection->query($query);
        $result = array();
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return array('error' => false, 'result' => $result);
    }catch(Exception $exception){
        return array('error' => $exception->getMessage(), 'result' => false);
    }
}

function main(): void
{
    $args = get_env("../.env");
    if(empty(($args))){
        die("Database configuration is empty!");
    }
    $db_connection = connect_database($args);
    // if things go well run some query
    printf("%s%s", "Connect database successfully!", "\n");
    // SHOW LIST OF TABLES
    $data = execute_query($db_connection, "SHOW TABLES");
    if($data['error']){
        printf("Error: %s", $data['error']);
    }
    if($data['result']){
        $tables = [];
        foreach($data['result'] as $row){
            $tables[] = $row["Tables_in_phpguru-headfirst"];
        }
        // list of tables
        print("List of tables:\n");
        $i = 1;
        foreach($tables as $table){
            printf("%d.%s\n", $i, $table);
            $i++;
        }
    }
    // close database connection
    mysqli_close($db_connection);
}

main();