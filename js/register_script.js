$("input").keyup(function(){  
  registerBtn();    
})
$(":checkbox").change(function(){
  registerBtn();
})
function registerBtn(){    
  if(Notempty($("#vn").val()) && Notempty($("#nn").val()) && Notempty($("#em").val()) && Notempty($("#pw").val()) && Notempty($("#pwd").val()) && $("#AGBs").prop('checked') && $("#pw").val() === $("#pwd").val() && $("")){
    $("#register_btn").prop('disabled', false);
    $("#register_btn").css("border","2px solid green");
  }
  else {
    $("#register_btn").prop('disabled', true);
  }
}
$("#pwd").focusin(function(){
  if(Notempty($("#pw").val())){
    if($("#pw").val() !== $("#pwd").val()){
      $("#confirm").css("display","flex");
    } 
  }
})


$("#pwd").keyup(function(){
  if(Notempty($("#pw").val())){
    if($("#pw").val() !== $("#pwd").val()){
      $("#confirm").css("display","flex");
    } else {
      $("#confirm").css("display","none");
    }
  }
})

$("#em").focusout(function(){
  $.post(
    "./emailexist.php",
    {
      email: $("#em").val()
    },
    function(data,status){
      if(data === "exist"){
        $("#email_conf").css({"display":"flex"});
      }
    });
})
$("#em").keyup(function(){
  if($("#email_conf").css("display")==="flex"){
    $.post(
      "./emailexist.php",
      {
        email: $("#em").val()
      },
      function(data,status){
        if(data === "exist"){
          $("#email_conf").css("display", "flex");
        } else {
          $("#email_conf").css("display", "none");
        }
      });
  }
})
function Notempty(val){
  let result;
  if(val.length != 0){
    result = true;
  } else {
    result = false;
  }
  return result;
}

