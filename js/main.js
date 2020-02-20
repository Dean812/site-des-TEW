/* Gestion du navbar - active */
var page1 = $( "#page" ).hasClass( "accueil" );
var page2 = $( "#page" ).hasClass( "programme" );
var page3 = $( "#page" ).hasClass( "association" );
var page4 = $( "#page" ).hasClass( "gallerie" );
var page5 = $( "#page" ).hasClass( "media" );

if(page1 === true){
    $('#p1').addClass('active');
}else if(page2 === true){
    $('#p2').addClass('active'); 
}else if(page3 === true){
    $('#p3').addClass('active');
}else if(page4 === true){
    $('#p4').addClass('active');
}else if(page5 === true){
    $('#p5').addClass('active');
}else{
    console.log("Erreur dans le code NavBar Js");
    
}