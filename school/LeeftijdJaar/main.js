/**
 * Created by Thimo on 2-9-2015.
 */
$(document).ready(function() {
    //$(".txtJaar").keydown(function(event) {
    //    // Allow only backspace and delete
    //    if ( event.keyCode == 46 || event.keyCode == 8 ) {
    //        // let it happen, don't do anything
    //    }
    //    else {
    //        // Ensure that it is a number and stop the keypress
    //        if (event.keyCode < 48 || event.keyCode > 57 ) {
    //            event.preventDefault();
    //        }
    //    }
    //});

        //$('#selectpls').change(function() {
        //    var asd = $("#selectpls option:selected").text();
        //    $('h2').text(asd);
        //    //alert($("#selectpls option:selected").text());
        //});
    $('select').SumoSelect({placeholder: 'Maak een keuze'});



    $('.select-all').click(function() {
        if ($(this).hasClass('selected')) {
            $('select')[0].sumo.unSelectAll();
        }

    });

/*

    $('.select-all').dblclick(function (event) {
        $('select')[0].sumo.unSelectAll();
    });

    $('li[data-val="Selecteer Alles"]').click(function (event) {

        if($('li[data-val="Selecteer Alles"]').hasClass("selected")){
            $('select')[0].sumo.unSelectAll();
        }
        else{
            $('select')[0].sumo.selectAll();
        }

    });
*/




});