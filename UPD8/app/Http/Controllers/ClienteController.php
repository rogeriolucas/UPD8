<?php 

use App\Models\Pessoa;
use Illuminate\Http\Request;

 function cadastrar(Request $request)
{
    // Valide os dados do formulário
    $request->validate([
        // coloque as regras de validação aqui
    ]);

    Pessoa::create($request->all());

    return redirect()->route('formulario')->with('success', 'Cadastro realizado com sucesso!');
}

 function consultar(Request $request)
{
    $cpf = $request->input('cpf');

    $pessoa = Pessoa::where('cpf', $cpf)->first();

    if ($pessoa) {
        return view('consulta')->with('pessoa', $pessoa);
    } else {
        return redirect()->route('formulario')->with('error', 'CPF não encontrado.');
    }
}


?>