document.querySelector('.chakra-button.button-nav').addEventListener('click', () => {
    const divElement = document.querySelector('.css-7, .css-ew617a');
    
    if (divElement) {
        if (divElement.classList.contains('css-7')) {
            divElement.classList.remove('css-7');
            divElement.classList.add('css-ew617a');
        } else if (divElement.classList.contains('css-ew617a')) {
            divElement.classList.remove('css-ew617a');
            divElement.classList.add('css-7');
        }
    } else {
        console.warn('Div element not found');
    }
});

