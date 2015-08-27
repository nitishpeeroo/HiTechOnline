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