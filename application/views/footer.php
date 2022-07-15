<script>
        $(document).ready(function(){
            $('.modal').modal();
            $('.fixed-action-btn').floatingActionButton();
            $('.tooltipped').tooltip();
            $('.sidenav').sidenav();
            $('.collapsible').collapsible();
            $('input#title').characterCounter();
            $('select').formSelect();
            $('.datepicker').datepicker({ 
                    format: 'dd-mm-yyyy',           
            });

            if(CALENDAR_LANGUAGE == 'pt-br')
            {
                $('.datepicker').datepicker({ 
                    firstDay: true, 
                    format: 'dd-mm-yyyy',
                    i18n: 
                    {
                        months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                        monthsShort: ["Jan", "Fev", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dec"],
                        weekdays: ["Domingo","Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
                        weekdaysShort: ["Dom","Seg", "Ter", "Qua", "Qui", "Sex", "Sab"],
                        weekdaysAbbrev: ["D","S", "T", "Q", "Q", "S", "S"]
                    }
                });
            }
        });

        $('.timepicker').timepicker({
            twelveHour: false// change to 12 hour AM/PM clock from 24 hour
        });
</script>