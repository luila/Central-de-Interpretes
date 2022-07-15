<?php include "language.php"?>

<head>
  <style type="text/css">
    
    .table-wrapper
    {
      display: block;
      overflow: auto;
    }

    th, td
    {
      vertical-align: middle;
      font-size: 13px;      
      /*text-align: center;*/     
    }

    table
    {
      /*border: 1px solid black;*/
      /*table-layout: fixed;*/
      width: 100%;
    }
  </style>
</head>

<body>
<main>      
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">

          <div class="row center">
            <div class="col s12 m10 offset-m1 bottom-line">
              <h3 class="header"><?php echo $lang['events'];?></h3>
            </div>

            <div class="table-wrapper col s12 m8 offset-m2" style="padding-top: 30px;">
              <table class="centered">
                <thead>
                  <tr>
                      <th>Local</th>
                      <th>Descrição</th>
                      <th>Intérpretes</th>
                      <th style="width:25%">Início</th>
                      <th style="width:25%">Fim </th>
                      <!-- <th>Data Início</th>
                      <th>Data Fim</th> -->
                      <!-- <th>Hora início</th> -->
                  </tr>
                </thead>

                <tbody>
                  <?php foreach($events as $row) {?>
                    <tr>
                      <td><?php echo $row->place;?></td>
                      <td><?php echo $row->description;?></td>        
                      <td><?php echo $row->name;?></td>
                      <td><?php echo $row->start_date;?></td>
                      <td><?php echo $row->end_date;?></td>
                    </tr>    
                  <?php }?>
                </tbody>
              </table>
            </div> 

            <div class="col s12 m8 offset-m2" style="padding-top: 30px;">
              <div id='calendar'></div>
            </div> 

          </div>     

          <div class="row center">                  
            <a href="<?php echo site_url('Main/task3?lang=' . $_SESSION['lang'])?>" class="btn btn-primary center"><?php echo $lang['next'];?></a>                           

            <?php
              $_SESSION["task2_end"] = $this->User_model->getUserTime();
            
            $this->Tasks_model->InsertTask2();
            ?>

          </div>

    </div>
</main>
<body> 

<!-- <div class="fixed-action-btn">
  <a  href="#addEventModal" class="btn-floating btn-large blue tooltipped modal-trigger" data-position="left" data-tooltip="New Event">
    <i class="large material-icons">add</i>
  </a>
</div> -->


<script>
$(document).ready(function(){
  //debugger;
  var pendingEventArray = '<?php echo $pendingEventArray;?>';

  $('#calendar').fullCalendar({
      dayClick: function() 
      {
          alert('a day has been clicked!');
      },
      locale: CALENDAR_LANGUAGE,
      // events: [
      //   {
      //     title: 'All Day Event',
      //     start: '2019-04-04',
      //   },
      //   {
      //     title: 'Long Event',
      //     start: '2019-04-07',
      //     end: '2019-04-10'
      //   }
      // ]
      events: JSON.parse(pendingEventArray)
  });
});
</script>