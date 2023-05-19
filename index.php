<?php
$array = [
    'nome' => 'Leo',
    'idade' => '30',
    'company' => "d'Vinci",
    'cor' => 'cinza',
    'profissao' => 'engenheiro'
];

print_r($array);

$keys = array_keys($array);
$values = array_values(($array));

?>

 <table border="1">
    <?php  foreach($array as $key => $value): ?>
        <tr>
            <td><?php echo $key;?> </td>
            <td><?php echo $value;?> </td>
        </tr>
    <?php endforeach; ?>
</table>
<br/>
<br/>
<table border="1">
    <tr>
        <?php foreach($keys as $key):?>
            <th><?php echo $key;?></th>
        <?php endforeach; ?>    
    </tr>
    <tr>
        <?php foreach($values as $value):?>
            <td><?php echo $value;?></td>
        <?php endforeach;?>    
    </tr>
</table>