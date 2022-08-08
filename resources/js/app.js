require('./bootstrap');
Echo.chanel('temperatura')
    .listen('actualizartemperatura', (e)=>{
        const notificationElement =document.getElementById('temperatura');
        notificationElement.innerText=e.message;
        notificationElement.classList.remove('invisible');

        notificationElement.classList.add('alert' + e.type);


    });