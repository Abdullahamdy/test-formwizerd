<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <title>Document</title>
    <style>
        .container {
            font-family: arial;
            font-size: 24px;
            margin: 25px;
            width: 350px;
            height: 200px;
            outline: dashed 1px black;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="">
            <select id='myselect'>
                <option value="5">new option 5</option>
                <option data-name="2">Option 2</option>
                <option>Option 3</option>

            </select>
        </div>





                <div class="">
            <select id='myselect'>
                <option data-name="1">Option 1</option>
                <option data-name="2">Option 2</option>
                <option value = "new option 1">new option 1</option>

            </select>
        </div>
        <button class="btn btn-success">Reset</button>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
 let log = console.log
    $('select').select2({
        placeholder: "Select a state",
        allowClear: true,
        width: '100%',
    });
    $('button').on('click',function(){
      $('.container select').find(':selected').each(function(key,value){
        $('.container option').filter('[data-name="2"]').remove();
      
        
      })
    })
</script>

</html>
