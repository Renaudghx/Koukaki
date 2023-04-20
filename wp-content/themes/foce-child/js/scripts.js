// ---------- Section Fade in - Logo ----------
const logoImg = document.querySelector('.imgLogo');
setTimeout(function() {
  logoImg.classList.remove('imgLogo');
}, (1500));

// ---------- Title Scroll ----------

// Remove the transition class
const titleStory = document.querySelector('.title-story');
titleStory.classList.remove('title-story');
const titleStudio1 = document.querySelector('.studio1');
titleStudio1.classList.remove('studio1');
const titleStudio2 = document.querySelector('.studio2');
titleStudio2.classList.remove('studio2');

function titleObserver(classAnim, classObserve, nameConst){

  // Create the observer :
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        nameConst.classList.add(classAnim);
        return;
      }
      // We're not intersecting, so remove the class!
      nameConst.classList.remove(classAnim);
    });
  });
  
  // Tell the observer which elements to track
  observer.observe(document.querySelector(classObserve));
}

titleObserver('title-story','.observe-story', titleStory);
titleObserver('studio1','.observe-studio', titleStudio1);
titleObserver('studio2','.observe-studio', titleStudio2);


// ---------- Skrollr ----------

var s = skrollr.init();

if (s.isMobile()) {
    s.destroy();
}