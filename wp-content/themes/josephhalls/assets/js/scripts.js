console.log("script loaded!");

document.addEventListener('DOMContentLoaded', () => {

    // About button scroll
    const aboutButton = document.getElementById("aboutButton");
    aboutButton.addEventListener('click', () => {
        document.getElementById('certifications').scrollIntoView({ behavior: 'smooth' });
    });

      // About button scroll
      const ctaButton = document.getElementById("ctaButton");
      ctaButton.addEventListener('click', () => {
          document.getElementById('cta').scrollIntoView({ behavior: 'smooth' });
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
});
