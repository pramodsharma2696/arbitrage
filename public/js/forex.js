document.addEventListener('DOMContentLoaded', function() {
    // Map buttons to their respective images
    const buttonImageMap = {
        'button-euro': 'image-euro',
        'button-pound': 'image-pound',
        'button-dollor': 'image-dollor',
        'button-yen': 'image-yen'
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
