<?php include "language.php"?>
<body>
    <main>  
        <form id='eventForm' method='post' action="<?php echo site_url('Main/submitEvent')?>" class='section'>
                <div class="container modal-content">  

                    <div class="col s12 m10 offset-m1 bottom-line">
                        <br />
                        <h3 class="header center"><?php echo $lang['newEvent'];?></h3>
                    </div> 

                    <!-- Lembrete -->
                    <!--
                    <div class="col s12 m12 l12">                       
                        <div class="card-panel teal lighten-5">
                            <<table class="centered">
                                <thead>
                                    <tr>
                                        <th><p style="font-weight: bold; font-size: 16px;"><?php echo $lang['lembrete'];?></p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p style="font-size: 16px;"><?php echo $lang['lembretetask1'];?></p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                       
                    </div> 
                    -->

                    <div class="card-panel teal lighten-5">                                        
                        <div class="row">
                            <?php echo validation_errors('<div class="card-panel red lighten-5">','</div>'); ?>

                            <div class="col s12">
                                <div class="video-container">
                                    <div>
                                        <iframe src=<?php echo $lang['video-task1-lembrete'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 
                                </div>

                                <div class="container">
                                    <div class="card-content">
                                        <!-- <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['susLibras2'];?></p> -->
                                        <p style="font-size: 16px; text-align: center;"><?php echo "<b> Exemplo: </b> " ?></p>
                                        <p style="font-size: 14px; text-align: justify;"><?php echo "Local da aula: Sala 15" ?></p>
                                        <p style="font-size: 14px; text-align: justify;"><?php echo "Aula de quê? Ciências"?></p> 
                                        <p style="font-size: 14px; text-align: justify;"><?php echo "Data início e data fim: Amanhã"?></p>                                
                                        <p style="font-size: 14px; text-align: justify;"><?php echo "Hora início: 14:00"?></p>                                
                                        <p style="font-size: 14px; text-align: justify;"><?php echo "Hora fim: 16:00"?></p>
                                        <p style="font-size: 14px; text-align: justify;"><?php echo "Intérprete: José da Silva"?></p>
                                        <p style="font-size: 14px; text-align: justify;"><?php echo " <b>Mas você é livre para preencher com as informações que quiser. </b>"?></p>
                                        <br />
                                    </div> 
                                </div>  
                            </div>
                        </div>
                    </div>

                    <br />

                    <div class="card-panel">  
                        <!--                  
                        <h4 class="header2 center"><?php echo $lang['newEvent'];?></h4>
                        <br />
                        -->                                       
                        <div class="row">
                            <?php echo validation_errors('<div class="card-panel red lighten-5">','</div>'); ?>

                            <div class="col s12">
                                <div class="video-container">
                                    <div>
                                        <iframe src=<?php echo $lang['video-informe-local-descricao'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 
                                </div>
                                <!--
                                <div class="video-container">                
                                    <video class="responsive-video" width = "250 " height = "180" controls>
                                        <source src=<?php echo $lang['video-informe-local-descricao'];?> type = "video/mp4" />
                                    </video>
                                </div>-->
                                <br>   

                                <!-- <blockquote>Informe o local e descrição do evento.</blockquote>    -->
                                <!-- <blockquote>Coloque o local e justifique o a solicitação de intérprete.</blockquote>    --> 
                                <blockquote>Coloque as informações sobre a aula.</blockquote>    
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

                            <!-- Antes estava assim: diminuía o tamanho do vídeo
                            <div class="col s12 m5"> -->
                            <div class="col s12">
                                <div class="video-container">
                                    <div>
                                        <iframe src=<?php echo $lang['video-informe-data-hora'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div>
                                </div>
                                <br>  

                                <!-- <blockquote>Informe as datas e horário do evento.</blockquote>     -->             
                                <blockquote>Coloque o dia hora da aula.</blockquote>
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

                            <div class="col s12">
                                <div class="video-container">
                                    <div>
                                        <iframe src=<?php echo $lang['video-informe-interprete'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div>
                                </div>
                                <br>    

                                <!-- <blockquote>Informe os intérpretes que participarão do evento.</blockquote>        -->                      
                                <blockquote>Escolha o intérprete para a aula.</blockquote> 
                            </div>

                            <div class="input-field col s12">
                                <select multiple id='interpreterSelect' name='interpreterSelect[]'>
                                    <option value="0" disabled selected><?php echo $lang['select'];?></option>
                                    <?php foreach($result as $row) {?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                    <?php }?>
                                </select>
                                <!-- <label><?php echo $lang['chooseInterpreter'];?></label> -->
                            </div>  

                            <!--            
                            <div class="row">
                               
                                <a href="<?php echo site_url('Main/testTasks?lang=' . $_SESSION['lang'])?>" class="modal-action modal-close btn grey darken-1 right"> 
                                    <?php echo $lang['back'];?>
                                </a>

                                <button type="submit" value="save" class="btn btn-primary mr10 right" oncli><?php echo $lang['confirm'];?></button>  
                            </div>
                            -->

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