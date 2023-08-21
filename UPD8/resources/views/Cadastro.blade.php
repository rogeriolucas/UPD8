<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="/cadastro" method="post">
        @csrf
        <input type="text" name="cpf" placeholder="CPF" required><br>
        <input type="text" name="nome" placeholder="Nome" required><br>
        <input type="date" name="data_nascimento" required><br>
        <input type="text" name="sexo" placeholder="Sexo" required><br>
        <input type="text" name="endereco" placeholder="Endereço" required><br>
        <input type="text" name="estado" placeholder="Estado" required><br>
        <input type="text" name="cidade" placeholder="Cidade" required><br>
        <button type="submit">Salvar</button>
        <button type="submit">Limpar</button>
    </form>
</body>
</html>
