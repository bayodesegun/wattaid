
/* 
  tinymce.init({ 
    selector:'textarea',
    menubar: false,
    plugins: [
    'advlist autolink lists link image charmap print preview anchor'    
  ],
    toolbar: 'undo redo | bold italic | bullist numlist',
  }); 

disable this plug-in for now */ 

$(document).ready( function () {
  equalizeContentDivs();
  $('#location').dropdown();

  //scroll to fixed
  $('.fixed').scrollToFixed({
      marginTop: $('.navbar').outerHeight(true) - 3, 
      zIndex: 999
  });
});

function equalizeContentDivs() {
  // Find the content div with the highest height and normalize the others
  max_height = Math.max($('#left-content').height(), $('#middle-content').height(), $('#right-content').height());
  
  $('#left-content').height(max_height);
  $('#middle-content').height(max_height);
  $('#right-content').height(max_height);

}

function changeLocation () {
  $('#location-form').removeClass('hidden'); 
  $('#location-info-div').addClass('hidden');
}
