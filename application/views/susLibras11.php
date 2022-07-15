<?php include "language.php"?>
<head>
    <style type="text/css">

        .divTable
        {
            display: table;
            width: 40%;  
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
                width: 50%;  
            }
        }
   
    </style>
</head>

<body>
    <main>                      
        <form id='susLibrasForm11' method='post' action="<?php echo site_url('Main/submitSusLibras11')?>"  class='section'>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <br />
                            <br />
                            <br />
                            <h3 class="header"><?php echo $lang['susLibras'];?></h3>
                        </div>                   
                        
                        <!-- Pergunta 11 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta11'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div>

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susAdj11'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                
                                        <div class="divTable">
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp">
                                                        <video class="responsive-video" width = "88" height = "113" controls>
                                                            <source src=<?php echo $lang['video-susadj_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="divTableCellp">&nbsp;Pior imaginável</div>
                                                    <div class="divTableCellb"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp">
                                                        <video class="responsive-video" width = "88" height = "113" controls>
                                                            <source src=<?php echo $lang['video-susadj_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="divTableCellp">&nbsp;Horrível</div>
                                                    <div class="divTableCellb">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp">
                                                        <video class="responsive-video" width = "88" height = "113" controls>
                                                            <source src=<?php echo $lang['video-susadj_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="divTableCellp">&nbsp;Ruim</div>
                                                    <div class="divTableCellb">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="divTableRow">
                                                    <div class="divTableCellp">
                                                        <video class="responsive-video" width = "88" height = "113" controls>
                                                            <source src=<?php echo $lang['video-susadj_escala4'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="divTableCellp">&nbsp;OK</div>
                                                    <div class="divTableCellb">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="divTableRow">
                                                <div class="divTableCellp">
                                                        <video class="responsive-video" width = "88" height = "113" controls>
                                                            <source src=<?php echo $lang['video-susadj_escala5'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="divTableCellp">&nbsp;Bom</div>
                                                    <div class="divTableCellb">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableCellp">
                                                        <video class="responsive-video" width = "88" height = "113" controls>
                                                            <source src=<?php echo $lang['video-susadj_escala6'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="divTableCellp">&nbsp;Excelente</div>
                                                    <div class="divTableCellb">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="6" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableCellp">
                                                        <video class="responsive-video" width = "88" height = "113" controls>
                                                            <source src=<?php echo $lang['video-susadj_escala7'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="divTableCellp">&nbsp;Melhor imaginável</div>
                                                    <div class="divTableCellb">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="7" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        
                                    </div>
                                    <br />
                                    
                                
                                </div>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="input-field col s12">    
                                <!--
                                <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?>" class="modal-action modal-close btn grey darken-1 right">
                                    <?php echo $lang['back'];?>
                                </a> -->
                                <button type="submit" value="save" class="btn btn-primary center"><?php echo $lang['save'];?></button>
                                <!-- <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?> -->

                                

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>        

    </main>

</body>