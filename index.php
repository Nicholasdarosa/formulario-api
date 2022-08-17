
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>formulario-api</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">


    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.form_cd{
    width: 100%;
    max-width: 300px;
    padding: 10px;
    background-color:silver;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    position: absolute;
    text-align: center;
}


form input [type="text"]{
    width: 200px;
    padding: 5px;
    margin-top: 10px;
    outline: 0;


}

form input [type="submit"]{
    width: 180px;
    padding: 5px;
    margin-top: 10px;
    outline: 0;
    cursor: pointer;
    

}

.form_cd h2{
color: blue;

}

    </style>
  
</head>
<body>
    <div class="form_cd">
        <h2>Cadastro de Usuario</h2>
    <form method="POST">
       <div> <input type="text" name="nome" placeholder="Nome"></div>
       <div><input type="text" name="email" placeholder="email"></div>
       <div><input type="text" name="senha" placeholder="Senha"></div>
       <div><input type="submit" name="acao" value="Cadastrar"></div>
       <div><input type="hidden" name="form" value="f_form"></div>
    </form> 
    </div><!--form_cd-->
</body>