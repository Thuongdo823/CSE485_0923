<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td{
        border: 1px solid black;
            border-collapse: collapse;
    }
</style>
<body>
    <?php 
        $arrs = ['PHP', 'HTML','CSS', 'JS'];
        
    ?>
    <table >
        <tr> 
            
            <th>Tên khóa học</th>
        </tr>
        <?php 
                for($i=0; $i<count($arrs); $i++){
                    echo '<tr>';
                    echo  "<td>$arrs[$i]</td>";
                    echo '</tr>';
                }
            ?>

    </table>
</body>
</html>