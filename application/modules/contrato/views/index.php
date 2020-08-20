<?php
$this->load->view('template/header');
$this->load->view('template/nav');
?>
<div class="col-lg-12">
    <div class="card card-small mb-4">

        <div class="card-header border-bottom">
            <h6 class="m-0">Detalhes Contrato</h6>
        </div>

        <div class="card-header">
            <form method="POST" action="<?= base_url('contrato/create'); ?>">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="nome_fornecedor">Nome/Razão Social</label>
                        <input type="text" class="form-control" name="nome_fornecedor" placeholder="Nome/Razão Social">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="tipo_contrato">Tipo do Contrato</label>
                        <select id="tipo_contrato" name="tipo_contrato" class="form-control" required>
                            <option value="0" selected="selected">Escolha um tipo de contrato</option>
                            <option value="0" style="background-color:#E9E9E9;font-weight:bold;" disabled>- Tipos de Contrato -</option>
                            <?php foreach ($tipos_contrato as $tipo_contrato) : ?>
                                <option value="<?= $tipo_contrato->id ?>"> <?= $tipo_contrato->nome; ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="valor">Valor</label>
                        <input type="number" class="form-control" name="valor" placeholder="R$">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="data_inicial">Data do Contrato</label>
                        <input type="date" class="form-control" name="data_inicial">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="data_vencimento">Data de Vencimento</label>
                        <input type="date" class="form-control" name="data_vencimento">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="diluir">
                        <label class="form-check-label" for="gridCheck">
                            Diluir Valor
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

    </div>
</div>


<?php
$this->load->view('template/footer');
?>