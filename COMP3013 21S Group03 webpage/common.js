// 全局变量a和b，分别获取用户框和密码框的value值
var a = document.getElementsByTagName("input")[0].value;
var b = document.getElementsByTagName("input")[1].value;


//用户ID框失去焦点后验证value值
function oBlur_1() {
    if (!a) { //用户框value值为空
        document.getElementById("remind_1").innerHTML = "Please input userID!";
        document.getElementById("change_margin_1").style.marginBottom = 1 + "px";
    } else { //用户框value值不为空
        document.getElementById("remind_1").innerHTML = "";
        document.getElementById("change_margin_1").style.marginBottom = 19 + "px";
    }
}
//用户名框失去焦点后验证value值
function oBlur_2() {
    if (!a) { //用户框value值为空
        document.getElementById("remind_1").innerHTML = "Please input user name!";
        document.getElementById("change_margin_1").style.marginBottom = 1 + "px";
    } else { //用户框value值不为空
        document.getElementById("remind_1").innerHTML = "";
        document.getElementById("change_margin_1").style.marginBottom = 19 + "px";
    }
}

//邮件框失去焦点后验证value值
function oBlur_3() {
    if (!b) { //密码框value值为空
        document.getElementById("remind_2").innerHTML = "Please input E-mail!";
        document.getElementById("change_margin_2").style.marginBottom = 1 + "px";
        document.getElementById("change_margin_3").style.marginTop = 2 + "px";
    } else { //密码框value值不为空
        document.getElementById("remind_2").innerHTML = "";
        document.getElementById("change_margin_2").style.marginBottom = 19 + "px";
        document.getElementById("change_margin_3").style.marginTop = 19 + "px";
    }
}
//手机号码框失去焦点后验证value值
function oBlur_4() {
    if (!b) { //密码框value值为空
        document.getElementById("remind_2").innerHTML = "Please input phone number!";
        document.getElementById("change_margin_2").style.marginBottom = 1 + "px";
        document.getElementById("change_margin_3").style.marginTop = 2 + "px";
    } else { //密码框value值不为空
        document.getElementById("remind_2").innerHTML = "";
        document.getElementById("change_margin_2").style.marginBottom = 19 + "px";
        document.getElementById("change_margin_3").style.marginTop = 19 + "px";
    }
}
//性别框失去焦点后验证value值
function oBlur_5() {
    if (!b) { //密码框value值为空
        document.getElementById("remind_2").innerHTML = "Please input gender!";
        document.getElementById("change_margin_2").style.marginBottom = 1 + "px";
        document.getElementById("change_margin_3").style.marginTop = 2 + "px";
    } else { //密码框value值不为空
        document.getElementById("remind_2").innerHTML = "";
        document.getElementById("change_margin_2").style.marginBottom = 19 + "px";
        document.getElementById("change_margin_3").style.marginTop = 19 + "px";
    }
}
//密码框失去焦点后验证value值
function oBlur_6() {
    if (!b) { //密码框value值为空
        document.getElementById("remind_2").innerHTML = "Please input Password!";
        document.getElementById("change_margin_2").style.marginBottom = 1 + "px";
        document.getElementById("change_margin_3").style.marginTop = 2 + "px";
    } else { //密码框value值不为空
        document.getElementById("remind_2").innerHTML = "";
        document.getElementById("change_margin_2").style.marginBottom = 19 + "px";
        document.getElementById("change_margin_3").style.marginTop = 19 + "px";
    }
}
//密码框以外获得焦点的隐藏提醒
function oFocus_1() {
    document.getElementById("remind_1").innerHTML = "";
    document.getElementById("change_margin_1").style.marginBottom = 19 + "px";
}

//密码框获得焦点的隐藏提醒
function oFocus_2() {
    document.getElementById("remind_2").innerHTML = "";
    document.getElementById("change_margin_6").style.marginBottom = 19 + "px";
    document.getElementById("change_margin_7").style.marginTop = 19 + "px";
}

//若输入框为空，阻止表单的提交
function submitTest() {
    if (!a && !b) { //用户框value值和密码框value值都为空
        document.getElementById("remind_1").innerHTML = "Please input userID!";
        document.getElementById("change_margin_1").style.marginBottom = 1 + "px";
        document.getElementById("remind_2").innerHTML = "Please input Password!";
        document.getElementById("change_margin_2").style.marginBottom = 1 + "px";
        document.getElementById("change_margin_3").style.marginTop = 2 + "px";
        return false; //只有返回true表单才会提交
    } else if (!a) { //用户框value值为空
        document.getElementById("remind_1").innerHTML = "Please input userID!";
        document.getElementById("change_margin_1").style.marginBottom = 1 + "px";
        return false;
    } else if (!b) { //密码框value值为空
        document.getElementById("remind_2").innerHTML = "Please input Password!";
        document.getElementById("change_margin_2").style.marginBottom = 1 + "px";
        document.getElementById("change_margin_3").style.marginTop = 2 + "px";
        return false;
    }
}
var x = document.getElementById("id").value;
// this part is to be fullfilled by the ID of the user website
var brand = document.getElementById("select-brand").value;
var ID = document.getElementById("shoe-ID").value;
var newtext=document.getElementById("new-comment").value;
//in this part you fullfill the table with the data from database

document.getElementById("delete-choice").addEventListener("click",function(){});
document.getElementById("add-choice").addEventListener("click",function(){});
document.getElementById("collection").addEventListener("click",function(){
// remove the table's content and do modification in the database.})
document.getElementById("brand-selection").addEventListener("click",function(){})
document.getElementById("add-comments").addEventListener("click",function(){
//modify the table value by the data you get from the input space.
});
document.getElementById("user-id").innerHTML = "19300260048";// this part is to be fullfilled by the ID of the user website