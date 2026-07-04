const circles = document.querySelectorAll('.circle');

window.addEventListener('scroll', () => {
    circles.forEach(circle => {
        const circleTop = circle.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if(circleTop < windowHeight - 100){
            circle.style.opacity = "1";
            circle.style.transform = "translateY(5)";
        }
    });
});