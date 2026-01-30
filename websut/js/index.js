window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        document.querySelector('.navbar').classList.add('shadow-sm');
        document.querySelector('.navbar').style.padding = '10px 0';
    } else {
        document.querySelector('.navbar').classList.remove('shadow-sm');
        document.querySelector('.navbar').style.padding = '20px 0';
    }
});