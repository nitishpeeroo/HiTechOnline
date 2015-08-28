$('.joinEvent').on('click', function(e) {
    e.stopPropagation();
    $(this).hide();
    var event_id = $(this).attr('id').substring(8);
    var data = 'event_id='+event_id;
    $.ajax({
        type: "POST",
        url: "event/join",
        data: data,
    }, "json");
});
$('.addCart').on('click',function(e) {
    e.stopPropagation();
    var id = $(this).attr('id').split('_');
    var product_id = id[1],
    price = id[2],
    evenement_id = id[3],
    data = 'product_id='+product_id+'&price='+price+'&evenement_id='+evenement_id;
    
    $.ajax({
        type: "POST",
        url: "addCart",
        data: data,
    }, "json");
});