$(function() {
    $.ajaxSetup({
        headers:{
            'X-Auth-Token': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $('#insert-menu').on('submit', function(e) {
        e.preventDefault(); // prevent
        e.stopPropagation();
        $.ajax({
            url : e.target['action'],
            method : e.target['method'],
            data:new FormData(e.target),
            processData:false,
            contentType:false,
            dataType: 'json',
            beforeSend:()=>{
                $(e.target).find("span.error-text").text("");
            },
            success: (data)=>{
                if(!data.status){
                    $.each(data.errors,(prefix,val)=>{
                        $("span." + prefix + "_error").text(val[0]);
                    })
                }else{
                    $('#insert-menu')[0].reset();
                    Swal.fire({
                        title: data.title,
                        type:data.type,
                        text:data.msg
                    })
                }
            }
        })
    });

})

