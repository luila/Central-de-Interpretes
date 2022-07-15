<?php include "language.php"?>
<body>
<main> 
  
    <form id='interpreterForm' method='post' action="<?php echo site_url('Main/submitNewInterpreter')?>"  class='section'> 
        <div class="container modal-content">                 
            <!-- <div class="col s12 m12 l6"> estava antes -->
            <div class="col s12">
                <div class="card-panel">

                    <h4 class="header2 center"><?php echo $lang['newInterpreter'];?></h4>

                    <div class="video-container">
                        <div class='center'>
                            <iframe src=<?php echo $lang['video-cadastrar-interprete'];?> frameborder="0" allowfullscreen></iframe> 
                        </div>
                    </div>

                    <blockquote><?php echo $lang['registerNewSLIS'];?></blockquote>

                    <div class="row">    
                        <?php echo validation_errors('<div class="card-panel red lighten-5">','</div>'); ?>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="mdi-action-account-circle prefix"></i>            
                                <input id="name" name="name" type="text" class="validate" data-length="80" maxlength="80">
                                <label for="name"><?php echo $lang['name'];?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="mdi-communication-email prefix"></i>
                                <input id="email" name="email" type="email" class="validate" data-length="150" maxlength="150">
                                <label for="email"><?php echo $lang['email'];?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="mdi-action-lock-outline prefix"></i>
                                <input id='password' class='validate' type='password' name='password' id='password' />
                                <label for='password'><?php echo $lang['loginPasswordInput'];?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">    
                            <!-- <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?>" class="modal-action modal-close btn grey darken-1 right"> -->
                            <a href="<?php echo site_url('Main/testTasks?lang=' . $_SESSION['lang'])?>" class="modal-action modal-close btn grey darken-1 right">
                                <?php echo $lang['back'];?>
                            </a>
                            <button type="submit" value="save" class="btn btn-primary right mr10"><?php echo $lang['confirm'];?></button>
                        </div>
                    </div>
                </div>                           
            </div>    
        </div>
                         
    </form>
</main>
<body>

<script>
    var urlVideoNome='<?php echo $lang['video-informe-nome'];?>';
    var urlVideoEmail='<?php echo $lang['video-informe-email'];?>';
    var urlVideoSenha='<?php echo $lang['video-informe-senha'];?>';

// chama esse evento quando clica em cadastrar(antes do envio para o controller)
    $('#interpreterForm').submit(function() { 
        // valida se o nome é string vazio  
        // essa validação pode melhorar, numero maximo de caracteres por exemplo.
        if($('#name').val() == ''){
            // exibe erro na tela
            showWarningModal('Informe o Nome:', urlVideoNome);
            // retorna falso porque dados estão invalidos
            return false; // return false to cancel form action
        }

        if($('#email').val() == ''){
            showWarningModal('Informe o email:', urlVideoEmail);
            return false; // return false to cancel form action
        }
        
        if($('#password').val() == ''){
            showWarningModal('Informe a Senha:', urlVideoSenha);
            return false; // return false to cancel form action
        }
        // Chama o controller
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
</script>