<html>
    <head>
        <meta charset="utf-8" />
        <title>Dashboard API</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="_token" content="{!! csrf_token() !!}"/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <form id="frm_register" action="#" method="POST" >
            <input type="text" id="txt_name" /> <br>
            <input type="text" id="txt_email" /> <br>
            <input type="text" id="txt_password" /> <br>
            <input type="text" id="txt_password_confirm"/> <br>
            <button id="btn_save">Simpan</button>
        </form>
    </body>
</html>
<script>

    $(document).ready(function(){ 
        $("#btn_save").on("click", function(){
            $.ajax({
                type:"POST",
                data:$('#frm_register').serialize(),
                url:"./register_process",
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },               
                dataType: 'json',
                success:function(response){
                    console.log(JSON.stringify(response));
                },
                error:function(response){
                    console.log(response);
                }
            });
        });
    })

   
     
    
</script>