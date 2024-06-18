<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristrar</title>
    <link rel="stylesheet" href="style/registrocliente.css">
</head>
<body>
<form class="form" method="POST" action="registrar.php">
    <p class="title">Registre-se </p>
    <p class="message">Utilize Dados Ficticios, apenas para teste </p>
        <div class="flex">
        <label class="teste">
            <input required="" name="Nome" placeholder="" type="text" class="input">
            <span>Nome</span>
        </label>

        <label>
            <input required="" name="Sobrenome" placeholder="" type="text" class="input">
            <span>Sobrenome</span>
        </label>
    </div>  
            
    <label>
        <input required="" name="CPF" placeholder="" type="text" class="input">
        <span>CPF</span>
    </label> 
        
    <label>
        <input required="" name="Telefone" placeholder="" type="text" class="input">
        <span>Telefone</span>
    </label>
    <button class="submit">Submit</button>
    <p class="signin">Já tem uma conta?  <a href="login.php">Login</a> </p>
</form>
</body>
</html>