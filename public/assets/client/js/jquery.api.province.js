setTimeout(() => {
    $.ajax({
        type: 'GET',
        url :'https://vapi.vnappmob.com/api/province/',
        accepts: {
            mycustomtype: 'application/json'
        },
        dataType: 'JSON',
        success: function(data){
            let optionCity ='';
            $.each(data.results,function(index,val){
                optionCity += '<option value="'+val.province_id+'/'+val.province_name+'">'+val.province_name+'</option>'
            })
            $("Form select#city").append(optionCity);
        },
        error: function(){
            console.log('error');
        }
    });
}, 2000);
$(document).on('change','Form select#city',function(){
    let id = parseInt($(this).val());
    id = id>=10?id:'0'+id;
    $.ajax({
        type:'GET',
        url: 'https://vapi.vnappmob.com/api/province/district/'+id,
        accepts: {
            mycustomtype: 'application/json'
        },
        dataType: 'JSON',
        success: function(data){
            let optionDistrict ='<option value="">Quận/Huyện</option>';
            $.each(data.results,function(index,val){
                optionDistrict += '<option value="'+val.district_id+'/'+val.district_name+'">'+val.district_name+'</option>'
            })
            $("Form select#district").html(optionDistrict);
        },
        error: function(){
            console.log('error');
        }
    })
})
$(document).on('change','Form select#district',function(){
    let id = parseInt($(this).val());
    id = id>=100?id:'0'+id;
    $.ajax({
        type:'GET',
        url: 'https://vapi.vnappmob.com/api/province/ward/'+id,
        accepts: {
            mycustomtype: 'application/json'
        },
        dataType: 'JSON',
        success: function(data){
            let optionward ='<option value="">Xã/Phường</option>';
            $.each(data.results,function(index,val){
                optionward += '<option value="'+val.ward_name+'">'+val.ward_name+'</option>'
            })
            $("Form select#ward").html(optionward);
        },
        error: function(){
            console.log('error');
        }
    })
})
