
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
const decorTextAnimation = document.querySelectorAll('.decorText-animation')


if (window.innerWidth > 768) {
    const observerHeading = createIntersectionObserver("tracking-in-expand");
    const observerText = createIntersectionObserver("text-focus-in");
    const observerImage = createIntersectionObserver("tilt-in-bottom-1");
    const observerDecorText = createIntersectionObserver("slide-in-blurred-left");
   

    headingAnimation.forEach((element) => {
        observerHeading.observe(element);
    });

    textAnimation.forEach((element) => {
        observerText.observe(element);
    });
    imageAnimation.forEach((element) => {
        observerImage.observe(element);
    });
    decorTextAnimation.forEach((element) => {
        observerDecorText.observe(element);
    });
   
}