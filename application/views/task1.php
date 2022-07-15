<?php include "language.php"?>

<head>
  <style type="text/css">
    
    .table-wrapper
    {
      display: block;
      overflow: auto;
      border: none;
    }

    th, td
    {
      vertical-align: middle;
      font-size: 13px;     
      border: none; 
      /*text-align: center;*/     
    }

    table
    {
      /*border: 1px solid black;*/
      /*table-layout: fixed;*/
      width: 100%;
      border: none;
    }
  </style>
</head>

<?php include "language.php"?>
<body>
<main>      
   <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row center">
                <div class="col s12 m10 offset-m1 bottom-line">
                    <h3 class="header"><?php echo $lang['task1_title'];?></h3>
                </div>
                <!--
                <div class="col s12 m10 offset-m1 bottom-line">
                    <br />
                    <h3 class="header"><?php echo $lang['testInstructions'];?></h3>
                </div>   
                -->   

                <!-- Tarefa 1 reformulada -->
                <div class="col s12 m12 l12">
                    <div class="card"> 
                        <div class="card-image">

                            <div class="video-container">
                                <iframe width="853" height="480" src=<?php echo $lang['video-task1'];?> frameborder="0" allowfullscreen></iframe> 
                            </div>

                            <div class="card-content">
                                <!-- <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras2'];?></p> -->
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Você vai fazer três tarefas, e preciso que você faça até o final."?></p>
                                <br />
                                <p style="font-size: 16px; text-align: center;"><?php echo "<b> Agora você fazer tarefa 1: </b> " ?></p>
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Primeiro, eu vou te dar um exemplo, mas 
                                você é livre para preencher com as informações que quiser." ?></p>
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Imagine por exemplo, que você é um aluno, e tem uma aula, por exemplo de Ciências 
                                amanhã na sala de aula número 15. A sua aula, por exemplo, começa 2 horas da tarde e termina 4 horas da tarde. Você precisa chamar um intérprete 
                                de Libras, por exemplo o José, para te acompanhar na aula."?></p>
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Na próxima tela você escreve as informações e pede para agendar o compromisso da aula."?></p>
                                <br />
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Clique no botão abaixo para ir para a tela seguinte."?></p>

                            </div>                                    
                            <br />                                
                        </div>
                    </div>
                </div>  

                <!-- Tarefa 1 antiga -->
                <!--
                <div class="col s12 m12 l12">
                    <div class="row center">
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="card">
                            <table class="centered">
                                <thead>
                                    <tr>
                                        <th><p style="font-weight: bold; font-size: 16px;"><?php echo $lang['T1'];?></p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p style="font-size: 16px;"><?php echo $lang['task1'];?></p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
                -->
                
                <div class="row center">                      
                    <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="btn btn-primary center"><?php echo $lang['next'];?></a>                           
                    <?php
                        $_SESSION["task1_start"] = $this->User_model->getUserTime();
                    ?>                
                </div>
                

            </div>
        </div>      
    </div> 
</main>  
</body>


