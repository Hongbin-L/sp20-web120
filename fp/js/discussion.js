    function startDiscussions(cat_id){
 var html_id = "cat_new_discussion_" + cat_id;
 var button_id = "#startDiscussionButton_" + cat_id;
 if($(html_id).css("display") == 'block'){
    $(html_id).css("display", "none");
    $(button_id).text("Start Discussion");
 } else{
    $(html_id).css("display", "block");
    $(button_id).text("Cancel");
 }
    }