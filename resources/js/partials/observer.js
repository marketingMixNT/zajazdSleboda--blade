const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
           
            entry.target.classList.add('tracking-in-expand');
            entry.target.classList.add('text-focus-in');
        }
    });
}, { threshold: 0.1 });


document.querySelectorAll('.heading-animation').forEach(element => {
    observer.observe(element);
});
document.querySelectorAll('.text-animation').forEach(element => {
    observer.observe(element);
});
