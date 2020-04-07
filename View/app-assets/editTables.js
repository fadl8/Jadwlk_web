$(function(){  

    console.log('hi from edit tables');
    // Editaddrow
    $('#Editaddrow').click(function () {

        let EditrowCount =parseInt( $("#EditrowCountinput").val());
        var totalths = $('.th').length;
        var trcon = '<tr>';
        for (var i = 0; i < totalths; i++) {
            var trcon = trcon + ' <td class="td" align="center"  > المحتوي</td>';
        }
        var trcon = trcon + ' </tr>';

        $(trcon).appendTo('#table tbody');
        $("#EditrowCountinput").val(EditrowCount + 1);
    });

      // delete row
      $('#Editdeleterow').click(function () {
        let countRow = parseInt( $("#EditrowCountinput").val());
        $("#EditrowCountinput").val(countRow -1);
        $('#table tr:last').remove();
    });

    
    $('#Editaddcolumn').click(function () {
        cloumnCount = parseInt( $("#EditcolumnCountinput").val());
        

        $('<th class="th"><input type="text" placeholder="ادخل اسم العمود" style="width:100%;" name="0-column'+cloumnCount+'" ></th>')
           .appendTo('#table thead tr');

        $('<td class="td" align="center" > المحتوي</td>').appendTo('tbody tr');
        
        $("#EditcolumnCountinput").val(cloumnCount + 1 );
    });


    $('#Editdeletecolumn').click(function () {
        $('#table td:last-child').remove();
 

        let columnCoun = parseInt( $("#EditcolumnCountinput").val() );
        $("#EditcolumnCountinput").val(columnCoun -1);
        $('#table th:last-child').remove();
    });



});