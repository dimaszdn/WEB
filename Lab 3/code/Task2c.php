<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            margin: 10px 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 250px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
<form>
    <form method="post">
        <label>
            Имя
            <input type="text" name="name">
        </label>
        <label>
            Возраст
            <input type="text" name="age">
        </label>
        <label>
            Место работы
            <input type="text" name="workplace">
        </label>
        <label>
            Зарплата
            <input type="text" name="salary">
        </label>
        <input type="submit">
</form>
</body>
</html>