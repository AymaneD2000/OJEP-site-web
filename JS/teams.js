document.addEventListener('DOMContentLoaded', () => {
    const teamsSlider = document.querySelector('.teams-slider');
    const cards = teamsSlider.children.length;

    // Ensure the slider width can accommodate all cards
    teamsSlider.style.width = `${cards * 250}px`; // Adjust based on the card width

    // Adjust animation duration based on the number of cards
    if (cards > 0) {
        teamsSlider.style.animationDuration = `${(12 / Math.max(cards, 3))}s`; // Speed up for fewer cards
    }
});
