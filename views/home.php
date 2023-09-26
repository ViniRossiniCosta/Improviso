<div class="container">
    <fieldset>
        <form method="GET">
            <p class="text-center h5">Digite o nome do produto ou Código do produto</p>
            <input type="text" name="busca" id="busca" class="container form-control"
                value="<?php echo (!empty($_GET['busca'])) ? $_GET['busca'] : ''; ?>"
                placeholder="" style="width:20rem">
        </form>
    </fieldset>
    <br>
</div>

<table border="0" width="80%" class="container">
    <tr>
        <th>Cód.</th>
        <th>Nome</th>
        <th>Preço Unit.</th>
        <th>Qtd.</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($list as $item): ?>
        <tr>
            <td>
                <?php echo $item['cod']; ?>
            </td>
            <td>
                <?php echo $item['name']; ?>
            </td>
            <td>R$
                <?php echo number_format($item['price'], 2, ',', '.'); ?>
            </td>
            <td>
                <?php echo $item['quantity']; ?>
            </td>
            <td>
                <a href="<?php echo BASE_URL; ?>/home/edit/<?php echo $item['id']; ?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script type="text/javascript">
    document.getElementById("busca").focus();

</script>