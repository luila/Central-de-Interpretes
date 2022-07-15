<?php include "language.php"?>
<script>
  var CALENDAR_LANGUAGE = '<?php echo $lang['calendar-lang']; ?>';

   function setLanguageUrl(lang){
      var url = new URL(location.href);
      url.searchParams.set('lang', lang);

      location.href = url.href;
   }
</script>
<!--JavaScript at end of body for optimized loading-->     
<script type='text/javascript' src="<?php echo base_url(); ?>/js/jquery.min.js"></script>    
<script type='text/javascript' src="<?php echo base_url(); ?>/js/moment.min.js"></script>  
<script type='text/javascript' src="<?php echo base_url(); ?>/js/materialize.min.js"></script>      
<script type='text/javascript' src="<?php echo base_url(); ?>/js/fullcalendar.min.js"></script>    
<script type='text/javascript' src="<?php echo base_url(); ?>/js/pt-br.js"></script>   
<script type='text/javascript' src="<?php echo base_url(); ?>/js/en-ca.js"></script>  
<script type='text/javascript' src="<?php echo base_url(); ?>/js/sweetalert2.min.js"></script>  

<head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link rel="stylesheet" href=<?php echo base_url('css/materialize.min.css'); ?> />
   <link rel="stylesheet" href=<?php echo base_url('css/fullcalendar.min.css'); ?> />
   <link rel="stylesheet" href=<?php echo base_url('css/custom.css'); ?> />
   <link rel="stylesheet" href=<?php echo base_url('css/sweetalert2.min.css'); ?> />
   <link rel="stylesheet" media='print' href=<?php echo base_url('css/fullcalendar.print.min.css'); ?> />
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 

<style>
    
    header, main, footer {
      padding-left: 170px;
      padding-right: 170px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
        padding-right: 0;
      }
    }
</style>

</head>

<!--
<ul id="slide-out" class="sidenav sidenav-fixed">
   <li>
      <div class="user-view">
         <div class="background">
            <img src="https://image.freepik.com/free-photo/wall-wallpaper-concrete-colored-painted-textured-concept_53876-31799.jpg" >
         </div>
         -->
         <!-- <a href="#user"><img class="circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCeh3PTvmQsrGtCTJalHTqB0UUNiQkGYgTXK7-1FEbiX-GNMDm2g"></a> -->
         <!--
         <span class="white-text name">Olá</span>
         <a href="#name"><span class="white-text name"><?php if (isset($_SESSION['username'])) {echo $_SESSION['username'];}?></span></a>
         <a href="#email"><span class="white-text email"><?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];}?></span></a>
      </div>
   </li>

  
   
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> 
-->