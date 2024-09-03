<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoas</title>
</head>

<body>
    <main>
        <form action="{{ route("salvar") }}" method="post">
            {{csrf_field()}}
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Fulano de tal">
                @if ($errors->has('nome'))
                    @foreach ($errors->get('nome') as $erro)
                        <strong class="erro">{{ $erro }}</strong>
                    @endforeach
                @endif
            </div>
            <div>
                <label for="idade">Idade: </label>
                <input type="number" name="idade" id="idade">
                @if ($errors->has('idade'))
                    @foreach ($errors->get('idade') as $erro)
                        <strong class="erro">{{ $erro }}</strong>
                    @endforeach
                @endif
            </div>
            <div>
                <label for="data_nascimento">Data de nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento">
                @if ($errors->has('data_nascimento'))
                    @foreach ($errors->get('data_nascimento') as $erro)
                        <strong class="erro">{{ $erro }}</strong>
                    @endforeach
                @endif
            </div>
            <div>
                <label for="salario">Salario: </label>
                <input type="number" name="salario" id="salario" step="0.01">
                @if ($errors->has('salario'))
                    @foreach ($errors->get('salario') as $erro)
                        <strong class="erro">{{ $erro }}</strong>
                    @endforeach
                @endif
            </div>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>

</html>