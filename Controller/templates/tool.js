//顯示提示
function showTips(){
    $(document).ready(function(){
        var tips = $("#tips").val();
        if( tips != ''){
            alert(tips);
        }
    })
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