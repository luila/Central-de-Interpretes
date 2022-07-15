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
        <form id='susLibrasForm' method='post' action="<?php echo site_url('Main/submitSusLibras')?>"  class='section'>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <h3 class="header"><?php echo $lang['susLibras'];?></h3>
                        </div>                   
                        
                                           
                        
                        

                    </div>
                </div>
            </div>
        </form>        

    </main>

</body>

