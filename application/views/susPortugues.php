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

<body>
    <main>                      
        <form id='susPortuguesForm' method='post' action="<?php echo site_url('Main/submitSusPortugues')?>"  class='section'>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <h3 class="header"><?php echo $lang['susPortugues'];?></h3>
                        </div>    

                        <!-- Introdução -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibrasInstrucao'];?></p>
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>               
                        
                        <!-- Pergunta 1 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras1'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q1" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q1" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q1" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q1" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q1" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 2 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras2'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q2" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q2" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q2" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q2" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q2" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 3 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras3'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q3" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q3" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q3" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q3" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q3" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 4 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras4'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q4" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q4" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q4" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q4" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q4" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 5 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras5'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q5" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q5" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q5" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q5" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q5" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 6 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras6'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q6" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q6" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q6" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q6" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q6" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 7 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras7'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q7" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q7" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q7" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q7" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q7" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 8 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras8'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q8" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q8" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q8" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q8" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q8" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 9 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras9'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q9" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q9" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q9" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q9" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q9" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 10 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras10'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable" >
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q10" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Discordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q10" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Neutro</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q10" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concorcordo parcialmente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q10" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Concordo completamente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q10" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <!-- Pergunta 11 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susAdj11'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container" style="display: flex; align-items: center; justify-content: center;">   
                                    
                                        <div class="divTable">
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <!-- <div class="divTableCell" style="text-align:right;">&nbsp;Discordo completamente</div> -->
                                                    <!-- <div class="divTableCell" style="text-align:left;">&nbsp;Radio1</div> -->
                                                    <div class="divTableCellp" style="text-align:right; text-indent: 75px;">&nbsp;⁣Pior imaginável</div>
                                                    <div class="divTableCellb" style="text-align:left;"> &nbsp;
                                                    <!-- <p> -->
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="1" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    <!-- /p>    -->

                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Horrível</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="2" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Ruim</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="3" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;OK</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="4" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Bom</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="5" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Excelente</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="6" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCellp" style="text-align:right;">&nbsp;Melhor imaginável</div>
                                                    <div class="divTableCellb" style="text-align:left;">&nbsp;
                                                        <label>
                                                            <input class="with-gap" name="q11" type="radio" value="7" required="required"/>  
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
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
