<?php include "language.php"?>
<body>
    <main>  
        <form id='ageForm' method='post' action="<?php echo site_url('Main/submitNewAge')?>" class='section'>
                <div class="container modal-content">  
                    <div class="card-panel">                    
                        <h4 class="header2 center"><?php echo $lang['newAge'];?></h4>

                        
                        <div class="row">
                        <?php echo validation_errors('<div class="card-panel red lighten-5">','</div>'); ?>
                        <div class="col s12 m5">
                                <div>
                                    <iframe src=<?php echo $lang['video-informe-local-descricao'];?> frameborder="0" allowfullscreen></iframe> 
                                </div>
                                <br>   
                        
                                <!-- <blockquote>Informe o local e descrição do evento.</blockquote>    -->
                                <!-- <blockquote>Coloque o local e justifique o a solicitação de intérprete.</blockquote>    --> 
                        <!--
                                <blockquote>Coloque o local e descrição do evento.</blockquote>    
                            </div>
                
                            <div class="input-field col s12">
                                <input id="place" name="place" type="text" class="validate" data-length="100" maxlength="100">
                                <label for="place"><?php echo $lang['place'];?></label>
                            </div>

                            <div class="input-field col s12">
                                <input id="description" name="description" type="text" class="validate" data-length="100" maxlength="100">
                                <label for="description"><?php echo $lang['description'];?></label>
                            </div>   
                            <br>  
                            <div class="col s12">
                                    <div>
                                        <iframe src=<?php echo $lang['video-informe-data-hora'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div>
                                    <br>  
                            -->
                                    <!-- <blockquote>Informe as datas e horário do evento.</blockquote>     -->             
                            <!--
                                    <blockquote>Coloque o dia e hora que precisa de intérprete.</blockquote>
                            </div>
                                                            
                            <div class="input-field col s6">
                                <input id="sdate" name="sdate" type="text" class="validate datepicker">
                                <label for="sdate"><?php echo $lang['sdate'];?></label>
                            </div>

                            <div class="input-field col s6">
                                <input id="edate" name="edate" type="text" class="validate datepicker">
                                <label for="edate"><?php echo $lang['edate'];?></label>
                            </div>

                            <div class="input-field col s6">
                                <input id="stime" type="text" name='stime' class="validate timepicker">
                                <label for="stime"><?php echo $lang['sTime'];?></label>
                            </div>
                            
                            <div class="input-field col s6">
                                <input id="etime" type="text" name='etime' class="validate timepicker">
                                <label for="etime"><?php echo $lang['eTime'];?></label>
                            </div> 

                            <div class="col s12 m5">
                                <div>
                                    <iframe src=<?php echo $lang['video-informe-interprete'];?> frameborder="0" allowfullscreen></iframe> 
                                </div>
                                <br>    
                            -->
                                <!-- <blockquote>Informe os intérpretes que participarão do evento.</blockquote>        -->                      
                            <!--
                                <blockquote>Coloque o nome dos intérpretes que participarão do evento.</blockquote> 
                            </div>

                            <div class="input-field col s12">
                                <select multiple id='interpreterSelect' name='interpreterSelect[]'>
                                    <option value="0" disabled selected><?php echo $lang['select'];?></option>
                                    <?php foreach($result as $row) {?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                    <?php }?>
                                </select>
                                <label><?php echo $lang['chooseInterpreter'];?></label>
                            </div>  
                                        
                            <div class="row">
                                <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?>" class="modal-action modal-close btn grey darken-1 right">
                                    <?php echo $lang['back'];?>
                                </a>

                                <button type="submit" value="save" class="btn btn-primary mr10 right" oncli><?php echo $lang['confirm'];?></button>  
                            </div>
                        </div>
                
                
                    -->                        
                    </div> 
                </div>                   
        </form>
    </main>
    
</body>



<!--

<script>
var urlVideoLocal='<?php echo $lang['video-informe-local'];?>';
var urlVideoDescricao='<?php echo $lang['video-informe-descricao'];?>';
var urlVideoDataInicio='<?php echo $lang['video-informe-data-inicio'];?>';
var urlVideoDataFim='<?php echo $lang['video-informe-data-fim'];?>';
var urlVideoSelecaoInterprete='<?php echo $lang['video-selecione-interprete'];?>';


$('#eventForm').submit(function() {  
    if($('#place').val() == ''){
        showWarningModal('Informe o Local:', urlVideoLocal);
        return false; // return false to cancel form action
    }

    if($('#description').val() == ''){
        showWarningModal('Informe a Descrição:', urlVideoDescricao);
        return false; // return false to cancel form action
    }
      
    if(isValidDate($('#sdate').val()) == false){
        showWarningModal('Informe a Data de Início:', urlVideoDataInicio);
        return false; // return false to cancel form action
    }

    if(isValidDate($('#edate').val()) == false){
        showWarningModal('Informe a Data Fim:', urlVideoDataFim);
        return false; // return false to cancel form action
    }

    if( moment($('#sdate').val(), 'DD-MM-YYYY', true).isAfter(moment($('#edate').val(), 'DD-MM-YYYY', true))){
        showWarningModal('Data Início Maior que Data Fim:', '/assets/video/VisualizarTILS.mp4');
        return false; // return false to cancel form action
    }

    var interpreters = $('#interpreterSelect').val();
    if (interpreters.length == 0 || interpreters.length > 3) {
        showWarningModal('Selecione de <b>1 a 3</b> Interpretes:', urlVideoSelecaoInterprete);   
        return false; // return false to cancel form action
    }
    
    return true;   
});

function showWarningModal(title, videoUrl){
    Swal.fire({
        type: 'warning',
        html:
            title + ' <br><br>' +
            '<video width="400" controls> <source src="' + videoUrl + '" type="video/mp4"></video>',
        showCloseButton: true,
        focusConfirm: false
    }) 
}

function isValidDate(d){
   return moment(d, 'DD-MM-YYYY', true).isValid();
}
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min.js"></script>

-->