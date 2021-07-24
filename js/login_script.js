$("input").keyup(function(){  
  loginBtn();    
})
function loginBtn(){  
  if(empty($("#em").val()) && empty($("#pw").val())){
    $("#login_btn").prop('disabled', false);
    $("#login_btn").css("border","2px solid green");
  }
  else {
    $("#login_btn").prop('disabled', true);
  }
}
function empty(val){
  let result;
  if(val.length > 0){
    result = true;
  } else {
    result = false;
  }
  return result;
}

