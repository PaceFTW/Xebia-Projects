<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginForm</title>
    <link rel="stylesheet" href="files/css/main.css">
</head>

<body>
    <div class="container">
        <div class="mainloginform">
            <div class="logo">
                <img src="files/img/logo-b.png" alt="" srcset="">
            </div>
            <div class="heading">
                <h3>Student Login</h3>
            </div>
            <form action="">
                <div class="systemid">
                    <label for="username">System ID</label>
                    <div class="image">
                        <img src="files/img/otp.png" alt="">
                    </div>
                    <input type="text" id="username" class="username">
                </div>
                <div class="otp">
                    <label for="code">OTP</label>
                    <input type="text" id="code" class="otp_student">
                </div>
                <div class="subbtn">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
       
    </div>
<script src="files/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#username").on({
            focus :function(){
                $(this).css("border-bottom", "2px solid rgb(221, 17, 143)")
            },
            blur :function(){
                $(this).css("border-bottom", "2px solid lightgray")
            }
        })


        $("#code").on({
            focus :function(){
                $(this).css("border-bottom", "2px solid rgb(221, 17, 143)")
            },
            blur :function(){
                $(this).css("border-bottom", "2px solid lightgray")
            }
        })
    })
</script>
</body>

</html>