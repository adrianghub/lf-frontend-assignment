// you can put javascript here

const readMoreButton = document.querySelector('.read-more'); 
const moreTextWrapper = document.querySelector('.more-content-wrapper--js');

readMoreButton.addEventListener('click', function(){
  moreTextWrapper.classList.toggle('hide');
});