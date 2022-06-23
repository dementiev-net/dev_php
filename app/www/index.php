<?
//phpinfo();

$conn = pg_connect("host=postgres port=5432 dbname=postgres user=root password=root");

if (!$conn) {
    echo "Произошла ошибка при соединении с базой!";
    echo pg_last_error($conn);
    exit;
}

echo "Ok!";