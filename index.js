document.addEventListener('DOMContentLoaded', function () {
   const popups = document.querySelectorAll('.popup');

   function checkPopups() {
       const triggerBottom = window.innerHeight / 5 * 4;

       popups.forEach(popup => {
           const popupTop = popup.getBoundingClientRect().top;

           if (popupTop < triggerBottom) {
               popup.classList.add('show');
           } else {
               popup.classList.remove('show');
           }
       });
   }

   window.addEventListener('scroll', checkPopups);
   checkPopups();
});