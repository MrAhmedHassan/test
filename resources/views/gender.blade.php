<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
</head>
<body>

<label>all</label>
    <input type="radio" name='gender' value="all" class="gender" checked>

<label>male</label>
    <input type="radio" name='gender' value="male" class="gender">

<label>female</label>
    <input type="radio" name='gender' value="female" class="gender">

    {{-- <form>
    <div class="form-group">

        <button class="btn btn-success btn-submit">Submit</button>

    </div> --}}



</form>
    
    <script type="text/javascript">

    var name = "ahmed";
    var vale = $("input[name='gender']:checked").val();
    console.log(vale);

    $.ajaxSetup({
    
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({

       type:'POST',

       url:'/ajax',

       data:{gender:vale},

       success:function(data){

        console.log(data.success);
       }

    });

    $("input[name='gender']") .change(function () { 
        var vale = $("input[name='gender']:checked").val();
        $.ajaxSetup({
    
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
         

        $.ajax({
    
               type:'POST',
    
               url:'/ajax',
    
               data:{gender:vale},
    
               success:function(data){
    
                  console.log(data.success);
               }
    
            });
       

});  

        
    
    </script>
</body>
</html>