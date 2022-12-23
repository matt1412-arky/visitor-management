$(document).ready(function() {
    $('#sel_makanan,#sel_minuman').each((i,element)=>{
        $(element).select2({
            tags: true,
            tokenSeparators: [',', ' '],
            ajax: {
                // url: `{{route(home.get-menus)}}`,
                url: `http://127.0.0.1:8000/h/get-menus`,
                method: 'get',
                dataType: 'json',
                delay: 300,
                processResults: function(response) {
                    return {
                        results: $.map(response, function(data) {
                            if(i < 1 && data.type == 'food'){
                                return {
                                    id: data.name,
                                    text: data.name
                                }
                            }else if(i == 1 && data.type != 'food'){
                                return {
                                    id: data.name,
                                    text: data.name
                                }
                            }
                        })
                    };
                },
                cache: true
            }
        });
    })

    $('#insert-menu').on('submit', function(e) {
        e.preventDefault(); // prevent
        e.stopPropagation();
        const makanan = [],minuman = [];
        $.each($("#sel_makanan option:selected"), function(i, val){ // console.log($(this).val(),i ,val,$(this));
            makanan.push($(this).val())
        });
        $.ajax({
            url : e.target['action'],
            method : e.target['method'],
            data:Object.assign(new FormData(e.target),{makanan: makanan.join(', ')}),
            processData:false,
            contentType:false,
            dataType: 'json',
            beforeSend:() =>{
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

