<style>
    .alert {
        padding: 7px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 0px;
        font-family: sans-serif, Arial, Verdana, "Trebuchet MS";
    }

    .alert-danger {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
    }

    .alert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
    }
</style>

<?php if ($res) { ?>
    <div class="alert alert-success">
        Arquivo atualizado com sucesso!
    </div>

<?php } else { ?>
    <div class="alert alert-danger">
        Erro ao Atualizar o arquivo, por favor, repita a operação.
    </div>

<?php } ?>

