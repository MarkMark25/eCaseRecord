/*
$(function() {
  $( "#datepicker" ).datepicker({
      dateFormat : 'yy-mm-dd',
      changeMonth : true,
      changeYear : true,
      yearRange: '-100y:c+nn',
      maxDate: '-1d'
  });
  $( "#datepickers" ).datepicker({
    dateFormat : 'yy-mm-dd',
    changeMonth : true,
    changeYear : true,
    yearRange: '-100y:c+nn',
    maxDate: '-1d'
});
});
*/
$(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        minDate: new Date(1980, 2 - 1, 2),
        onSelect: function( selectedDate ) {
            $( "#datepickers" ).datepicker( "option", "minDate", selectedDate );
        }
    });
    $( "#datepickers" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        minDate: new Date(1980, 2 - 1, 2),
        onSelect: function( selectedDate ) {
            $( "#datepicker" ).datepicker( "option", "maxDate", selectedDate );
        }
    });
});
