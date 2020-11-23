$(()=>{
    // student data
    $.get('js/student-data.json',(data,status,xhr)=>{
        JSON.parse(data).forEach((element,index)=>{
            // const tblRow = $('<tr></tr>');
            // tblRow.append('<td>'+element.firstName+' '+element.middleName+' '+element.lastName+'</td');
            // tblRow.append('<td>'+element.email+'</td');
            // tblRow.append('<td>'+element.phone+'</td');
            // tblRow.append('<td>'+element.day+' '+element.month+' '+element.year+'</td');
            // $('.students .card-body tbody').append(tblRow);
            $('.students .card-body .list-group').append('<li class="list-group-item">'+element.firstName+' '+element.middleName+' '+element.lastName+'</li>');
        });
    });

    // teacher data
    $.get('js/teacher-data.json',(data,status,xhr)=>{
        JSON.parse(data).forEach((element)=>{
            $('.teachers .info .card-body .list-group').append('<li class="list-group-item">'+element.firstName+' '+element.middleName+' '+element.lastName+'</li>');

        })
        
    })
    $.get('js/lessons-data.json',(data,status,xhr)=>{
        JSON.parse(data).forEach((element,index)=>{
            const tblRow = $('<tr></tr>');
            tblRow.append('<td>'+element.course+'</td');
            tblRow.append('<td>'+element.instructor+'</td');
            tblRow.append('<td>'+element.instructorEmail+'</td');
            tblRow.append('<td>'+element.begin+'</td');
            tblRow.append('<td>'+element.end+'</td');
            tblRow.append('<td>'+element.weeklyLectures+'</td');
            tblRow.append('<td>'+element.lectureDuration+'</td');
            tblRow.append('<td>'+element.days+'</td');
            $('.lessons tbody').append(tblRow);
        })
    })
})