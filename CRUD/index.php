<?php include_once 'include/header.php'; ?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth"> Clientes </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rodrigo</td>
                    <td>Oliveira</td>
                    <td>rodrigosantos@gmail.com</td>
                    <td>25</td>
                    <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php include_once 'include/footer.php'; ?>