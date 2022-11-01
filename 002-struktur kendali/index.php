<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<style>
    .spc {
        background-color: red;
        color: white;
    }
</style>
<body>
    <table border="2" cellpadding="10" cellspacing="0">
        <?php
        for($x = 1; $x <= 9; $x++) : ?>
            <tr>
                <?php
                for ($y = 1; $y <= 9; $y++) :
                    if($x == $y) : ?>
                        <td class="spc">
                    <?php else : ?>
                        <td>
                    <?php
                    endif;
                    echo "$x, $y"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>