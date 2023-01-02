const { default: axios } = require('axios');

require('./bootstrap');

const messages_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById('message_input');

const message_form = document.getElementById('message_form');
message_form.addEventListener('submit', function(e) {
    e.preventDefault();

    let has_errors = false;

    if(username_input.value == '') {
        alert("Vui long nhap ten cua ban")
        has_errors = true
    }

    if(message_input.value == '') {
        alert("Vui long nhap ten cua ban")
        has_errors = true
    }

    if(has_errors) {
        return;
    }

    const options = {
        method : "POST",
        url : "/send-message",
        data : {
            username : username_input.value,
            message : message_input.value
        }
    }

    axios(options)

})

window.Echo.channel('chat')
            .listen('.message', (e) => {
                console.log(e.username);
                messages_el.innerHTML +=  `<li class = "me">
                    <div class="entete">
                        <span class="status green"></span>
                        <h2  name = "`+e.username+`" class = "name" value = "`+e.username+`">`+e.username+`</h2>
                        <h3>10:12AM, Today</h3>
                    </div>
                    <div class="triangle"></div>
                    <div id = "`+e.message+`" class="message">`
                        +e.message+
                    `</div>
                </li>`
               
                if(document.getElementById(e.message).value == username_input) {
                    console.log(document.getElementById(e.message).parents('li'));
                }
            });
            console.log(document.getElementById(e.message).value);