<!DOCTYPE
<html>
    <head>
        <title>To Do App 2</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="wrap">
            <div class="task-list">
                <ul>
                    <?php require("includes/coonnect.php"); ?>
                </ul>
            </div>  
        <form class="add-new-task" autocomplete="off">
            <input type="text" name="new-task" placeholder="Add new item..."/>
        </form>
        </div>
    </body>
</html>