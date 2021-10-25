<div class="table-header">
    <a class="button" href="../signup.php"><i class="fas fa-user-plus"></i></a>
    <form  action="" action="get">
        <button type="submit"><i class="fas fa-search"></i></button>
        <input type="text" name="search" placeholder="Pesquisar..." value="<?=$search?>">
    </form>
</div>
<table class="styled-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Perfil de Acesso</th>
            <th>Último Aceesso</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if(!empty($users)){
        array_filter ($users, function ($user) { ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['access_profile'];?></td>
                <td><?php echo ($user['last_access'] == null ? '' : date('d/m/Y H:i:s', strtotime($user['last_access'])));?></td>
                <td><?php echo date('d/m/Y H:i:s', strtotime($user['create_at']));?></td>
                <td><a href="update.php?id=<?php echo $user['id'];?>"><i class="far fa-edit"></i></a><a href="delete.php?id=<?php echo $user['id'];?>"><i class="far fa-trash-alt"></i></a></td>
            </tr>

        <?php
        });
    } else{
        ?>
        <tr>
        <td colspan="7"><p class="no-records-found">Nenhum registro encontrado.</p></td>
        </tr>
    <?php
    } ?> 
    </tbody>
</table>
<?php

//Pagination
$pages = $obPagination->getPages();
?>
<div class="pagination">
    <?php
    array_filter ($pages, function ($page) {
        //GETS
        unset($_GET['currentPage']);
        $gets = http_build_query($_GET);
        ?>
        <a href="?currentPage=<?=$page['page'].'&'.$gets?>">
            <button type="button" class="button-light<?=$page['current'] ? ' active': ''?>"><?=$page['page']?></button>
        </a>
        <?php
    });
    ?>
</div>