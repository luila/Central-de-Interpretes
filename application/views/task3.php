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
                    <h3 class="header"><?php echo $lang['task3_title'];?></h3>
                </div>

                <!--
                <div class="col s12 m10 offset-m1 bottom-line">
                    <br />
                    <h3 class="header"><?php echo $lang['testInstructions'];?></h3>
                </div>   
                -->   

                <!-- Tarefa 2 reformulada -->
                <div class="col s12 m12 l12">
                    <div class="card"> 
                        <div class="card-image">

                            <div class="video-container">
                                <iframe width="853" height="480" src=<?php echo $lang['video-task3'];?> frameborder="0" allowfullscreen></iframe> 
                            </div>

                            <div class="card-content">
                                <!-- <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras2'];?></p> -->
                                <p style="font-size: 16px; text-align: center;"><?php echo "<b> Agora você fazer tarefa 3: </b> " ?></p>
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Eu quero saber o que você achou de usar este programa (site) até agora, 
                                você achou fácil ou difícil?" ?></p>
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Você responder 10 perguntas sobre isso."?></p>                                
                                <br />
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Clique no botão abaixo para ir para a tela seguinte."?></p>

                            </div>                                    
                            <br />                                
                        </div>
                    </div>
                </div>  

                <!-- Tarefa 3 -->
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
                                        <th><p style="font-weight: bold; font-size: 16px;"><?php echo $lang['T3'];?></p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p style="font-size: 16px;"><?php echo $lang['task3'];?></p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                -->

                <div class="row center">                      
                    <a href="<?php echo site_url('Main/susLibras1?lang=' . $_SESSION['lang'])?>" class="btn btn-primary center"><?php echo $lang['next'];?></a>                           

                    <?php
                        $_SESSION["task3_start"] = $this->User_model->getUserTime();
                    ?>

                </div>

            </div>
        </div>      
    </div> 
</main>  
</body>


