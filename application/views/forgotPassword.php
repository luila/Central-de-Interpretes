<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
     
      <!--Import materialize.css-->
      <link rel="stylesheet" href=<?php echo base_url('css/materialize.css'); ?> />     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="section"></div>
        <main>
            <center>
                <div class="container">
                    
                    <div class="z-depth-1 lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="post">
                        <img class="responsive-img" style="width: 150px;" src=<?php echo base_url('img/logo.png'); ?> />    
                        <h5 class="indigo-text">Forgot Password</h5>
                        
                        <div class="section"></div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <a href="#modal1" class="material-icons prefix modal-trigger">personal_video</a>
                                <input class='validate' type='email' name='email' id='email' />
                                <label for='email'>Email</label>
                            </div>
                        </div>
 
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Obtain Password</button>
                            </div>
                        </center>         
                    </form>
                    </div>
                </div>
               
            </center>
        </main>

        <!--JavaScript at end of body for optimized loading-->     
        <script type='text/javascript' src="<?php echo base_url(); ?>/js/jquery-3.3.1.min.js"></script>    
        <script type='text/javascript' src="<?php echo base_url(); ?>/js/materialize.min.js"></script>       
    </body>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
    </script>
     <!-- Modal Structure -->
    <div id="modal1" class="modal" style='height: 380px;width: 450px;'>
        <div class="modal-content">
            <h4>Sign</h4>
            <video width="400" controls>
                                <source src="mov_bbb.mp4" type="video/mp4">
                                <source src="mov_bbb.ogg" type="video/ogg">
                                Your browser does not support HTML5 video.
            </video>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
  </html>
