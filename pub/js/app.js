$(document).ready(function(){

  $('form.ajaxLogin').on('submit',function(){
    var that=$(this),
    url=that.attr('action'),
    type=that.attr('method'),
    data={};
    that.find('[name]').each(function(index,value){
      var that=$(this),
      name=that.attr('name'),
      value=that.val();
      data[name]=value;
    });

    $.ajax({
      url:url, 
      type:type,
      data:data,
      dataType: 'json',
      
      success: function(output){ //output és la sortida de la funció login del IndexController  
        window.location.href=output.redirect;
      },
      
      error: function(){}
      });

    return false;
  });

$('form.ajaxRegister').on('submit',function(){
    var that=$(this),
    url=that.attr('action'),
    type=that.attr('method'),
    data={};
    that.find('[name]').each(function(index,value){
      var that=$(this),
      name=that.attr('name'),
      value=that.val();
      data[name]=value;
    });

    $.ajax({
      url:url, 
      type:type,
      data:data,
      dataType: 'json',
      beforeSend: function(){
        $(".windows8").css("display","block");
      },
      success: function(output){ //output és la sortida de la funció login del IndexController  
        
        $("#mensajeRegistro").hide();
        if(output.registro==true) {
          $("#mensajeRegistro").html("<p>Usuario registrado correctamente</p>");
          $("#mensajeRegistro p").addClass("mensajeCorrecto");
        }else{
          $("#mensajeRegistro").html("<p>"+output.msg+"</p>");
          $("#mensajeRegistro p").addClass("mensajeIncorrecto");
        } 

        // window.location.href=output.redirect;
      },
      
      complete: function(){        
        setTimeout(function(){ 
          $(".windows8").css("display","none");  
          $("#mensajeRegistro").show();
        }, 3000);
      },

      error: function(output){
        alert(output.registro);
      }
      });

    return false;
  });