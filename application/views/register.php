<?php include "language.php"?>
<body>
<main>      
   <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <div class="row center">
                <div class="col s12 m10 offset-m1 bottom-line">
                    <h3 class="header"><?php echo $lang['register'];?></h3>
                </div>  
                
                <br/>
                <div class="col s12">
                    <div class="card">
                        <div class="card-image">
                            <div class="video-container">
                                    <iframe width="853" height="480" src=<?php echo $lang['video-cadastrar-botao-interprete'];?> frameborder="0" allowfullscreen></iframe>
                            </div>
                            
                            </div>
                            <div class="card-content">
                                <p><?php echo $lang['registerInterpreterLabel'];?></p>
                            </div>
                        <div class="card-action">
                            <a href="<?php echo site_url('Main/interpreter?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerInterpreter'];?></a>
                        </div>
                    </div>
                </div>  
                
            </div>
        </div>      
    </div> 
</main>  
</body>