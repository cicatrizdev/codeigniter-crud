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
    <div class="container">
    <br>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CRM</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Especialidades</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->crm; ?></td>
                    <td><?php echo $row->phone; ?></td>
                    <td><?php echo $row->state; ?></td>
                    <td><?php echo $row->city; ?></td>
                    <td><?php echo $row->specialization; ?></td>

                </tr>
                <?php }?>
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Adicionar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Médico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo site_url('CrudController/create')?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CRM</label>
                            <input type="text" class="form-control"name="crm" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telefone</label>
                            <input type="text" class="form-control" name="phone" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Estado</label>
                            <input type="text" class="form-control" name="state" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Cidade</label>
                            <input type="text" class="form-control" name="city" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Especialidade</label>
                            <select class="form-control" name="specialization">
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
                        <button type="submit" class="btn btn-primary" value="save">Cadastrar</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>