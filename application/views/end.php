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
                <h3 class="header"><?php echo $lang['obrigada_title'];?></h3>
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
                                <iframe width="853" height="480" src=<?php echo $lang['video-obrigada'];?> frameborder="0" allowfullscreen></iframe> 
                            </div>

                            <div class="card-content">
                                <!-- <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras2'];?></p> -->
                                <p style="font-size: 16px; text-align: center;"><?php echo "<b> Obrigada por responder pesquisa. </b> " ?></p> 
                                <!-- <p style="font-size: 16px; text-align: justify;"><?php echo "Obrigada por responder pesquisa." ?></p> -->
                                <br />
                                <p style="font-size: 16px; text-align: justify;"><?php echo "Clique no botão abaixo para concluir. Obrigado!"?></p>

                            </div>                                    
                            <br />                                
                        </div>
                    </div>
                </div> 

                <!--
                <div class="col s12 m12 l12">
                    <div class="row center">
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />

                        <div class="card">
                            
                            <div class="card-content">
                                <br />
                                <p style="font-weight: bold; font-size: 16px;"><?php echo "Obrigada por participar da pesquisa.";?></p>
                            </div>
                            <br />
                            
                            
                        </div>
                    </div>
                </div>
                -->

                <div class="row center">                      
                    <a href="<?php echo site_url('Main/logout?lang=' . $_SESSION['lang'])?>" class="btn btn-primary center"><?php echo $lang['logout'];?></a>                           
                </div>

            </div>
        </div>      
    </div> 
</main>  
</body>


