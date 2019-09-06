function get_file_url(url) {
	
	var link_url = document.createElement("a");
	
	link_url.download = url.substring((url.lastIndexOf("/") + 1), url.length);
	link_url.href = url;
	document.body.appendChild(link_url);
    link_url.click();
	document.body.removeChild(link_url);
	// delete link_url
}

$(document).ready(function () {
	$("#phone").mask('+7 (999) 999-99-99');
	
	$(".goal_zvonok").click(function() {
	    yaCounter54269659.reachGoal('zvonok');
        gtag('event', 'push', {'event_category': 'button','event_label': 'zvonok'});
	});
});

function check() {
	var input_tel = document.getElementById('phone');
	document.getElementById('button').disabled = input_tel.value ? false : "disabled";
}

// сформируем данные и отправим в обработчик, передав слаг для хуков
// $('.contactform #button').on('click', function(){

// 	var data = {
//         action: 'projectapp',
//         project: $('.contactform input[name=user_project]').val(),
// 		name: $('.contactform input[name=user_name]').val(),
// 		phone: $('.contactform input[name=user_phone]').val()
// 	};
// 	console.log(window.wp);
// 	$.post(window.wp.ajax_url, data, function(res){//url
		
// 		if (res.success) {
// 			alert('ok!');
// 		} 
// 		 else {
// 			alert(res.err);
// 		}

// 	}, 'json'); //html или json

// });

// проверка правильно номера при отправке
$(document).on('submit', function() {
    var goal = $(this).find('#goal').val();
    yaCounter52997014.reachGoal(goal);
    yaCounter54269659.reachGoal(goal);
    gtag('event', 'submit', {'event_category': 'form','event_label': goal});
    
    console.log(gtag('event', 'submit', {'event_category': 'form','event_label': goal}));

    afValidated = true;
    
    var phoneValue;
    phoneValue = $(this).find('input[name="user_phone"]').val();

    var wrongPhones = ["+7 (911) 111-11-11", 
                       "+7 (922) 222-22-22", 
                       "+7 (933) 333-33-33",
                       "+7 (944) 444-44-44",
                       "+7 (955) 555-55-55",
                       "+7 (966) 666-66-66",
                       "+7 (977) 777-77-77",
                       "+7 (988) 888-88-88",
                       "+7 (999) 999-99-99",
                       "+7 (912) 345-67-89"];
                       
    var masLength = wrongPhones.length;
    
    for( var i = 0; i < masLength; i++) {
        if (phoneValue == wrongPhones[i]) {
            //AjaxForm.Message.error('Вы ввели несуществующий номер');
            alert('Вы ввели несуществующий номер');
            //event.preventDefault();
            afValidated = false;
            return false;
        }
    } 

});