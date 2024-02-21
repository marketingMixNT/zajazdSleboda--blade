const footerYear = document.querySelector('#footer-year')

const today = new Date()

const currentYear = today.getFullYear()


console.log(currentYear);

footerYear.innerHTML = currentYear