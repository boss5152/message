//顯示提示待改良
// $(document).ready(function(){
//     var tips = $("#tips").val();
//     if( tips != ''){
//         alert(tips);
//     }
// })

//註冊登入檢驗-------------
$(document).ready(function(){
    //暱稱
    $("#nickname").keyup(function(){
        var stringNickname = $("#nickname").val();
        ((stringNickname.length > 5) || (stringNickname.length < 1) || (/[^A-Za-z0-9]/.test(stringNickname)))
         ? errorNickname()
         : correctNickname();
    });
    //帳號
    $("#account").keyup(function(){
        var stringAccount = $("#account").val();
        ((stringAccount.length > 12) || (stringAccount.length < 2) || (/[^A-Za-z0-9]/.test(stringAccount)))
         ? errorAccount()
         : correctAccount();
    });
    //密碼
    $("#password").keyup(function(){
        var stringPassword = $("#password").val();
        ((stringPassword.length > 12) || (stringPassword.length < 2) || (/[^A-Za-z0-9]/.test(stringPassword)))
         ? errorPassword()
         : correctPassword();
    });
});

//暱稱驗證
//沒過
function errorNickname(){
    $("#msgNickname").html("暱稱需介於一到五字且不可有空白等特殊字元");
    $("#btnRegister").attr('disabled', true);
}
//有過
function correctNickname(){
    $("#msgNickname").html("");
    $("#btnRegister").attr('disabled', false);
}

//帳號驗證
//沒過
function errorAccount(){
    $("#msgAccount").html("暱稱需介於一到五字且不可有空白等特殊字元");
    $("#btnRegister").attr('disabled', true);
    $("#btnLogin").attr('disabled', true);
}
//有過
function correctAccount(){
    $("#msgAccount").html("");
    $("#btnRegister").attr('disabled', false);
    $("#btnLogin").attr('disabled', false);
}

//驗證結束-------------

//傳資料
$(document).ready(function() {
    $("#btnLogin").click(function() { //ID 為 btnlogin 的按鈕被點擊時
        var account = $("#account").val();
        var password = $("#password").val() ;

        $.ajax({
            type: "POST", //傳送方式
            url: "http://localhost/msg/Controller/login.php", //傳送目的地
            data: { //傳送資料
                "account": 123, //表單欄位 ID account
                "password": 123 //表單欄位 ID password
            },
            success: function(data) {
                if (data){
                    alert(data);
                } else {
                    alert("789");
                }
                
            },
            error: function() {
                alert("qqq");
            }
        })
    })        
});

//密碼驗證
//沒過
function errorPassword(){
    $("#msgPassword").html("暱稱需介於一到五字且不可有空白等特殊字元");
    $("#btnRegister").attr('disabled', true);
    $("#btnLogin").attr('disabled', true);
}
//有過
function correctPassword(){
    $("#msgPassword").html("");
    $("#btnRegister").attr('disabled', false);
    $("#btnLogin").attr('disabled', false);
}




//留言長度
function checkMsgLength(){
    $(document).ready(function(){
        var string = $("#msg_content").val();
        if (string.length > 15) {
            $("#addMsg").attr('disabled', true);
        } else {
            $("#addMsg").attr('disabled', false);
        }
    });
}

//文章標題內容長度
function checkArtLength(){
    $(document).ready(function(){
        var stringTitle = $("#title").val();
        var stringContent = $("#content").val();
        if ((stringTitle.length > 10) || (stringContent.length > 100)) {
            $("#addArt").attr('disabled', true);
        } else {
            $("#addArt").attr('disabled', false);
        }
    });
}
