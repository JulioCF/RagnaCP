<?php
    include('config.php');
    $doacoes = doacaoPendente($con);
?>

<table  id="conteudo" class="rank-player">
    <thead>
        <tr class="ranking">
            <th>N°</th>
            <th>
                <div align="center">Data </div>
            </th>
            <th>
                <div align="center">Valor</div>
            </th>
            <th>
                <div align="center">Rops</div>
            </th>
            <th>
                <div align="center">Estado</div>
            </th>
        </tr>
    </thead>
    <tbody>
    <?php 
        include 'analise.php';
        $i = 0;
        foreach ($doacoes as $c) :
            $i = $i+1;
    ?>
        <tr>
            <td>
                <div align="center">
                    <?php echo $i;?>
                </div>
            </td>
            <td>
                <div align="center">
                    <?php echo $c->data;?>
                </div>
            </td>
            <td>
                <div align="center">
                    <?php echo "R$ ".$c->valor.",00";?>
                </div>
            </td>
            <td>
                <div align="center">
                    <?php echo $c->Rops;?>
                </div>
            </td>
            <td>
                <div align="center">
                    <?php echo $sts[$c->estado]; ?>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>