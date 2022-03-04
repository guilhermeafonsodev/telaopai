<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once('fn/scripts.php');
strip_php_extension();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
    <title>&lt;Tela o Pai&gt; | Inscrever-se</title>

    <?php include('assets/includes/head.php') ?>
</head>

<body>
    <nav>
        <a href="./"><img src="assets/img/logotipo.svg" width="100" /></a>
        <?php include('assets/includes/main-menu.php'); ?>
    </nav>

    <main id="inscrever">
        <form action="#" class="form mid" id="forms" autocomplete="off" onsubmit="event.preventDefault()">
            <div id="formulario">
                <div class="progressbar">
                    <div class="progress" id="progress"></div>
                    <div class="progress-step progress-step-active" data-title="Personagem"></div>
                    <div class="progress-step" data-title="Dados gerais"></div>
                    <div class="progress-step" data-title="Questionário"></div>
                    <div class="progress-step" data-title="Dúvidas"></div>
                </div>
                <div class="step-forms step-forms-active">
                    <h1>Informações do personagem</h1>
                    <div class="two-col">
                        <div>
                            <label for="nome">Nome do personagem:</label>
                            <input type="text" name="nome" id="nome" require placeholder="Digite o nome do seu personagem" />
                        </div>
                        <div>
                            <label for="proc">Progressão atual:</label>
                            <input type="text" name="proc" id="proc" placeholder="Ex.: 4/10M" />
                        </div>
                    </div>
                    <div class="two-col">
                        <div>
                            <label for="classe">Sua classe:</label>
                            <select name="classe" id="classe">
                                <option value="" disabled selected>Selecione sua classe</option>
                                <option value="Death Knight">Death Knight</option>
                                <option value="Demon Hunter">Demon Hunter</option>
                                <option value="Druid">Druid</option>
                                <option value="Hunter">Hunter</option>
                                <option value="Mage">Mage</option>
                                <option value="Monk">Monk</option>
                                <option value="Paladin">Paladin</option>
                                <option value="Priest">Priest</option>
                                <option value="Rogue">Rogue</option>
                                <option value="Shaman">Shaman</option>
                                <option value="Warlock">Warlock</option>
                                <option value="Warrior">Warrior</option>
                            </select>
                        </div>

                        <div>
                            <label for="spec">Sua especialização:</label>
                            <input type="text" name="spec" id="spec" placeholder="Especialização do personagem" />
                        </div>
                    </div>
                    <div class="two-col">
                        <div>
                            <label for="lendarios">Seus lendários da spec:</label>
                            <input type="text" name="lendarios" id="lendarios" placeholder="Ex.: Sinister Teachings" />
                        </div>

                        <div>
                            <label for="offspec">Possui offspec viável?</label>
                            <input type="text" name="offspec" id="offspec" placeholder="Consegue raidar com outra spec?" />
                        </div>
                    </div>
                    <label for="raiderio">Link Raider.IO:</label>
                    <input type="text" name="raiderio" id="raiderio" placeholder="Insira o link do seu Raider IO" />
                    <button name="next" class="btn-next envia" />
                    <p>Próximo <i class="ri-arrow-right-line"></i></p></button>
                </div>

                <div class="step-forms">
                    <h1>Dados gerais</h1>
                    <div>
                        <label for="experiencia">Descreva como foi sua experiência de end game no WoW até o momento. Os cores em que participou e as raids que você fez. Cite as guildas desses cores.</label>
                        <textarea name="experiencia" id="experiencia" placeholder="Faça uma breve descrição."></textarea>
                    </div>
                    <div>
                        <label for="procura">O que procura em uma nova guilda/core?</label>
                        <textarea name="procura" id="procura" placeholder="Faça uma breve descrição."></textarea>
                    </div>

                    <button name="previous" class="btn-prev envia" />
                    <p><i class="ri-arrow-left-line"></i> Anterior</p></button>
                    <button name="next" class="btn-next envia" />
                    <p>Próximo <i class="ri-arrow-right-line"></i></p></button>
                </div>

                <div class="step-forms">
                    <h1>Questionário</h1>
                    <div>
                        <label for="regras">Você leu as regras?</label>
                        <select name="regras" id="regras">
                            <option value="" disabled selected>Selecione uma opção</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="banco">Entende que você pode ficar de banco em prol da progressão da guild?</label>
                        <select name="banco" id="banco">
                            <option value="" disabled selected>Selecione uma opção</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>

                    <button name="previous" class="btn-prev envia" />
                    <p><i class="ri-arrow-left-line"></i> Anterior</p></button>
                    <button name="next" class="btn-next envia" />
                    <p>Próximo <i class="ri-arrow-right-line"></i></p></button>
                </div>

                <div class="step-forms">
                    <h1>Dados gerais</h1>
                    <div>
                        <label for="conhecemembro">Você conhece alguém na guild? Se sim, quem?</label>
                        <input type="text" name="conhecemembro" id="conhecemembro" placeholder="Se sim, digite o nickname desta pessoa." />
                    </div>
                    <div>
                        <label for="conheceguild">Você conhece alguém na guild? Se sim, quem?</label>
                        <input type="text" name="conheceguild" id="conheceguild" placeholder="Digite de onde ouviu falar de nós." />
                    </div>
                    <div>
                        <label for="pergunta">Gostaria de fazer alguma pergunta para os officers?</label>
                        <textarea name="pergunta" id="pergunta" placeholder="Digite aqui qualquer dúvida que ainda não tenha sido esclarecida."></textarea>
                    </div>

                    <button name="previous" class="btn-prev envia" />
                    <p><i class="ri-arrow-left-line"></i> Anterior</p></button>
                    <button type="submit" name="next" class="btn-next envia" id="submit-form" />
                    <p>Próximo <i class="ri-arrow-right-line"></i></p></button>
                </div>
            </div>
        </form>
    </main>

    <div class="personagem2 personagens"></div>
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>