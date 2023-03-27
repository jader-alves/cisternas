    @csrf

    <div class="form-group">
        <label for="nome_fantasia">Nome Fantasia</label>
        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" value='{{ @$entidade->nome_fantasia }}'  >
    </div>

    <div class="form-group">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" value='{{ @$entidade->cnpj }}'  >
    </div>

    <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep"  value='{{ @$entidade->cep }}'  >
        <div class="alert alert-danger" role="alert" id='cep_erro' name='cep_erro' style="display:none" >
            CEP não encontrado
        </div>
    </div>


    <div class="form-group">
        <label for="logradouro">Logradouro</label>
        <input type="text" class="form-control" id="logradouro" name="logradouro"  value='{{ @$entidade->logradouro }}'  >
    </div>

    <div class="form-group">
        <label for="numero">Número</label>
        <input type="text" class="form-control" id="numero" name="numero" value='{{ @$entidade->numero }}'  >
    </div>

    <div class="form-group">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" value='{{ @$entidade->bairro }}' >
    </div>

    <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value='{{ @$entidade->cidade }}'  >
    </div>

    <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" value='{{ @$entidade->estado }}'  >
    </div>


    <input type="submit" class="btn btn-info" value="Salvar">

