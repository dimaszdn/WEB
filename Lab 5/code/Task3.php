<?php
    include "Func.php";
    $path = '/code/categories/';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BulBoard</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">
                Email
                <input type="email" name="email" required>
            </label>

            <label for="category">
                Category
                <select name="category" required>
                    <?php
                    $categories = getCategories($path);
                    foreach ($categories as $category)
                    {
                        echo "<option value='$category'>" . $category . " </option>";
                    }
                    ?>
                </select>
            </label>

            <label for="title">
                Title
                <input type="text" name="title" required>
            </label>

            <label for="description">
                Description
                <textarea rows="3" name="description"></textarea>
            </label>

            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php
                    $db = extracted();
                    foreach ($db->query("SELECT * FROM web.ad") as $row)
                    {
                        $category = $row['category'];
                        $title = $row['title'];
                        $description = $row['description'];
                        echo "<tr><td>" . $category . " </td>";
                        echo "<td>" . $title . " </td>";
                        echo "<td>" . $description . " </td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>