console.log("script loaded!");

document.addEventListener('DOMContentLoaded', () => {
    // My Work button scroll
    const myWorkButton = document.getElementById("myWorkButton");
    myWorkButton.addEventListener('click', () => {
        document.getElementById('product-highlights').scrollIntoView({ behavior: 'smooth' });
    });

    // About button scroll
    const aboutButton = document.getElementById("aboutButton");
    aboutButton.addEventListener('click', () => {
        document.getElementById('certifications').scrollIntoView({ behavior: 'smooth' });
    });

    const headerTitle = document.getElementById("headerTitle");
    headerTitle.addEventListener("click", (event) => {
        console.log("im clicked");
        event.preventDefault();
        window.scrollTo({
            top:0,
            behavior:"smooth"
        })
    });

    // // Image Swapping
    // const imageElement = document.getElementById("dynamicImage");
    // const images = [
    //     "/wp-content/themes/josephhalls/assets/images/joe-small.png",
    //     "/wp-content/themes/josephhalls/assets/images/ou.png",
    // ];

    // let currentImageIndex = 0;

    // function swapImage(){
    //     imageElement.classList.add('fade-out'); // Trigger fade-out effect

    //     setTimeout(() => {
    //         currentImageIndex = (currentImageIndex + 1) % images.length;
    //         imageElement.src = images[currentImageIndex];
    //         imageElement.classList.remove('fade-out'); // Remove fade-out class to fade in
    //     }, 500); // Delay to match CSS transition time
    // }

    // setInterval(swapImage, 5000); // Swap image every 5 seconds
});
