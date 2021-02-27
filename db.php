$db = mysqli_connect('localhost', 'root', '', 'dbshack');
$query="SELECT party_key,
        TransactionDate,
        Count(1) As TransactionCount
    FROM
        YourTable
    GROUP BY
        CustomerId,
        TransactionDate;"
