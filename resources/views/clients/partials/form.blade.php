{{-- resources/views/clients/partials/form.blade.php --}}
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $client->nome ?? '') }}" required>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $client->email ?? '') }}" required>
</div>

<div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf', $client->cpf ?? '') }}" required>
</div>

<div class="form-group">
    <label for="data_de_nascimento">Data de Nascimento</label>
    <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento" value="{{ old('data_de_nascimento', $client->data_de_nascimento ?? '') }}" required>
</div>

<div class="form-group">
    <label for="rua">Rua</label>
    <input type="text" class="form-control" id="rua" name="rua" value="{{ old('rua', $client->rua ?? '') }}" required>
</div>

<div class="form-group">
    <label for="numero_da_residencia">Número da Residência</label>
    <input type="text" class="form-control" id="numero_da_residencia" name="numero_da_residencia" value="{{ old('numero_da_residencia', $client->numero_da_residencia ?? '') }}" required>
</div>

<div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control" id="cep" name="cep" value="{{ old('cep', $client->cep ?? '') }}" required>
</div>

<div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade', $client->cidade ?? '') }}" required>
</div>

<div class="form-group">
    <label for="estado">Estado (UF)</label>
    <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado', $client->estado ?? '') }}" required>
</div>

<div class="form-group">
    <label for="ativo">Ativo</label>
    <select class="form-control" id="ativo" name="ativo">
        <option value="1" {{ (old('ativo', $client->ativo ?? '') == 1) ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ (old('ativo', $client->ativo ?? '') == 0) ? 'selected' : '' }}>Não</option>
    </select>
</div>
