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
    <form action="./save.php" method="post">
        <label for="email">
            Email
            <input type="email" name="email" required>
        </label>

        <label for="category">
            Category
            <select name="category" required>
                <?php
                $categoriesDir = '/code/categories';
                $categories = array_filter(glob($categoriesDir . '/*'), 'is_dir');
                $dirName = "";
                foreach ($categories as $category)
                {
                    $dirName = basename($category);
                    echo "<option value='$dirName'>" . $dirName . " </option>";
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
</body>
</html>