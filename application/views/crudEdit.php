<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>CRUD - Codeigniter</title>
    </head>
    <body>

        <!-- As a link -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">CODEIGNITER CRUD</a>
        </nav>
        <br>

        <div class="container">
            <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id ?>">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row->name ?>">
                </div>
                <div class="form-group">
                    <label>CRM</label>
                    <input type="text" class="form-control"name="crm" value="<?php echo $row->crm ?>">
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row->phone ?>">
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="state" value="<?php echo $row->state ?>">
                </div>
                <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $row->city ?>">
                </div>
                <div class="form-group">
                    <label>Especialidade</label>
                    <select class="form-control" name="specialization" value="<?php echo $row->specialization ?>">
                        <option>ALERGOLOGIA</option>
                        <option>ANGIOLOGIA</option>
                        <option>BUCO MAXILO</option>
                        <option>CARDIOLOGIA CLINICA</option>
                        <option>CARDIOLOGIA INFANTIL</option>
                        <option>CIRURGIA CABEÇA E PESCOÇO</option>
                        <option>CIRURGIA CARDÍACA</option>
                        <option>CIRURGIA DE CABEÇA/PESCOÇO</option>
                        <option>CIRURGIA DE TORAX</option>
                        <option>CIRURGIA GERAL</option>
                        <option>CIRURGIA PEDIÁTRICA</option>
                        <option>CIRURGIA PLÁSTICA</option>
                        <option>CIRURGIA TORÁCICA</option>
                        <option>CIRURGIA VASCULAR</option>
                        <option>CLINICA MEDICA</option>

                        <!-- <?php foreach($result2 as $option) {?>
                        <option><?php echo $option->name; ?></option>
                        <?php }?> -->

                    </select>
                </div>
                <button type="submit" class="btn btn-primary" value="save">Salvar</button>
                <a href="<?php echo site_url('CrudController')?>">Cancelar</a>
            </form>
        </div>
    </body>
</html>