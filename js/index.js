// Get all tab buttons and tab content elements
const tabButtons = document.querySelectorAll('.tablinks');
const tabContents = document.querySelectorAll('.tabcontent');

// Add click event listeners to tab buttons
tabButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove the "active" class from all tab buttons
    tabButtons.forEach(button => {
      button.classList.remove('active');
    });
    
    // Add the "active" class to the clicked tab button
    button.classList.add('active');
    
    // Hide all tab content elements
    tabContents.forEach(content => {
      content.classList.remove('active');
    });
    
    // Show the corresponding tab content element
    const tabName = button.getAttribute('data-tab');
    const tabContent = document.querySelector(`#${tabName}`);
    tabContent.classList.add('active');
  });
});

/* galleryjs */
//add a click event listener to each image, if needed.

const galleryImages = document.querySelectorAll('.gallery-container img');

galleryImages.forEach(image => {
  image.addEventListener('click', () => {
    // when image is clicked
  });
});


