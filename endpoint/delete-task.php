<?php
include ('../conn/conn.php');

if (isset($_GET['task'])) {
    $task = $_GET['task'];

    try {

        $query = "DELETE FROM tbl_task WHERE tbl_task_id = '$task'";

        $stmt = $conn->prepare($query);

        $query_execute = $stmt->execute();

        if ($query_execute) {
            echo "
                <script>
                    alert('Task Deleted Successfully');
                    window.location.href = 'http://192.168.5.39:2006/Vindhya_Sticky_Note/index.php';
                </script>
            ";
        } else {
            header("Location: http://192.168.5.39:2006/Vindhya_Sticky_Note/index.php");
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
