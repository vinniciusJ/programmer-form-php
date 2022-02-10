<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/index.css">

    <title>Hobbies</title>
</head>
<body>
    <main class="container">
        <header class="container__header">
            <h1>Cadastro de programador</h1>
            <p>Deixe-nos entender quais são seus gostos e interesses</p>
        </header>

        <form action="user.php" class="form-container" method="POST">
            <fieldset class="form-container__fieldset">
                <legend>Dados pessoais: </legend>

                <div class="form-container__input-container">
                    <input type="text" id="name" name="name" required />
                
                    <label for="name">
                        <strong>Nome: </strong>
                    </label>

                    
                </div>
                <div class="form-container__input-container">
                    <input type="text" id="last-name" name="last-name" required />
                
                    <label for="last-name">
                        <strong>Sobrenome: </strong>
                    </label>

                </div>
                <div class="form-container__input-container">
                    <input type="email" id="email" name="email" required />
                
                    <label for="email">
                        <strong>E-mail: </strong>
                    </label>

                </div>
                <div class="form-container__input-container">
                    <input type="text" id="phone-number" name="phone-number" required />
                
                    <label for="phone-number">
                        <strong>N° de celular: </strong>
                    </label>

                </div>
                <div class="form-container__input-container">
                    <input type="text" id="address" name="address" required />

                    <label for="address">
                        <strong>Endereço: </strong>
                    </label>

                </div>
            </fieldset>

            <fieldset class="form-container__fieldset">
                <legend>Interesses na área de programação: </legend>

                <div class="form-container__checkbox-container">
                    <p>Escolha seus paradigmas de programação favoritos: </p>

                    <section>
                        <label for="imperative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Imperativo" id="imperative">
                            <span>Imperativo</span>
                        </label>
                        <label for="declarative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Declarativo" id="declarative">
                            <span>Declarativo</span>
                        </label>
                        <label for="functional" class="form-container__input-container__checkbox">

                            <input type="checkbox" name="programming-paradigms[]" value="Funcional" id="functional">
                            <span>Funcional</span>
                        </label>
                        <label for="logical" class="form-container__input-container__checkbox">

                            <input type="checkbox" name="programming-paradigms[]" value="Lógico" id="logical">
                            <span>Lógico</span>
                        </label>
                        <label for="object-oriented" class="form-container__input-container__checkbox">

                            <input type="checkbox" name="programming-paradigms[]" value="Orientado a Objetos" id="object-oriented">
                            <span>Orientado a Objetos</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming-language" id="programming-language" type="text" required class="multiple-select-wrapper">
                        <label for="programming-language">
                            <strong>Linguagens de programação: </strong>
                        </label>
                    </div>

                    <select class="multiple-select" multiple>
                            <option value="Javascript">Javascript</option>
                            <option value="Python">Python</option>
                            <option value="Java">Java</option>
                            <option value="C++">C++</option>
                            <option value="R">R</option>
                        </select>
                </div>
            </fieldset>

            <fieldset class="form-container__fieldset">
                <button class="form-container__send-button">Enviar dados</button>
            </fieldset>
        </form>

        <footer class="container__footer">
            <p>Feito por Vinicius Jimenez &copy;</p>
        </footer>
    </main>

    <script src="./scripts/index.js"></script>
</body>
</html>