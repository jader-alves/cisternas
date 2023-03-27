    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value='{{ @$cisterna->nome}}'  >
    </div>

    <div class="form-group">
        <label for="data_inauguracao">Data Inauguração</label>
        <input type="date" class="form-control" id="data_inauguracao" name="data_inauguracao"  value='{{ @$cisterna->data_inauguracao }}'  >
    </div>

    <div class="form-group">
        <label for="tipo_construcao_id">Tipo de Construção</label>
        <select class="form-control" id="tipo_construcao_id" name='tipo_construcao_id' >
            <option  value="0">Selecione</option>
            @foreach($tipo_construcao as $t)
              <option  value="{{$t->id}}" {{isset($cisterna) && $t->id==$cisterna->tipo_construcao_id ? " selected" : "" }} >{{$t->nome}} </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="entidade_id">Entidade Mantenedora</label>
        <select class="form-control" id="entidade_id" name='entidade_id' >
            <option  value="0">Selecione</option>
            @foreach($entidades as $entidade)
              <option  value="{{$entidade->id}}" {{isset($cisterna) && $entidade->id==$cisterna->entidade_id ? " selected" : "" }} >{{$entidade->nome_fantasia}} </option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="tipo_material_id">Materiais usados na Construção:</label>
        @foreach($tipo_material as $t)
        <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                value="0"
                id="tipo_material[{{$t->id}}]"
                name="tipo_material[{{$t->id}}]"
                {{ $cisterna->hasMaterial($t->id) ? "checked" : "" }}
                >
            <label class="form-check-label" for="tipo_material[{{$t->id}}]">
                {{$t->nome}}
            </label>
            </div>
        @endforeach
    </div>
    <br>

    <div class="form-group">
        <label for="localizacao">Localização</label>
        <textarea  type="text" class="form-control" id="logradouro" name="localizacao" rows="3" >{{ @$cisterna->localizacao }}</textarea >
    </div>

    <div class="form-group">
        <label for="coordenadas">Coordenadas GPS</label>
        <input type="text" class="form-control" id="coordenadas" name="coordenadas" value='{{ @$cisterna->coordenadas }}'  >
    </div>

    <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" value='{{ @$cisterna->cep }}' >
        <div class="alert alert-danger" role="alert" id='cep_erro' name='cep_erro' style="display:none" >
            CEP não encontrado
         </div>
    </div>

    <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value='{{ @$cisterna->cidade }}'  >
    </div>

    <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" value='{{ @$cisterna->estado }}'  >
    </div>


    <input type="submit" class="btn btn-info" value="Salvar">

