<?php include "language.php"?>
<head>
    <style type="text/css">

        .divTable
        {
            display: table;
            width: 60%;  
        }

        .divTableRow 
        {
            display: table-row;
        }

        .divTableHeading 
        {
             /* background-color: #EEE; */
            display: table-header-group;
            border: none;
        }

        .divTableCellp, .divTableHead 
        {
            border: none;
            display: table-cell;
            padding: 3px 10px;
            /* width: 70%;*/
            vertical-align: middle; 
        }

        .divTableCellb
        {
            border: none;
            display: table-cell;
            padding: 3px 10px;
            vertical-align: middle; 
        }

        .divTableHeading 
        {
             /* background-color: #EEE; */
            display: table-header-group;
            font-weight: bold;
            border: none;
        }

        .divTableFoot 
        {
            /* background-color: #EEE; */
            display: table-footer-group;
            font-weight: bold;
            border: none;
        }

        .divTableBody 
        {
            display: table-row-group;
        }

        
        @media screen and (max-width: 640px) 
        {    
            .divTable
            {
                display: table;
                width: 100%;  
            }
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
                    <br />
                    <h3 class="header"><?php echo $lang['susLibras'];?></h3>
                </div>  
                
                <br/>
                <div class="col s12">
                    <div class="card">
                        <div class="card-image">
                            <!--
                            <div class="video-container">
                                <iframe width="853" height="480" src=<?php echo $lang['video-cadastrar-botao-interprete'];?> frameborder="0" allowfullscreen></iframe>
                            </div>
                            -->
                            
                            <div class="card-content">
                                <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibrasInstrucao'];?></p>
                            </div>
                            <br />

                        <!-- Botão dentro do card    
                        <div class="card-action">
                            <a href="<?php echo site_url('Main/susLibras1?lang=' . $_SESSION['lang'])?>" class="btn btn-primary center"><?php echo $lang['next'];?></a>
                        </div>
                        -->
                    </div>
                </div>  

                <!-- Botão fora do card -->
                <div class="row center">                      
                               
                    <!-- <button type="submit" value="save" class="btn btn-primary center"><?php echo $lang['next'];?></button>    -->
                    <a href="<?php echo site_url('Main/susLibras1?lang=' . $_SESSION['lang'])?>" class="btn btn-primary center"><?php echo $lang['next'];?></a>                           
                            
                </div>                        

                
            </div>
        </div>      
    </div> 
</main>  
</body>
