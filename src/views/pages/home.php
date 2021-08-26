<?php $render('header');?>



<a href="<?php echo $base;?>/novo">Novo Usuario</a>

<table border="1" width="100%">
    <tr>    
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?php echo $base;?>/usuario/<?=$usuario['id'];?>/editar">
                <img width="20" src="<?=$base;?>/assets/images/document.png"/>
                </a>
                <a href="<?php echo $base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                <img width="20" src="<?=$base;?>/assets/images/trash.png"/>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php $render('footer');?>