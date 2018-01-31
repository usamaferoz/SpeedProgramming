$(document).ready(function(){
    $("#yalwa_test").submit(function(e){
        e.preventDefault();
    });

    $("#submit").click(function(){
        var name = $("#name").val();
        var password = $("#password").val();
        var portal = $("#portal").val();
        var keywords = $("#keyword").val();
// Returns successful data submission message when the entered information is stored in database.
        var dataString = 'name1='+ name  + '&password1='+ password + '&portal1='+ portal  + '&keyword1='+ keywords;
        if(name=='' || password=='')//|| //keywords = '')
        {
            alert("Please Fill All Fields");
        }
        else
        {
// AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "/newproj/index.php",
                data: dataString,
                cache: false,
                success: function(result){
                    alert(result);
                }
            });
        }
        return false;
    });
});