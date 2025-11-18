<?php
include('db_connection.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM tasks WHERE id = $id";
    $result = $conn -> query ($sql);
    if ($result -> num_rows == 1){
        $task = $result -> fetch_assoc();
}
    else{
    echo"Tarefas não informada";
exit;
 } } else{ 
    echo "ID Tarefas não informada";
exit;
 }
 ?>

 <!DOCTYPE html>
    <html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>editar tarefas</title>
    <link rel="stylesheet"href= "style.css">
</head>
<body>
<H1>Editar Tarefas</H1>
<form action="update_task_name.php"
method="POST">
<input type="hidden" name="id" value="<?php
echo $task['id'];?>">
<input type="text" name="title" value="<?php echo
htmlspecialchars($task['title']);?>"required >
<button type="submit">Salvar as alteraçoes</button>
</form>
<br>
<a href="index.php" >Voltar </a>
</body>
    </html>







