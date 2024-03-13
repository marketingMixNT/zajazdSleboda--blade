// const observer = new IntersectionObserver(entries => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
           
//             entry.target.classList.add('tracking-in-expand');
//             entry.target.classList.add('text-focus-in');
//         }
//     });
// }, { threshold: 0.1 });


// document.querySelectorAll('.heading-animation').forEach(element => {
//     observer.observe(element);
// });
// document.querySelectorAll('.text-animation').forEach(element => {
//     observer.observe(element);
// });


const handleIntersection = (entries, observer, animationClass) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            
            entry.target.classList.add(animationClass);
        }
    });
};

const createIntersectionObserver = (animationClass) => {
    return new IntersectionObserver(
        (entries, observer) => {
            handleIntersection(entries, observer, animationClass);
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );
};

const headingAnimation = document.querySelectorAll('.heading-animation')
const textAnimation = document.querySelectorAll('.text-animation')
const imageAnimation = document.querySelectorAll('.image-animation')


if (window.innerWidth > 768) {
    const observerHeading = createIntersectionObserver("tracking-in-expand");
    const observerText = createIntersectionObserver("text-focus-in");
    const observerImage = createIntersectionObserver("tilt-in-bottom-1");
   

    headingAnimation.forEach((element) => {
        observerHeading.observe(element);
    });

    textAnimation.forEach((element) => {
        observerText.observe(element);
    });
    imageAnimation.forEach((element) => {
        observerImage.observe(element);
    });
   
}