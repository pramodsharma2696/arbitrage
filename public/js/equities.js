document.addEventListener('DOMContentLoaded', function() {
    // Map buttons to their respective images
    const buttonImageMap = {
        'button-apple': 'image-apple',
        'button-meta': 'image-meta',
        'button-nike': 'image-nike',
        'button-microsoft': 'image-microsoft',
        'button-tesla': 'image-tesla',
        'button-amazon': 'image-amazon',
        'button-nvidia': 'image-nvidia',
        'button-google': 'image-google'
    };

    // Add hover event listeners to each button
    Object.keys(buttonImageMap).forEach(buttonId => {
        const button = document.getElementById(buttonId);
        const imageId = buttonImageMap[buttonId];
        const image = document.getElementById(imageId);

        if (button && image) {
            // On hover, add the animation class
            button.addEventListener('mouseenter', function() {
                image.classList.add('breathe-img-animation');
            });

            // On mouse leave, remove the animation class
            button.addEventListener('mouseleave', function() {
                image.classList.remove('breathe-img-animation');
            });
        }
    });
});
