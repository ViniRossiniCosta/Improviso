<div class="container">

    
    <h1 class="mt-3 text-center">Contato</h1>

    <form onsubmit="return false" method="POST" class="mt-3">
        <p>Nome:</p>
        <input type="text" name="nome" class="form-control" /><br><br>

        <p>E-mail:</p>
        <input type="email" name="email" class="form-control" /><br><br>

        <p>Mensagem:</p>
        <textarea name="mensagem" class="form-control"></textarea><br><br>


        <input type="submit" value="Enviar Mensagem" onclick="enviarEmail()" class="btn btn-dark container">
    </form>
    <div class="msg"></div>
</div>