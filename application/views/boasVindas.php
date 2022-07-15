<?php include "language.php"?>
<head>
    <style type="text/css">

       
        .paragrafo
        {
            text-align: justify;
            font-size: 16px;
        }
   
    </style>
</head>

<body>
    <main>                      
        <form id='tcleform' method='post' action="<?php echo site_url('Main/submitTCLE')?>"  class='section'>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <h3 class="header"><?php echo $lang['welcome'];?></h3>
                        </div>   

                
                        <br/>
                        <div class="col s12">
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['tcle'];?> frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    
                                    <!--
                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['tcle-text'];?></p>
                                    </div>
                                    <br />
                                    -->

                                    <div class="container">
                                        <br />

                                        <p style="font-weight: bold; font-size: 16px;"><?php echo "TERMO DE CONSENTIMENTO LIVRE E ESCLARECIDO"?></p>

                                        <!--
                                        <p class="paragrafo"><?php echo "O (a) sr (a) está sendo convidado (a) a participar, como voluntário (a), em uma pesquisa, 
                                        intitulada: Construção e Validação da versão em  Libras da Escala de Usabilidade do Sistema. Eu, Luíla Moraes de Oliveira e Cássio Leonardo 
                                        Rodrigues, somos os pesquisadores responsáveis por essa pesquisa. Após ler com atenção este documento e ser esclarecido (a) sobre as informações 
                                        a seguir, no caso de aceitar fazer parte do estudo, clique no ícone que se encontra no final deste documento: “Li e concordo”. Em caso de dúvida 
                                        sobre a pesquisa, você poderá entrar em contato com os pesquisadores responsáveis: Luíla Moraes de Oliveira pelo email luilamoliveira@gmail.com, 
                                        ou Cássio Leonardo Rodrigues pelo email cassio@inf.ufg.br."?>
                                        </p>
                                        -->

                                        <p class="paragrafo"><?php echo "O (a) sr (a) está sendo convidado (a) a participar, como voluntário (a), em uma pesquisa, 
                                        intitulada: Construção e Validação da versão em  Libras da Escala de Usabilidade do Sistema. Eu, Luíla Moraes de Oliveira e Cássio Leonardo 
                                        Rodrigues, somos os pesquisadores responsáveis por essa pesquisa. Após ler com atenção este documento e ser esclarecido (a) sobre as informações 
                                        a seguir, no caso de aceitar fazer parte do estudo, marque a caixa de opção abaixo “Li e concordo” e clique no botão “PRÓXIMA”. Em caso de dúvida 
                                        sobre a pesquisa, você poderá entrar em contato com os pesquisadores responsáveis: Luíla Moraes de Oliveira pelo email luilamoliveira@gmail.com, 
                                        ou Cássio Leonardo Rodrigues pelo email cassio@inf.ufg.br."?>
                                        </p>
                        

                                    </div>                                      

                                    <div class="container">
                                        <div class="row center">
                                            <!-- <div class="col s6 left-align offset-m3"> -->

                                            <div class="col s11 center-align offset-m1" >
                                                <!--
                                                <p>
                                                    <label>
                                                        <input type="checkbox" class="filled-in" checked="checked" />
                                                        <span>Filled in</span>
                                                    </label>
                                                </p>
                                                -->
                                                                                                
                                                <p>
                                                    <label>
                                                        <input type="checkbox" class="filled-in" checked="checked" name="tcle" value="sim" required="required" />  
                                                        <span style="font-weight: bold; font-size: 16px;">Li e concordo</span>
                                                    </label>
                                                </p>
                                                
                                                <!--
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="surdez" type="radio" value="Não aceito" required="required" />
                                                        <span>2- Não Surdo</span>
                                                    </label>
                                                </p>	
                                                -->	

                                                <!-- Botão fora do card 
                                                <div class="row center">                      
                                                            
                                                    
                                                    <a href="<?php echo site_url('Main/questionnaire?lang=' . $_SESSION['lang'])?>" class="btn btn-primary center"><?php echo $lang['next'];?></a>                           
                                                            
                                                </div>	
                                                -->						
                                                
                                                <div class="row center">
                                                    <div class="input-field col s12">    
                                                        <button type="submit" value="save" class="btn btn-primary center"><?php echo $lang['next'];?></button>
                                                    </div>
                                                </div>


                                            </div>							
                                        </div>               
                                    </div> 

                                    <div class="container">

                                        <p style="font-weight: bold; font-size: 16px;"><?php echo "INFORMAÇÕES IMPORTANTES SOBRE A PESQUISA"?></p>

                                        <p class="paragrafo"><?php echo "<b> Título:</b> CONSTRUÇÃO E VALIDAÇÃO DA VERSÃO EM LIBRAS DA ESCALA DE USABILIDADE DO SISTEMA."?>
                                        </p>

                                        <p class="paragrafo"><?php echo "<b> Informações sobre quem está aplicando o termo de consentimento: </b> Luíla Moraes de Oliveira é aluna 
                                        de mestrado do Instituto de Informática da UFG. Cássio Leonardo Rodrigues é professor do Instituto de Informática  da UFG."?>
                                        </p>

                                        <p class="paragrafo"><?php echo "<b> Objetivos geral da pesquisa: </b> Aplicar e validar versão em Libras da Escala de Usabilidade do Sistema."?>
                                        </p>

                                        <p class="paragrafo"><?php echo "<b> Detalhamento dos procedimentos: </b> Gostaríamos de contar com sua colaboração para responder os questionários 
                                        contendo: Dados Pessoais, Solicitação de Intérprete da Libras para uma aula e Escala de Usabilidade do Sistema. Os questionários estão na versão em 
                                        Língua Brasileira de Sinais - Libras. "?>
                                        </p>

                                        <p class="paragrafo"><?php echo "<b> Forma de acompanhamento: </b> O participante terá livre acesso aos contatos dos pesquisadores para responder suas 
                                        dúvidas."?>
                                        </p>

                                        <p class="paragrafo"><?php echo "<b> Especificação dos riscos, desconforto, que podem ser provocados pela pesquisa: </b> Você não terá nenhum risco físico, 
                                        nem desconforto, visto que consta de responder os questionários sobre dados pessoais, solicitação de intérprete para aula e Escala de Usabilidade do Sistema."?>
                                        </p>

                                        <p class="paragrafo"><?php echo "<b> Informação sobre o direito de pleitear indenização em caso de danos decorrentes de sua participação na pesquisa: </b> Você 
                                        terá o direito de ser indenizado caso tenha danos comprovadamente decorrentes do estudo."?>
                                        </p>

                                        <p class="paragrafo"><?php echo " <b> Informação sobre o direito de ressarcimento de despesas pela sua participação:</b> Não haverá despesa alguma para você. 
                                        A sua participação é facultativa / voluntária."?>
                                        </p>

                                        <p class="paragrafo"><?php echo " <b> Esclarecer que não haverá nenhum tipo de pagamento ou gratificação financeira pela sua participação: </b>Esta pesquisa não 
                                        pagará nada a você."?>
                                        </p>

                                        <p class="paragrafo"><?php echo " <b> Descrever os benefícios decorrentes da participação na pesquisa: </b>Você contribuirá no desenvolvimento de softwares para pessoas 
                                        surdas."?>
                                        </p>

                                        <p class="paragrafo"><?php echo " <b> Esclarecer sobre o período de participação e término:</b> O tempo previsto para participação é de aproximadamente 10 a 20 minutos."?>
                                        </p>

                                        <p class="paragrafo"><?php echo " <b> Garantir o sigilo: </b> Você tem a garantia de que os dados da pesquisa só serão utilizados para o fim de validar a versão em 
                                        Libras da Escala de Usabilidade do Sistema. "?>
                                        </p>

                                        <p class="paragrafo"><?php echo "<b> Apresentar a garantia expressa de liberdade de não aceitação, bem como de retirar o consentimento, sem qualquer prejuízo 
                                        da continuidade do acompanhamento / tratamento usual: </b>Você tem a liberdade de retirar o seu consentimento a qualquer momento, sem prejuízo do estudo."?>
                                        </p>

                                        <br />

                                
                        

                                    </div>                                   

                                </div>

                            
                            </div>
                        </div>  

                        
                    </div> 
                </div>                
            </div>
        </form>        

    </main>

</body>
