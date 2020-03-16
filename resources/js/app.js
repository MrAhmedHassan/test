require('./bootstrap');


var gender = $("input[name='gender']:checked").val();
$.ajaxSetup({

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$.ajax({

   type:'POST',

   url:'/ajax',

   data:{gender:gender},

   success:function(data){

    console.log(data.success);
   }

});

$("input[name='gender']") .change(function () { 
    var gender = $("input[name='gender']:checked").val();
    $.ajaxSetup({

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
     

    $.ajax({

           type:'POST',

           url:'/ajax',

           data:{gender:gender},

           success:function(data){

              console.log(data.success);
           }

        });
   

});  
