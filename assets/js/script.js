const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    })
})


const slide_1 = document.querySelectorAll('.slide-1');
const hiddenElementsmax = document.querySelectorAll('.slide-2');
const ul = document.querySelectorAll('ul li');
ul.forEach(element => {
    observer.observe(element);
})

slide_1.forEach(element => {
    observer.observe(element);
})
hiddenElementsmax.forEach(element => {
    observer.observe(element);
})
