
$(function(){  

    let rowCount = cloumnCount = 1 ;
        //add head
        
         //add head
//          rowCountinput
//          columnCountinput
         $('#addcolumn').click(function () {
            cloumnCount = cloumnCount + 1 ;

            $('<th class="th"><input type="text" placeholder="ادخل اسم العمود" style="width:100%;" name="column'+cloumnCount+'" ></th>')
               .appendTo('#table thead tr');

            $('<td class="td" align="center" > المحتوي</td>').appendTo('tbody tr');
            
            $("#columnCountinput").val(cloumnCount);
        });

        
        //add row
        $('#addrow').click(function () {
            rowCount = rowCount + 1 ;
            var totalths = $('.th').length;
            var trcon = '<tr>';
            for (var i = 0; i < totalths; i++) {
                var trcon = trcon + ' <td class="td" align="center"  > المحتوي</td>';
            }
            var trcon = trcon + ' </tr>';

            $(trcon).appendTo('#table tbody');
            $("#rowCountinput").val(rowCount);
        });
        // delete row
        $('#deleterow').click(function () {
            let countRow =  $("#rowCountinput").val();
            countRow = countRow -1 ;
            $("#rowCountinput").val(countRow);

            $('#table tr:last').remove();
        });

        $('#deletecolumn').click(function () {
            $('#table td:last-child').remove();
        });

        $('#deletecolumn').click(function () {
            let columnCoun =  $("#columnCountinput").val();
            columnCoun = columnCoun -1 ;
            $("#columnCountinput").val(columnCoun);
            $('#table th:last-child').remove();
        });


        

        $( "#sliedNav li" ).mouseover( function() {
              $(this).find( "a" ).css( "color", "#fff" );
              $(this).find( "i" ).css( "color", "#fff" );
          });

          $( "#sliedNav li" ).mouseleave( function() {
            $(this).find( "a" ).css( "color", "#000" );
            $(this).find( "i" ).css( "color", "#000" );
        });

       


    
    $("#ChangImage").change(function(){
       let url =  $("#ChangImage :selected").attr("data-path");
         if(url){
            $("#Putimage").attr("src","../Model/upload/" + url +"");
         }else {
            $("#Putimage").attr("src","app-assets/images/8.jpg"); 
         }
    });

    $("#DownloadTableAsImageBtn").on("click",function(){
        var element = $("#DownloadTableAsImageDiv")[0];
        html2canvas(element).then(function(canvas) {
            $("#DownloadTableAsImagelink").attr('href',canvas.toDataURL("image/png"));
            $("#DownloadTableAsImagelink").attr('download',"Image.png");
            $("#DownloadTableAsImagelink")[0].click();

        });
    });



});
 


 