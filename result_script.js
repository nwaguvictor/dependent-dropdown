$(document).ready(function(){

    $.ajax({
        url:'action.php',
        type: 'post',
        data:{action:"select"},
        success:function(resp){
            $("#category").html(resp);
        }
    })

    $("#category").change(function(){
         let catId = $(this).val();
        $.ajax({
            url:'action.php',
            type:'POST',
            data:{catId:catId},
            success:function(resp){
                $('#cat_list').slideDown('fast');
                $('#cat_list').html(resp);
                // alert(resp);
            }
        })
    })


  
})