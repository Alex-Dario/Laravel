<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header>Controle de Ordem</header>
    <table>
        <thead>
            <tr>
                <td>Bags</td>
                <td>Set</td>
                <td>Real</td>
                <td>OP</td>
                <td>Desvio</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bag 1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Bag 2</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Bag 3</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Bag 4</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Bag 5</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <form method="get">
        <input type="submit" value="Roto 4A" formaction="{{ route('roto_4A') }}">
        <input type="submit" value="Roto 4B" formaction="{{ route('roto_4B') }}">
        <input type="submit" value="Roto 5A" formaction="{{ route('roto_5A') }}">
        <input type="submit" value="Roto 5B" formaction="{{ route('roto_5B') }}">
        <input type="submit" value="Roto 5C" formaction="{{ route('roto_5C') }}">
        <input type="submit" value="Roto 5D" formaction="{{ route('roto_5D') }}">
    </form>




</body>

</html>