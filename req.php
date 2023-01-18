<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *,
    *::after,
    *::before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin: 20px auto;
    }
    table {
        border-collapse: collapse
    }
    th {
        padding: 5px;
    }
    td {
        text-align: center;
        padding: 10px;
    }
</style>
<body>
    <?php
        $name        =     $_POST['name'];
        $surname     =     $_POST['surname'];
        $patronymic  =     $_POST['patronymic'];
        $org_name     =     $_POST['org_name'];
    ?>
    <table class="result" border="1" width="100%">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Название организациии</th>
        </tr>
        <tr>
            <td>
                <?php echo $name; ?>
            </td>
            <td>
                <?php echo $surname; ?>
            </td>
            <td>
                <?php echo $patronymic; ?>
            </td>
            <td>
                <?php echo $org_name; ?>
            </td>
        </tr>
    </table>
</body>
</html>