$('#add_category').submit(function(){

    category=$('#category').val();
    // console.log(category);

    // data=new FormData($('#add_category')[0]);
    url=$(this).attr('action');
    console.log(url);
    $.post(url,{'name':category},function(mi){
        alert(mi)
    });
    return false;
});