
    <?php if(!empty($warning)): ?>
        <div class="warning"><?php echo $warning ?></div>
    <?php endif; ?>

<div class="border p-4 mt-3">
    <h1 class="text-center text-muted mt-4">Editar Produto</h1>

    <form method="POST" class="form-edit">

        Código de barras:<br>
        <input type="text" name="cod" class="form-control" value="<?php echo $info['cod']; ?>" required>
        <br>

        Nome do produto:<br>
        <input type="text" name="name" class="form-control" value="<?php echo $info['name']; ?>" required>
        <br>
        Preço do produto:<br>
        <input type="text" name="price" class="form-control"
            value="<?php echo number_format($info['price'], 2, ',', '.'); ?>" required>
        <br>
        Quantidade:<br>
        <input type="text" name="quantity" class="form-control"
            value="<?php echo number_format($info['quantity'], 2, ',', '.'); ?>" required>
        <br>
        Qtd. Minima:<br>
        <input type="text" name="min_quantity" class="form-control" value="<?php echo $info['min_quantity']; ?>"
            required>
        <br>
        <div class="d-flex" style="gap:12px">
            <input type="submit" class="btn btn-primary" value="Salvar">
            <a href="<?php echo BASE_URL ?>" class="btn btn-primary">Voltar</a>
        </div>
    </form>

</div>