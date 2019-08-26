<?php

include "conexao.php";



$conn = mysqli_connect("localhost", "root", "", "AuditesteNaoFuncionais");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM cinemark";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["dt_registro"]."," .$row["elapsed"]."," .$row["label"]."," .$row["responseMessage"]."," .$row["threadName"]."," .$row["success"]."," .$row["grpThreads"]."," .$row["allThreads"]."," .$row["Latency"]."<br>";
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($conn);


?>