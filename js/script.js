const buttons = document.querySelectorAll('.services_button, .services_button2');
const services = document.querySelectorAll('.services-box1, .services-box2, .services-box3, .services-box4, .services-box5, .services-box6, .services-box7, .services-box8, .services-box9');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        buttons.forEach(btn => btn.classList.remove('services_button-active'));
        button.classList.add('services_button-active');
        services.forEach(service => service.classList.add('service_inactive'));
        const index = parseInt(button.id.replace('btn', ''));
        services[index - 1].classList.remove('service_inactive');
    });
});