document.addEventListener('DOMContentLoaded', function() {
    // Your JavaScript code here
    let featuredImg = document.getElementById('featured-image');
    let smallImgs = document.getElementsByClassName('small-Img');
    console.log(featuredImg)
    console.log(smallImgs)

    for (let i = 0; i < smallImgs.length; i++) {
        smallImgs[i].addEventListener('click', function() {
            // Set the src of the featured image to the clicked small image src
            featuredImg.src = this.src;
console.log("set f")
            // Remove the 'sm-card' class from all small images
            for (let j = 0; j < smallImgs.length; j++) {
                smallImgs[j].classList.remove('sm-card');
            }
            console.log("R S")
            // Add the 'sm-card' class to the clicked small image
            this.classList.add('sm-card');
            console.log("a s")
        });
    }
});



